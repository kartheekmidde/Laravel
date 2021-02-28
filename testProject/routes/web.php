<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
Route::get('/services', 'PagesController@services');
Route::get('/about', 'PagesController@about');
Route::resource('posts', 'PostsController');

Route::get('/hello', function () {
    return "<h2>Hello World</h2>";
});


// Route::get('/about', function () {
//     return view('pages.about');
// });

Route::get('/users/{id}', function ($id) {
    return 'This is a user '. $id;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
