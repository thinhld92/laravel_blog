<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Clients\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::prefix('admin')
->name('admin.')
->middleware(['auth', 'admin.login'])
->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('groups', GroupController::class)->except('show');
    Route::resource('categories', CategoryController::class)->except('show');
    Route::resource('tags', TagController::class)->except('show');
    Route::resource('posts', PostController::class);
    Route::get('/font_icon', [CategoryController::class, 'font_icon'])->name('font_icon');
    Route::get('settings/socials', [SettingController::class, 'editSocials'])->name('socials.setting');
    Route::put('settings/socials', [SettingController::class, 'updateSocials'])->name('socials.update');
    Route::get('settings/web-info/{webinfo}', [SettingController::class, 'editWebInfo'])->name('webinfo.setting');
    // Route::put('settings/web-info/{webinfo}', [SettingController::class, 'editWebInfo'])->name('edit_socials');
    
});

Route::name('clients.')
->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home_page');
    Route::get('/categories/{category:slug}', [HomeController::class, 'category'])->name('cat_posts');
    Route::get('/authors/{user:username}', [HomeController::class, 'author'])->name('author_posts');
    Route::get('/tags/{tag:slug}', [HomeController::class, 'tag'])->name('tag_posts');
    Route::get('/{post:slug}', [HomeController::class, 'singlePost'])->name('single_post');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('generate', function (){
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    echo 'ok';
});