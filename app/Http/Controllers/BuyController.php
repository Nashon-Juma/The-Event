<?php

namespace App\Http\Controllers;
use App\Models\buy;

use Illuminate\Http\Request;


class BuyController extends Controller
{
    public function customer()
    {
        $buyer= new buy();

        $buyer->name =request('your_name');
        $buyer->email =request('your_email');
        $buyer->ticket =request('ticket_type');

        $buyer->save();

        $p=$buyer->name;
        return view('buy.thank')->with('p',$p);
    }
    public function buyers(){

        $buyers= buy::all();
        return view('buy.show')->with('buyers',$buyers);
    }
}
