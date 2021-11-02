<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{

    public function cart () {
        return view('cart');
    }

    public function checkout () {
        return view('checkout');
    }

    public function success () {
        return view('success');
    }

    public function addToCart($productId, $productSkuId = false) {

    }


    public function order (Request $request) {
        
    }
}
