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

Route::get('/about', function () {
    return view('about');
});

Route::get('/launch', function () {
    return view('launch');
});

Route::Post('user', 'Controller@user');

Route::Post('interests', 'Controller@interests');

Route::Post('experiences', 'Controller@experiences');

Route::Post('scores', 'Controller@scores');

Route::Post('recommendations', 'Controller@recommendations');

Route::get('/feedback', function () {
    return view('feedback');
});

Route::Post('feedback', 'Controller@feedback');

Route::Post('evaluation', 'Controller@evaluation');