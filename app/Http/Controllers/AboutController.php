<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('about', compact('products'));
    }
}
