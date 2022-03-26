@if ($category->parent_id === null)
    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Dairy products</a></li>
    <li class="breadcrumb-item"><a href="#" data-category-id="{{ $category->id }}">{{ $category->name }}</a></li>
@else
    @include('categories.breadcrumbs', ['category' => $category->parentCategory])
    <li class="breadcrumb-item"><a href="#" data-category-id="{{ $category->id }}">{{ $category->name }}</a></li>
{{--    <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>--}}
@endif
