<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPostTag extends Model
{
    protected $table = 'blog_post_tags';

    protected $fillable = array(
        'post_id',
        'tag_id'
    );
}
