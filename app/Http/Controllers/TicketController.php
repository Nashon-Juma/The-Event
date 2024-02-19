<?php

namespace App\Http\Controllers;
use App\Models\buy;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){
        // $pizzas=order::all();
        // $pizzas=order::orderBy('name','desc')->get();
        // $pizzas=order::where('type','gino')->get();
        $buyers=buy::latest()->get();
        return view('buyers.order',[
            'buyers'=>$buyers
        ]);
    }
    public function show($id){
        return view('buyers.show',['id'=>$id]);
    }
    public function create(){
        return view('buyers.create');
    }
}
