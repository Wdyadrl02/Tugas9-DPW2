<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
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




Route::get('home', function () {
    return view('client.home');
});

Route::get('shop', function () {
    return view('client.shop');
});

Route::get('pengiriman', function () {
    return view('client.pengiriman');
});

Route::get('login', function () {
    return view('client.login');
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::post('produk/filter',[ProdukController::class, 'filter']);
    Route::get('/kategori', function () {
        return view('section.base');
    });
    Route::get('/dashboard', function () {
        return view('section.base');
    });
    Route::resource('user', UserController::class);
    Route::resource('produk', ProdukController::class);
});




Route::get('login', [AuthController::class, 'showlogin'])->name('login');
Route::post('login', [AuthController::class, 'LoginProcess']);
Route::get('logout', [AuthController::class, 'Logout']);
