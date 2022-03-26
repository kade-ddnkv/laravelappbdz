@extends('layouts.app')

@section('content')
    <div class="parallax-window py-3 py-lg-6" data-parallax="scroll" data-image-src="{{ asset('img/gradients/7.png') }}"
         data-speed="0.8">
        <div class="container">
            <div class="my-3">
                <ol class="breadcrumb justify-content-center" id="categories_breadcrumbs">
                    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Dairy products</a></li>
                </ol>
            </div>
            <div class="hero-content pb-4 text-center">
                <h1 class="display-3 fw-bold text-uppercase hero-heading mb-4">All dairy products</h1>
                <div class="justify-content-center">
                    <p class="lead text-muted">Sed dignissim et erat sed lacinia. Pellentesque non sem a quam eleifend
                        iaculis sed in libero.</p>
                </div>
            </div>
        </div>
    </div>
    <div style="min-height: 1000px;">
        <div class="container mt-5">
            <div class="row">
                <div class="products-grid col-xl-9 col-lg-8 order-lg-2"></div>
                <div class="sidebar col-xl-3 col-lg-4 order-lg-1">
                    @role('administrator')
                    <div class="mb-3">
                        <a class="nav-button nav-link mb-2" href="{{ route('products.create') }}">Create new product</a>
                    </div>
                    @endrole
                    @foreach ($rootCategories as $category)
                        @include('products.nav_categories', ['rootCategory' => $category])
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script>
        function pag(category_id) {
            $('.page-link').click(function (e) {
                e.preventDefault();
                var url = '{{ route('products.cards') }}' + '?page=' + $(this).text() + '&category_id=' + category_id;
                $('.products-grid').load(url, function () {
                    window.scrollTo(0, 0);
                    pag(category_id);
                });
            });
        }

        function makeStickyHeader() {
            var header = $('.header-absolute').first();
            var headerOffset = header.offset().top;
            var headerHeight = header.height();
            var main = $('main').first();
            $(window).scroll(function () {
                if (window.pageYOffset > headerOffset) {
                    header.addClass('sticky');
                    main.css('margin-top', headerHeight);
                } else {
                    header.removeClass('sticky');
                    main.css('margin-top', 0);
                }
            });
        }

        function changeCategoryPagination(category_id) {
            $('.products-grid').load('{{ route('products.cards') }}' + '?category_id=' + category_id, function () {
                pag(category_id);
            });
        }

        function categoryChanged(category_name, category_id) {
            $('.hero-heading').text(category_name);
            $('#categories_breadcrumbs').load('{{ route('categories.breadcrumbs') }}' + '?category_id=' + category_id,
                function () {
                    $('.breadcrumb-item > a[data-category-id]').click(function () {
                        categoryChanged($(this).text(), $(this).attr('data-category-id'));
                    });
                });
            changeCategoryPagination(category_id);
        }

        $(document).ready(function () {
            $('.products-grid').load('{{ route('products.cards') }}', function () {
                pag('no');
            });

            $('.subcategory').first().collapse();

            $('.navbar').removeClass('bg-transparent').addClass('bg-white');
            makeStickyHeader();

            // При изменении текущей директории.
            $('[data-category-id]').click(function () {
                categoryChanged($(this).text(), $(this).attr('data-category-id'));
            });
        });
    </script>
@endsection
