@extends('home.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Cart')
@section('bodypart')


    <body>


        <!--== Page Title Area Start ==-->
        <div id="page-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="page-title-content">
                            <h1>Shopping Cart</h1>
                            <ul class="breadcrumb">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="cart.html" class="active">Cart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== Page Title Area End ==-->

        <!--== Page Content Wrapper Start ==-->
        <div id="page-content-wrapper" class="p-9">
            <div class="container">
                <!-- Cart Page Content Start -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Cart Table Area -->
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Thumbnail</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($carts as $item)
                                        <tr>
                                            <td class="pro-thumbnail"><a><img class="img-fluid"
                                                        src="{{ !empty($item->image) ? url('upload/product_main_image/' . $item->image) : url('upload/no_image.jpg') }}"
                                                        alt="Product" /></a></td>
                                            <td class="pro-title"><a>{{ $item->p_name }}</a></td>
                                            <td class="pro-price"><span>${{ $item->price }}</span></td>
                                            <td class="pro-quantity">
                                                <div class="pro-qty"><input type="text" value="{{ $item->quantity }}"
                                                        disabled></div>
                                            </td>
                                            <td class="pro-subtotal"><span>${{ $item->total_price }} </span></td>
                                            <td style="display: none"><input type="hidden" value="{{ $item->id }}">
                                            </td>
                                            <td class="pro-remove"><a href="{{ route('delete.cart', $item->id) }}"><i
                                                        class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                    @endforeach --}}
                                    @if ($carts->isEmpty())
                                        <tr>
                                            <td colspan="7">Your cart is empty. Shop & enjoy!</td>
                                        </tr>
                                    @else
                                        @foreach ($carts as $item)
                                            <tr>
                                                <td class="pro-thumbnail"><a><img class="img-fluid"
                                                            src="{{ !empty($item->image) ? url('upload/product_main_image/' . $item->image) : url('upload/no_image.jpg') }}"
                                                            alt="Product" /></a></td>
                                                <td class="pro-title"><a>{{ $item->p_name }}</a></td>
                                                <td class="pro-price"><span>${{ $item->price }}</span></td>
                                                <td class="pro-quantity">
                                                    <div class="pro-qty"><input type="text" value="{{ $item->quantity }}"
                                                            disabled></div>
                                                </td>
                                                <td class="pro-subtotal"><span>${{ $item->total_price }} </span></td>
                                                <td style="display: none"><input type="hidden" value="{{ $item->id }}">
                                                </td>
                                                <td class="pro-remove"><a href="{{ route('delete.cart', $item->id) }}"><i
                                                            class="fa fa-trash-o"></i></a></td>
                                            </tr>
                                        @endforeach
                                    @endif

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 ml-auto">
                        <!-- Cart Calculation Area -->
                        <div class="cart-calculator-wrapper">
                            <h3>Cart Totals</h3>
                            <div class="cart-calculate-items">
                                <div class="table-responsive">
                                    <table class="table table-bordered">

                                        <tr>
                                            <td>Shipping <span style="font-size: 10px">(Already Added)</span></td>
                                            <td>+5%</td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td class="total-amount">$ {{ $totalPrice }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a href="{{ route('checkout') }}" class="btn-add-to-cart">Proceed To Checkout</a>
                        </div>
                    </div>
                </div>
                <!-- Cart Page Content End -->
            </div>
        </div>
        <!--== Page Content Wrapper End ==-->


    </body>


@endsection
