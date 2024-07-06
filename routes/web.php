<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
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
});

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
    Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
    // ... d'autres routes
//});
