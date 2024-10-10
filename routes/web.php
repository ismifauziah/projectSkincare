<?php

use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('login');
// });



Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'user']);
Route::get('/auth', [UserController::class, 'auth']);
// Route::get('/user/shop',[UserController::class, 'add']);
Route::get('/user/shop/{id}', [UserController::class, 'shop']);
// Route::get('/check/out/{id}', [UserController::class, 'check-out'])->name('check.out');
Route::get('/keranjang', [UserController::class, 'keranjang']);
Route::get('/ceck-out', [UserController::class, 'ceckout']);
Route::get('/dasboard', [UserController::class, 'dasboard']);
Route::get('/checkout', [UserController::class, 'checkout']);
Route::get('/product', [UserController::class, 'product']);
Route::get('/usershop',[UserController::class,'usershop']);



Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');
// Route::get('/login', [UserController::class, 'login']);
// Route::post('/auth', [UserController::class, 'auth']);
// Route::get('/logout', [UserController::class, 'logout']);

// Route::middleware('statusLogin')->group(function() {

// });