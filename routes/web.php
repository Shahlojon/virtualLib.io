<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\HomeController;

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

//Route::get('/',[Frontend\IndexController::class, 'index']); 
Route::get('/',[HomeController::class, 'index']); 

Route::get('/scientists',[HomeController::class, 'scientists']); 
Route::get('/scientist/{id}',[HomeController::class, 'scientist']); 

Route::get('/books',[HomeController::class, 'books']); 
Route::get('/book/{id}',[HomeController::class, 'book']); 

Route::get('/categories',[HomeController::class, 'categories']); 
Route::get('/category/{id}',[HomeController::class, 'category']); 

Route::get('/articles',[HomeController::class, 'articles']); 
Route::get('/article/{id}',[HomeController::class, 'article']); 


Route::get('/admin',[Admin\IndexController::class, 'index']);

//Admin/scientist
Route::get('/admin/scientist',[Admin\ScientistController::class, 'index']);
Route::get('/admin/scientist/create',[Admin\ScientistController::class, 'create']);
Route::post('/admin/scientist/store',[Admin\ScientistController::class, 'store']);
Route::get('/admin/scientist/edit/{id}',[Admin\ScientistController::class, 'edit']);
Route::post('/admin/scientist/update/{id}',[Admin\ScientistController::class, 'update']);
Route::get('/admin/scientist/destroy/{id}',[Admin\ScientistController::class, 'destroy']);

//Admin/Book
Route::get('/admin/book/',[Admin\BookController::class, 'index']);
Route::get('/admin/book/create',[Admin\BookController::class, 'create']);
Route::post('/admin/book/store',[Admin\BookController::class, 'store']);
Route::get('/admin/book/edit/{id}',[Admin\BookController::class, 'edit']);
Route::post('/admin/book/update/{id}',[Admin\BookController::class, 'update']);
Route::get('/admin/book/destroy/{id}',[Admin\BookController::class, 'destroy']);

//Admin/Article
Route::get('/admin/article/',[Admin\ArticleController::class, 'index']);
Route::get('/admin/article/create',[Admin\ArticleController::class, 'create']);
Route::post('/admin/article/store',[Admin\ArticleController::class, 'store']);
Route::get('/admin/article/edit/{id}',[Admin\ArticleController::class, 'edit']);
Route::post('/admin/article/update/{id}',[Admin\ArticleController::class, 'update']);
Route::get('/admin/article/destroy/{id}',[Admin\ArticleController::class, 'destroy']);


//Admin/Category
Route::get('/admin/category/',[Admin\CategoryController::class, 'index']);
Route::get('/admin/category/create',[Admin\CategoryController::class, 'create']);
Route::post('/admin/category/store',[Admin\CategoryController::class, 'store']);
Route::get('/admin/category/edit/{id}',[Admin\CategoryController::class, 'edit']);
Route::post('/admin/category/update/{id}',[Admin\CategoryController::class, 'update']);
Route::get('/admin/category/destroy/{id}',[Admin\CategoryController::class, 'destroy']);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
