<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class BlogTag extends Model
{
    protected $fillable = array('tag');

    public function posts()
    {
        return $this->belongsToMany('App\Models\Post', 'blog_post_tags', 'post_id', 'tag_id');
    }
}
