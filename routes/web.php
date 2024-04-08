<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $comics = config("db.comics");
    $links = config("db.links");
    $footerLinks = config("db.linkList");

    return view('main', compact('comics', 'links', 'footerLinks'));
})->name('main');
