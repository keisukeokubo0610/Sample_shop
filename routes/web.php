<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('index');
});


// Top画面
Route::get('/',[ProductController::class,'viewIndex'])
->name('index');

// 商品一覧画面
Route::get('/productList',[ProductController::class,'viewProductList'])
->name('productList');

// コンセプト画面
Route::get('/concept',[ProductController::class,'viewConcept'])
->name('concept');

// ニュース画面
Route::get('/news',[ProductController::class,'viewNews'])
->name('news');

