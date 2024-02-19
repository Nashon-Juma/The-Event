<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    public function guest($id){
        return view('speaker.id',['id'=>$id]);
    }
}
