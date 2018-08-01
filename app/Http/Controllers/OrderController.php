<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{


    public function addOrder(Request $request)
    {
        return $request->all();

    }

    public function setDiscount()
    {
        //

    }


}
