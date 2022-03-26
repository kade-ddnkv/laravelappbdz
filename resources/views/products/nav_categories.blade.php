@if ($rootCategory->childCategories()->count() == 0)
    <a class="nav-category nav-link mb-2" href="#"
       data-category-id="{{ $rootCategory->id }}">{{ $rootCategory->name }}</a>
@else
    <div class="sidebar-menu-item mb-2 active" data-bs-toggle="collapse"
         data-bs-target="#subcategories_{{ $rootCategory->id }}"
         aria-expanded="true" aria-controls="subcategories_0">
        <a class="nav-category nav-link active" href="#">
            <span>{{ $rootCategory->name }}</span>
            <span class="sidebar-badge float-end fs-6">v</span>
        </a>
    </div>
    <div class="subcategory collapse" id="subcategories_{{ $rootCategory->id }}">
        <div class="nav nav-pills flex-column ms-3">
            @foreach($rootCategory->childCategories as $category)
                @include('products.nav_categories', ['rootCategory' => $category])
            @endforeach
        </div>
    </div>
@endif
