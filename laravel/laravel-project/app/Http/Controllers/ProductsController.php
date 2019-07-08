<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = \App\Product::all();

        return view('productos', ['products' => $products]);
    }
}
