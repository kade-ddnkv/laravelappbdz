@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-3">
            <h2>Order #{{ $order->id }}</h2>
        </div>
        <div class="mb-2">
            <p>Full Cost: {{ $order->products->sum('price') }}</p>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->pivot->quantity }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
