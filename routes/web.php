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

Route::get('/pizzas', function () {
    $pizzas = [
        ['type' => 'پیتزا گوشت مرغ', 'base' => 'پنیری'],
        ['type' => 'پیتزا گوشت ماهی', 'base' => 'گوشت ماهی و پنیری'],
        ['type' => 'پیتزا اناناس', 'base' => 'اناناس و گوشت مرغ'],
    ];

    return view('pizzas', [
        'pizzas' => $pizzas,
    ]);
});

Route::get('/pizzas/{id}', function ($id) {
    return view('details', ['id' => $id]);
});

