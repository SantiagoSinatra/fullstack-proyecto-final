<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index(){
        $products = \App\Product::all();
        return view('productos', ['products' => $products]);
    }

    public function create(){
        return view('productoscrear');
    }

    public function save(Request $request){
        $rules = [
            'name_prod'=>'required',
            'price'=>'required|numeric',
            'category_id'=>'required|numeric'
        ];

        $messages = [
            'required'=>'Este campo es requerido',
            'numeric'=>'Ingrese solamente numeros'
        ];

        $this->validate($request,$rules,$messages);
        $product = new Product($request->all());
        $product->save();
        return redirect('/productos');

    }
}
