<?php

use App\Http\Controllers\ScrapingController;
use App\Http\Controllers\FeedController;
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
// Rutas de la Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas del feed
Route::get('/crear-articulo', [FeedController::class, 'createArticle'])->middleware(['auth'])->name('createArticle');
Route::post('/guardar-articulo', [FeedController::class, 'saveArticle'])->middleware(['auth'])->name('saveArticle');
Route::get('/miniatura/{filename}', [FeedController::class, 'getImage'])->name('imageArticle');
Route::get('/feed/{feedId}',[FeedController::class, 'getArticle'])->name('articleDetail');
Route::get('/borrar-articulo/{feedId}',[FeedController::class, 'delete'])->middleware(['auth'])->name('deleteArticle');
Route::get('/editar-articulo/{feedId}',[FeedController::class, 'edit'])->middleware(['auth'])->name('editArticle');
Route::post('/actualizar-articulo/{feedId}',[FeedController::class, 'update'])->middleware(['auth'])->name('updateArticle');
Route::get('/buscar/{search?}',[FeedController::class, 'search'])->name('searchArticle');

Route::get('/scraping', [ScrapingController::class, 'extractCover'])->name('solicitud');
Route::get('/detail', [ScrapingController::class, 'extractDetail'])->name('solicitudDetalle');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
