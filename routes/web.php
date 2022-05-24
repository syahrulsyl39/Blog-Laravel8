<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/homedas', function () {
    return view('asset.home');
});

//route frontend
Route::get('/froindex', [FrontendController::class, 'index']);

// route category
Route::middleware('auth', 'check:admin,user')->group(function(){
    Route::get('/category', [CategoryController::class, 'index'])->name('index');
    Route::get('/tcategory', [CategoryController::class, 'tcategory'])->name('tambah-category');
    Route::post('/scategory', [CategoryController::class, 'scategory'])->name('simpan-category');
    Route::get('/ecategory/{id}', [CategoryController::class, 'editcategory'])->name('edit-category');
    Route::put('/upcategory/{id}', [CategoryController::class, 'updatecategory'])->name('up-category');
    Route::delete('/dcategory/{id}', [CategoryController::class, 'deletecategory'])->name('del-category');

});

// route tags
Route::middleware('auth', 'check:admin,user')->group(function(){
    Route::get('/tags', [TagsController::class, 'index'])->name('index-tags');
    Route::get('/tambahtags', [TagsController::class, 'tambahtags'])->name('tambah-tags');
    Route::post('/tambahtags', [TagsController::class, 'simpantags'])->name('simpan-tags');
    Route::get('/edittags/{id}', [TagsController::class, 'edittags'])->name('edit-tags');
    Route::put('/updatetags/{id}', [TagsController::class, 'updatetags'])->name('update-tags');
    Route::delete('/deletetags/{id}', [TagsController::class, 'deletetags'])->name('delete-tags');
    
});
// route tags hapus permanan


// route posts
Route::middleware('auth', 'check:admin,user')->group(function(){
    Route::get('/posts', [PostsController::class, 'index_post'])->name('index-posts');
    Route::get('/tposts', [PostsController::class, 'tambah_post'])->name('tambah-posts');
    Route::post('/tposts', [PostsController::class, 'simpan_post'])->name('simpan-posts');
    Route::get('/editposts/{id}', [PostsController::class, 'edit_post'])->name('edit-posts');
    Route::put('/updateposts/{id}', [PostsController::class, 'update_post'])->name('update-posts');
    Route::delete('/deleteposts/{id}', [PostsController::class, 'delete_post'])->name('delete-posts');

});

// route post hapus permanen
Route::middleware('auth', 'check:admin')->group(function(){
    Route::get('/sampah', [PostsController::class, 'sampah'])->name('sampah-posts');
    Route::get('/restore/{id}', [PostsController::class, 'restore'])->name('restore-posts');
    Route::delete('/permanen/{id}', [PostsController::class, 'permanen'])->name('permanen-posts');

});

//route user
Route::middleware('auth', 'check:admin')->group(function(){
    Route::get('/user', [UserController::class, 'index'])->name('index-user');
Route::get('/Tuser', [UserController::class, 'create'])->name('create-user');
Route::post('/Tuser', [UserController::class, 'store'])->name('store-user');
Route::get('/Euser/{id}', [UserController::class, 'edit'])->name('edit-user');
Route::put('/update/{id}', [UserController::class, 'update'])->name('update-user');
Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('delete-user');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
