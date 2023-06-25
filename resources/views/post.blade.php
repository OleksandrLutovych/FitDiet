@extends('layouts.site')

@section('content')
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
        </div>
    </article>
@endsection

@section('header')
    <header class="masthead" style="background-image: url('/uploads/{{ $post->thumbnail }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h2>{{ $post->title }}</h1>
                            <span class="subheading">{{ $post->description }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
