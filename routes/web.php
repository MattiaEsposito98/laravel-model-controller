<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.homepage');
// });

Route::get('/', [PageController::class, 'index']);
