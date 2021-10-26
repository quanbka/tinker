<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use View;

class IndexController extends Controller
{
    public function home () {
        $products = Product::take(24)->orderBy('id', 'desc')->get();
        $homeCategories = Category::where('type', 'category')->where('depth', 0)->get();
        View::share('homeCategories', $homeCategories);
        return view('home');
    }
}
