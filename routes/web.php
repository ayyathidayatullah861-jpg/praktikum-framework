<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloInformatikaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/informatika', function () {
    return view('informatikaviews', [
        'nama' => 'Informatika A'
    ]);
});

Route::redirect('/testredirect', '/informatika');

Route::get('/helloinformatika', [HelloInformatikaController::class, 'HelloInformatika']);

Route::fallback(function () {
    return view('fallbackviews');
});