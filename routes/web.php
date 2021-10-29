<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return 'Hello, World!';
});

/*Route::get('about', function () {
    //return view('about');
    return 'Hello, World!';
});*/
Route::get('{about?}', function ($about = "paqueton") {
    return "Hello, " . $about;
});
Route::get('products', function () {
    //return view('products');
    return 'Hello, World!';
});
Route::get('services', function () {
    //return view('services');
    return 'Hello, World!';
});
Route::post('/', function () {
    // Handle someone sending a POST
    // request to this route
});

Route::put('/', function () {
    // Handle someone sending a PUT
    // request to this route
});

Route::delete('/', function () {
    // Handle someone sending a DELETE
    // request to this route
});
Route::any('/', function () {
    // Handle any verb request to 
    // this route
});

Route::match(['get', 'post'], '/', function () {
    // Handle GET or POST requests to
    // this route
});

Route::resource('/products', ProductController::class);
