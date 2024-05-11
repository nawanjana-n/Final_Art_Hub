<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Art Trade - Register Page</title>


    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->

    <link rel="stylesheet" type="text/css" href="{{ asset('../assets/vendors/styles/core.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('../assets/vendors/styles/icon-font.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('../assets/vendors/styles/style.css') }}" />



</head>

<body class="login-page">

    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Login To Art Trade Hub</h2>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                            <div class="input-group custom">
                                <input id="name"  placeholder="Full Name" class="form-control form-control-lg" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />

                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                            <div class="input-group custom">
                                <input id="email" class="form-control form-control-lg" placeholder="Email" type="email" name="email" :value="old('email')" required autocomplete="email" />

                            </div>
                            <x-input-error :messages="$errors->get('username')" class="mt-2 text-danger" />
                            <div class="input-group custom">
                                <input id="username" class="form-control form-control-lg" placeholder="Username"  type="text" name="username" :value="old('username')" required autocomplete="username" oninput="this.value = this.value.toLowerCase();"/>

                            </div>

                            <x-input-error :messages="$errors->get('phone')" class="mt-2 text-danger" />
                            <div class="input-group custom">
                                <input id="phone" class="form-control form-control-lg" placeholder="Phone"  type="number" name="phone" :value="old('phone')" />

                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                            <div class="input-group custom">
                                <input
                                 id="password" type="password" name="password" required
                                    autocomplete="new-password" class="form-control form-control-lg"
                                    placeholder="Enter Password" required autocomplete="new-password"/>

                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                            <div class="input-group custom">
                                <input
                                 id="password_confirmation" type="password" name="password_confirmation" required
                                    autocomplete="new-password" class="form-control form-control-lg"
                                    placeholder="Confirm Password" required autocomplete="new-password"/>

                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">


                                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Create Account">


                                    </div>
                                    <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">
                                        OR
                                    </div>
                                    <div class="input-group mb-0">
                                        <a class="btn btn-outline-primary btn-lg btn-block"
                                            href="{{ route('login') }}">Already Register ? Sign In</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7">
                    <img src="../assets/vendors/images/login-page-img.png" alt="" />
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <script src="{{ asset('../assets/vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('../assets/vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('../assets/vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('../assets/vendors/scripts/layout-settings.js') }}"></script>

</body>

</html>
