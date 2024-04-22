<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * @lrd:start
     * This will read all the entries ('name', 'description', 'quantity', 'price') that are present in the database
     * @lrd:end
     */
    public function showAll()
    {
        //$products = Product::all();

        //  dd($products);

        $products = Product::select('id', 'name', 'description', 'quantity', 'price')->get();
        return response()->json($products);  
    }

    /**
     * @lrd:start
     * This will show the product creation page to the user where user will enter the product details
     * @lrd:end
     *  @LRDparam name required string
     * // either space or pipe
     * @LRDparam description string|nullable
     * // either space or pipe
     * @LRDparam quantity required integer
     * // either space or pipe
     * @LRDparam price required decimal|max:2dp
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * @lrd:start
     * This will save the product details entered by the user in the 'create page'
     * @lrd:end
     *  @LRDparam name required string
     * // either space or pipe
     * @LRDparam description string|nullable
     * // either space or pipe
     * @LRDparam quantity required integer
     * // either space or pipe
     * @LRDparam price required decimal|max:2dp
     */
    public function storeData(Request $request)
    {
        //dd($request);
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'quantity' => 'required|numeric',
            'price' => 'required|decimal:0,2', // decimal range needs to be from 0 (whole number) to 2

        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));
    }

    /**
     * @lrd:start
     * This will show the update product details ('name', 'description', 'quantity', 'price') screen to the user
     * @lrd:end
     *  @LRDparam name required string
     * // either space or pipe
     * @LRDparam description string|nullable
     * // either space or pipe
     * @LRDparam quantity required integer
     * // either space or pipe
     * @LRDparam price required decimal|max:2dp
     */
    public function edit(Product $product)
    {
        // dd($product);
       
        return response()->json($product); 
    }

    /**
     * @lrd:start
     * This will update the product details entered by the user on the 'edit product details' screen in the database
     * @lrd:end
     *  @LRDparam name required string
     * // either space or pipe
     * @LRDparam description string|nullable
     * // either space or pipe
     * @LRDparam quantity required integer
     * // either space or pipe
     * @LRDparam price required decimal|max:2dp
     */
    public function update(Product $product, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'quantity' => 'required|numeric',
            'price' => 'required|decimal:0,2',

        ]);

        return $product->update($data);
    
       
    }

    /**
     * @lrd:start
     * This will delete that particular product from the database
     * @lrd:end
     */
    public function destroy(Product $product)
    {
        return $product->delete();
    }
}
