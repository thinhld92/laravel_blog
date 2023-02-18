<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // protected $table = 'categories';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'font_icon',
        'image',
        'parent_id',
        'show_in_menu',
        'show_in_home',
        'status',
        'seo_alias',
        'seo_title',
        'seo_meta_keywords',
        'seo_meta_description',
    ];

    public function categories(){
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function childrenCategories(){
        return $this->hasMany(Category::class, 'parent_id', 'id')->with('categories');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    public function recursiveCategories(){
        return $this->hasMany(Category::class, 'parent_id', 'id')->with('recursiveCategories');
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function parentsCategory(){
        return $this->belongsTo(Category::class, 'parent_id')->with('parentsCategory');
    }
}
