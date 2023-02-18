<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'thumbnail',
        'image',
        'image_caption',
        'source',
        'category_id',
        'user_id',
        'published_at',
        'hot_date',
        'new_date',
        'status',
        'seo_alias',
        'seo_title',
        'seo_meta_keywords',
        'seo_meta_description',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function breadCategory(){
        return $this->belongsTo(Category::class, 'category_id', 'id')->with('parentsCategory');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id', 'id', 'id');
    }


    
}
