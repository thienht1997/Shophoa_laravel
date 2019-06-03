<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5);
        $categories = Category::all();
        return view('shop.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function details($id)
    {
        $products = Product::paginate(5);
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('shop.details', compact('products','product', 'categories'));
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function cart($id)
    {
        $product = Product::findOrFail($id);

        return view('shop.cart', compact('product'));
    }

    
    public function showcategory()
    {
     $categories = Category::all();
     return view('particles.shop_header', compact( 'categories'));
    }
}
