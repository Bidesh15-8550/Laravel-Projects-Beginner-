<?php

use Illuminate\Support\Facades\Route;

Route::get('/Name/{firstName}/{MiddleName}/{lastName}', 'App\Http\Controllers\DemoController@MyName');

//route location
