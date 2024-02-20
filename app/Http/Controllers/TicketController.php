<?php

namespace App\Http\Controllers;
use App\Models\buy;

use Illuminate\Http\Request;


class TicketController extends Controller
{
    public function show($id){
        return view('speaker.show',['id'=>$id]);
    }

    public function create(){
        return view('speaker.create');
    }

}
