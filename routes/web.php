<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

require __DIR__ . '/auth.php';

Route::get('/', [RoutingController::class, 'landingpage'])->name('root');
Route::get('/apps/categori', [CategoryController::class, 'create'])->name('categori.create');
Route::post('/apps/categori', [CategoryController::class, 'store'])->name('categories.store');
Route::put('/apps/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');

// about
Route::get('/redaksi', [AboutController::class, 'index'])->name('about.redaksi');
Route::get('/pedoman-media-siber', [AboutController::class, 'pedomansiber'])->name('about.pedoman-siber');


// tags
Route::get('/apps/tags', [TagsController::class, 'create'])->name('tags.create');
Route::post('/apps/tags', [TagsController::class, 'store'])->name('tags.store');
Route::delete('/apps/tags/{id}', [TagsController::class, 'destroy'])->name('tags.destroy');
Route::put('/apps/tags/{id}', [TagsController::class, 'update'])->name('tags.update');

Route::delete('/apps/categori/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('/get-subcategories/{categoryId}', [CategoryController::class, 'getSubcategories']);


Route::post('/subcategories/store', [SubCategoryController::class, 'store'])->name('subcategories.store');

Route::get('/project/create', [PostController::class, 'create'])->name('post.create');
Route::post('/project/create', [PostController::class, 'store'])->name('post.store');


Route::get('/project/list', [ListController::class, 'create'])->name('list.create');

Route::get('/project/detail', [DetailController::class, 'index'])->name('detail.index');


Route::get('/home', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/member/author', [UserController::class, 'index'])->name('user.index');

// media
Route::get('/setting/media', [MediaController::class, 'create'])->name('media.create');
Route::post('/setting/media', [MediaController::class, 'store'])->name('media.store');

// blog
Route::get('/category/{categorySlug}/{subCategorySlug?}', [BlogController::class, 'category'])->name('bycategory');
Route::get('/{slug}', [BlogController::class, 'bytitle'])->name('bytitle');

// Route::get('/categori/{slug}', [BlogController::class, 'category'])->name('bycategory');
// Route::get('/category/{categorySlug}/{subCategorySlug}', [BlogController::class, 'bysubcategory'])->name('bysubcategory');


Route::group(['middleware' => 'auth'], function () {
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});
