<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $fillable = array('category');

    public function posts()
    {
        return $this->hasOne('App\Models\Post');
    }

    public function getCategoryId($category)
    {
        return BlogCategory::where('category', $category)->pluck('id');
    }
}
