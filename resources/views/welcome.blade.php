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
                            <a href="#" class="btn-long-arrow">Shop Now</a>
                        </div>
                    </div>
                    <!-- Banner Single Carousel End -->

                    <!-- Banner Single Carousel Start -->
                    <div class="single-carousel-wrap slide-item-2">
                        <div class="banner-caption text-center text-lg-left">
                            <h4>New Collection 2024</h4>
                            <h2>Art Trade Hub</h2>
                            <p>Connecting Art Sellers & Buyers Online.</p>
                            <a href="#" class="btn-long-arrow">Shop Now</a>
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
                    <a href="about.html"><img src="assets2/img/about-img.png" alt="About Us" class="img-fluid"/></a>
                </div>
                <!-- About Image Area End -->
            </div>

            <div class="col-lg-6 m-auto">
                <!-- About Text Area Start -->
                <div class="about-content-wrap ml-0 ml-lg-5 mt-5 mt-lg-0">
                    <h2>About Us</h2>
                    <h3>WE ARE VISIONARY</h3>
                    <div class="about-text">
                        <p>To revolutionize the art trade industry by creating a vibrant and inclusive online platform that
                            connects artists and art lovers worldwide, fostering creativity, appreciation, and community.We aim to
            democratize art by breaking down barriers and providing artists with visibility and financial support, while
                              fostering a thriving online community of creativity, collaboration, and cultural exchange.</p>

                        <a href="about.html" class="btn btn-long-arrow">Learn More</a>


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
                    <h2>New Collection Products</h2>
                    <p>Best Arts on sale.</p>
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
                                    <div class="single-product-item text-center">
                                    <figure class="product-thumb">
                                        <a href="single-product.html"><img src="assets2/img/product-1.jpg"
                                                                           alt="Products" class="img-fluid3"></a>
                                    </figure>


                                        <div class="product-details">
                                            <h2><a href="single-product.html">A Pinch of Red Flowers</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$52.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge">New</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/product-2.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">A Kitten Drawn by Water colours</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$152.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/product-3.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">A Pinch of Shoe Flowers</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="price">$43.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/product-4.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">A Bird Drawn by Water Colours</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                            <span class="price">$83.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="new-products" role="tabpanel" aria-labelledby="new-products-tab">
                            <div class="products-wrapper">
                                <div class="products-carousel owl-carousel">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/new-product-1.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">A Pinch of Red Flowers</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$52.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge">New</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/new-product-1.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">A Pinch of Red Flowers123</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$152.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge">New</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/new-product-2.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">A Kitten Drawn by Water colours</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$152.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge">New</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/new-product-3.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">A Pinch of Shoe Flowers</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="price">$43.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge">New</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/new-product-4.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">A Pinch of Red Flowers</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                            <span class="price">$83.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="onsale" role="tabpanel" aria-labelledby="onsale-tab">
                            <div class="products-wrapper">
                                <div class="products-carousel owl-carousel">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/sale-product-1.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
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
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/sale-product-2.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">a Bird Drawn by Water Colours</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$152.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/product-3.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">MH01-Black</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="price">$43.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/new-product-4.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">Chaz Kangeroo Hoodie</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                            <span class="price">$83.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="drawing" role="tabpanel" aria-labelledby="drawing-tab">
                            <div class="products-wrapper">
                                <div class="products-carousel owl-carousel">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/sale-product-1.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">Crownwxs Summit Backpack</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$52.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/sale-product-2.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">a Bird Drawn by Water Colours</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$152.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/product-3.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">MH01-Black</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="price">$43.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/new-product-4.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">Chaz Kangeroo Hoodie</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                            <span class="price">$83.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="print" role="tabpanel" aria-labelledby="print-tab">
                            <div class="products-wrapper">
                                <div class="products-carousel owl-carousel">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/sale-product-1.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">Crown Summitfefe Backpack</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$52.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/sale-product-2.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">a Bird Drawn by Water Colours</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$152.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/product-3.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">MH01-Black</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="price">$43.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/new-product-4.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">Chaz Kangeroo Hoodie</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                            <span class="price">$83.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="digital" role="tabpanel" aria-labelledby="digital-tab">
                            <div class="products-wrapper">
                                <div class="products-carousel owl-carousel">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/sale-product-1.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">digital Summit Backpack</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$52.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/sale-product-2.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">a Bird Drawn by Water Colours</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$152.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/product-3.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">MH01-Black</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="price">$43.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets2/img/new-product-4.jpg"
                                                                               alt="Products" class="img-fluid3"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">Chaz Kangeroo Hoodie</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                            <span class="price">$83.00</span>
                                            <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
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
            <div class="col-lg-6">
                <div class="large-size-cate">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-cat-item">
                                <figure class="category-thumb">
                                    <a href="#"><img src="assets2/img/paint-main.jpg" alt="Paint Category"
                                                     class="img-fluid"/></a>

                                    <figcaption class="category-name">
                                        <a href="#">Paintings</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="single-cat-item">
                                <figure class="category-thumb">
                                    <a href="#"><img src="assets2/img/scul.png" alt="Scul Category" class="img-fluid5"/></a>

                                    <figcaption class="category-name">
                                        <a href="#">Sculptures</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="small-size-cate">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-cat-item">
                                <figure class="category-thumb">
                                    <a href="#"><img src="assets2/img/photo.jpg" alt="Photo Category"
                                                     class="img-fluid"/></a>

                                    <figcaption class="category-name">
                                        <a href="#">PHOTOGRAPHY</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="single-cat-item">
                                <figure class="category-thumb">
                                    <a href="#"><img src="assets2/img/draw1.png" alt="Drawings Category"
                                                     class="img-fluid"/></a>

                                    <figcaption class="category-name">
                                        <a href="#">DRAWINGS</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="single-cat-item">
                                <figure class="category-thumb">
                                    <a href="#"><img src="assets2/img/print-make.jpg" alt="PrintMaking Category"
                                                     class="img-fluid"/></a>

                                    <figcaption class="category-name">

                                        <a href="#">PRINT MAKINGS</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="single-cat-item">
                                <figure class="category-thumb">
                                    <a href="#"><img src="assets2/img/dig-arts.jpg" alt="Digital Category"
                                                     class="img-fluid"/></a>

                                    <figcaption class="category-name">

                                        <a href="#">DIGTAL ARTS</a>
                                    </figcaption>
                                </figure>
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
                        <div class="single-product-item text-center">
                            <figure class="product-thumb">
                                <a href="single-product.html"><img src="assets2/img/new-product-1.jpg" alt="Products"
                                                                   class="img-fluid4"></a>
                            </figure>

                            <div class="product-details">
                                <h2><a href="single-product.html">Print Making of Flowers </a></h2>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span class="price">$52.00</span>
                                <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                <span class="product-bedge">New</span>
                            </div>

                            <div class="product-meta">
                                <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                </button>
                                <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                   title="Add to Wishlist"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                        class="fa fa-tags"></i></a>
                            </div>
                        </div>
                        <!-- Single Product Item -->

                        <!-- Single Product Item -->
                        <div class="single-product-item text-center">
                            <figure class="product-thumb">
                                <a href="single-product.html"><img src="assets2/img/new-product-2.jpg" alt="Products"
                                                                   class="img-fluid4"></a>
                            </figure>

                            <div class="product-details">
                                <h2><a href="single-product.html">sculpture of a young woman</a></h2>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span class="price">$152.00</span>
                                <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                <span class="product-bedge">New</span>
                            </div>

                            <div class="product-meta">
                                <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                </button>
                                <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                   title="Add to Wishlist"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                        class="fa fa-tags"></i></a>
                            </div>
                        </div>
                        <!-- Single Product Item -->

                        <!-- Single Product Item -->
                        <div class="single-product-item text-center">
                            <figure class="product-thumb">
                                <a href="single-product.html"><img src="assets2/img/new-product-3.jpg" alt="Products"
                                                                   class="img-fluid4"></a>
                            </figure>

                            <div class="product-details">
                                <h2><a href="single-product.html">a painting of two girls</a></h2>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="price">$43.00</span>
                                <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                <span class="product-bedge">New</span>
                            </div>

                            <div class="product-meta">
                                <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                </button>
                                <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                   title="Add to Wishlist"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                        class="fa fa-tags"></i></a>
                            </div>
                        </div>
                        <!-- Single Product Item -->

                        <!-- Single Product Item -->
                        <div class="single-product-item text-center">
                            <figure class="product-thumb">
                                <a href="single-product.html"><img src="assets2/img/new-product-4.jpg" alt="Products"
                                                                   class="img-fluid4"></a>
                            </figure>

                            <div class="product-details">
                                <h2><a href="single-product.html">A digital art of a kitten</a></h2>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </div>
                                <span class="price">$83.00</span>
                                <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                <span class="product-bedge sale">Sale</span>
                            </div>

                            <div class="product-meta">
                                <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                </button>
                                <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                   title="Add to Wishlist"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                        class="fa fa-tags"></i></a>
                            </div>
                        </div>
                        <!-- Single Product Item -->

                        <!-- Single Product Item -->
                        <div class="single-product-item text-center">
                            <figure class="product-thumb">
                                <a href="single-product.html"><img src="assets2/img/new-product-4.jpg" alt="Products"
                                                                   class="img-fluid4"></a>
                            </figure>

                            <div class="product-details">
                                <h2><a href="single-product.html">Chaz Kangeroo Hoodie</a></h2>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </div>
                                <span class="price">$83.00</span>
                                <a href="single-product.html" class="btn btn-add-to-cart">+ Add to Cart</a>
                                <span class="product-bedge sale">Sale</span>
                            </div>

                            <div class="product-meta">
                                <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                </button>
                                <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                   title="Add to Wishlist"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                        class="fa fa-tags"></i></a>
                            </div>
                        </div>
                        <!-- Single Product Item -->
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
                        <p>Testimonials</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="testimonial-content-wrap">
                        <div id="testimonialCarousel" class="owl-carousel">
                            <div class="single-testimonial-item">
                                <p>These guys have been absolutely outstanding. When I needed them they came through in
                                    a big way! I know that if you buy this theme, you'll get the one thing we all look
                                    for when we buy on Themeforest, and that's real support for the craziest of
                                    requests!</p>


                            </div>



                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Testimonial Area End ==-->

