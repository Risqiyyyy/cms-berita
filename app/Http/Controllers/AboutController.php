<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Media;
use App\Models\Post;
use App\Models\Tags;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = Post::with('kategori', 'user')->latest()->take(5)->get();
        $categories = Category::with('subCategories')->get();
        $baca = Post::with('kategori', 'user')->latest()->take(4)->get();
        $media = Media::all();
        $tags = Tags::all();
        $populer = Post::with('kategori', 'user')->orderBy('view', 'desc')->take(4)->get();

        return view('blog.redaksi',compact('categories','baca','media','news','populer','tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function pedomansiber()
    {
        $news = Post::with('kategori', 'user')->latest()->take(5)->get();
        $categories = Category::with('subCategories')->get();
        $baca = Post::with('kategori', 'user')->latest()->take(4)->get();
        $media = Media::all();
        $tags = Tags::all();
        $populer = Post::with('kategori', 'user')->orderBy('view', 'desc')->take(4)->get();

        return view('blog.pedoman-media-siber',compact('categories','baca','media','news','populer','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
