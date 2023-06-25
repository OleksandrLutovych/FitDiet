@extends('layouts.site')

@section('content')
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                @foreach ($recentPosts as $post)
                    <div class="post-preview">
                        <a href="/post/{{ $post->slug }}">
                            <h2 class="post-title">{{ $post->title }}</h2>
                            <h3 class="post-subtitle">{{ $post->description }}</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Admin</a>
                            on {{ $post->created_at->format('d.m.Y') }}
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('header')
<header class="masthead" style="background-image: url({{asset($pageWallpaper)}})">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                     <h1>{{ $pageTitle }}</h1>
                    <span class="subheading">{{$pageSubtitle}}</span>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection