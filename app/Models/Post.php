<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = array(
        'url',
        'title',
        'desciption',
        'content',
        'tags',
        'image',
        'category_id',
        'blog',
        'author_id'
    );

    public $timestamps = true;

    public function User()
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public static function prevBlogPostUrl($id)
    {
        $blog = static::where('id', '<', $id)->orderBy('id', 'desc')->first();

        return $blog ? $blog->url : '#';
    }

    public static function nextBlogPostUrl($id)
    {
        $blog = static::where('id', '>', $id)->orderBy('id', 'asc')->first();

        return $blog ? $blog->url : '#';
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\BlogTag', 'blog_post_tags', 'post_id', 'tag_id');
    }

    public function categories()
    {
        return $this->belongsTo('App\Models\BlogCategory', 'category_id');
    }
}
