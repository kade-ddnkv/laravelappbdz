@extends('layouts.app')

<style>
    /*.product-image:hover .product-hover-overlay {*/
    /*    opacity: 1;*/
    /*}*/

    /*.product-image:hover .btn {*/
    /*    transform: none !important;*/
    /*    opacity: 1 !important;*/
    /*}*/

    /*.product-hover-overlay .btn {*/
    /*    width: 40px;*/
    /*    height: 40px;*/
    /*    text-align: center;*/
    /*    line-height: 40px;*/
    /*    padding: 0;*/
    /*    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, transform .15s ease-in-out, opacity .15s ease-in-out;*/
    /*}*/

    /*.product-hover-overlay .btn.btn-buy {*/
    /*    width: auto;*/
    /*    padding-left: 2rem;*/
    /*    padding-right: 2rem;*/
    /*    margin-left: .5rem;*/
    /*    margin-right: .5rem;*/
    /*}*/

    /*.btn.btn-buy {*/
    /*    border-radius: 0;*/
    /*}*/

    /*.btn {*/
    /*    text-transform: uppercase;*/
    /*    letter-spacing: .3em;*/
    /*    line-height: 1.5;*/
    /*    padding: .7rem .75rem;*/
    /*    font-size: .6875rem;*/
    /*}*/

    /*.product-hover-overlay .btn.btn-product-left {*/
    /*    transform: translateX(-20px);*/
    /*    opacity: 0;*/
    /*    border-radius: 0;*/
    /*}*/

    /*.product-hover-overlay .btn.btn-product-right {*/
    /*    transform: translateX(20px);*/
    /*    opacity: 0;*/
    /*    border-radius: 0;*/
    /*}*/

    .product-image {
        position: relative;
    /*    border-bottom: 2px solid #495057;*/
    }

    /*.product-hover-overlay .product-hover-overlay-link {*/
    /*    position: absolute;*/
    /*    width: 100%;*/
    /*    height: 100%;*/
    /*    left: 0;*/
    /*    top: 0;*/
    /*}*/

    .product-hover-overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    /*    background: rgba(255,255,255,0.92);*/
    /*    opacity: 0;*/
    /*    transition: opacity 0.3s;*/
    }

    /*.product-hover-overlay .product-hover-overlay-buttons {*/
    /*    z-index: 3;*/
    /*}*/

    /*.product-image:hover {*/
    /*    border-bottom: 2px solid #3494E6;*/
    /*}*/

</style>

