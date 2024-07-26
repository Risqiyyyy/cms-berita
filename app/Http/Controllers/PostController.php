<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tags;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function create()
    {
        $categori = Category::with('subCategories')->get();
        $tags = Tags::all();
        // dd($tags);
        return view('project.create',compact('categori','tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id'
            // 'status' => 'required|string',
            // 'start_date' => 'nullable|date',
            // 'start_time' => 'nullable|date_format:H:i',
            // 'keyword' => 'nullable|string|max:255',
            // 'description' => 'nullable|string|max:255',
            // 'images' => 'nullable|array',
            // 'images.*' => 'nullable|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:2048',
        ]);
        
        $user_id = Auth::id();
        // dd($request);
        $content = Post::create([
            'title' => $request->title,
            'kategori_id' => $request->category_id,
            'status' => $request->status,
            'start_date' => $request->start_date,
            'content' => $request->editor_content, 
            'start_time' => $request->start_time,
            'keyword' => $request->keyword,
            'description' => $request->description,
            'user_id' => $user_id,
            'slug' => Str::slug($request->title), 
            'sub_category_id' => $request->subcategory_id
        ]);



        if ($request->has('tags')) {
            $content->tags()->attach($request->tags);
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = $image->getClientOriginalName();
                $path = $image->storeAs('public/images/content', $filename);
                $content->update(['gambar' => str_replace('public/', '', $path)]);
            }
        }
        
        return redirect()->back()->with('success', 'Content created successfully.');
    }
}
