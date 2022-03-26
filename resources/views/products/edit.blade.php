@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <form method="POST" action="{{ route('products.store') }}">
                    @csrf
                    @method('post')
                    <div class="mb-3">
                        <label class="form-label">
                            Name
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                   value="{{ $product->name }}" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                            @enderror
                        </label>
                    </div>
                    <div class="mb-3">
                        {{--                    <label class="form-label">--}}
                        Description
                        <textarea type="text" class="form-control @error('description') is-invalid @enderror"
                                  name="description" rows="4">{{ $product->description }}</textarea>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                        {{--                    </label>--}}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Price
                            <input type="number" min="1" max="1000000"
                                   class="form-control @error('price') is-invalid @enderror"
                                   value="{{ $product->price }}" name="price">

                            @error('price')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                            @enderror
                        </label>
                    </div>
                    <div class="mb-3">
                        {{--                        <label class="form-label">--}}
                        Image source
                        <input type="url" class="form-control @error('image_src') is-invalid @enderror"
                               value="{{ $product->image_src }}" name="image_src">

                        @error('image_src')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                        {{--                        </label>--}}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Category
                            <select class="form-select @error('category_id') is-invalid @enderror" name="category_id">
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
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('option[value="{{ $product->category_id }}"]').prop('selected', true);
        });
    </script>
@endsection
