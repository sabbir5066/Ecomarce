<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Product;
class FrontendController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function welcome(){
        $products =Product::all();
        return view('welcome',compact('products'));
    }



   


}
