<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    protected $data=[];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // hottest post
        $hottest_posts = Post::where('hot_date', '>=', date('Y-m-d'))->with(['user', 'category'])->inRandomOrder()->limit(3)->get();
        if ($hottest_posts->count() < 3) {
            $hottest_posts = Post::latest()->with(['user', 'category'])->limit(3)->get();
        }
        $this->data['hottest_posts'] = $hottest_posts;

        // latest post
        $this->data['latest_posts'] = Post::latest()->with(['user', 'category'])->limit(7)->get();

        // popular post
        $this->data['popular_posts'] = Post::orderBy('views_count', 'desc')->with(['user', 'category'])->limit(5)->get();
        return view('clients.home', $this->data);
    }

    public function category(Category $category){
        $this->data['breadCrumb'] = arrangeBreadCrumb($category->category);
        $this->data['posts'] = $category->posts()->with(['user', 'category'])->paginate(5);

        $this->data['category'] = $category;
        return view('clients.category_posts', $this->data);
    }

    public function singlePost(Request $request, Post $post){
        $post->load('breadCategory', 'user', 'category', 'tags');
        $this->data['breadCrumb'] = arrangeBreadCrumb($post->breadCategory);
        $this->data['post'] = $post;
        $this->data['next_post'] = Post::where('id', '>', $post->id)->orderBy('id')->first();
        $this->data['previous_post'] = Post::where('id', '<', $post->id)->orderBy('id','desc')->first();
        
        // seo
        $this->data['page_title'] = $post->title;
        $this->data['meta_description'] = $post->meta_description ?? $post->description;
        $this->data['meta_keyword'] = $post->meta_keyword;

        $cookie_name = (Str::replace('.','',($request->ip())).'-'. $post->slug);
        if(Cookie::get($cookie_name) == ''){
            $post->increment('views_count');
            $cookie = cookie($cookie_name, '1', 1);
            return response()->view('clients.single_post', $this->data)->withCookie($cookie);
        }else{
            return view('clients.single_post', $this->data);
        }
    }

    public function author(User $user){
        $this->data['posts'] = $user->posts()->with(['user', 'category'])->paginate(5);

        $this->data['user'] = $user;
        return view('clients.author_posts', $this->data);
    }

    public function tag(Tag $tag){
        $this->data['posts'] = $tag->posts()->with(['user', 'category'])->paginate(5);

        $this->data['tag'] = $tag;
        return view('clients.tag_posts', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
