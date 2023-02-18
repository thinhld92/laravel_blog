<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    protected $data = [];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['page_title'] = "Danh sách bài viết";
        $this->data['posts'] = Post::latest()->get();
        return view('backend.posts.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['page_title'] = "Thêm mới bài viết";
        $listCategories = Category::whereNull('parent_id')
                                ->with('recursiveCategories')
                                ->get();
        $level = 0;
        $this->data['categories'] = arrangeCategories($listCategories, $level);
        $this->data['tags'] = Tag::latest()->get();
        return view('backend.posts.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->description = $request->description;
        $post->image = $request->image;
        $post->thumbnail = LMFThumbs($request->image);

        $post->image_caption = $request->image;
        $post->source = $request->source;
        $post->category_id = $request->category_id;
        $post->published_at = $request->published_at;
        $post->hot_date = $request->hot_date;
        $post->new_date = $request->new_date;
        $post->status = $request->status;
        $post->content = $request->content;
        $post->user_id = auth()->user()->id;
        $post->save();
        $post->tags()->sync($request->tags);
        return redirect()->route('admin.posts.index')->with('success', 'Thêm mới bài viết thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $data['page_title'] = $post->title;
        $data['post'] = $post;
        return view('backend.posts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->data['page_title'] = 'Cập nhật thông tin bài viết';
        $this->data['post'] = $post;
        $this->data['old_tags'] = $post->tags->pluck('id')->toArray();
        
        $listCategories = Category::whereNull('parent_id')
                                ->with('recursiveCategories')
                                ->get();
        $level = 0;
        $this->data['categories'] = arrangeCategories($listCategories, $level);
        $this->data['tags'] = Tag::latest()->get();
        return view('backend.posts.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->description = $request->description;
        $post->image = $request->image;
        $post->thumbnail = LMFThumbs($request->image);

        $post->image_caption = $request->image;
        $post->source = $request->source;
        $post->category_id = $request->category_id;
        $post->published_at = $request->published_at;
        $post->hot_date = $request->hot_date;
        $post->new_date = $request->new_date;
        $post->status = $request->status;
        $post->content = $request->content;
        $post->user_id = auth()->user()->id;
        $post->update();
        $post->tags()->sync($request->tags);
        return redirect()->route('admin.posts.index')->with('success', 'Thêm mới bài viết thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.tags.index')->with('success', 'Xoá bài viết thành công!');
    }
}
