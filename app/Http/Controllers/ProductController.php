<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function showAll()
    {
        return view('products.index');
    }

    public function create()
    {
        return view('products.create');
    }

    public function storeData(Request $request)
    {
        //dd($request);
        $data = $request-> validate([
            'name'=> 'required',
            'description'=> 'nullable',
            'quantity'=> 'required|numeric',
            'price'=> 'required|decimal:0,2',

        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));

        
    }
}
