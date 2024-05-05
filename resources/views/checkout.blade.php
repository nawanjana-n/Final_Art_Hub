@extends('home.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Checkout')
@section('bodypart')


    <body>


        <!--== Page Title Area Start ==-->
        <div id="page-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="page-title-content">
                            <h1>Checkout</h1>
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#" class="active">Checkout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== Page Title Area End ==-->
        <br>

        <!--== Page Content Wrapper Start ==-->
        <div id="page-content-wrapper">
            <div class="container">


                <div class="row">
                    <!-- Checkout Billing Details -->
                    <div class="col-lg-6">
                        <div class="checkout-billing-details-wrap">
                            <h2>Billing Details</h2>
                            <div class="billing-form-wrap">
                                <form action="{{route('checkout.update')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="single-input-item">
                                                <label for="f_name" class="required">Name</label>
                                                <input type="text" name="name" value="{{ Auth::user()->name }}"
                                                    required />
                                            </div>
                                        </div>


                                    </div>

                                    <div class="single-input-item">
                                        <label for="email" class="required">Email Address</label>
                                        <input type="email" name="email" value="{{ Auth::user()->email }}" required />
                                    </div>



                                    <div class="single-input-item">
                                        <label for="country" class="required">Country</label>
                                        <select name="country" id="country" required>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="India">India</option>
                                            <option value="England">England</option>
                                            <option value="London">London</option>
                                        </select>
                                    </div>

                                    <div class="single-input-item">
                                        <label for="street-address" class="required">Address</label>
                                        <input type="text" name="address" placeholder="Address" required />
                                    </div>



                                    <div class="single-input-item">
                                        <label for="town" class="required">Town / City</label>
                                        <input type="text" name="town" placeholder="Town" required />
                                    </div>

                                    <div class="single-input-item">
                                        <label for="state">State / Province</label>
                                        <input type="text" name="state" placeholder="State / Province" required />
                                    </div>

                                    <div class="single-input-item">
                                        <label for="postcode" class="required">Postcode / ZIP</label>
                                        <input type="text" name="zip" placeholder="ZIP Code" required />
                                    </div>

                                    <div class="single-input-item">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" value="{{ Auth::user()->phone }}" required />
                                    </div>





                                    <div class="single-input-item">
                                        <label for="ordernote">Order Note</label>
                                        <textarea name="order_note"  cols="30" rows="3"
                                            placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>

                            </div>
                        </div>
                    </div>

                    <!-- Order Summary Details -->
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="order-summary-details">
                            <h2>Your Order Summary</h2>
                            <div class="order-summary-content">
                                <!-- Order Summary Table -->
                                <div class="order-summary-table table-responsive text-center">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Products</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($checkouts as $item)
                                                <tr>
                                                    <td><a>{{ $item->p_name }} <strong> × {{ $item->quantity }}</strong></a>
                                                    </td>
                                                    <td>$ {{ $item->total_price }}</td>
                                                    <input name="id" type="hidden" value="{{ $item->id }}"></input>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>

                                            <tr>
                                                <td>Total Amount</td>
                                                <td><strong>$ {{ $totalPrice }}</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <!-- Order Payment Method -->
                                <div class="order-payment-method">
                                    <div class="single-payment-method show">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="cashon" name="paymentmethod" value="cash"
                                                    class="custom-control-input" checked />
                                                <label class="custom-control-label" for="cashon">Credit / Debit Card
                                                    Payment</label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="cash">


                                            <div class="single-input-item">
                                                <label for="c_name" class="required">Card Holder Name</label>
                                                <input type="text" id="c_name" placeholder="Enter Card holder Name" required/>
                                            </div>


                                            <div class="single-input-item">
                                                <label for="c_number" class="required">Card Number</label>
                                                <input type="text" id="c_number" placeholder="0000000" required/>
                                            </div>





                                            <div class="single-input-item">
                                                <label for="e-date" class="required">Expiry Date</label>
                                                <input type="text" id="e-date" placeholder="MM/YY" required/>
                                            </div>

                                            <div class="single-input-item">
                                                <label for="cvc" class="required">CVC</label>
                                                <input type="number" id="cvc" placeholder="000" required/>
                                            </div>



                                        </div>
                                    </div>



                                    <div class="summary-footer-area">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="terms"
                                                required />
                                            <label class="custom-control-label" for="terms">I have read and agree to
                                                the website
                                                <a >terms and conditions.</a></label>
                                        </div>

                                        <button type="submit" class="btn-add-to-cart">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!--== Checkout Page Content End ==-->

            </div>
        </div>
        <!--== Page Content Wrapper End ==-->
        <br>


    </body>


@endsection
