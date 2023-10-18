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
    return view('welcome');
});



Route::get('about', function () {
    $msg = "Line ";
    for ($i=0; $i<10; $i++)
    {


        $msg = $msg . $i . "<br/>";
        

    }
    return $msg;
})->name('demo.about');
 

Route::get('products', function() {
    return view('products');
});

Route::get('products/{count}',function ($count) {
    $msg = "數數:" ;
    for ($i=1; $i<$count; $i++)
    {
        $msg =$msg . $i . "<br/>";

    }
    return $msg;

})->where('id', '[0-9]+')->name('demo.products');
