@extends('layouts.canvas.app')

@section('pageTitle', 'theWORX Blog')

@section('content')
    <div class="container"style="padding-top: 10px">
        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">theWORX Blog</h1>
                <p class="lead my-3">get the latest info on the project.</p>
                <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
            </div>
        </div>
    </div>




    <!-- Page Title
        ============================================= -->
    {{-- <section id="page-title">

    <div class="container clearfix">
        <h1>Blog</h1>
        <span>Our Latest News</span>
        {!! Breadcrumbs::render('blog') !!}
    </div>

</section><!-- #page-title end --> --}}

    <!-- Content
          ============================================= -->
    <section id="content">

        <div class="">

            <div class="container clearfix">

                <div class="">Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</div>

                <!-- Posts
             ============================================= -->
                <div id="" class="">

                    @foreach ($posts as $post)
                        <div class="clearfix">
                            <div class="">
                                <a href="{{ route('post', $post->url) }}" data-lightbox="image"><img class="image_fade"
                                        src="{{ asset('images/blog/' . $post->image) }}" alt="{{ $post->title }}"></a>
                            </div>
                            <div class="">
                                <div class="">
                                    <h2><a href="{{ route('post', $post->url) }}">{{ $post->title }}</a></h2>
                                </div>
                                <ul class="">
                                    <li><i class="fas fa-calendar"></i> {{ $post->published_at }}</li>
                                    <li><i class="fas fa-user"></i><a href="{{ route('post.writer', $post->user->name) }}">
                                            {{ $post->user->name }}</a></li>
                                    <li><i class="fas fa-folder-open"></i> <a
                                            href="{{ route('post.category', $post->categories->category) }}">{{ $post->categories->category }}</a>
                                    </li>
                                    <li><i class="fas fa-tag"></i>
                                        @foreach ($post['tags'] as $tag)
                                            <a href="{{ route('post.tag', $tag->tag) }}">{{ $tag->tag }}</a>
                                        @endforeach
                                    </li>
                                    <li><i class="fas fa-comments"></i><a href="{{ route('post', $post->url) }}#comments">
                                            ##</a></li>
                                </ul>
                                <div class="">
                                    <p> {{ Str::limit($post->content, 100) }}</p>
                                    <a href="{{ route('post', $post->url) }}"class="more-link">Read More</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                    <div class="text-center">
                        {!! $posts->links() !!}
                    </div>
                </div>
            </div>

        </div>

    </section><!-- #content end -->

@endsection
