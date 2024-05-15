@extends('home.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'About Page')
@section('bodypart')

    <body>

        <!--== Page Title Area Start ==-->
        <div id="page-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="page-title-content">
                            <h1>About</h1>
                            <ul class="breadcrumb">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="" class="active">About</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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

    </body>


@endsection
