@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
                <img class="img-fluid" src="{{ $product->image_src }}" alt="product_image">
            </div>
            <div class="col-8">
                <div class="container">
                    <h1 class="d-flex display-3 fw-bold text-uppercase">{{ $product->name }}</h1>
                    <span class="text-muted">(product name)</span>
                </div>
                <div class="container mt-5">
                    <label class="fw-bold">Description:</label>
                    <p>{{ $product->description }}</p>
                </div>
                <div class="container mt-3">
                    <label class="fw-bold">Category:</label>
                    <p>{{ $product->category->name }}</p>
                </div>
                <div class="container mt-3">
                    <label class="fw-bold">Price:</label>
                    <p>{{ $product->price }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
