<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return response()->json([
            'message'=>' Get all Data successfully',
            'data'=> $products,
        ]);
    }

    public function store(Request $request)
    {
        $product=Product::create($request->all());
        return response()->json([
            'message'=>'Data added successfully',
        
            'data'=> $product,
        ]);
    }


    public function show(Product $product)
    {
        return response()->json([
            'message'=>' Get selected product Data  successfully',
            'data'=> $product,
        ]);
    }

   
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return response()->json([
            'message'=>'Data updated successfully',
            'data'=> $product,
        ]);
    }

    
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json([
            'message'=>'Data deleted successfully',
            'data'=> $product,
        ]);
    }
}
