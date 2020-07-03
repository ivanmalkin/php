<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::limit(10)->get();

        return view('products')
            ->with('products', $products);
    }

    public function editAction(Request $request, $id) {
        $product = Product::find($id);

        $name = $request->input('name');
        $description = $request->input('description');
        $price = (float) $request->input('price');

        $product->name = $name;
        $product->description = $description;
        $product->price = $price;
        $product->save();

        return response()->redirectTo('/');
    }

    public function edit($id) {
        $product = Product::find($id);

        if($product) {
            return view('product_edit')
                ->with('product', $product);
        }

        return response()->redirectTo('/');
    }

    public function delete($id) {
        $product = Product::find($id);

        if($product) {
            $product->delete();
        }

        return response()->redirectTo('/');
    }

}
