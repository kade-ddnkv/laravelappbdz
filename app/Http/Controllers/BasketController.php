<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BasketController extends Controller
{
    public function index(Request $request) {
        if (\Auth::user()->basket === null) {
            $products = [];
        } else {
            $products = \Auth::user()->basket->products;
        }
        return view('basket.index', compact('products'));
    }

    public function checkout() {
        return view('basket.checkout');
    }

    public function add(Request $request, $id) {
        $quantity = $request->quantity;

        $currUser = \Auth::user();
        if ($currUser->basket === null) {
            $basket = Basket::create([
                'user_id' => $currUser->id
            ]);
        } else {
            $basket = $currUser->basket;
            $basket->touch();
        }

        if ($basket->products->contains($id)) {
            $pivotRow = $basket->products()->where('product_id', $id)->first()->pivot;
            $quantity = $pivotRow->quantity + $quantity;
            $pivotRow->update(['quantity' => $quantity]);
        } else {
            $basket->products()->attach($id, ['quantity' => $quantity]);
        }
        return back();
    }
}
