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


Route::get("cadastro", "CadastroController@create")->name("admin.categories.create");

Route::post("efetuado", "CadastroController@store")->name("admin.categories.store");

Route::put("editarCadastro", "CadastroController@edit")->name("admin.categories.edit");

Route::get("usuarios", "CadastroController@index")->name("admin.categories.index");

Route::delete("delete", "CadastroController@destroy")->name("admin.categories.destroy");
