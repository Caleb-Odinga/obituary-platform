<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ObituaryController;

Route::get('/submit-obituary', function () {
    return view('obituaryForm');
});

Route::post('/submit-obituary', [ObituaryController::class, 'submitObituary'])->name('submit_obituary');


Route::get('/view-obituaries', [ObituaryController::class, 'viewObituaries'])->name('view_obituaries');

