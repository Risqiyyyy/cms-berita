<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tags;
use App\Models\User;
use App\Models\Media;
use App\Models\Post;
use App\Models\SubCategory;

class BlogController extends Controller
{
    // public function list_category(category $category)
    // {
    //   $category_widget = Category::all();
    //   $posts_widget = Posts::latest()->paginate(4);
    //   $tag = Tags::all();
    //   $data = $category->posts()->paginate();
    //   return view('user.list_blog', compact('data', 'category_widget', 'posts_widget', 'tag'));
    // }

    public function category($categorySlug, $subCategorySlug = null)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();
    
        $subCategory = $subCategorySlug ? SubCategory::where('slug', $subCategorySlug)
            ->where('category_id', $category->id)
            ->firstOrFail() : null;
    
        $media = Media::all();
        $categories = Category::with('subCategories')->get();
        $tags = Tags::get();
    
        $postQuery = Post::with('kategori', 'user')->where('kategori_id', $category->id);
    
        if ($subCategory) {
            $postQuery->where('sub_category_id', $subCategory->id);
        }

        $news = $postQuery->latest()->take(5)->get();
        $baca = $postQuery->latest()->take(4)->get();
        $populer = Post::with('kategori', 'user')->latest()->take(3)->get(); //belum menambahkan fitur view
        $post = $postQuery->latest()->get();
    
        return view('blog.categori', compact('media', 'categories', 'tags', 'news', 'baca', 'category', 'subCategory', 'populer','post'));
    }
    
    public function bytitle($slug){
      $post = Post::where('slug', $slug)->firstOrFail();
      $tagsdetail = $post->tags;
      $categories = Category::with('subCategories')->get();
      $baca = Post::with('kategori', 'user')->latest()->take(4)->get();
      $media = Media::all();
      $tags = Tags::get();
      $news = Post::with('kategori', 'user')->latest()->take(5)->get();
      $populer = Post::with('kategori', 'user')->latest()->take(3)->get(); //belum menambahkan fitur view
      // dd($tagsdetail);
      return view('blog.detail',compact('post','categories','baca','media','news','populer','tags','tagsdetail'));

    }

    // public function bysubcategory($categorySlug, $subCategorySlug)
    // {

    //     $category = Category::where('slug', $categorySlug)->firstOrFail();
    //     $subCategory = SubCategory::where('slug', $subCategorySlug)
    //         ->where('category_id', $category->id)
    //         ->firstOrFail();
    //     $media = Media::all();
    //     $categories = Category::with('subCategories')->get();
    //     $tags = Tags::get();
    //     $news = Post::with('kategori', 'user')->latest()->take(5)->get();
    //     $baca = Post::with('kategori', 'user')->latest()->take(4)->get();
    //     $post = Post::with('kategori', 'user')->where('sub_category_id', $subCategory->id)->latest()->get();

    //     $populer = Post::with('kategori', 'user')->where('kategori_id', $category->id)->latest()->take(3)->get();; //belum menambahkan fitur view
    //     // dd($subCategory);
    //     return view('blog.categori', compact('media', 'categories', 'tags', 'news', 'baca', 'subCategory', 'category','post','populer'));
    // }
}
