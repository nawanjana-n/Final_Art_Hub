@extends('admin.admin_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'View Product')
@section('admin')

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Product Detail</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">
                                        <a href="{{ route('admin.all.products') }}">Back</a>
                                    </li>
                                    <li class="breadcrumb-item " aria-current="page">
                                        Product View
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product-detail-wrap mb-30">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="product-slider slider-arrow">



                                    @php
                                        // Decode the JSON string to get an array of image paths
                                        $imagePaths = json_decode($productsts->photo);
                                    @endphp

                                    @if (!empty($imagePaths))
                                        @foreach ($imagePaths as $path)
                                            <div class="product-slide">
                                                <img src="{{ asset($path) }}" alt="Product Image">
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                                <div class="product-slider-nav">

                                    @php
                                        // Decode the JSON string to get an array of image paths
                                        $imagePaths = json_decode($productsts->photo);
                                    @endphp

                                    @if (!empty($imagePaths))
                                        @foreach ($imagePaths as $path)
                                            <div class="product-slide-nav">
                                                <img src="{{ asset($path) }}" alt="Product Image">
                                            </div>
                                        @endforeach
                                    @endif


                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="product-detail-desc pd-20 card-box height-100-p">

                                    <h4 class="mb-20 pt-20">{{ $productsts->name }}</h4>
                                    <p>
                                       {!! nl2br(e($productsts->description)) !!}
                                    </p>

                                    <div class="price"><ins>$ {{ $productsts->price }}</ins></div>
                                    <h6 class="mb-20 pt-20">Seller Name :<span class=" text-danger"> {{ $productsts->sellerss->name }}</span></h6>
                                    <form action="{{ route('products.destroy', $productsts->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <button type="submit" class="btn btn-danger btn-block">Delete Product</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <script>
            jQuery(document).ready(function() {
                jQuery(".product-slider").slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    infinite: true,
                    speed: 1000,
                    fade: true,
                    asNavFor: ".product-slider-nav",
                });
                jQuery(".product-slider-nav").slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    asNavFor: ".product-slider",
                    dots: false,
                    infinite: true,
                    arrows: false,
                    speed: 1000,
                    centerMode: true,
                    focusOnSelect: true,
                });
                $("input[name='demo3_22']").TouchSpin({
                    initval: 1,
                });
            });
        </script>
    </div>


@endsection
