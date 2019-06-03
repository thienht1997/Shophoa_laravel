<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class Homecontroller extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        $amount_products=count( $products);
        $amount_categories=count( $categories);
        return view('index', compact('amount_products', 'amount_categories'));
    }
}
