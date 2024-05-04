<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/posts', function() {
//     return response()->json([
//         'post' => [
//             [
//                 "title" => "post one"
//             ]
//         ]
//     ]);
// });

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
