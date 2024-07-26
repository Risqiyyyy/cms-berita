<?php

namespace App\Http\Controllers;
use App\Models\SubCategory;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama_sub_kategori' => 'required|string|max:255',
        //     'category_id' => 'required|exists:categories,id',
        // ]);

        SubCategory::create([
            'nama_sub_kategori' => $request->nama_sub_kategori,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->nama_sub_kategori)
        ]);

        return redirect()->back()->with('success', 'Sub Kategori berhasil ditambahkan');
    }
}
