@extends('home.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Art Trade Hub - Connecting Art Sellers and Buyers Online')
@section('bodypart')

    <!--== Banner // Slider Area Start ==-->
    <section id="banner-area">
        <div class="ruby-container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="banner-carousel" class="owl-carousel">
                        <!-- Banner Single Carousel Start -->
                        <div class="single-carousel-wrap slide-item-1">
                            <div class="banner-caption text-center text-lg-left">
                                <h4>Welcome To</h4>
                                <h2>Art Trade Hub </h2>
                                <p>Connecting Art Sellers & Buyers Online</p>
                                <a href="{{ route('shop') }}" class="btn-long-arrow">Shop Now</a>
                            </div>
                        </div>
                        <!-- Banner Single Carousel End -->

                        <!-- Banner Single Carousel Start -->
                        <div class="single-carousel-wrap slide-item-2">
                            <div class="banner-caption text-center text-lg-left">
                                <h4>New Collection 2024</h4>
                                <h2>Art Trade Hub</h2>
                                <p>Connecting Art Sellers & Buyers Online.</p>
                                <a href="{{ route('shop') }}" class="btn-long-arrow">Shop Now</a>
                            </div>
                        </div>
                        <!-- Banner Single Carousel End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Banner Slider End ==-->

    <!--== About Us Area Start ==-->
    <section id="aboutUs-area" class="pt-9">
        <div class="ruby-container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- About Image Area Start -->
                    <div class="about-image-wrap">
                        <a href="#"><img src="assets2/img/about-img.png" alt="About Us" class="img-fluid" /></a>
                    </div>
                    <!-- About Image Area End -->
                </div>

                <div class="col-lg-6 m-auto">
                    <!-- About Text Area Start -->
                    <div class="about-content-wrap ml-0 ml-lg-5 mt-5 mt-lg-0">
                        <a href="{{ route('about') }}" class="btn-long-arrow">About Us</a>
                        <h3>WE ARE VISIONARY</h3>
                        <div class="about-text">
                            <p>To revolutionize the art trade industry by creating a vibrant and inclusive online platform
                                that
                                connects artists and art lovers worldwide, fostering creativity, appreciation, and
                                community.We aim to
                                democratize art by breaking down barriers and providing artists with visibility and
                                financial support, while
                                fostering a thriving online community of creativity, collaboration, and cultural exchange.
                            </p>




                            <h4 class="vertical-text">WHO WE ARE?</h4>
                        </div>
                    </div>
                    <!-- About Text Area End -->
                </div>
            </div>
        </div>
    </section>
    <!--== About Us Area End ==-->


    <!--== New Collection Area Start ==-->
    <section id="new-collection-area" class="p-9">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2>All Collection</h2>
                        <p>All Category on Arts.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="new-collection-tabs">

                        <!-- Tab Menu Area Start -->
                        <ul class="nav tab-menu-wrap" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="feature-products-tab" data-toggle="tab" href="#feature-products"
                                    role="tab" aria-controls="feature-products-tab" aria-selected="true">Paintings</a>
                            </li>
                            <li class="nav-item">
                                <a id="new-products-tab" data-toggle="tab" href="#new-products" role="tab"
                                    aria-controls="new-products" aria-selected="false">Sculptures</a>
                            </li>
                            <li class="nav-item">
                                <a id="onsale-tab" data-toggle="tab" href="#onsale" role="tab" aria-controls="onsale"
                                    aria-selected="false">Photography</a>
                            </li>

                            <li class="nav-item">
                                <a id="drawing-tab" data-toggle="tab" href="#drawing" role="tab" aria-controls="drawing"
                                    aria-selected="false">Drawings</a>
                            </li>
                            <li class="nav-item">
                                <a id="print-tab" data-toggle="tab" href="#print" role="tab" aria-controls="print"
                                    aria-selected="false">Print makings</a>
                            </li>
                            <li class="nav-item">
                                <a id="digital-tab" data-toggle="tab" href="#digital" role="tab" aria-controls="digital"
                                    aria-selected="false">Digtal Arts</a>
                            </li>
                        </ul>
                        <!-- Tab Menu Area End -->

                        <!-- Tab Content Area Start -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="feature-products" role="tabpanel"
                                aria-labelledby="feature-products-tab">
                                <div class="products-wrapper">
                                    <div class="products-carousel owl-carousel">
                                        <!-- Single Product Item -->
                                        @foreach ($products as $product)
                                            @if ($product->category_id == 6)
                                                <div class="col-md-12 single-product-item text-center">
                                                    <figure class="product-thumb">
                                                        <a href="{{ route('product', ['id' => $product->id]) }}"><img
                                                                src="{{ !empty($product->main_photo) ? url('upload/product_main_image/' . $product->main_photo) : url('upload/no_image.jpg') }}"
                                                                alt="Products" class="img-fluid3"></a>
                                                    </figure>


                                                    <div class="product-details">
                                                        <h2><a
                                                                href="{{ route('product', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                        </h2>

                                                        <span class="price">$ {{ $product->price }}</span>
                                                        <a href="{{ route('product', ['id' => $product->id]) }}"
                                                            class="btn btn-add-to-cart">View</a>
                                                        <span class="product-bedge">New</span>
                                                    </div>


                                                </div>
                                            @endif
                                        @endforeach
                                        <!-- Single Product Item -->


                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="new-products" role="tabpanel"
                                aria-labelledby="new-products-tab">
                                <div class="products-wrapper">
                                    <div class="products-carousel owl-carousel">
                                        @foreach ($products as $product)
                                            @if ($product->category_id == 5)
                                                <div class="col-md-12 single-product-item text-center">
                                                    <figure class="product-thumb">
                                                        <a href="{{ route('product', ['id' => $product->id]) }}"><img
                                                                src="{{ !empty($product->main_photo) ? url('upload/product_main_image/' . $product->main_photo) : url('upload/no_image.jpg') }}"
                                                                alt="Products" class="img-fluid3"></a>
                                                    </figure>


                                                    <div class="product-details">
                                                        <h2><a
                                                                href="{{ route('product', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                        </h2>

                                                        <span class="price">$ {{ $product->price }}</span>
                                                        <a href="{{ route('product', ['id' => $product->id]) }}"
                                                            class="btn btn-add-to-cart">View</a>
                                                        <span class="product-bedge">New</span>
                                                    </div>


                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="onsale" role="tabpanel" aria-labelledby="onsale-tab">
                                <div class="products-wrapper">
                                    <div class="products-carousel owl-carousel">
                                        <!-- Single Product Item -->
                                        @foreach ($products as $product)
                                            @if ($product->category_id == 4)
                                                <div class="col-md-12 single-product-item text-center">
                                                    <figure class="product-thumb">
                                                        <a href="{{ route('product', ['id' => $product->id]) }}"><img
                                                                src="{{ !empty($product->main_photo) ? url('upload/product_main_image/' . $product->main_photo) : url('upload/no_image.jpg') }}"
                                                                alt="Products" class="img-fluid3"></a>
                                                    </figure>


                                                    <div class="product-details">
                                                        <h2><a
                                                                href="{{ route('product', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                        </h2>

                                                        <span class="price">$ {{ $product->price }}</span>
                                                        <a href="{{ route('product', ['id' => $product->id]) }}"
                                                            class="btn btn-add-to-cart">View</a>
                                                        <span class="product-bedge">New</span>
                                                    </div>


                                                </div>
                                            @endif
                                        @endforeach
                                        <!-- Single Product Item -->


                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="drawing" role="tabpanel" aria-labelledby="drawing-tab">
                                <div class="products-wrapper">
                                    <div class="products-carousel owl-carousel">
                                        <!-- Single Product Item -->
                                        @foreach ($products as $product)
                                            @if ($product->category_id == 2)
                                                <div class="col-md-12 single-product-item text-center">
                                                    <figure class="product-thumb">
                                                        <a href="{{ route('product', ['id' => $product->id]) }}"><img
                                                                src="{{ !empty($product->main_photo) ? url('upload/product_main_image/' . $product->main_photo) : url('upload/no_image.jpg') }}"
                                                                alt="Products" class="img-fluid3"></a>
                                                    </figure>


                                                    <div class="product-details">
                                                        <h2><a
                                                                href="{{ route('product', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                        </h2>

                                                        <span class="price">$ {{ $product->price }}</span>
                                                        <a href="{{ route('product', ['id' => $product->id]) }}"
                                                            class="btn btn-add-to-cart">View</a>
                                                        <span class="product-bedge">New</span>
                                                    </div>


                                                </div>
                                            @endif
                                        @endforeach
                                        <!-- Single Product Item -->
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="print" role="tabpanel" aria-labelledby="print-tab">
                                <div class="products-wrapper">
                                    <div class="products-carousel owl-carousel">
                                        <!-- Single Product Item -->
                                        @foreach ($products as $product)
                                            @if ($product->category_id == 1)
                                                <div class="col-md-12 single-product-item text-center">
                                                    <figure class="product-thumb">
                                                        <a href="{{ route('product', ['id' => $product->id]) }}"><img
                                                                src="{{ !empty($product->main_photo) ? url('upload/product_main_image/' . $product->main_photo) : url('upload/no_image.jpg') }}"
                                                                alt="Products" class="img-fluid3"></a>
                                                    </figure>


                                                    <div class="product-details">
                                                        <h2><a
                                                                href="{{ route('product', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                        </h2>

                                                        <span class="price">$ {{ $product->price }}</span>
                                                        <a href="{{ route('product', ['id' => $product->id]) }}"
                                                            class="btn btn-add-to-cart">View</a>
                                                        <span class="product-bedge">New</span>
                                                    </div>


                                                </div>
                                            @endif
                                        @endforeach
                                        <!-- Single Product Item -->
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="digital" role="tabpanel" aria-labelledby="digital-tab">
                                <div class="products-wrapper">
                                    <div class="products-carousel owl-carousel">
                                        <!-- Single Product Item -->
                                        @foreach ($products as $product)
                                            @if ($product->category_id == 3)
                                                <div class="col-md-12 single-product-item text-center">
                                                    <figure class="product-thumb">
                                                        <a href="{{ route('product', ['id' => $product->id]) }}"><img
                                                                src="{{ !empty($product->main_photo) ? url('upload/product_main_image/' . $product->main_photo) : url('upload/no_image.jpg') }}"
                                                                alt="Products" class="img-fluid3"></a>
                                                    </figure>


                                                    <div class="product-details">
                                                        <h2><a
                                                                href="{{ route('product', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                        </h2>

                                                        <span class="price">$ {{ $product->price }}</span>
                                                        <a href="{{ route('product', ['id' => $product->id]) }}"
                                                            class="btn btn-add-to-cart">View</a>
                                                        <span class="product-bedge">New</span>
                                                    </div>


                                                </div>
                                            @endif
                                        @endforeach
                                        <!-- Single Product Item -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content Area End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== New Collection Area End ==-->

    <!--== Products by Category Area Start ==-->
    <div id="product-categories-area">
        <div class="ruby-container">
            <div class="row">


                <div class="col-lg-12">
                    <div class="small-size-cate">
                        <div class="row">
                            <div class="products-wrapper">
                                <div class="new-products-carousel owl-carousel">
                                    @foreach ($categories as $category)
                                        <div class="">
                                            <div class="single-cat-item">
                                                <figure class="category-thumb">
                                                    <a href="">
                                                        <img src="{{ !empty($category->photo) ? url('upload/category_images/' . $category->photo) : url('upload/no_image.png') }}"
                                                            alt="{{ $category->category_name }}"
                                                            class="img-fluidd" /></a>

                                                    <figcaption class="category-name">
                                                        <a href="#">{{ $category->category_name }}</a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!--== Products by Category Area End ==-->

    <!--== New Products Area Start ==-->
    <section id="new-products-area" class="p-9">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2>New Arts</h2>
                        <p>Trending stunning Unique</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="products-wrapper">
                        <div class="new-products-carousel owl-carousel">
                            <!-- Single Product Item -->
                            @foreach ($products as $product)
                                <div class="col-md-12 single-product-item text-center">
                                    <figure class="product-thumb">
                                        <a href="{{ route('product', ['id' => $product->id]) }}"><img
                                                src="{{ !empty($product->main_photo) ? url('upload/product_main_image/' . $product->main_photo) : url('upload/no_image.jpg') }}"
                                                alt="Products" class="img-fluid4"></a>
                                    </figure>

                                    <div class="product-details">
                                        <h2><a href="{{ route('product', ['id' => $product->id]) }}"
                                                style="font-weight: bold; font-size: 1.5rem;">{{ $product->name }}</a>
                                        </h2>

                                        <span class="price">$ {{ $product->price }}</span>
                                        <a href="{{ route('product', ['id' => $product->id]) }}"
                                            class="btn btn-add-to-cart">View</a>
                                        <span class="product-bedge">New</span>
                                    </div>


                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== New Products Area End ==-->

    <!--== Testimonial Area Start ==-->
    <section id="testimonial-area">
        <div class="ruby-container">
            <div class="testimonial-wrapper">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2>What People Say</h2>
                            <p>About Our Arts</p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <div class="testimonial-content-wrap">
                            <div id="testimonialCarousel" class="owl-carousel">
                                <div class="single-testimonial-item">
                                    <p>These arts have been absolutely outstanding.</p>


                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection
