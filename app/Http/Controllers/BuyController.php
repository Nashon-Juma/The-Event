<?php

namespace App\Http\Controllers;

use app\Customer;


class BuyController extends Controller
{
    public function buy()
    {
        $buyer= new customer();

        $buyer->name =request('your_name');
        $buyer->email =request('your_email');
        $buyer->ticket =request('ticket_type');

        $buyer->save();
        
        return view('buy.thank');
    }
}
