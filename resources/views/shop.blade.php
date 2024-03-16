@extends('home.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Shop Page')
@section('bodypart')

    <body>

        <!--== Page Title Area Start ==-->
        <div id="page-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="page-title-content">
                            <h1>Shop</h1>
                            <ul class="breadcrumb">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="" class="active">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== Page Title Area End ==-->

        <!--== Page Content Wrapper Start ==-->
        <div id="page-content-wrapper" class="">
            <div class="ruby-container">
                <div class="row">
                    <!-- Shop Page Content Start -->
                    <div class="col-lg-12">
                        <div class="shop-page-content-wrap">
                            <div class="shop-page-products-wrap">
                                <div class="products-wrapper">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-6">
                                            <!-- Single Product Item -->
                                            <div class="single-product-item text-center">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets2/img/new-product-1.jpg"
                                                            alt="Products" class="img-fluid"></a>
                                                </figure>

                                                <div class="product-details">
                                                    <h2><a href="single-product.html">Crown Summit Backpack</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <span class="price">$52.00</span>
                                                    <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                        outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                        Thick material blocks out the wind as ribbed cuffs and bottom band
                                                        seal
                                                        in body heat.</p>
                                                    <a href="single-product.html" class="btn btn-add-to-cart">+ Add to
                                                        Cart</a>
                                                    <a href="single-product.html" class="btn btn-add-to-cart btn-whislist">+
                                                        Wishlist</a>
                                                    <a href="single-product.html" class="btn btn-add-to-cart btn-compare">+
                                                        Compare</a>
                                                </div>

                                                <div class="product-meta">
                                                    <button type="button" data-toggle="modal" data-target="#quickView">
                                                        <span data-toggle="tooltip" data-placement="left"
                                                            title="Quick View"><i class="fa fa-compress"></i></span>
                                                    </button>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                        title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                        title="Compare"><i class="fa fa-tags"></i></a>
                                                </div>
                                                <span class="product-bedge">New</span>
                                            </div>
                                            <!-- Single Product Item -->
                                        </div>

                                        <div class="col-lg-4 col-sm-6">
                                            <!-- Single Product Item -->
                                            <div class="single-product-item text-center">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets2/img/new-product-2.jpg"
                                                            alt="Products" class="img-fluid"></a>
                                                </figure>

                                                <div class="product-details">
                                                    <h2><a href="single-product.html">Crown Summit Backpack</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <span class="price">$52.00</span>
                                                    <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                        outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                        Thick material blocks out the wind as ribbed cuffs and bottom band
                                                        seal
                                                        in body heat.</p>
                                                    <a href="single-product.html" class="btn btn-add-to-cart">+ Add to
                                                        Cart</a>
                                                    <a href="single-product.html" class="btn btn-add-to-cart btn-whislist">+
                                                        Wishlist</a>
                                                    <a href="single-product.html"
                                                        class="btn btn-add-to-cart btn-compare">+
                                                        Compare</a>
                                                </div>

                                                <div class="product-meta">
                                                    <button type="button" data-toggle="modal" data-target="#quickView">
                                                        <span data-toggle="tooltip" data-placement="left"
                                                            title="Quick View"><i class="fa fa-compress"></i></span>
                                                    </button>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                        title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                        title="Compare"><i class="fa fa-tags"></i></a>
                                                </div>
                                                <span class="product-bedge sale">Sale</span>
                                            </div>
                                            <!-- Single Product Item -->
                                        </div>

                                        <div class="col-lg-4 col-sm-6">
                                            <!-- Single Product Item -->
                                            <div class="single-product-item text-center">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets2/img/new-product-3.jpg"
                                                            alt="Products" class="img-fluid"></a>
                                                </figure>

                                                <div class="product-details">
                                                    <h2><a href="single-product.html">Crown Summit Backpack</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <span class="price">$52.00</span>
                                                    <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                        outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                        Thick material blocks out the wind as ribbed cuffs and bottom band
                                                        seal
                                                        in body heat.</p>
                                                    <a href="single-product.html" class="btn btn-add-to-cart">+ Add to
                                                        Cart</a>
                                                    <a href="single-product.html"
                                                        class="btn btn-add-to-cart btn-whislist">+
                                                        Wishlist</a>
                                                    <a href="single-product.html"
                                                        class="btn btn-add-to-cart btn-compare">+
                                                        Compare</a>
                                                </div>

                                                <div class="product-meta">
                                                    <button type="button" data-toggle="modal" data-target="#quickView">
                                                        <span data-toggle="tooltip" data-placement="left"
                                                            title="Quick View"><i class="fa fa-compress"></i></span>
                                                    </button>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                        title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                        title="Compare"><i class="fa fa-tags"></i></a>
                                                </div>
                                                <span class="product-bedge">New</span>
                                            </div>
                                            <!-- Single Product Item -->
                                        </div>

                                        <div class="col-lg-4 col-sm-6">
                                            <!-- Single Product Item -->
                                            <div class="single-product-item text-center">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets2/img/new-product-4.jpg"
                                                            alt="Products" class="img-fluid"></a>
                                                </figure>

                                                <div class="product-details">
                                                    <h2><a href="single-product.html">Crown Summit Backpack</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <span class="price">$52.00</span>
                                                    <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                        outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                        Thick material blocks out the wind as ribbed cuffs and bottom band
                                                        seal
                                                        in body heat.</p>
                                                    <a href="single-product.html" class="btn btn-add-to-cart">+ Add to
                                                        Cart</a>
                                                    <a href="single-product.html"
                                                        class="btn btn-add-to-cart btn-whislist">+
                                                        Wishlist</a>
                                                    <a href="single-product.html"
                                                        class="btn btn-add-to-cart btn-compare">+
                                                        Compare</a>
                                                </div>

                                                <div class="product-meta">
                                                    <button type="button" data-toggle="modal" data-target="#quickView">
                                                        <span data-toggle="tooltip" data-placement="left"
                                                            title="Quick View"><i class="fa fa-compress"></i></span>
                                                    </button>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                        title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                        title="Compare"><i class="fa fa-tags"></i></a>
                                                </div>
                                                <span class="product-bedge">New</span>
                                            </div>
                                            <!-- Single Product Item -->
                                        </div>

                                        <div class="col-lg-4 col-sm-6">
                                            <!-- Single Product Item -->
                                            <div class="single-product-item text-center">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets2/img/product-4.jpg"
                                                            alt="Products" class="img-fluid"></a>
                                                </figure>

                                                <div class="product-details">
                                                    <h2><a href="single-product.html">Crown Summit Backpack</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <span class="price">$52.00</span>
                                                    <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                        outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                        Thick material blocks out the wind as ribbed cuffs and bottom band
                                                        seal
                                                        in body heat.</p>
                                                    <a href="single-product.html" class="btn btn-add-to-cart">+ Add to
                                                        Cart</a>
                                                    <a href="single-product.html"
                                                        class="btn btn-add-to-cart btn-whislist">+
                                                        Wishlist</a>
                                                    <a href="single-product.html"
                                                        class="btn btn-add-to-cart btn-compare">+
                                                        Compare</a>
                                                </div>

                                                <div class="product-meta">
                                                    <button type="button" data-toggle="modal" data-target="#quickView">
                                                        <span data-toggle="tooltip" data-placement="left"
                                                            title="Quick View"><i class="fa fa-compress"></i></span>
                                                    </button>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                        title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                        title="Compare"><i class="fa fa-tags"></i></a>
                                                </div>
                                                <span class="product-bedge sale">Sale</span>
                                            </div>
                                            <!-- Single Product Item -->
                                        </div>

                                        <div class="col-lg-4 col-sm-6">
                                            <!-- Single Product Item -->
                                            <div class="single-product-item text-center">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets2/img/product-3.jpg"
                                                            alt="Products" class="img-fluid"></a>
                                                </figure>

                                                <div class="product-details">
                                                    <h2><a href="single-product.html">Crown Summit Backpack</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <span class="price">$52.00</span>
                                                    <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                        outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                        Thick material blocks out the wind as ribbed cuffs and bottom band
                                                        seal
                                                        in body heat.</p>
                                                    <a href="single-product.html" class="btn btn-add-to-cart">+ Add to
                                                        Cart</a>
                                                    <a href="single-product.html"
                                                        class="btn btn-add-to-cart btn-whislist">+
                                                        Wishlist</a>
                                                    <a href="single-product.html"
                                                        class="btn btn-add-to-cart btn-compare">+
                                                        Compare</a>
                                                </div>

                                                <div class="product-meta">
                                                    <button type="button" data-toggle="modal" data-target="#quickView">
                                                        <span data-toggle="tooltip" data-placement="left"
                                                            title="Quick View"><i class="fa fa-compress"></i></span>
                                                    </button>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                        title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                        title="Compare"><i class="fa fa-tags"></i></a>
                                                </div>
                                                <span class="product-bedge sale">Sale</span>
                                            </div>
                                            <!-- Single Product Item -->
                                        </div>

                                        <div class="col-lg-4 col-sm-6">
                                            <!-- Single Product Item -->
                                            <div class="single-product-item text-center">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets2/img/new-product-1.jpg"
                                                            alt="Products" class="img-fluid"></a>
                                                </figure>

                                                <div class="product-details">
                                                    <h2><a href="single-product.html">Crown Summit Backpack</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <span class="price">$52.00</span>
                                                    <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                        outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                        Thick material blocks out the wind as ribbed cuffs and bottom band
                                                        seal
                                                        in body heat.</p>
                                                    <a href="single-product.html" class="btn btn-add-to-cart">+ Add to
                                                        Cart</a>
                                                    <a href="single-product.html"
                                                        class="btn btn-add-to-cart btn-whislist">+
                                                        Wishlist</a>
                                                    <a href="single-product.html"
                                                        class="btn btn-add-to-cart btn-compare">+
                                                        Compare</a>
                                                </div>

                                                <div class="product-meta">
                                                    <button type="button" data-toggle="modal" data-target="#quickView">
                                                        <span data-toggle="tooltip" data-placement="left"
                                                            title="Quick View"><i class="fa fa-compress"></i></span>
                                                    </button>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                        title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                        title="Compare"><i class="fa fa-tags"></i></a>
                                                </div>
                                                <span class="product-bedge">New</span>
                                            </div>
                                            <!-- Single Product Item -->
                                        </div>

                                        <div class="col-lg-4 col-sm-6">
                                            <!-- Single Product Item -->
                                            <div class="single-product-item text-center">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets2/img/new-product-2.jpg"
                                                            alt="Products" class="img-fluid"></a>
                                                </figure>

                                                <div class="product-details">
                                                    <h2><a href="single-product.html">Crown Summit Backpack</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <span class="price">$52.00</span>
                                                    <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                        outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                        Thick material blocks out the wind as ribbed cuffs and bottom band
                                                        seal
                                                        in body heat.</p>
                                                    <a href="single-product.html" class="btn btn-add-to-cart">+ Add to
                                                        Cart</a>
                                                    <a href="single-product.html"
                                                        class="btn btn-add-to-cart btn-whislist">+
                                                        Wishlist</a>
                                                    <a href="single-product.html"
                                                        class="btn btn-add-to-cart btn-compare">+
                                                        Compare</a>
                                                </div>

                                                <div class="product-meta">
                                                    <button type="button" data-toggle="modal" data-target="#quickView">
                                                        <span data-toggle="tooltip" data-placement="left"
                                                            title="Quick View"><i class="fa fa-compress"></i></span>
                                                    </button>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                        title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                        title="Compare"><i class="fa fa-tags"></i></a>
                                                </div>
                                                <span class="product-bedge sale">Sale</span>
                                            </div>
                                            <!-- Single Product Item -->
                                        </div>

                                        <div class="col-lg-4 col-sm-6">
                                            <!-- Single Product Item -->
                                            <div class="single-product-item text-center">
                                                <figure class="product-thumb">
                                                    <a href="single-product.html"><img src="assets2/img/new-product-3.jpg"
                                                            alt="Products" class="img-fluid"></a>
                                                </figure>

                                                <div class="product-details">
                                                    <h2><a href="single-product.html">Crown Summit Backpack</a></h2>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <span class="price">$52.00</span>
                                                    <p class="products-desc">Ideal for cold-weathered training worked lorem
                                                        outdoors, the Chaz Hoodie promises superior warmth with every wear.
                                                        Thick material blocks out the wind as ribbed cuffs and bottom band
                                                        seal
                                                        in body heat.</p>
                                                    <a href="single-product.html" class="btn btn-add-to-cart">+ Add to
                                                        Cart</a>
                                                    <a href="single-product.html"
                                                        class="btn btn-add-to-cart btn-whislist">+
                                                        Wishlist</a>
                                                    <a href="single-product.html"
                                                        class="btn btn-add-to-cart btn-compare">+
                                                        Compare</a>
                                                </div>

                                                <div class="product-meta">
                                                    <button type="button" data-toggle="modal" data-target="#quickView">
                                                        <span data-toggle="tooltip" data-placement="left"
                                                            title="Quick View"><i class="fa fa-compress"></i></span>
                                                    </button>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                        title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                        title="Compare"><i class="fa fa-tags"></i></a>
                                                </div>
                                                <span class="product-bedge">New</span>
                                            </div>
                                            <!-- Single Product Item -->
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- Shop Page Content End -->


                </div>
            </div>
        </div>
        <!--== Page Content Wrapper End ==-->


    </body>


@endsection
