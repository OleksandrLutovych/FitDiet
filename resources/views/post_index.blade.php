@extends('layouts.site')

@section('content')
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                @foreach ($posts as $post)
                    <div class="post-preview">
                        <a href="{{ route('post', $post->slug) }}">
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
                    {{-- <div class="row">
                        <div class="col-6">
                            <a href="{{ route('post', $post->slug) }}">
                                <h3>{{ $post->title }}</h3>
                            </a>
                            <p> Data dodania:
                                <small>{{ $post->created_at->format('d/m/Y') }}</small>
                            </p>
                            <p>{{ $post->description }}</p>
                        </div>
                    </div> --}}
                @endforeach
                <div class="row mb-3">
                    <div class="col-6">
                        @if ($posts->currentPage() > 1)
                            <a href="{{ $posts->previousPageUrl() }}" class="float-start">
                                <button class="btn btn-primary">Poprzednie</button>
                            </a>
                        @endif
                        @if ($posts->hasMorePages())
                            <a href="{{ $posts->nextPageUrl() }}" class="float-end">
                                <button class="btn btn-primary">Następne</button>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('header')
    <header class="masthead" style="background-image: url({{ asset($pageWallpaper) }})">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>{{ $pageTitle }}</h1>
                        <span class="subheading">{{ $pageSubtitle }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
