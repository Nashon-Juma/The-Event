<?php

namespace App\Http\Controllers;
use app\Models\speaker;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    public function show(){
        return view('speaker.show');
    }
    public function create($create){
        $create='create';
        return view('speaker/'.$create);
    }

    public function singleSpeaker($id){
        return view('speaker/'.$id);
    }
}
