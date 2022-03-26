<header class="product-grid-header"></header>
<div class="product-grid-content row">
    @foreach($products as $product)
        <div class="col-xl-4 col-6">
            <div class="product">
                <div class="product-image">
                    <img class="img-fluid"
                         src="{{ $product->image_src }}"
                         alt="product">
                    <div class="product-hover-overlay">
                        <a class="product-hover-overlay-link" href="{{ route('products.show', $product) }}"></a>
                        <div class="product-hover-overlay-buttons">
                            <div class="d-flex flex-column align-items-center justify-content-center">
                                    <a class="my-2 btn btn-outline-dark btn-buy" href="{{ route('products.show', $product) }}">
                                        <span class="btn-buy-label mx-auto fs-5">View</span>
                                    </a>
                                @role('administrator')
                                    <a class="my-2 btn btn-outline-primary fs-5"
                                       href="{{ route('products.edit', $product) }}">Edit</a>
                                @endrole
                                @role('customer')
                                {{--                    <a class="btn btn-outline-primary" href="{{ route('products.show', $product) }}">Show</a>--}}
                                <form method="post" class="form-add-to-cart" action="{{ route('basket.add', ['id' => $product->id]) }}">
                                    @csrf
                                    @method('post')
                                    <label>
                                        <input class="form-control" type="number" min="1" max="100" value="1" name="quantity">
                                    </label>
                                    <button type="submit" class="btn btn-add-to-cart btn-outline-success fs-6">Add To Cart</button>
                                </form>
                                @endrole
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-2">
                    <p class="h-6 fw-bold mb-0 text-uppercase">{{ $product->name }}</p>
                    <p>${{ $product->price }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="d-flex justify-content-center mt-5">
    {{ $products->links() }}
</div>

<script>
    $(document).ready(function () {
        $('.form-add-to-cart').click(function (e) {
            e.preventDefault();
            quantity = $(this).find('[name="quantity"]').val();
            $.post($(this).prop('action'), {
                'quantity': quantity
            });
        });
    });
</script>
