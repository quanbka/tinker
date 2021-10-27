<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use View;

class IndexController extends Controller
{
    public function home () {
        $homeCategories = Category::where('type', 'category')
            ->where('depth', 0)
            ->with('children')
            ->get();


        View::share('homeCategories', $homeCategories);
        return view('home');
    }
}
