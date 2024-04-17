<?php

use Illuminate\Support\Facades\Route;

/* MAIN Pages*/
Route::get('/', function () {return view('index');
});
Route::get('/index', function () {return view('index');
});
