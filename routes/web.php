<?php

use App\Http\Controllers\AboutContentController;
use App\Http\Controllers\AboutInfoController;
use App\Http\Controllers\AboutProgressionController;
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

Route::get('/backoffice', function () {
    return view('backoffice');
});


Route::get('/backoffice/about', function () {
    return view('pages.bo.about');
});

Route::get('/backoffice/about/content',[AboutContentController::class, 'index']);
Route::get('/backoffice/about/progress',[AboutProgressionController::class, 'index']);
Route::get('/backoffice/about/perso',[AboutInfoController::class, 'index']);

