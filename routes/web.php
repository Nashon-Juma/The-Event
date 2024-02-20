<?php

use App\Http\Controllers\BuyController;
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

Route::get('/users',[UserController::class,'nez'
]);

Route::get('/contact', function () {return view('contact');
    });

Route::get('/speaker/{id}',[SpeakerController::class,'singleSpeaker'
    ]);

Route::get('/site-admin-new',function () {return view('speaker.create')
    ;});

Route::get('/site-admin-db',function () {return view('speaker.thank')
    ;});

Route::post('/thanks',[BuyController::class,'buy'
    ]);
