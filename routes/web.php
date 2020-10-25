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

use App\Jobs\SendEmailJob;
use Carbon\Carbon;

Route::get('/task', 'TaskController@index');


Route::get('/', function () {
    return view('welcome');
});


Route::get('/send-email', function () {
    $job = (new SendEmailJob())->delay(Carbon::now()->addSeconds(5));
    dispatch($job);
    return 'Email already send';
});

Route::get('/event', function(){
    event(new \App\Events\CobaEvent());
    return "Event success";
});

Route::get('/event-email', function(){
    event(new \App\Events\CobaEventEmail());
    return "Event Email success";
});
