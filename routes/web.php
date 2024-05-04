<?php

// use Illuminate\Http\Request;

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

//all
Route::get('/', [ListingController::class, 'index']);
//single
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

Route::post('/listings', [ListingController::class, 'store']);

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');
 
Route::get('/register', [UserController::class, 'create'])->middleware('guest');;

Route::post('/users', [UserController::class, 'store']);

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');;

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');;

Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Route::get('/hello', function() {
//     return response("<h1>hello world</>", 200)
//     ->header('content-type', 'text/plain')
//     ->header('foo', 'bar');
// });
// Route::get('/posts/{id}', function($id){
//     //dd($id) or ddd($id); it's like console.log
//     return response('post ' . $id);
// })->where('id','[0-9]+');

// Route::get('/search', function(Request $request){
// //dd($request); show all request;
// // return $request->name . ' ' . $request->age // to get the parameters values
// });

/*common Resource Routes
index= show all listings
show = show single listing
create = show form to create new
store= store new listing
edit = show form to edit listing
update = update listing
destroy = delete listing
*/

