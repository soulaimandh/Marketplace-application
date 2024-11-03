<?php

use App\Http\Controllers\Auth\FacebookSocialiteController;
use App\Http\Controllers\Auth\GoogleSocialiteController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Client\IndexController as ClientIndexController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\Shop\IndexController as ShopIndexController;
use App\Http\Controllers\Visitor\AddProductController;
use App\Http\Controllers\Visitor\IndexController;
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

Route::get('/', [IndexController::class, 'index'])->name('welcome');
Route::get('/catégories', [IndexController::class, 'categories'])->name('categories');
Route::get('/blog', [IndexController::class, 'blog'])->name('blog');
Route::get('/article', [IndexController::class, 'post'])->name('post');
Route::get('/boutique', [ShopIndexController::class, 'shops'])->name('shops');
Route::get('/boutiques', [ShopIndexController::class, 'show_shops'])->name('show-shops');
Route::get('/fouzi-boutique', [ShopIndexController::class, 'shop'])->name('shop');
Route::get('/contactez', [IndexController::class, 'contact'])->name('contact');
Route::get('/chercher', [IndexController::class, 'search'])->name('search');
Route::get('comment-ça-marche', [IndexController::class, 'how_to_start'])->name('how-to-start');
Route::get('/favoris', [ClientIndexController::class, 'wishlist'])->name('wishlist');
Route::get('/annonces-premuim', [ClientIndexController::class, 'premuim_products'])->name('premuim-products');

Route::get('/forum', [ClientIndexController::class, 'forum'])->name('forum');
Route::get('/question', [ClientIndexController::class, 'question'])->name('question');
Route::get('/ajouter-question', [ClientIndexController::class, 'add_question'])->name('add-question');
Route::get('/détails-de-produit', [IndexController::class, 'product_details'])->name('product-details');
Route::get('/tous-les-produits', [IndexController::class, 'all_products'])->name('all-products');
Route::get('/hmizat-admar', [IndexController::class, 'hmizat_admar'])->name('hmizat-admar');


Route::get('/inscription/utilisateur', [RegisterController::class, 'store_user'])->name('register.user');
Route::get('/inscription/boutique', [RegisterController::class, 'store_shop'])->name('register.shop');

//authetification routes
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('auth/facebook', [FacebookSocialiteController::class, 'redirectToFB']);
Route::get('callback/facebook', [FacebookSocialiteController::class, 'handleCallback']);

Route::get('auth/google', [GoogleSocialiteController::class , 'redirectToGoogle']);

Route::get('callback/google', [GoogleSocialiteController::class , 'handleGoogleCallback']);
