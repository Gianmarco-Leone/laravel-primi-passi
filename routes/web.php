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

    $message = "Hello World";
    $features = ["My name", "My age", "Project Name"];

    return view('home', compact("message", "features"));

})->name("homepage");

Route::get('/feature/{index}', function($index) {

    $features = ["Gianmarco", "26", "Laravel First"];
    $feature = $features[$index];

    return view('features.feature', compact("feature"));

})->name("featurepage");