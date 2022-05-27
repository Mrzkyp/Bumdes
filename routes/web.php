<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LoginController;
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

Route::get('/produk', [ProdukController::class, 'index'])->name('produk')->middleware('auth');


Route::get('/tambahproduk', [ProdukController::class, 'tambahproduk'])->name('tambahproduk');
Route::post('/insertdata', [ProdukController::class, 'insertdata'])->name('insertdata');

Route::get('/tampildata/{id}', [ProdukController::class, 'tampildata'])->name('tampildata');
Route::post('/updatedata/{id}', [ProdukController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [ProdukController::class, 'delete'])->name('delete');

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/loginproses',[LoginController::class, 'loginproses'])->name('loginproses');


Route::get('/Register',[LoginController::class, 'Register'])->name('Register');
Route::post('/Registeradmin',[LoginController::class, 'Registeradmin'])->name('Registeradmin');

Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