<!--== Blog Area Start ==-->
<section id="blog-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2>From Our Sale</h2>
                    <p>Share your latest arts here.</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="blog-content-wrap">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Sale  Item 1 Start -->
                    <div class="single-blog-wrap">
                        <figure class="blog-thumb">
                            <a href="single-blog.html"><img src="assets2/img/sale-1.jpg" alt="blog"
                                                            class="img-fluid"/></a>
                            <figcaption class="blog-icon">
                                <a href="single-blog.html"><i class="fa fa-file-image-o"></i></a>
                            </figcaption>
                        </figure>

                        <div class="blog-details">
                            <h3><a href="single-blog.html">digital art of a girl</a></h3>
                            <span class="post-date">20/January/2024</span>
                            <p>The girl is portrayed with delicate features and flowing hair, surrounded by swirling patterns and glowing lights that create a dreamlike atmosphere. .</p>
                            <a href="single-blog.html" class="btn-long-arrow">Read More</a>
                        </div>
                    </div>
                    <!-- Sale Item 1 End -->
                </div>

                <div class="col-lg-6 col-md-6">
                    <!-- Sale  Item  2 Start -->
                    <div class="single-blog-wrap">
                        <figure class="blog-thumb">
                            <a href="single-blog.html"><img src="assets2/img/sale-2.jpg" alt="blog"
                                                            class="img-fluid"/></a>
                            <figcaption class="blog-icon">
                                <a href="single-blog.html"><i class="fa fa-file-image-o"></i></a>
                            </figcaption>
                        </figure>

                        <div class="blog-details">
                            <h3><a href="single-blog.html">pencil art of a young woman</a></h3>
                            <span class="post-date">20/January/2024</span>
                            <p>The pencil art portrays a young woman with striking realism and emotion. Through the skilled use of shading and delicate lines, the artist captures the intricate details of the woman's features, from the curve of her lips to the intensity of her gaze.</p>
                            <a href="single-blog.html" class="btn-long-arrow">Read More</a>
                        </div>
                    </div>
                    <!-- Sale Item 2 End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Single Blog Item Start -->
                    <div class="single-blog-wrap">
                        <figure class="blog-thumb">
                            <a href="single-blog.html"><img src="assets2/img/sale-3.jpg" alt="blog"
                                                            class="img-fluid"/></a>
                            <figcaption class="blog-icon">
                                <a href="single-blog.html"><i class="fa fa-file-image-o"></i></a>
                            </figcaption>
                        </figure>

                        <div class="blog-details">
                            <h3><a href="single-blog.html">a drawing of a sunset</a></h3>
                            <span class="post-date">20/January/2024</span>
                            <p>The drawing depicts a serene sunset scene with captivating beauty and tranquility. The artist skillfully captures the warm hues of the setting sun as it dips below the horizon, casting a golden glow across the sky..</p>
                            <a href="single-blog.html" class="btn-long-arrow">Read More</a>
                        </div>
                    </div>
                    <!-- Single Blog Item End -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Blog Area End ==-->

@endsection
