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
use App\Http\Controllers\SettingColorController;
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

    // Routes without middleware
    Route::get('/', [RoutingController::class, 'landingpage'])->name('root');

    // Blog routes without middleware
    Route::get('/category/{categorySlug}/{subCategorySlug?}', [BlogController::class, 'category'])->name('bycategory');
    Route::get('/{slug}', [BlogController::class, 'bytitle'])->name('bytitle');
    Route::get('/tags/{slug}', [BlogController::class, 'bytags'])->name('bytags');


    // About routes
    Route::get('/redaksi', [AboutController::class, 'index'])->name('about.redaksi');
    Route::get('/pedoman-media-siber', [AboutController::class, 'pedomansiber'])->name('about.pedoman-siber');
    Route::get('/standar-perlindungan-profesi-wartawan', [AboutController::class, 'standar_perlindungan'])->name('about.standar_perlindungan');
    Route::get('/kode-etik-jurnalistik', [AboutController::class, 'etik_jurnalistik'])->name('about.etik_jurnalistik');
    Route::get('/kode-etik-jurnalistik2', [AboutController::class, 'etik_jurnalistik2'])->name('about.etik_jurnalistik2');
    Route::get('/kode-etik_jurnalistik3', [AboutController::class, 'etik_jurnalistik3'])->name('about.etik_jurnalistik3');


    

// Routes with middleware
Route::group(['middleware' => 'auth'], function () {
        // Dashboard routes
    Route::get('/auth/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    // Category routes
    Route::get('/apps/categori', [CategoryController::class, 'create'])->name('categori.create');
    Route::post('/apps/categori', [CategoryController::class, 'store'])->name('categories.store');
    Route::put('/apps/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/apps/categori/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::get('/get-subcategories/{categoryId}', [CategoryController::class, 'getSubcategories']);

    // Tags routes
    Route::get('/apps/tags', [TagsController::class, 'create'])->name('tags.create');
    Route::post('/apps/tags', [TagsController::class, 'store'])->name('tags.store');
    Route::delete('/apps/tags/{id}', [TagsController::class, 'destroy'])->name('tags.destroy');
    Route::put('/apps/tags/{id}', [TagsController::class, 'update'])->name('tags.update');
    
    // Post create routes
    Route::get('/project/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/project/create', [PostController::class, 'store'])->name('post.store');
    
    // Post list routes
    Route::get('/project/list', [ListController::class, 'create'])->name('list.create');
    Route::get('/project/list/{id}', [ListController::class, 'edit'])->name('list.edit');
    Route::put('/project/list/{id}', [ListController::class, 'update'])->name('list.update');
    Route::delete('/project/list/{id}', [ListController::class, 'destroy'])->name('list.destroy');
    
    // Post detail routes
    Route::get('/project/detail', [DetailController::class, 'index'])->name('detail.index');
    
    // Subcategory routes
    Route::post('/subcategories/store', [SubCategoryController::class, 'store'])->name('subcategories.store');
        
    // Member routes
    Route::group(['middleware' => 'role:admin'], function () {
        Route::get('/member/access', [UserController::class, 'index'])->name('user.index');
        Route::post('/member/access', [UserController::class, 'store'])->name('user.store');
        Route::put('/member/{id}', [UserController::class, 'update'])->name('user.update');
        Route::delete('/member/{id}', [UserController::class, 'destroy'])->name('user.destroy');

        // SettingColor routes
        Route::get('/settingColor/edit', [SettingColorController::class, 'edit'])->name('settingColor.edit');
        Route::get('/settingColor/edit/{settingColor}', [SettingColorController::class, ''])->name('settingColor.edit');
        
        // Media routes
        Route::get('/setting/media', [MediaController::class, 'create'])->name('media.create');
        Route::post('/setting/media', [MediaController::class, 'store'])->name('media.store');
    });
    // RoutingController routes
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});

