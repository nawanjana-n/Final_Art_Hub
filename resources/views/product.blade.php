@extends('home.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Product Page')
@section('bodypart')

    <head>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" />
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700" />
        <link rel="stylesheet" type="text/css"
            href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" />

        <!--=== Bootstrap CSS ===-->
        <link href="../assets2/css/vendor/bootstrap.min.css" rel="stylesheet">
        <!--=== Font-Awesome CSS ===-->
        <link href="../assets2/css/vendor/font-awesome.css" rel="stylesheet">
        <!--=== Plugins CSS ===-->
        <link href="../assets2/css/plugins.css" rel="stylesheet">
        <!--=== Main Style CSS ===-->
        <link href="../assets2/css/style.css" rel="stylesheet">

        <!-- Modernizer JS -->
        <script src="../assets2/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <!--== Page Content Wrapper Start ==-->
    <div id="page-content-wrapper" class="p-9">
        <div class="ruby-container">
            <div class="row">
                <!-- Single Product Page Content Start -->
                <div class="col-lg-12">
                    <div class="single-product-page-content">
                        <div class="row">
                            <!-- Product Thumbnail Start -->
                            <div class="col-lg-5">
                                <div class="product-thumbnail-wrap">
                                    <div class="product-thumb-carousel owl-carousel">

                                        @php
                                            // Decode the JSON string to get an array of image paths
                                            $imagePaths = json_decode($product->photo);
                                        @endphp
                                        <div class="single-thumb-item">
                                            <a href="single-product.html"><img class="img-fluid"
                                                    src="{{ !empty($product->main_photo) ? url('upload/product_main_image/' . $product->main_photo) : url('upload/no_image.jpg') }}" alt="Product" /></a>
                                        </div>
                                        @if (!empty($imagePaths))
                                            @foreach ($imagePaths as $path)
                                                <div class="single-thumb-item">
                                                    <a href="single-product.html"><img class="img-fluid"
                                                            src="{{ asset($path) }}" alt="Product" /></a>
                                                </div>

                                            @endforeach
                                        @endif




                                    </div>
                                </div>
                            </div>
                            <!-- Product Thumbnail End -->

                            <!-- Product Details Start -->
                            <div class="col-lg-7 mt-5 mt-lg-0">
                                <div class="product-details">
                                    <h2><a>{{ $product->name }}</a></h2>

                                    <span class="price">${{ $product->price }}</span>
                                    <br>
                                    <div class="product-info-stock-sku">
                                        <span class="product-stock-status">In Stock</span>
                                        <input class="product-sku-status ml-5" type="hidden"
                                            value="{{ $product->seller_id }}">
                                    </div>

                                    <p class="products-desc">{{ $product->description }}</p>

                                    <div class="product-quantity mt-5 d-flex align-items-center">
                                        <div class="quantity-field">
                                            <label for="qty">Qty</label>
                                            <input type="number" id="qty" min="1" max="100"
                                                value="1" />
                                        </div>

                                        <a href="single-product.html" class="btn btn-add-to-cart">Add to Cart</a>
                                    </div>

                                </div>
                            </div>
                            <!-- Product Details End -->
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Product Full Description Start -->
                                <div class="product-full-info-reviews">
                                    <!-- Single Product tab Menu -->
                                    <nav class="nav" id="nav-tab">
                                        <a class="active" id="description-tab" data-toggle="tab"
                                            href="#description">Description</a>
                                    </nav>
                                    <!-- Single Product tab Menu -->

                                    <!-- Single Product tab Content -->
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="description">
                                            <p>{{ $product->description }}</p>


                                        </div>


                                    </div>
                                    <!-- Single Product tab Content -->
                                </div>
                                <!-- Product Full Description End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Product Page Content End -->
            </div>
        </div>
    </div>
    <!--== Page Content Wrapper End ==-->

    <!-- Scroll to Top Start -->
    <a href="#" class="scrolltotop"><i class="fa fa-angle-up"></i></a>
    <!-- Scroll to Top End -->


    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="{{ asset('../assets2/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="{{ asset('../assets2/js/vendor/jquery-migrate-1.4.1.min.js') }}"></script>
    <!--=== Popper Min Js ===-->
    <script src="{{ asset('../assets2/js/vendor/popper.min.js') }}"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="{{ asset('../assets2/js/vendor/bootstrap.min.js') }}"></script>
    <!--=== Plugins Min Js ===-->
    <script src="{{ asset('../assets2/js/plugins.js') }}"></script>

    <!--=== Active Js ===-->
    <script src="{{ asset('../assets2/js/active.js') }}"></script>
@endsection
