<?php

use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\SpeakerController;
use GuzzleHttp\Promise\Create;

Route::get('/', function () {return view('index');
});
Route::get('/index', function () {return view('index');
});

Route::get('/login', function () {return view('login');
});

Route::get('/users',[UserController::class,'nez']);

Route::get('/contact', function () {return view('contact');
});


Route::get('/order', [TicketController::class,'index'
]);

Route::get('order/create',[TicketController::class,'create'
]);

Route::get('/order/{id}',[TicketController::class,'show'
]);


Route::get('/speaker/{id}',[SpeakerController::class,'speakers'
]);

Route::get('/ss',function () {return view('speaker.create');});

Route::get('/sq',function () {return view('speaker.show');});
