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

Route::get('/', function () {
    $comics = config('comics');
    return view('home', ["comics" => $comics]);
})->name('home');

Route::get('news', function () {
    return view('news');
})->name('news');

Route::get('product/{id}', function ($id) {
    $comics = config('comics');
    if (is_numeric($id) && $id > -1 && $id < count($comics)) {
        $comic = $comics[$id];
    } else {
        abort(404);
    }
    return view('product', ['comic' => $comic]);
})->name('product');
