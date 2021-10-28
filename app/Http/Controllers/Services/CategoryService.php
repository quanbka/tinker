<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;


class CategoryService extends Controller
{
    public function latestProducts (Request $request) {
        $tempCategory = [];
        $tempCategory['title'] = "Sản phẩm mới nhất";
        $tempCategory['url'] = "#";
        $tempCategory['products'] = Product::take(24)
            // ->select('id','slug','title','price', 'image_url')
            ->get();
        return $tempCategory;
    }
}
