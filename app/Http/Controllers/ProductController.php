<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use View;

class ProductController extends Controller
{
    public function category ($slug, $id) {
        $category = Category::findOrFail($id);
        View::share('category', $category);
        $products = $category->products()->paginate();
        View::share('products', $products);
        return view('category');
    }
}
