<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return "o código foi testado";
});

Route::get('/soma/{num1}/num2', function ($nome) {
    return "a soma atual é:" .$nome;
});

Route::get('/soma/{num1}/num2', function ($nome) {
    return "a soma atual é:" .$nome;
});
Route::get('/soma/{num1}/{num2}', function ($num1, $num2) {
    return "a soma é:" .$num1 + $num2;
});

Route::get('/multiplicação/{num1}/{num2}', function ($num1, $num2) {
    return "a multiplicação é:" .$num1 * $num2;
});
