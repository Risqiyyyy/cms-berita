<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Media;
use App\Models\Tags;
use App\Models\Category;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $media = Media::all();
        $categories = Category::with('subCategories')->get();
        $tags = Tags::paginate(20);
        $populer = Post::with('kategori', 'user')->orderBy('view', 'desc')->take(3)->get();
        $news = Post::orderBy('created_at', 'desc')->latest()->take(5)->get();
        $baca = Post::orderBy('created_at', 'desc')->latest()->take(4)->get();

        $allPosts = collect([$baca, $news, $populer])->flatten();

        foreach ($allPosts as $singlePost) {
            if ($singlePost->gambar) {
                $singlePost->gambar = explode('|', $singlePost->gambar);
            }
        }

        return view('blog.redaksi',compact('populer','tags','media','categories','baca','news'));
    }

    public function pedomansiber()
    {
        $media = Media::all();
        $categories = Category::with('subCategories')->get();
        $tags = Tags::paginate(20);
        $populer = Post::with('kategori', 'user')->orderBy('view', 'desc')->take(3)->get();
        $news = Post::orderBy('created_at', 'desc')->latest()->take(5)->get();
        $baca = Post::orderBy('created_at', 'desc')->latest()->take(4)->get();

        $allPosts = collect([$baca, $news, $populer])->flatten();

        foreach ($allPosts as $singlePost) {
            if ($singlePost->gambar) {
                $singlePost->gambar = explode('|', $singlePost->gambar);
            }
        }

        return view('blog.pedoman-media-siber',compact('populer','tags','media','categories','baca','news'));
    }

    public function standar_perlindungan()
    {
        $media = Media::all();
        $categories = Category::with('subCategories')->get();
        $tags = Tags::paginate(20);
        $populer = Post::with('kategori', 'user')->orderBy('view', 'desc')->take(3)->get();
        $news = Post::orderBy('created_at', 'desc')->latest()->take(5)->get();
        $baca = Post::orderBy('created_at', 'desc')->latest()->take(4)->get();

        $allPosts = collect([$baca, $news, $populer])->flatten();

        foreach ($allPosts as $singlePost) {
            if ($singlePost->gambar) {
                $singlePost->gambar = explode('|', $singlePost->gambar);
            }
        }

        return view('blog.standar-perlindungan-profesi-wartawan',compact('populer','tags','media','categories','baca','news'));
    }

    

    public function etik_jurnalistik()
    {
        $media = Media::all();
        $categories = Category::with('subCategories')->get();
        $tags = Tags::paginate(20);
        $populer = Post::with('kategori', 'user')->orderBy('view', 'desc')->take(3)->get();
        $news = Post::orderBy('created_at', 'desc')->latest()->take(5)->get();
        $baca = Post::orderBy('created_at', 'desc')->latest()->take(4)->get();

        $allPosts = collect([$baca, $news, $populer])->flatten();

        foreach ($allPosts as $singlePost) {
            if ($singlePost->gambar) {
                $singlePost->gambar = explode('|', $singlePost->gambar);
            }
        }

        return view('blog.kode-etik-jurnalistik',compact('populer','tags','media','categories','baca','news'));
    }

    public function etik_jurnalistik2()
    {
        $media = Media::all();
        $categories = Category::with('subCategories')->get();
        $tags = Tags::paginate(20);
        $populer = Post::with('kategori', 'user')->orderBy('view', 'desc')->take(3)->get();
        $news = Post::orderBy('created_at', 'desc')->latest()->take(5)->get();
        $baca = Post::orderBy('created_at', 'desc')->latest()->take(4)->get();

        $allPosts = collect([$baca, $news, $populer])->flatten();

        foreach ($allPosts as $singlePost) {
            if ($singlePost->gambar) {
                $singlePost->gambar = explode('|', $singlePost->gambar);
            }
        }

        return view('blog.kode-etik-jurnalistik2',compact('populer','tags','media','categories','baca','news'));
    }

    public function etik_jurnalistik3()
    {
        $media = Media::all();
        $categories = Category::with('subCategories')->get();
        $tags = Tags::paginate(20);
        $populer = Post::with('kategori', 'user')->orderBy('view', 'desc')->take(3)->get();
        $news = Post::orderBy('created_at', 'desc')->latest()->take(5)->get();
        $baca = Post::orderBy('created_at', 'desc')->latest()->take(4)->get();

        $allPosts = collect([$baca, $news, $populer])->flatten();

        foreach ($allPosts as $singlePost) {
            if ($singlePost->gambar) {
                $singlePost->gambar = explode('|', $singlePost->gambar);
            }
        }

        return view('blog.kode-etik-jurnalistik3',compact('populer','tags','media','categories','baca','news'));
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
