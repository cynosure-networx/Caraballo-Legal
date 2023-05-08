@extends('layouts.canvas.app')

@section('pageMeta')
    <meta name="description" content="{{ $data['description'] }}">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="index, follow">
@endsection
@section('metaTitle')
    {{ $data['title'] }}
@endsection

@section('pageTitle')
    View Post
@endsection

@section('content')
    <div class="container">

        <h1>{{ $data['title'] }}</h1>
        <img class="image_fade" src="{{ asset('images/blog/' . $data['post_image']) }}" alt="{{ $data['title'] }}">
        <p class="lead">{{ $data['content'] }} </p>
        <ul class="">
            <i class="fas fa-calendar"></i> {{ $data['published'] }} |
            <i class="fas fa-user"></i><a href="{{ route('post.writer', $data['author']) }}"> {{ $data['author'] }}</a> |
            <i class="fas fa-folder-open"></i> <a
                href="{{ route('post.category', $data['category']) }}">{{ $data['category'] }}</a></li> |
            <i class="fas fa-tag"></i>
            @foreach ($data['tags'] as $tag)
                <a href="{{ route('post.tag', $tag->tag) }}">{{ $tag->tag }}</a>
            @endforeach |

            <i class="fas fa-comments"></i><a href="#comments"> ##</a>
        </ul>
        <hr>

        <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>

        @can('Edit Post')
            {{-- <form method="DELETE" action="{{ route('dashboard.admin.posts.destory', $data->url) }}">
        <a href="{{ route('posts.edit', $data->url) }}" class="btn btn-info" role="button">Edit</a>
        @endcan
        @can('Delete Post')
        <input type="submit" value="Delete" class="btn btn-danger">
    </form> --}}
        @endcan


    </div>
    <!-- /Page Content -->
@endsection
