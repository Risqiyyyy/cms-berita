<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $userId = auth()->id();

        $totalPosts = Post::where('user_id', $userId)->count();
        $totalPublicPosts = Post::where('user_id', $userId)
                            ->where('status', 'public')
                            ->count();
        $totalViews = Post::where('user_id', $userId)->sum('view');
        $totalSchedulePosts = Post::where('user_id', $userId)
        ->where('status', 'schedule')
        ->count();

        $mostViewedPost = Post::where('user_id', $userId)
                          ->orderBy('view', 'desc')
                          ->first();
        
        $activity = Post::with('kategori', 'user')->latest()->take(10)->get();
                 
        return view('project.detail',compact('totalPosts','totalPublicPosts','totalViews','totalSchedulePosts','mostViewedPost','activity'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
