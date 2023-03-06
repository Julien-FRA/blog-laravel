<?php

use App\Http\Controllers\ArticleAdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [MainController::class, 'home'])->name('home');

Route::get('/articles', [ArticleController::class, 'getArticles'])->name('articles');
Route::get('/articles/{slug}', [ArticleController::class, 'showArticle'])->name('article');

Auth::routes();

Route::get('admin/articles', [ArticleAdminController::class, 'index'])->middleware('admin')->name('article.index');
Route::get('admin/articles/create', [ArticleAdminController::class, 'create'])->middleware('admin')->name('article.create');
Route::post('admin/articles/store', [ArticleAdminController::class, 'store'])->middleware('admin')->name('article.store');