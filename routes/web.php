<?php
//  use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotorsportController;


Route::get('/', [MotorsportController::class, 'index'] );

Route::get('/anuncio/create', [MotorsportController::class, 'create'] );

Route::get('/car_details', function () {
    return view('car_details');
});
