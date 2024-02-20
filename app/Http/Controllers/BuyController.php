<?php

namespace App\Http\Controllers;

use App\buyer;
use app\Models\Customer;

use Illuminate\Http\Request;


class BuyController extends Controller
{
    public function buy()
    {
        $buyer= new Buyer();
        $buyer->name =request('your_name');
        $buyer->email =request('your_email');
        $buyer->ticket =request('ticket_type');

        $buyer->save();

        return view('buy.thank');

    }
}
