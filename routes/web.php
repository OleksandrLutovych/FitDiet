<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\SiteController::class, 'index'])->name('index');
Route::get('/post/{slug}', [App\Http\Controllers\SiteController::class, 'post'])->name('post');
Route::get('/blog', [App\Http\Controllers\SiteController::class, 'post_index'])->name('post_index');
Route::get('/about', [App\Http\Controllers\SiteController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\SiteController::class, 'contact'])->name('contact');

Auth::routes();


Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index')->middleware('auth');

Route::get('/admin/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create')->middleware('auth');

Route::post('/admin/posts', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store')->middleware('auth');

Route::get('/admin/posts/edit/{post}', [App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit')->middleware('auth');

Route::post('/admin/posts/edit/{post}', [App\Http\Controllers\PostController::class, 'update'])->name('posts.update')->middleware('auth');
Route::get('/admin/posts/delete/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->name('posts.delete')->middleware('auth');

// Content Routing 
Route::get('/admin/content', [App\Http\Controllers\ContentController::class, 'index'])->name('pageContent.index')->middleware('auth');

Route::get('/admin/content/create', [App\Http\Controllers\ContentController::class, 'create'])->name('pageContent.create')->middleware('auth');

Route::post('/admin/content', [App\Http\Controllers\ContentController::class, 'addPage'])->name('pageContent.addPage')->middleware('auth');
