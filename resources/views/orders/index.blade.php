@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-3">
            @role('administrator')
            All Orders
            @endrole
            @role('customer')
            Your Orders
            @endrole
        </h2>
        @if($orders->count() > 0)
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Products</th>
                    <th>Created At</th>
                    <th>Full Cost</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders->sortByDesc('created_at') as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->products->pluck('name')->join(', ') }}</td>
                        <td>{{ $order->created_at }}</td>
                        <td>{{ $order->products->reduce(function ($carry, $item) {
    return $carry + $item->price * $item->pivot->quantity;
}) }}</td>
                        <td><a href="{{ route('orders.show', $order) }}" class="btn btn-outline-primary">Details</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>You have no orders yet. Make one!</p>
        @endif
    </div>
@endsection
