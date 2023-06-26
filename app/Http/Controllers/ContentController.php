<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $content = Content::all();

        return view('pageContent.index', ['content' => $content]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pageContent.create');
    }

    public function addPage(Request $request)
    {
        $content = new Content($request->all());

        $content->slug = Str::slug($request->pageName);
        $content->save();
        return redirect(route('pageContent.index'));
    }
    public function edit(Content $content)
    {
        return view(
            'pageContent.edit',
            ['content' => $content]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Content $content)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Content $content)
    {
        $content->delete();
        return redirect(route('posts.index'));
    }
    public function page($page) {

        $content = Content::where('slug', $page)->get();
        
        if (!$page) {
            abort(404);
        }
        return view('custom', compact('content'));
    }
}
