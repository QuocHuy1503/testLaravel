<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product_Controller;
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
    return view('welcome');
});

Route::get('/admin', function () {
    return 78;
});
Route::get('/admin2', function () {
    return "Trang quan tri ban hang online";
});
Route::get('/admin3', function () {
    return "Trang quan tri ban hang online";
});
Route::get('/footer',function (){
   return 0;
});
/*Route::get('/lienhe',function (){
    return view("product-list");
});*/
Route::get('/product-list', [Product_Controller::class,"showData"]);
