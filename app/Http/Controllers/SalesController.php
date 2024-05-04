<?php

namespace App\Http\Controllers;

use App\Models\SalesModel;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    //
    public function CartView()
    {


        return view('cart');
    }

}
