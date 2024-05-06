<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/details_model/{model}', function ($model) {
    return view('details_model', ['model' => $model]);
});
Route::get('/details_car', function () {
    return view('details_car');
});
