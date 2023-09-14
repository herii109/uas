<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\CastController;

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


// Route::get('/master', function () {
//     return view('layout.master');
// });


Route::get('/', function () {
    return view('welcome');
});

Route:: get('/hello',function(){
    echo "<h1>hello laravel</h1>";
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/forminput', [pagesController::class,'FormInput']);
Route::post('/welcome', [pagesController::class,'Welcome']);

Route::get('/datatable', function () {
    return view('datatable.index');
});

//CRUD CAST
Route::get('/cast', [CastController::class,'index']);
Route::get('/cast/create',[CastController::class,'create']);
Route::post('/cast',[CastController::class,'store']);
Route::get('/cast/{cast_id}/edit',[CastController::class,'edit']);
Route::put('/cast/{cast_id}',[CastController::class,'update']);
Route::delete('/cast/{cast_id}',[CastController::class,'destroy']);