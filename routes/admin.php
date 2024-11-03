<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\TagController;
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

Route::get('/dashboard', [IndexController::class, 'dashboard'])->name('dashboard');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::post('/profile_update/{id}', [ProfileController::class, 'update'])->name('profile_update');

######################### Begin Members Routes ########################
Route::group(['prefix' => 'members'], function () {
    Route::get('/', [MemberController::class, 'index'])->name('members.index');
    Route::get('create', [MemberController::class, 'create'])->name('members.create');
    Route::post('store', [MemberController::class, 'store'])->name('members.store');
    Route::get('edit/{member}', [MemberController::class, 'edit'])->name('members.edit');
    Route::post('update/{member}', [MemberController::class, 'update'])->name('members.update');
    Route::get('delete/{member}', [MemberController::class, 'destroy'])->name('members.destroy');
    Route::get('changeStatus/{member}', [MemberController::class, 'changeStatus'])->name('members.status');
});

######################### Begin Posts Routes ########################
Route::group(['prefix' => 'posts'], function () {
    Route::get('/', [PostController::class, 'index'])->name('posts.index');
    Route::get('create', [PostController::class, 'create'])->name('posts.create');
    Route::post('store', [PostController::class, 'store'])->name('posts.store');
    Route::get('edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
    Route::post('update/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::get('delete/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('changeStatus/{post}', [PostController::class, 'changeStatus'])->name('posts.status');
});

######################### Begin Tags Routes ########################
Route::group(['prefix' => 'tags'], function () {
    Route::get('/', [TagController::class, 'index'])->name('tags.index');
    Route::get('create', [TagController::class, 'create'])->name('tags.create');
    Route::post('store', [TagController::class, 'store'])->name('tags.store');
    Route::get('edit/{tag}', [TagController::class, 'edit'])->name('tags.edit');
    Route::post('update/{tag}', [TagController::class, 'update'])->name('tags.update');
    Route::get('delete/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');
    Route::get('changeStatus/{tag}', [TagController::class, 'changeStatus'])->name('tags.status');
});

######################### Begin Categories Routes ########################
Route::group(['prefix' => 'categories'], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('update/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('delete/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::get('changeStatus/{category}', [CategoryController::class, 'changeStatus'])->name('categories.status');
});

######################### Begin Messages Routes ########################
Route::group(['prefix' => 'messages'], function () {
    Route::get('/recieved', [MessageController::class, 'recieved'])->name('messages.recieved');
    Route::get('/sended', [MessageController::class, 'sended'])->name('messages.sended');
    Route::get('create', [MessageController::class, 'create'])->name('messages.create');
    Route::post('store', [MessageController::class, 'store'])->name('messages.store');
    Route::get('edit/{message}', [MessageController::class, 'edit'])->name('messages.edit');
    Route::post('update/{message}', [MessageController::class, 'update'])->name('messages.update');
    Route::get('delete/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');
});


######################### Begin Products Routes ########################
Route::group(['prefix' => 'products'], function () {
    Route::get('/', [ProductsController::class, 'index'])->name('products.index');
    Route::get('create', [ProductsController::class, 'create'])->name('products.create');
    Route::post('store', [ProductsController::class, 'store'])->name('products.store');
    Route::get('edit/{id}', [ProductsController::class, 'edit'])->name('products.edit');
    Route::post('update/{id}', [ProductsController::class, 'update'])->name('products.update');
    Route::get('delete/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');
    Route::get('changeStatus/{id}', [ProductsController::class, 'changeStatus'])->name('products.status');
});
######################### End  Products Routes  ########################


Route::post('/upload', [CkEditorController::class, 'uploadImage'])->name('ckeditor.upload');
Route::get('/browse', [CkEditorController::class, 'browseImage'])->name('ckeditor.browse');
