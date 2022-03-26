@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-3">Your cart</h2>
        @if (count($products) > 0)
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Full Cost</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->pivot->quantity }}</td>
                        <td>{{ $product->pivot->quantity * $product->price }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{ route('orders.create') }}" class="btn btn-outline-primary">Checkout</a>
        @else
            <p>Your cart is empty</p>
        @endif
    </div>
@endsection
