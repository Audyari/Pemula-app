<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Services\Riak\Connection;

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

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/user', [UserController::class, 'index']);

Route::get('/riak-test', function (Connection $riak) {
    dd($riak->connect());
});
