<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::paginate(6);
        return view('home', compact('products'));
    }

    public function categories(int $id)
    {
        $category = Category::find($id);
        $products = Product::query()->where('category_id', '=', $category->id)->paginate(6);
        return view('category', compact(['category', 'products']));
    }

    public function product(int $id)
    {
        $product = Product::query()->with('category')->find($id);
        return view('product', compact(['product']));
    }

}
