<?php

use Illuminate\Support\Facades\Route;

// CSRF Cookie route for Sanctum
Route::get('/sanctum/csrf-cookie', function () {
    return response()->json(['csrf' => csrf_token()]);
});

// Root API route
Route::get('/', function () {
    return response()->json(['message' => 'Laravel API is running']);
});
