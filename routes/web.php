<?php

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
    return view('welcome');
});
Route::get('/login', [App\Http\Controllers\UserController::class, 'showLogin'])->name('login');
Route::post('/login',[App\Http\Controllers\UserController::class, 'loginSubmit'])->name('login.submit');
Route::post('/regist',[App\Http\Controllers\UserController::class, 'registForm'])->name('regist.form');
Route::get('/regist', [App\Http\Controllers\UserController::class, 'showRegist'])->name('regist');
Route::post('/regist',[App\Http\Controllers\UserController::class, 'registSubmit'])->name('regist.submit');
Route::get('/list',[App\Http\Controllers\ProductController::class, 'showList'])->name('list');
Route::post('/list',[App\Http\Controllers\ProductController::class, 'listSeach'])->name('list.seach');
Route::get('/sale',[App\Http\Controllers\SaleController::class, 'showSale'])->name('sale');
Route::post('/sale',[App\Http\Controllers\SaleController::class, 'saleSubmit'])->name('sale.submit');
Route::get('/detail',[App\Http\Controllers\CompanyController::class, 'showDetail'])->name('detail');
Route::get('/edit',[App\Http\Controllers\CompanyController::class, 'showEdit'])->name('edit');
