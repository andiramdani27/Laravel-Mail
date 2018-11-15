<?php

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


use Illuminate\Support\Facades\Mail;

use App\Mail\Testemail;

Route::get('/', function () {
	$name = 'Andi Ramdani';

    Mail::to('andi8337@gmail.com')->send(new Testemail($name));

    return view('welcome');

});
