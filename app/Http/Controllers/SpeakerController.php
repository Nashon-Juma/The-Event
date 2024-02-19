<?php

namespace App\Http\Controllers;
use app\Models\speaker;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    public function show($id){
        $id='show';
        return view('speaker/'.$id);
    }
    public function create($create){
        $create='create';
        return view('speaker/'.$create);
    }

    public function speakers($id){
        return view('speaker/'.$id);
    }
}
