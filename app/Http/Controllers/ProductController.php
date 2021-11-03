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
        $products = $category->products()->defaultOrder()->paginate(32);
        View::share('products', $products);
        return view('category');
    }

    public function product ($slug, $id) {
        $product = Product::findOrFail($id);
        View::share('product', $product);
        return view('product');
    }
}
