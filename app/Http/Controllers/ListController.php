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
            ->paginate(15);
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
        $post = Post::findOrFail($id);
        $categori = Category::with('subCategories')->get();
        
        $tags = Tags::all();
    
        $selectedTags = $post->tags->pluck('id')->toArray();
    
        $sortedTags = $tags->sortByDesc(function ($tag) use ($selectedTags) {
            return in_array($tag->id, $selectedTags) ? 1 : 0;
        });
    
        return view('project.edit', compact('categori', 'sortedTags', 'post'));
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

        if ($request->hasFile('images')) {
            $oldImages = explode(',', $post->gambar);
            foreach ($oldImages as $oldImage) {
                $oldImagePath = public_path('storage/images/content/' . $oldImage);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            $newImagePaths = [];
            foreach ($request->file('images') as $image) {
                $filename = time() . '-' . $image->getClientOriginalName();
                $path = $image->storeAs('public/images/content', $filename);
                $newImagePaths[] = str_replace('public/', '', $path);
            }
    
            $post->gambar = implode(',', $newImagePaths);
            $post->save();
        }

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
