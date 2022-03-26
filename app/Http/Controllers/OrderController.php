<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = \Auth::user()->orders;
        return view('orders.index', compact('orders'));
    }

    public function indexAll()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $basket = \Auth::user()->basket;
        if ($basket === null) {
            abort(404);
        }

        $products = $basket->products;
        if (count($products) > 0) {
            $order = Order::create([
                'user_id' => \Auth::user()->id
            ]);
            foreach ($products as $product) {
                $order->products()->attach($product, ['quantity' => $product->pivot->quantity]);
            }
            $basket->products()->detach();
        } else {
            abort(404);
        }
        return redirect()->route('orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }
}
