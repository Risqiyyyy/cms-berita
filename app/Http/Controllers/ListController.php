<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tags;

class ListController extends Controller
{
    public function create()
    {
        $userId = Auth::id();
        $post = Post::with(['kategori.subCateg', 'user'])
                     ->where('user_id', $userId)
                     ->latest()
                     ->get();
        // dd($post);
        return view('project.list',compact('post'));
    }

   

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
        $post = Post::findorfail($id);
        $categori = Category::with('subCategories')->get();
        $tags = Tags::all();
        return view('project.edit',compact('categori','tags','post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);

        $post->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'kategori_id' => $request->input('category_id'),
            'sub_category_id' => $request->input('subcategory_id'),
            'status' => $request->input('status'),
            'start_date' => $request->input('start_date'),
            'start_time' => $request->input('start_time'),
            'keyword' => $request->input('keyword'),
            'description' => $request->input('description'),
        ]);

        if ($request->has('tags')) {
            $post->tags()->sync($request->input('tags'));
        }

        return redirect()->back()->with('success', 'Category Berhasil Dihapus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findorfail($id);
        $post->delete();

        return redirect()->back()->with('success', 'Category Berhasil Dihapus');
    }
}
