

@extends('home.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Login & Register')
@section('bodypart')

<!--== Page Title Area Start ==-->
<div id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-title-content">
                    <h1>Login & Register</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{route('login')}}" class="active">Login & Register</a></li>
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
        <div class="row">
            <div class="col-lg-7 m-auto">
                <!-- Login & Register Content Start -->
                <div class="login-register-wrapper">
                    <!-- Login & Register tab Menu -->
                    <nav class="nav login-reg-tab-menu">
                        <a class="active" id="login-tab" data-toggle="tab" href="#login">Login</a>
                        <a id="register-tab" data-toggle="tab" href="#register">Register</a>
                    </nav>
                    <!-- Login & Register tab Menu -->

                    <div class="tab-content" id="login-reg-tabcontent">
                        <div class="tab-pane fade show active" id="login" role="tabpanel">
                            <div class="login-reg-form-wrap">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="single-input-item">
                                        <x-input-error :messages="$errors->get('login')" class="mt-2 text-danger " />
                                        <input id="login" name="login" :value="old('login')" required autofocus
                                        autocomplete="username" type="text"
                                        placeholder="Username / Phone / Email"/>
                                    </div>

                                    <div class="single-input-item">
                                        <input id="password" type="password" name="password" required
                                        autocomplete="current-password"
                                        placeholder="Enter your Password" required/>
                                    </div>

                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                            <div class="remember-meta">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="remember_me">
                                                    <label class="custom-control-label" for="remember_me">Remember
                                                        Me</label>
                                                </div>
                                            </div>

                                            <a href="{{route('password.request')}}" class="forget-pwd">Forgot Password?</a>
                                        </div>
                                    </div>

                                    <div class="single-input-item">
                                        <button type="submit" class="btn-login">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="register" role="tabpanel">
                            <div class="login-reg-form-wrap">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="single-input-item">
                                        <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                                        <input id="name"  placeholder="Full Name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    </div>

                                    <div class="single-input-item">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                                        <input id="email"  placeholder="Email" type="email" name="email" :value="old('email')" required autocomplete="email"/>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">

                                            <div class="single-input-item">
                                                <x-input-error :messages="$errors->get('username')" class="mt-2 text-danger" />
                                                <input id="username" placeholder="Username"  type="text" name="username" :value="old('username')" required autocomplete="username" oninput="this.value = this.value.toLowerCase();"/>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <x-input-error :messages="$errors->get('phone')" class="mt-2 text-danger" />
                                                <input  id="phone"  placeholder="Phone"  type="number" name="phone" :value="old('phone')" />
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                                                <input id="password" type="password" name="password" required
                                                autocomplete="new-password"
                                                placeholder="Enter Password" required autocomplete="new-password"/>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                                                <input id="password_confirmation" type="password" name="password_confirmation" required
                                                autocomplete="new-password"
                                                placeholder="Confirm Password" required autocomplete="new-password"/>
                                            </div>
                                        </div>


                                    </div>



                                    <div class="single-input-item">
                                        <button type="submit" class="btn-login">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Login & Register Content End -->
            </div>
        </div>
    </div>
</div>
<!--== Page Content Wrapper End ==-->


@endsection
