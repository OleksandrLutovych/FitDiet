<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class SiteController extends Controller
{
    //
    public function index()
    {
        $pageTitle = 'FitDiet';
        $pageSubtitle = 'Latest recipes for fruit salads now available!';
        $pageWallpaper = 'img/slider1.jpg';
        $recentPosts = Post::orderby('created_at', 'desc')->take(3)->get()->sort();

        return view('index', compact('recentPosts', 'pageTitle', 'pageSubtitle', 'pageWallpaper'));
    }
    public function post($slug)
    {
        $post = Post::where('slug', $slug)->first();

        if (!$post) {
            abort(404);
        }
        return view('post', ['post' => $post]);
    }
    public function post_index()
    {
        $pageTitle = 'Clean Blog';
        $pageSubtitle = 'Latest recipes for fruit salads now available!';
        $pageWallpaper = 'img/slider2.jpg';
        $posts = Post::orderby('created_at', 'desc',)->paginate(3);

        return view('post_index', compact('posts', 'pageTitle', 'pageSubtitle', 'pageWallpaper'));
    }
    public function about()
    {
        $pageTitle = 'About';
        $pageSubtitle = 'This is what I do.';
        $pageWallpaper = 'img/about-bg.jpg';

        return view('about', compact('pageTitle', 'pageSubtitle', 'pageWallpaper'));
    }
    public function contact()
    {
        $pageTitle = 'Contact Me';
        $pageSubtitle = 'Have questions? I have answers.';
        $pageWallpaper = 'img/contact-bg.jpg';

        return view('contact', compact('pageTitle', 'pageSubtitle', 'pageWallpaper'));
    }
}