@section('content')

    <div class="container">
        <div class="row">
            <!-- Grid -->
            <div class="products-grid col-xl-9 col-lg-8 order-lg-2">
                <header class="product-grid-header">
                    <div class="me-3 mb-3">
                        Showing <strong>1-12 </strong>of <strong>158 </strong>products</div>
                    <div class="me-3 mb-3"><span class="me-2">Show</span><a class="product-grid-header-show active" href="#">12    </a><a class="product-grid-header-show " href="#">24    </a><a class="product-grid-header-show " href="#">All    </a>
                    </div>
                    <div class="mb-3 d-flex align-items-center"><span class="d-inline-block me-2">Sort by</span>
                        <select class="form-select w-auto border-0">
                            <option value="orderby_0">Default</option>
                            <option value="orderby_1">Popularity</option>
                            <option value="orderby_2">Rating</option>
                            <option value="orderby_3">Newest first</option>
                        </select>
                    </div>
                </header>
                <div class="row">
                    <!-- product-->
                    <div class="col-xl-4 col-6">
                        <div class="product">
                            <div class="product-image">
                                <div class="ribbon ribbon-info">Fresh</div><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/sell/2-0/img/product/serrah-galos-494312-unsplash.jpg" alt="product">
                                <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.html"></a>
                                    <div class="product-hover-overlay-buttons"><a class="btn btn-outline-dark btn-product-left d-none d-sm-inline-block" href="#"><i class="fa fa-shopping-cart"></i></a><a class="btn btn-dark btn-buy" href="detail.html"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a><a class="btn btn-outline-dark btn-product-right d-none d-sm-inline-block" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Jackets</p>
                                <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.html">White Tee</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-6">
                        <div class="product">
                            <div class="product-image"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/sell/2-0/img/product/kyle-loftus-590881-unsplash.jpg" alt="product">
                                <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.html"></a>
                                    <div class="product-hover-overlay-buttons"><a class="btn btn-outline-dark btn-product-left d-none d-sm-inline-block" href="#"><i class="fa fa-shopping-cart"></i></a><a class="btn btn-dark btn-buy" href="detail.html"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a><a class="btn btn-outline-dark btn-product-right d-none d-sm-inline-block" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Denim</p>
                                <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.html">Black blouse</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-6">
                        <div class="product">
                            <div class="product-image">
                                <div class="ribbon ribbon-primary">Sale</div><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/sell/2-0/img/product/kyle-loftus-596319-unsplash.jpg" alt="product">
                                <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.html"></a>
                                    <div class="product-hover-overlay-buttons"><a class="btn btn-outline-dark btn-product-left d-none d-sm-inline-block" href="#"><i class="fa fa-shopping-cart"></i></a><a class="btn btn-dark btn-buy" href="detail.html"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a><a class="btn btn-outline-dark btn-product-right d-none d-sm-inline-block" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Accessories</p>
                                <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.html">College jacket</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-6">
                        <div class="product">
                            <div class="product-image"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/sell/2-0/img/product/ethan-haddox-484912-unsplash.jpg" alt="product">
                                <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.html"></a>
                                    <div class="product-hover-overlay-buttons"><a class="btn btn-outline-dark btn-product-left d-none d-sm-inline-block" href="#"><i class="fa fa-shopping-cart"></i></a><a class="btn btn-dark btn-buy" href="detail.html"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a><a class="btn btn-outline-dark btn-product-right d-none d-sm-inline-block" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Denim</p>
                                <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.html">Carrot-fit jeans</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-6">
                        <div class="product">
                            <div class="product-image"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/sell/2-0/img/product/serrah-galos-494231-unsplash.jpg" alt="product">
                                <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.html"></a>
                                    <div class="product-hover-overlay-buttons"><a class="btn btn-outline-dark btn-product-left d-none d-sm-inline-block" href="#"><i class="fa fa-shopping-cart"></i></a><a class="btn btn-dark btn-buy" href="detail.html"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a><a class="btn btn-outline-dark btn-product-right d-none d-sm-inline-block" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Jackets</p>
                                <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.html">Striped T-Shirt</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-6">
                        <div class="product">
                            <div class="product-image"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/sell/2-0/img/product/averie-woodard-319832-unsplash.jpg" alt="product">
                                <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.html"></a>
                                    <div class="product-hover-overlay-buttons"><a class="btn btn-outline-dark btn-product-left d-none d-sm-inline-block" href="#"><i class="fa fa-shopping-cart"></i></a><a class="btn btn-dark btn-buy" href="detail.html"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a><a class="btn btn-outline-dark btn-product-right d-none d-sm-inline-block" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Shirts</p>
                                <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.html">Short top</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-6">
                        <div class="product">
                            <div class="product-image">
                                <div class="ribbon ribbon-danger">Sold out</div><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/sell/2-0/img/product/serrah-galos-494279-unsplash.jpg" alt="product">
                                <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.html"></a>
                                    <div class="product-hover-overlay-buttons"><a class="btn btn-outline-dark btn-product-left d-none d-sm-inline-block" href="#"><i class="fa fa-shopping-cart"></i></a><a class="btn btn-dark btn-buy" href="detail.html"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a><a class="btn btn-outline-dark btn-product-right d-none d-sm-inline-block" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Sweaters</p>
                                <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.html">Ethnic Sweater</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-6">
                        <div class="product">
                            <div class="product-image"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/sell/2-0/img/product/dmitriy-ilkevich-437760-unsplash.jpg" alt="product">
                                <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.html"></a>
                                    <div class="product-hover-overlay-buttons"><a class="btn btn-outline-dark btn-product-left d-none d-sm-inline-block" href="#"><i class="fa fa-shopping-cart"></i></a><a class="btn btn-dark btn-buy" href="detail.html"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a><a class="btn btn-outline-dark btn-product-right d-none d-sm-inline-block" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Coats</p>
                                <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.html">Beige</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-6">
                        <div class="product">
                            <div class="product-image"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/sell/2-0/img/product/ian-dooley-347968-unsplash.jpg" alt="product">
                                <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.html"></a>
                                    <div class="product-hover-overlay-buttons"><a class="btn btn-outline-dark btn-product-left d-none d-sm-inline-block" href="#"><i class="fa fa-shopping-cart"></i></a><a class="btn btn-dark btn-buy" href="detail.html"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a><a class="btn btn-outline-dark btn-product-right d-none d-sm-inline-block" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">T-Shirts</p>
                                <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.html">Skull Tee</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-6">
                        <div class="product">
                            <div class="product-image"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/sell/2-0/img/product/alex-holyoake-571682-unsplash.jpg" alt="product">
                                <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.html"></a>
                                    <div class="product-hover-overlay-buttons"><a class="btn btn-outline-dark btn-product-left d-none d-sm-inline-block" href="#"><i class="fa fa-shopping-cart"></i></a><a class="btn btn-dark btn-buy" href="detail.html"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a><a class="btn btn-outline-dark btn-product-right d-none d-sm-inline-block" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Denim</p>
                                <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.html">Trucker jacket</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-6">
                        <div class="product">
                            <div class="product-image"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/sell/2-0/img/product/ao-456813-unsplash.jpg" alt="product">
                                <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.html"></a>
                                    <div class="product-hover-overlay-buttons"><a class="btn btn-outline-dark btn-product-left d-none d-sm-inline-block" href="#"><i class="fa fa-shopping-cart"></i></a><a class="btn btn-dark btn-buy" href="detail.html"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a><a class="btn btn-outline-dark btn-product-right d-none d-sm-inline-block" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Denim</p>
                                <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.html">Blouse</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                    <!-- product-->
                    <div class="col-xl-4 col-6">
                        <div class="product">
                            <div class="product-image"><img class="img-fluid" src="https://d19m59y37dris4.cloudfront.net/sell/2-0/img/product/kyle-loftus-592041-unsplash.jpg" alt="product">
                                <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.html"></a>
                                    <div class="product-hover-overlay-buttons"><a class="btn btn-outline-dark btn-product-left d-none d-sm-inline-block" href="#"><i class="fa fa-shopping-cart"></i></a><a class="btn btn-dark btn-buy" href="detail.html"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a><a class="btn btn-outline-dark btn-product-right d-none d-sm-inline-block" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-expand-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">Denim</p>
                                <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.html">Shirt</a></h3><span class="text-muted">$40.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- /product-->
                </div>
                <!-- Pagination-->
                <nav class="d-flex justify-content-center mb-5 mt-3" aria-label="page navigation">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">Prev</span><span class="sr-only">Previous</span></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1       </a></li>
                        <li class="page-item"><a class="page-link" href="#">2       </a></li>
                        <li class="page-item"><a class="page-link" href="#">3       </a></li>
                        <li class="page-item"><a class="page-link" href="#">4       </a></li>
                        <li class="page-item"><a class="page-link" href="#">5 </a></li>
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">Next</span><span class="sr-only">Next     </span></a></li>
                    </ul>
                </nav>
            </div>
            <!-- / Grid End-->
            <!-- Sidebar-->
            <div class="sidebar col-xl-3 col-lg-4 order-lg-1">
                <div class="sidebar-block px-3 px-lg-0 me-lg-4"><a class="d-lg-none block-toggler" data-bs-toggle="collapse" href="#categoriesMenu" aria-expanded="false" aria-controls="categoriesMenu">Product Categories</a>
                    <div class="expand-lg collapse" id="categoriesMenu">
                        <div class="nav nav-pills flex-column mt-4 mt-lg-0" role="menu">
                            <div class="sidebar-menu-item mb-2 active" data-bs-toggle="collapse" data-bs-target="#subcategories_0" aria-expanded="true" aria-controls="subcategories_0" role="menuitem"><a class="nav-link active" href="#!"><span>Jackets</span><span class="sidebar-badge ms-2">123</span></a></div>
                            <div class="collapse show" id="subcategories_0">
                                <div class="nav nav-pills flex-column ms-3"><a class="nav-link mb-2" href="#!">Lorem ipsum</a><a class="nav-link mb-2" href="#!">Dolor</a><a class="nav-link mb-2" href="#!">Sit amet</a><a class="nav-link mb-2" href="#!">Donec vitae</a>
                                </div>
                            </div>
                            <div class="sidebar-menu-item mb-2" data-bs-toggle="collapse" data-bs-target="#subcategories_1" aria-expanded="false" aria-controls="subcategories_1" role="menuitem"><a class="nav-link " href="#!"><span>Jeans &amp; chinos</span><span class="sidebar-badge ms-2">55</span></a></div>
                            <div class="collapse" id="subcategories_1">
                                <div class="nav nav-pills flex-column ms-3"><a class="nav-link mb-2" href="#!">Lorem ipsum</a><a class="nav-link mb-2" href="#!">Dolor</a><a class="nav-link mb-2" href="#!">Sit amet</a><a class="nav-link mb-2" href="#!">Donec vitae</a>
                                </div>
                            </div>
                            <div class="sidebar-menu-item mb-2" data-bs-toggle="collapse" data-bs-target="#subcategories_2" aria-expanded="false" aria-controls="subcategories_2" role="menuitem"><a class="nav-link " href="#!"><span>Accessories</span><span class="sidebar-badge ms-2">80</span></a></div>
                            <div class="collapse" id="subcategories_2">
                                <div class="nav nav-pills flex-column ms-3"><a class="nav-link mb-2" href="#!">Sit amet</a><a class="nav-link mb-2" href="#!">Donec vitae</a><a class="nav-link mb-2" href="#!">Lorem ipsum</a><a class="nav-link mb-2" href="#!">Dolor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-block px-3 px-lg-0 me-lg-4"><a class="d-lg-none block-toggler" data-bs-toggle="collapse" href="#priceFilterMenu" aria-expanded="false" aria-controls="priceFilterMenu">Filter by price</a>
                    <div class="expand-lg collapse" id="priceFilterMenu">
                        <h6 class="sidebar-heading d-none d-lg-block">Price  </h6>
                        <div class="mt-4 mt-lg-0 noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" id="slider-snap"> <div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(16%, 0px) scale(0.28, 1);"></div></div><div class="noUi-origin" style="transform: translate(-840%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="110.0" aria-valuenow="40.0" aria-valuetext="40.00"><div class="noUi-touch-area"></div></div></div><div class="noUi-origin" style="transform: translate(-560%, 0px); z-index: 6;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="40.0" aria-valuemax="250.0" aria-valuenow="110.0" aria-valuetext="110.00"><div class="noUi-touch-area"></div></div></div></div></div>
                        <div class="nouislider-values">
                            <div class="min">From $<span id="slider-snap-value-lower">40.00</span></div>
                            <div class="max">To $<span id="slider-snap-value-upper">110.00</span></div>
                            <input class="slider-snap-input" type="hidden" name="pricefrom" id="slider-snap-input-lower" value="40">
                            <input class="slider-snap-input" type="hidden" name="priceto" id="slider-snap-input-upper" value="110">
                        </div>
                    </div>
                </div>
                <div class="sidebar-block px-3 px-lg-0 me-lg-4"><a class="d-lg-none block-toggler" data-bs-toggle="collapse" href="#brandFilterMenu" aria-expanded="true" aria-controls="brandFilterMenu">Filter by brand</a>
                    <!-- Brand filter menu - this menu has .show class, so is expanded by default-->
                    <div class="expand-lg collapse show" id="brandFilterMenu">
                        <h6 class="sidebar-heading d-none d-lg-block">Brands </h6>
                        <form class="mt-4 mt-lg-0" action="#">
                            <div class="mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" id="brand0" type="checkbox" name="clothes-brand" checked="">
                                    <label class="form-check-label" for="brand0">Calvin Klein <small>(18)</small></label>
                                </div>
                            </div>
                            <div class="mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" id="brand1" type="checkbox" name="clothes-brand" checked="">
                                    <label class="form-check-label" for="brand1">Levi Strauss <small>(30)</small></label>
                                </div>
                            </div>
                            <div class="mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" id="brand2" type="checkbox" name="clothes-brand">
                                    <label class="form-check-label" for="brand2">Hugo Boss <small>(120)</small></label>
                                </div>
                            </div>
                            <div class="mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" id="brand3" type="checkbox" name="clothes-brand">
                                    <label class="form-check-label" for="brand3">Tomi Hilfiger <small>(70)</small></label>
                                </div>
                            </div>
                            <div class="mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" id="brand4" type="checkbox" name="clothes-brand">
                                    <label class="form-check-label" for="brand4">Tom Ford  <small>(110)</small></label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="sidebar-block px-3 px-lg-0 me-lg-4"> <a class="d-lg-none block-toggler" data-bs-toggle="collapse" href="#sizeFilterMenu" aria-expanded="false" aria-controls="sizeFilterMenu">Filter by size</a>
                    <!-- Size filter menu-->
                    <div class="expand-lg collapse" id="sizeFilterMenu">
                        <h6 class="sidebar-heading d-none d-lg-block">Size </h6>
                        <form class="mt-4 mt-lg-0" action="#">
                            <div class="mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" id="size0" type="radio" name="size" checked="">
                                    <label class="form-check-label" for="size0">Small</label>
                                </div>
                            </div>
                            <div class="mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" id="size1" type="radio" name="size">
                                    <label class="form-check-label" for="size1">Medium</label>
                                </div>
                            </div>
                            <div class="mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" id="size2" type="radio" name="size">
                                    <label class="form-check-label" for="size2">Large</label>
                                </div>
                            </div>
                            <div class="mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" id="size3" type="radio" name="size">
                                    <label class="form-check-label" for="size3">X-Large</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="sidebar-block px-3 px-lg-0 me-lg-4"><a class="d-lg-none block-toggler" data-bs-toggle="collapse" href="#colourFilterMenu" aria-expanded="false" aria-controls="colourFilterMenu">Filter by colour</a>
                    <!-- Size filter menu-->
                    <div class="expand-lg collapse" id="colourFilterMenu">
                        <h6 class="sidebar-heading d-none d-lg-block">Colour </h6>
                        <div class="mt-4 mt-lg-0">
                            <ul class="list-inline mb-0 colours-wrapper">
                                <li class="list-inline-item">
                                    <label class="btn-colour" for="colour_sidebar_Blue" style="background-color: #668cb9" data-allow-multiple=""> </label>
                                    <input class="input-invisible" type="checkbox" name="colour" value="value_sidebar_Blue" id="colour_sidebar_Blue">
                                </li>
                                <li class="list-inline-item">
                                    <label class="btn-colour" for="colour_sidebar_White" style="background-color: #fff" data-allow-multiple=""> </label>
                                    <input class="input-invisible" type="checkbox" name="colour" value="value_sidebar_White" id="colour_sidebar_White">
                                </li>
                                <li class="list-inline-item">
                                    <label class="btn-colour" for="colour_sidebar_Violet" style="background-color: #8b6ea4" data-allow-multiple=""> </label>
                                    <input class="input-invisible" type="checkbox" name="colour" value="value_sidebar_Violet" id="colour_sidebar_Violet">
                                </li>
                                <li class="list-inline-item">
                                    <label class="btn-colour" for="colour_sidebar_Red" style="background-color: #dd6265" data-allow-multiple=""> </label>
                                    <input class="input-invisible" type="checkbox" name="colour" value="value_sidebar_Red" id="colour_sidebar_Red">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Sidebar end-->
        </div>
    </div>

    {{--    <section class="py-5">--}}
    {{--        <div class="container px-4 px-lg-5 mt-5">--}}
    {{--            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">--}}
    {{--                <div class="col mb-5">--}}
    {{--                    <div class="card h-100">--}}
    {{--                        <!-- Product image-->--}}
    {{--                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="...">--}}
    {{--                        <!-- Product details-->--}}
    {{--                        <div class="card-body p-4">--}}
    {{--                            <div class="text-center">--}}
    {{--                                <!-- Product name-->--}}
    {{--                                <h5 class="fw-bolder">Fancy Product</h5>--}}
    {{--                                <!-- Product price-->--}}
    {{--                                $40.00 - $80.00--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- Product actions-->--}}
    {{--                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
    {{--                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col mb-5">--}}
    {{--                    <div class="card h-100">--}}
    {{--                        <!-- Sale badge-->--}}
    {{--                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">--}}
    {{--                            Sale--}}
    {{--                        </div>--}}
    {{--                        <!-- Product image-->--}}
    {{--                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="...">--}}
    {{--                        <!-- Product details-->--}}
    {{--                        <div class="card-body p-4">--}}
    {{--                            <div class="text-center">--}}
    {{--                                <!-- Product name-->--}}
    {{--                                <h5 class="fw-bolder">Special Item</h5>--}}
    {{--                                <!-- Product reviews-->--}}
    {{--                                <div class="d-flex justify-content-center small text-warning mb-2">--}}
    {{--                                    <div class="bi-star-fill"></div>--}}
    {{--                                    <div class="bi-star-fill"></div>--}}
    {{--                                    <div class="bi-star-fill"></div>--}}
    {{--                                    <div class="bi-star-fill"></div>--}}
    {{--                                    <div class="bi-star-fill"></div>--}}
    {{--                                </div>--}}
    {{--                                <!-- Product price-->--}}
    {{--                                <span class="text-muted text-decoration-line-through">$20.00</span>--}}
    {{--                                $18.00--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- Product actions-->--}}
    {{--                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
    {{--                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col mb-5">--}}
    {{--                    <div class="card h-100">--}}
    {{--                        <!-- Sale badge-->--}}
    {{--                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">--}}
    {{--                            Sale--}}
    {{--                        </div>--}}
    {{--                        <!-- Product image-->--}}
    {{--                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="...">--}}
    {{--                        <!-- Product details-->--}}
    {{--                        <div class="card-body p-4">--}}
    {{--                            <div class="text-center">--}}
    {{--                                <!-- Product name-->--}}
    {{--                                <h5 class="fw-bolder">Sale Item</h5>--}}
    {{--                                <!-- Product price-->--}}
    {{--                                <span class="text-muted text-decoration-line-through">$50.00</span>--}}
    {{--                                $25.00--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- Product actions-->--}}
    {{--                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
    {{--                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col mb-5">--}}
    {{--                    <div class="card h-100">--}}
    {{--                        <!-- Product image-->--}}
    {{--                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="...">--}}
    {{--                        <!-- Product details-->--}}
    {{--                        <div class="card-body p-4">--}}
    {{--                            <div class="text-center">--}}
    {{--                                <!-- Product name-->--}}
    {{--                                <h5 class="fw-bolder">Popular Item</h5>--}}
    {{--                                <!-- Product reviews-->--}}
    {{--                                <div class="d-flex justify-content-center small text-warning mb-2">--}}
    {{--                                    <div class="bi-star-fill"></div>--}}
    {{--                                    <div class="bi-star-fill"></div>--}}
    {{--                                    <div class="bi-star-fill"></div>--}}
    {{--                                    <div class="bi-star-fill"></div>--}}
    {{--                                    <div class="bi-star-fill"></div>--}}
    {{--                                </div>--}}
    {{--                                <!-- Product price-->--}}
    {{--                                $40.00--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- Product actions-->--}}
    {{--                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
    {{--                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col mb-5">--}}
    {{--                    <div class="card h-100">--}}
    {{--                        <!-- Sale badge-->--}}
    {{--                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">--}}
    {{--                            Sale--}}
    {{--                        </div>--}}
    {{--                        <!-- Product image-->--}}
    {{--                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="...">--}}
    {{--                        <!-- Product details-->--}}
    {{--                        <div class="card-body p-4">--}}
    {{--                            <div class="text-center">--}}
    {{--                                <!-- Product name-->--}}
    {{--                                <h5 class="fw-bolder">Sale Item</h5>--}}
    {{--                                <!-- Product price-->--}}
    {{--                                <span class="text-muted text-decoration-line-through">$50.00</span>--}}
    {{--                                $25.00--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- Product actions-->--}}
    {{--                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
    {{--                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col mb-5">--}}
    {{--                    <div class="card h-100">--}}
    {{--                        <!-- Product image-->--}}
    {{--                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="...">--}}
    {{--                        <!-- Product details-->--}}
    {{--                        <div class="card-body p-4">--}}
    {{--                            <div class="text-center">--}}
    {{--                                <!-- Product name-->--}}
    {{--                                <h5 class="fw-bolder">Fancy Product</h5>--}}
    {{--                                <!-- Product price-->--}}
    {{--                                $120.00 - $280.00--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- Product actions-->--}}
    {{--                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
    {{--                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col mb-5">--}}
    {{--                    <div class="card h-100">--}}
    {{--                        <!-- Sale badge-->--}}
    {{--                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">--}}
    {{--                            Sale--}}
    {{--                        </div>--}}
    {{--                        <!-- Product image-->--}}
    {{--                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="...">--}}
    {{--                        <!-- Product details-->--}}
    {{--                        <div class="card-body p-4">--}}
    {{--                            <div class="text-center">--}}
    {{--                                <!-- Product name-->--}}
    {{--                                <h5 class="fw-bolder">Special Item</h5>--}}
    {{--                                <!-- Product reviews-->--}}
    {{--                                <div class="d-flex justify-content-center small text-warning mb-2">--}}
    {{--                                    <div class="bi-star-fill"></div>--}}
    {{--                                    <div class="bi-star-fill"></div>--}}
    {{--                                    <div class="bi-star-fill"></div>--}}
    {{--                                    <div class="bi-star-fill"></div>--}}
    {{--                                    <div class="bi-star-fill"></div>--}}
    {{--                                </div>--}}
    {{--                                <!-- Product price-->--}}
    {{--                                <span class="text-muted text-decoration-line-through">$20.00</span>--}}
    {{--                                $18.00--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- Product actions-->--}}
    {{--                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
    {{--                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col mb-5">--}}
    {{--                    <div class="card h-100">--}}
    {{--                        <!-- Product image-->--}}
    {{--                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="...">--}}
    {{--                        <!-- Product details-->--}}
    {{--                        <div class="card-body p-4">--}}
    {{--                            <div class="text-center">--}}
    {{--                                <!-- Product name-->--}}
    {{--                                <h5 class="fw-bolder">Popular Item</h5>--}}
    {{--                                <!-- Product reviews-->--}}
    {{--                                <div class="d-flex justify-content-center small text-warning mb-2">--}}
    {{--                                    <div class="bi-star-fill"></div>--}}
    {{--                                    <div class="bi-star-fill"></div>--}}
    {{--                                    <div class="bi-star-fill"></div>--}}
    {{--                                    <div class="bi-star-fill"></div>--}}
    {{--                                    <div class="bi-star-fill"></div>--}}
    {{--                                </div>--}}
    {{--                                <!-- Product price-->--}}
    {{--                                $40.00--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- Product actions-->--}}
    {{--                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
    {{--                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    {{--    <div class="container">--}}
    {{--        <div class="products-grid col-xl-9 col-lg-8 order-lg-2">--}}
    {{--            <div class="row">--}}
    {{--                @foreach ($products as $product)--}}
    {{--                    <div class="col-xl-4 col-6">--}}
    {{--                        <p class="text-muted text-sm mb-1">{{ $product->name }}</p>--}}
    {{--                        <img src="{{ $product->image_src }}">--}}
    {{--                    </div>--}}
    {{--                @endforeach--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="sidebar col-xl-3 col-lg-4 order-lg-1">--}}
    {{--            <p class="text-muted text-sm mb-1">SIDEBOX</p>--}}
    {{--        </div>--}}
    {{--    </div>--}}


    {{--    <div class="container">--}}
    {{--        <table class="table">--}}
    {{--            <thead>--}}
    {{--            <tr>--}}
    {{--                <th>#</th>--}}
    {{--                <th>Name</th>--}}
    {{--                <th>Price</th>--}}
    {{--                <th>Category</th>--}}
    {{--            </tr>--}}
    {{--            </thead>--}}
    {{--            <tbody>--}}
    {{--            @foreach($products as $product)--}}
    {{--                <tr>--}}
    {{--                    <td>{{ $product->id }}</td>--}}
    {{--                    <td>{{ $product->name }}</td>--}}
    {{--                    <td>{{ $product->price }}</td>--}}
    {{--                    <td>{{ $product->category->name }}</td>--}}
    {{--                </tr>--}}
    {{--            @endforeach--}}
    {{--            </tbody>--}}
    {{--        </table>--}}
    {{--        <div class="d-flex justify-content-center">--}}
    {{--            {{ $products->links() }}--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection
