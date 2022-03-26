@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('products.store') }}">
            @csrf
            @method('post')
            <div class="mb-3">
                <label class="form-label">
                    Name
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Description
                    <input type="text" class="form-control @error('description') is-invalid @enderror" name="description">

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Price
                    <input type="number" min="1" max="1000000" class="form-control @error('price') is-invalid @enderror" name="price">

                    @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Image source
                    <input type="url" class="form-control @error('image_src') is-invalid @enderror" name="image_src">

                    @error('image_src')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Category
                    <select class="form-select @error('category_id') is-invalid @enderror" name="category_id" aria-label="Default select example">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                    @error('category_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </label>
            </div>
            <button type="submit" class="btn btn-dark mt-3">Create</button>
        </form>
    </div>
@endsection
