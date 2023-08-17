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
    return view('admin.pages.index');
});

Route::get('/categories', function () {
    return view('admin.pages.categoria.index');
});

Route::get('/products', function () {
    return view('admin.pages.produto.index');
});

Route::get('/invoices', function () {
    return view('admin.pages.pedido.index');
});

Route::get('/sales', function () {
    return view('admin.pages.venda.index');
});

