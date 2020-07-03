<?php


namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\Session;

class CardController extends Controller
{
    public function addToCard($id) {
        $product = Product::find($id);

        $existProducts = Session::get('card', []);

        if(!array_key_exists($product->id, $existProducts)) {
            $existProducts[$product->id] = $product;
        }

        Session::put('card', $existProducts);

        return response()->redirectTo('/card');
    }

    public function index() {
        $existProducts = Session::get('card', []);

        return view('cards')
            ->with('products', $existProducts);
    }
}
