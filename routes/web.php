<?php
 use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotorsportController;


Route::get('/', [MotorsportController::class, 'index'] );

Route::get('/annoucement/create', [MotorsportController::class, 'create'] );

Route::get('/details_model/{model}', function ($model) {
    return view('details_model', ['model' => $model]);
});
Route::get('/details_car', function () {
    return view('details_car');
});
