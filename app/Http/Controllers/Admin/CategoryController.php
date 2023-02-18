<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    protected $data = [];
    public function __construct()
    {
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCategories = Category::whereNull('parent_id')
                                ->with('recursiveCategories')
                                ->get();
        $level = 0;
        $this->data['categories'] = arrangeCategories($listCategories, $level);

        $this->data['page_title'] = 'Quản trị danh mục bài viết';
        return view('backend.categories.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['page_title'] = 'Thêm danh mục bài viết';
        $listCategories = Category::whereNull('parent_id')
                                ->with('recursiveCategories')
                                ->get();
        $level = 0;
        $this->data['categories'] = arrangeCategories($listCategories, $level);
        return view('backend.categories.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->description = $request->description;
        $category->image = $request->image;
        $category->parent_id = $request->parent_id;
        $category->font_icon = $request->font_icon;
        $category->seo_title = $request->seo_title;
        $category->seo_alias = $request->seo_alias;
        $category->seo_meta_description = $request->seo_meta_description;
        $category->seo_meta_keywords = $request->seo_meta_keywords;

        $category->save();
        return redirect()->route('admin.categories.index')->with('success', 'Thêm mới danh mục bài viết thành công!');
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
    public function edit(Category $category)
    {
        $this->data['page_title'] = 'Cập nhật danh mục bài viết';
        $this->data['category'] = $category;
        $listCategories = Category::whereNull('parent_id')
                                ->with('recursiveCategories')
                                ->get();
        $level = 0;
        $this->data['categories'] = arrangeCategories($listCategories, $level);
        return view('backend.categories.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->description = $request->description;
        $category->image = $request->image;
        $category->parent_id = $request->parent_id;
        $category->font_icon = $request->font_icon;
        $category->seo_title = $request->seo_title;
        $category->seo_alias = $request->seo_alias;
        $category->seo_meta_description = $request->seo_meta_description;
        $category->seo_meta_keywords = $request->seo_meta_keywords;
        $category->update();
        return redirect()->route('admin.categories.index')->with('success', 'Cập nhật danh mục bài viết thành công!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Xoá danh mục bài viết thành công!');   
    }

    public function font_icon(){
        $this->data['page_title'] = "Danh sách icon 🌞😈👌";
        return view('backend.categories.font_icon', $this->data);
    }

}
