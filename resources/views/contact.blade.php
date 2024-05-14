@extends('home.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Contact Page')
@section('bodypart')

    <body>

        <!--== Page Title Area Start ==-->
        <div id="page-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="page-title-content">
                            <h1>Contact</h1>
                            <ul class="breadcrumb">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="" class="active">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== Page Title Area End ==-->

        <!--== Page Content Wrapper Start ==-->

        <!--== Page Content Wrapper End ==-->
        <!-- resources/views/contact.blade.php -->
        <div id="page-content-wrapper" class="p-9">
            <div class="container ">
                <div class="row">
                    <!-- Contact Page Content Start -->
                    <div class="col-lg-12">
                        <!-- Contact Method Start -->
                        <div class="contact-method-wrap align-items-center">
                            <div class="row justify-content-center">
                                <!-- Single Method Start -->
                                <div class="col-lg-3 col-sm-6 text-center">
                                    <div class="contact-method-item">
                                        <span class="method-icon"><i class="fa fa-map-marker"></i></span>
                                        <div class="method-info">
                                            <h3> Address</h3>
                                            <p>Address : 217 <br>Puwakwatte Road.Meegoda</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Method End -->

                                <!-- Single Method Start -->
                                <div class="col-lg-3 col-sm-6 text-center">
                                    <div class="contact-method-item">
                                        <span class="method-icon"><i class="fa fa-phone"></i></span>
                                        <div class="method-info">
                                            <h3>Phone Number</h3>
                                            <a href="tel:(+94) 766189896">(+94) 766189896</a>
                                            <a href="tel:(+94) 767432694">(+94) 767432694</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Method End -->

                                <!-- Single Method Start -->
                                {{-- <div class="col-lg-3 col-sm-6 text-center">
                                    <div class="contact-method-item">
                                        <span class="method-icon"><i class="fa fa-envelope-open-o"></i></span>
                                        <div class="method-info">
                                            <h3>Number Fax</h3>
                                            <p>+94 766189896 </p>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- Single Method End -->

                                <!-- Single Method Start -->
                                <div class="col-lg-3 col-sm-6 text-center">
                                    <div class="contact-method-item">
                                        <span class="method-icon"><i class="fa fa-envelope"></i></span>
                                        <div class="method-info">
                                            <h3>Email Address</h3>
                                            <a href="mailto:your@email.here">arttrade@gmail.com</a>

                                        </div>
                                    </div>
                                </div>
                                <!-- Single Method End -->
                            </div>
                        </div>
                        <!-- Contact Method End -->
                    </div>
                    <!-- Contact Page Content End -->
                </div>

                <div class="row">
                    <!-- Contact Form Start -->
                    <div class="col-lg-9 m-auto">
                        <div class="contact-form-wrap">

                            <h2>Request a Quote</h2>
                            <!-- Display success message -->
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form id="contact-form" action="{{ route('contact.form') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-input-item">
                                            <input type="text" name="f_name" placeholder="First Name *" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="single-input-item">
                                            <input type="text" name="l_name" placeholder="Last Name *" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-input-item">
                                            <input type="email" name="email" placeholder="Email Address *" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="single-input-item">
                                            <input type="text" name="subject" placeholder="Subject *" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="single-input-item">
                                            <textarea name="message" id="message" cols="30" rows="6" placeholder="Message"></textarea>
                                        </div>

                                        <div class="single-input-item text-center">
                                            <button type="submit" name="submit" class="btn-add-to-cart">Send
                                                Meassage</button>
                                        </div>

                                        <!-- Form Notification -->
                                        {{-- <div class="form-messege"></div> --}}
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- Contact Form End -->
                </div>
            </div>
        </div>


    </body>


@endsection
