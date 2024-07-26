<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tags;
use Illuminate\Support\Str;

class TagsController extends Controller
{
    public function create()
    {
        $tags = Tags::paginate(5);
        return view('apps.tags', compact('tags'));
    }

    public function store(Request $request)
    {
        $tags = Tags::create([
            'nama_tags' => $request->nama_tags,
            'slug' => Str::slug($request->nama_kategori)
          ]);

        return redirect()->route('tags.create')->with('success', 'Category added successfully');
    }

    public function destroy($id)
    {
        $tags = Tags::findorfail($id);
        $tags->delete();

        return redirect()->back()->with('success', 'Category Berhasil Dihapus');
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        // ]);

        $tags = Tags::findOrFail($id);
        $tags->nama_tags = $request->input('nama_tags');
        $tags->save();
        return redirect()->back()->with('success', 'Category Berhasil Dihapus');
    }
}
