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
                                <li><a href="index.html">Home</a></li>
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
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img class="img-fluid"
                                                    src="assets2/img/product-1.jpg" alt="Product" /></a></td>
                                        <td class="pro-title"><a href="#">Zeon Zen 4 Pro</a></td>
                                        <td class="pro-price"><span>$295.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </td>
                                        <td class="pro-subtotal"><span>$295.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img class="img-fluid"
                                                    src="assets2/img/product-2.jpg" alt="Product" /></a></td>
                                        <td class="pro-title"><a href="#">Aquet Drone D 420</a></td>
                                        <td class="pro-price"><span>$275.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="text" value="2"></div>
                                        </td>
                                        <td class="pro-subtotal"><span>$550.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img class="img-fluid"
                                                    src="assets2/img/product-3.jpg" alt="Product" /></a></td>
                                        <td class="pro-title"><a href="#">Game Station X 22</a></td>
                                        <td class="pro-price"><span>$295.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </td>
                                        <td class="pro-subtotal"><span>$295.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img class="img-fluid"
                                                    src="assets2/img/product-4.jpg" alt="Product" /></a></td>
                                        <td class="pro-title"><a href="#">Roxxe Headphone Z 75 </a></td>
                                        <td class="pro-price"><span>$110.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </td>
                                        <td class="pro-subtotal"><span>$110.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
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
                                            <td>Sub Total</td>
                                            <td>$230</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping</td>
                                            <td>$70</td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td class="total-amount">$300</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a href="{{route('checkout')}}" class="btn-add-to-cart">Proceed To Checkout</a>
                        </div>
                    </div>
                </div>
                <!-- Cart Page Content End -->
            </div>
        </div>
        <!--== Page Content Wrapper End ==-->


    </body>


@endsection
