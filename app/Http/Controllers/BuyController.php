<?php

namespace App\Http\Controllers;
use App\Models\buy;
// use App\buy;

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

        return view('buy.thank');

    }
}
