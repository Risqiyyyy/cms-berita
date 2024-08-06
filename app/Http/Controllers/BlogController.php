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

        $news = $postQuery->orderBy('created_at', 'desc')->latest()->take(5)->get();
        $baca = $postQuery->orderBy('created_at', 'desc')->latest()->take(4)->get();
        $populer = Post::with('kategori', 'user')->orderBy('view', 'desc')->take(3)->get();
        $post = $postQuery->orderBy('created_at', 'desc')->latest()->paginate(15);

        $allPosts = collect([$baca, $news, $populer, $post->items()])->flatten();

        foreach ($allPosts as $singlePost) {
            if ($singlePost->gambar) {
                $singlePost->gambar = explode('|', $singlePost->gambar);
            }
        }
    
        return view('blog.categori', compact('media', 'categories', 'tags', 'news', 'baca', 'category', 'subCategory', 'populer','post'));
    }
    
    public function bytitle($slug){
      $post = Post::where('slug', $slug)->firstOrFail();
      $patterns = [
        // YouTube
        '/\[embed\](https?:\/\/(?:www\.)?youtube\.com\/watch\?v=([^\s&]+))\[\/embed\]/i' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/$2" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        // TikTok
        '/\[embed\](https?:\/\/(?:www\.)?tiktok\.com\/@[\w\-]+\/video\/(\d+))\[\/embed\]/i' => '<blockquote class="tiktok-embed" cite="$1" data-video-id="$2" style="max-width: 605px;min-width: 325px;"> <section> </section> </blockquote><script async src="https://www.tiktok.com/embed.js"></script>',
        // Instagram
        '/\[embed\](https?:\/\/(?:www\.)?instagram\.com\/p\/([^\s\/]+))\[\/embed\]/i' => '<blockquote class="instagram-media" data-instgrm-permalink="$1" data-instgrm-version="12" style="background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"></blockquote><script async src="//www.instagram.com/embed.js"></script>',
        // Twitter
        '/\[embed\](https?:\/\/(?:www\.)?twitter\.com\/[^\s]+\/status\/(\d+))\[\/embed\]/i' => '<blockquote class="twitter-tweet"><a href="$1"></a></blockquote><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>',
        // Facebook
        '/\[embed\](https?:\/\/(?:www\.)?facebook\.com\/[^\s]+\/posts\/(\d+))\[\/embed\]/i' => '<iframe src="https://www.facebook.com/plugins/post.php?href=$1&width=500" width="500" height="684" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allow="encrypted-media"></iframe>',
      ];

      foreach ($patterns as $pattern => $replacement) {
          $post->content = preg_replace($pattern, $replacement, $post->content);
      }

      $post->increment('view');
      $tagsdetail = $post->tags;

      $categories = Category::with('subCategories')->get();
      $baca = Post::with('kategori', 'user')->orderBy('created_at', 'desc')->latest()->take(4)->get();
      $media = Media::all();
      $tags = Tags::paginate(20);
      $news = Post::with('kategori', 'user')->orderBy('created_at', 'desc')->latest()->take(5)->get();
      $populer = Post::with('kategori', 'user')->orderBy('view', 'desc')->take(3)->get();

      $allPosts = collect([$post, $baca, $news, $populer])->flatten();
      foreach ($allPosts as $singlePost) {
          if ($singlePost->gambar) {
              $singlePost->gambar = explode('|', $singlePost->gambar);
          }
      }
      return view('blog.detail',compact('post','categories','baca','media','news','populer','tags','tagsdetail'));

    }

    public function bytags($slug) {
      $tag = Tags::where('slug', $slug)->firstOrFail();
      $post = $tag->posts()->orderBy('created_at', 'desc')->paginate(15);
      $categories = Category::with('subCategories')->get();
      $baca = Post::with('kategori', 'user')->orderBy('created_at', 'desc')->latest()->take(4)->get();
      $media = Media::all();
      $tags = Tags::paginate(20);
      $news = Post::with('kategori', 'user')->orderBy('created_at', 'desc')->latest()->take(5)->get();
      $populer = Post::with('kategori', 'user')->orderBy('view', 'desc')->take(3)->get();

      $allPosts = collect([$baca, $news, $populer, $post->items()])->flatten();
      foreach ($allPosts as $singlePost) {
          if ($singlePost->gambar) {
              $singlePost->gambar = explode('|', $singlePost->gambar);
          }
      }

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
