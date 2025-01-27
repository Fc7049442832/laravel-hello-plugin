<?php

use Illuminate\Support\Facades\Route;
use HelloPlugin\Controllers\HelloController;

// Define plugin routes
Route::get('/hello', [HelloController::class, 'index']);
