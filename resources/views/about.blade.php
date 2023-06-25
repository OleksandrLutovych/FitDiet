@extends('layouts.site')

@section('content')
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates
                    odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus
                    consectetur?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque
                    architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in
                    officia voluptas voluptatibus, minus!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid ex
                    itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit tempora!
                </p>
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