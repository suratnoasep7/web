<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Merchant;
use Illuminate\Http\Request;

class ProductController extends Controller
{    

    public function index()
    {
        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data Post'
        ], 200);

    }

    /**
     * show
     *
     * @param  mixed $id
     * @return void
     */
    public function show($id)
    {
        
        $product = Product::with('user','merchant')->where('id', $id)->get();

        if(count($product) > 0) {

            return response()->json([
                'success' => true,
                'message' => 'Detail Product',
                'data'    => $product 
            ], 200);

        } 

        return response()->json([
            'success' => false,
            'message' => 'Data Not Found',
        ], 400);

    }
    
}
