<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Tags;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;

class PostSeeder extends Seeder
{
    public function run()
    {
        $csvFile = base_path('/database/seeders/Posts-Export-2024-July-31-0319.csv');
        
        $csv = Reader::createFromPath($csvFile, 'r');
        $csv->setHeaderOffset(0);

        $records = $csv->getRecords();

        foreach ($records as $record) {
            $categories = explode('/', $record['Categories']);
            $categoryName = trim($categories[0]);
            $subCategoryName = isset($categories[1]) ? trim($categories[1]) : null;

            // dd($categoryName, $subCategoryName);

            $category = Category::where('nama_kategori', $categoryName)->first();
            $subCategory = $subCategoryName ? SubCategory::where('nama_sub_kategori', $subCategoryName)->first() : null;

            if ($category && (!$subCategoryName || $subCategory)) {
                $imageUrl = isset($record['Image URL']) ? str_replace('https://ftnews.co.id/wp-content/uploads/', '', $record['Image URL']) : null;
                $post = Post::create([
                    'title' => $record['Title'],
                    'content' => $record['Content'],
                    'gambar' => $imageUrl,
                    'slug' => Str::slug($record['Title']),
                    'status' => 'public',
                    'kategori_id' => $category->id,
                    'sub_category_id' => $subCategory ? $subCategory->id : null,
                    'user_id' => 1,
                    'view' => $record['View'] ?? 0,
                    'created_at' => $record['Date'] ?? null,
                ]);

                if (!empty($record['Tags'])) {
                    $tags = explode('|', $record['Tags']);
                    foreach ($tags as $tagName) {
                        $tagName = trim($tagName);
                        $tag = Tags::firstOrCreate([
                            'nama_tags' => $tagName,
                            'slug' => Str::slug($tagName),
                        ]);
                        $post->tags()->attach($tag->id);
                    }
                }
              
            }
        }
    }
}
