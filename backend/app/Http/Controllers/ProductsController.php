<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getProduct(){
        try {
            $products =  Product::all();
            return response()->json($products,200);
        }catch(\Exception $e) {
            return response()->json(500);
        }
    }

     public function createProduct(Request $request){
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255',
                'description' => 'required',
                'price' => 'required'
            ]);

            $prod = Product::create($validatedData);

            return response()->json([
                'success' => true,
                'data' => $prod,
                'message' => 'Product created successfully'
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create new product: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function deleteProduct ($id){
        $product = Product::findOrFail($id);
        if($product){
            $product->delete();
        }else{
            return response()->json("error");
        }
         return response()->json("deleted successfully"); 
    }
}
