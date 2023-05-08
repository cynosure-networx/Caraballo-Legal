<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\BlogCategory;
use Auth;
use Session;

class BlogController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        $posts = Post::orderby('id', 'desc')->paginate(5); //show only 5 items at a time in descending order

        return view('blog.blog', compact('posts'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function post($url)
    {
        // $post = Post::findOrFail($id); //Find post of id = $id

        $post = Post::whereUrl($url)->first();

        $tags = $post->tags;
        $prev_url = Post::prevBlogPostUrl($post->id);
        $next_url = Post::nextBlogPostUrl($post->id);
        $title = $post->title;
        $post_image = $post->image;
        $content = $post->content;
        $description = $post->description;
        $page = 'blog';
        $category = $post->categories->category;
        $author = $post->user->name;
        $published = $post->published_at;

        $data = compact(['prev_url', 'next_url', 'tags', 'post', 'title', 'post_image', 'category', 'content', 'description', 'page', 'author', 'published']);

        // dd($data);

        return view('blog.post', compact('data'));
    }

    public function author($writer)
    {
        $posts = Post::where('author_id', '=', \App\User::where('name', $writer)->pluck('id'))->paginate(5); //show only 5 items at a time in descending order

        return view('blog.blog', compact('posts'));
    }

    public function category($category)
    {

        $posts = Post::where('category_id', '=', BlogCategory::where('category', $category)->pluck('id'))->paginate(5); //show only 5 items at a time in descending order
        // $cat = $posts->catgories->category->where->$category->get();
        return view('blog.blog', compact('posts'));
    }

    public function tag($tag)
    {
        $tagId = \App\Models\BlogTag::where('tag', $tag)->pluck('id');
        $spots = \App\Models\BlogPostTag::where('tag_id', $tagId)->pluck('post_id');
        // dd($spots);
        $posts = Post::whereIn('id', $spots)->paginate(5); //show only 5 items at a time in descending order
        // dd($posts);
        return view('blog.blog', compact('posts'));
    }
}
