<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tags;
use App\Models\Post;
use App\Models\Media;


class RoutingController extends Controller
{

    public function __construct()
    {
        // $this->
        // middleware('auth')->
        // except('dashboard');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (Auth::user()) {
            return view('dashboard');
        } else {
            return redirect('login');
        }
    }

    public function landingPage()
    {
        $categories = Category::with('subCategories')->get();
        $tags = Tags::get();
        $postAll = Post::with('kategori', 'user')->get();
        $postteknology = Post::with('kategori', 'user')
            ->whereHas('kategori', function ($query) {
                $query->where('nama_kategori', 'teknologi');
            })->latest()->take(20)->get();

        $postlifestyle = Post::with('kategori', 'user')
            ->whereHas('kategori', function ($query) {
                $query->where('nama_kategori', 'lifestyle');
            })->latest()->take(6)->get();

        $olahraga = Post::with('kategori', 'user')
            ->whereHas('kategori', function ($query) {
                $query->where('nama_kategori', 'olahraga');
            })->latest()->take(4)->get();


        $baca = Post::with('kategori', 'user')->latest()->take(4)->get();
        $hedline = Post::with('kategori', 'user')->latest()->take(2)->get();
        $news = Post::with('kategori', 'user')->latest()->take(5)->get();

        $media = Media::all();

        $posts = Post::latest()->take(10)->get();

        $populer = Post::with('kategori', 'user')->latest()->take(4)->get(); //belum menambahkan fitur view

        return view('blog.landing', compact('categories', 'tags', 'postAll', 'postteknology', 'baca', 'media', 'hedline', 'postlifestyle', 'news', 'olahraga', 'posts', 'populer'));
    }

    /**
     * Display a view based on first route param
     *
     * @return \Illuminate\Http\Response
     */
    public function root(Request $request, $first)
    {

        $mode = $request->query('mode');
        $demo = $request->query('demo');

        if ($first == "assets")
            return redirect('home');

        return view($first, ['mode' => $mode, 'demo' => $demo]);
    }

    /**
     * second level route
     */

    public function secondLevel(Request $request, $first, $second)
    {

        $mode = $request->query('mode');
        $demo = $request->query('demo');

        if ($first == "assets")
            return redirect('home');



        return view($first . '.' . $second, ['mode' => $mode, 'demo' => $demo]);
    }

    /**
     * third level route
     */

    public function thirdLevel(Request $request, $first, $second, $third)
    {
        $mode = $request->query('mode');
        $demo = $request->query('demo');

        if ($first == "assets")
            return redirect('home');

        dd($first, $second, $third);

        return view($first . '.' . $second . '.' . $third, ['mode' => $mode, 'demo' => $demo]);
    }
}
