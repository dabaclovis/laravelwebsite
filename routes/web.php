<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;

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

Route::controller(PagesController::class)
->group(function(){
    Route::get('/', 'index')->name('pages.index');
    Route::get('about', 'about')->name('pages.about');
    Route::get('policy', 'policy')->name('pages.policy');
});

Route::controller(ArticlesController::class)->group(function(){
    Route::get('git','git')->name('art.git');
    Route::get('laravel','laravel')->name('art.laravel');
    Route::get('builder','builder')->name('art.builder');
});
