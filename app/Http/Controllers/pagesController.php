<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    function createOrder(){
        return view('order.create');
    }
    function foods(){
        return view('product.index');
    }
}
