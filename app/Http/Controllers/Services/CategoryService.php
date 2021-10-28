<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;


class CategoryService extends Controller
{
    public function latestProducts () {
        $tempCategory = [];
        $tempCategory['title'] = "Sản phẩm mới nhất";
        $tempCategory['url'] = "#";
        $tempCategory['products'] = Product::take(24)
            ->select('id','slug','title','price', 'image_url')
            ->get();
        return $tempCategory;
    }

    public function getRootCategories () {
        $categories = Category::where('parent_id', 0)
            ->where('type', 'category')
            ->with('children')
            ->get();
        foreach ($categories as $key => $category) {
            $category->products = $category->products()
                ->select('chi_product.id','slug','title','price', 'image_url')
                ->take(12)->get();
        }
        return $categories;
    }
}
