<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        $canonical = $this->app->request->url();
        $categories = Category::whereNull('parent_id')
        ->orderBy('order', 'asc')
        ->with('recursiveCategories')
        ->get();

        $stories = Post::inRandomOrder()->with(['user', 'category'])->limit(5)->get();

        $main_popular_posts = Post::orderBy('views_count', 'desc')->with(['user', 'category'])->limit(3)->get();

        $tags = Tag::latest()->get(); 

        View::composer('*', function ($view) use (
                $categories, 
                $tags, 
                $canonical, 
                $stories,
                $main_popular_posts,
            ) {
            $view->with([
                'main_menus' => $categories,
                'main_tags' => $tags,
                'canonical' => $canonical,
                'stories' => $stories,
                'main_popular_posts' => $main_popular_posts,
            ]);
        });
    }
}
