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
        $tags = Tags::paginate(20);
    
        $postQuery = Post::with('kategori', 'user')->where('kategori_id', $category->id);
    
        if ($subCategory) {
            $postQuery->where('sub_category_id', $subCategory->id);
        }

        $news = $postQuery->latest()->take(5)->get();
        $baca = $postQuery->latest()->take(4)->get();
        $populer = Post::with('kategori', 'user')->orderBy('view', 'desc')->take(3)->get();
        $post = $postQuery->latest()->get();
    
        return view('blog.categori', compact('media', 'categories', 'tags', 'news', 'baca', 'category', 'subCategory', 'populer','post'));
    }
    
    public function bytitle($slug){
      $post = Post::where('slug', $slug)->firstOrFail();

      if ($post->gambar) {
          $post->gambar = explode('|', $post->gambar);
        }
      // $post->content = preg_replace('/\[caption[^\]]*\](.*?)\[\/caption\]/s', '$1', $post->content);
      $post->increment('view');
      $tagsdetail = $post->tags;
    //   dd($tagsdetail);
      $categories = Category::with('subCategories')->get();
      $baca = Post::with('kategori', 'user')->latest()->take(4)->get();
      $media = Media::all();
      $tags = Tags::paginate(20);
      $news = Post::with('kategori', 'user')->latest()->take(5)->get();
      $populer = Post::with('kategori', 'user') ->orderBy('view', 'desc')->take(3)->get();
      return view('blog.detail',compact('post','categories','baca','media','news','populer','tags','tagsdetail'));

    }

    public function bytags($slug) {
      $tag = Tags::where('slug', $slug)->firstOrFail();
      $post = $tag->posts()->paginate(15); 
      $categories = Category::with('subCategories')->get();
      $baca = Post::with('kategori', 'user')->latest()->take(4)->get();
      $media = Media::all();
      $tags = Tags::paginate(20);
      $news = Post::with('kategori', 'user')->latest()->take(5)->get();
      $populer = Post::with('kategori', 'user')->orderBy('view', 'desc')->take(3)->get();
      return view('blog.tags', compact('post', 'categories', 'baca', 'media', 'news', 'populer', 'tag','tags'));
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
