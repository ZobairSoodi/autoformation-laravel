<?php

use Illuminate\Http\Request;
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
    return response()->make("Hello, World!");
})->name('index');

Route::get('test/{p1}', function ($p1) {
    return "parameter value is: " . $p1;
});

Route::get('redirect', function(){
    return redirect('/');
});

Route::get('redirect_route', function(){
    return redirect(route('index'));
});
