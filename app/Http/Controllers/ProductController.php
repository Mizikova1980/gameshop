<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
       $products = Product::all();
       return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }


    public function store(Request $request)
    {

        $name = $request->get('name');
        $description = $request->get('description');
        $price = $request->get('price');
        $category = $request->get('category');
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $path = $request->file('image')->store('public/img/cover');


        Product::create([
            'name' => $name,
            'description' =>$description,
            'price' => $price,
            'category_id' => $category,
            'image' => $imageName,
        ]

        );
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(Product $product, Request $request)
    {
        $name = $request->get('name');
        $description = $request->get('description');
        $price = $request->get('price');
        $category = $request->get('category');
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $path = $request->file('image')->store('public/img/cover');

        $product->update([
            'name' => $name,
            'description' =>$description,
            'price' => $price,
            'category_id' => $category,
            'image' => $imageName,
        ]);
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }



}
