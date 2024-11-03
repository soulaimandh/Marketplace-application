<?php

use App\Http\Controllers\Visitor\AddProductController;;
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


// add product routes
Route::post('/information-générales', [AddProductController::class, 'add_product_info'])->name('add-product-info');
Route::get('/information-générales', [AddProductController::class, 'add_product_info']);

Route::post('/détail-de-bien', [AddProductController::class, 'add_product_details'])->name('add-product-details');
Route::get('détail-de-bien', [AddProductController::class, 'add_product_details']);

Route::post('/décrivez-votre-bien', [AddProductController::class, 'add_product_desc'])->name('add-product-desc');
Route::get('décrivez-votre-bien', [AddProductController::class, 'add_product_desc']);

Route::post('/photos', [AddProductController::class, 'add_product_images'])->name('add-product-images');
Route::get('photos', [AddProductController::class, 'add_product_images']);

Route::post('/vos-informations', [AddProductController::class, 'add_product_auth'])->name('add-product-auth');
Route::get('vos-informations', [AddProductController::class, 'add_product_auth']);

Route::post("/statut-de-lannonce", [AddProductController::class, 'add_product_status'])->name('add-product-status');
Route::get("/statut-de-lannonce", [AddProductController::class, 'add_product_status']);

Route::get('/félicitation', [AddProductController::class, 'add_product_done'])->name('add-product-done');

Route::post('/vos_informations', [AddProductController::class, 'close_modal'])->name('close-modal');
Route::get('/vos-informations', [AddProductController::class, 'close_modal']);