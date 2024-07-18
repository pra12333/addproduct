<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;



class ProductController extends Controller
{
    public function create() {
        return view('products.create');
    }

    public function store(Request $request){
        $request->validate([

            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'color'=>'required|string|max:255',


        ]);
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'color' => $request->color,
        ]);
        return redirect()->route('products.index');
    }

    public function index() {
        $products =Product::all();
        return view('products.index',compact('products'));
    }
}
