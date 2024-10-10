<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('accueil');
});

Route::get('/about', function () {
    return view('a-propos');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
});

//Route::group(['middleware' => 'auth'], function () {
    // Définissez ici vos routes qui nécessitent une authentification
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::put('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::delete('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
    Route::get('/products/accessories', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/motos', [ProductController::class, 'index'])->name('motos.index');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/categories/{category}/products', [ProductController::class, 'byCategory'])->name('products.byCategory');
    Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('/newsletter/signup', [NewsletterController::class, 'signup'])->name('newsletter.signup');
//});
