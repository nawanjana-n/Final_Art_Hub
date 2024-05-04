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
                                <li><a href="{{ url('/') }}">Home</a></li>
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

                                        @foreach ($products as $product)
                                            <div class="col-lg-3 col-sm-6">
                                                <!-- Single Product Item -->
                                                <div class="single-product-item text-center">
                                                    <figure class="product-thumb">
                                                        <a href="{{ route('product', ['id' => $product->id]) }}"><img
                                                                src="{{ !empty($product->main_photo) ? url('upload/product_main_image/' . $product->main_photo) : url('upload/no_image.jpg') }}"
                                                                alt="Products" class="img-fluidsale"></a>
                                                    </figure>

                                                    <div class="product-details">
                                                        <h2><a href="#">{{ $product->name }}</a></h2>

                                                        <span class="price">$ {{ $product->price }}</span>
                                                        <p class="products-desc">{{ $product->description }}</p>
                                                        <a href="#" class="btn btn-add-to-cart">+ Add to
                                                            Cart</a>

                                                    </div>


                                                    <span class="product-bedge sale">Sale</span>
                                                </div>
                                                <!-- Single Product Item -->
                                            </div>
                                        @endforeach

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
