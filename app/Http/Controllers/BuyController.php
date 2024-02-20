<?php

namespace App\Http\Controllers;

use App\Customer;
use app\Models\buy;

use Illuminate\Http\Request;


class BuyController extends Controller
{
    public function buy()
    {
        $buyer= new Customer();
        $buyer->name =request('your_name');
        $buyer->email =request('your_email');
        $buyer->ticket =request('ticket_type');

        return view('buy.thank');

    }
}
