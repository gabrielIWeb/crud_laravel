<?php

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

Route::prefix('produto')->group(function () {
    Route::get('/', 'Produtos@listar')->name('produto.listar');
    Route::get('/{idCategoria}', 'Produtos@listarByCategoria')->where('idCategoria', '[0-9]+')->name('produto.listar.id');
    Route::post('/cadastrar', 'Produtos@cadastrar')->name('produto.cadastrar');
    Route::get('/buscar/{id}', 'Produtos@buscar')->where('id', '[0-9]+')->name('produto.buscar');
    Route::post('/editar', 'Produtos@editar')->name('produto.editar');
    Route::get('/deletar/{id}', 'Produtos@deletar')->where('id', '[0-9]+')->name('produto.deletar');
});

Route::prefix('categoria')->group(function () {
    Route::get('/', 'Categorias@listar')->name('categoria.listar');
    Route::post('/cadastrar', 'Categorias@cadastrar')->name('categoria.cadastrar');
    Route::get('/buscar/{id}', 'Categorias@buscar')->where('id', '[0-9]+')->name('categoria.buscar');
    Route::post('/editar', 'Categorias@editar')->name('categoria.editar');
    Route::get('/deletar/{id}', 'Categorias@deletar')->where('id', '[0-9]+')->name('categoria.deletar');
});
