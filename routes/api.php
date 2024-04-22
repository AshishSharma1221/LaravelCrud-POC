<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/csrf-token', function() {
    return response()->json(['token' => csrf_token()]);
});

