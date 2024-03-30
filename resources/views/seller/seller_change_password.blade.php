@extends('seller.seller_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Seller Profile')
@section('seller')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Seller Change Password</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row col-12">
                    <div class="col-4">
                        <div class="pd-20 card-box ">
                            <div class="profile-photo">

                                <img src="{{ !empty($profileData->photo) ? url('upload/seller_images/' . $profileData->photo) : url('upload/no_image.jpg') }}"
                                    alt="" class="avatar-photo"  style="object-fit: cover;width: 160px; height: 160px;"/>

                            </div>
                            <h5 class="text-center h5 mb-0">{{ $profileData->name }}</h5>

                            <div class="profile-info">
                                <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                                <ul>
                                    <li>
                                        <span>Username:</span>
                                        {{ $profileData->username }}
                                    </li>
                                    <li>
                                        <span>Email Address:</span>
                                        {{ $profileData->email }}
                                    </li>
                                    <li>
                                        <span>Phone Number:</span>
                                        {{ $profileData->phone }}
                                    </li>

                                    <li>
                                        <span>Address:</span>
                                        {{ $profileData->address }}
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-8">
                        <div class="pd-20 card-box ">

                            <form method="POST" action="{{ route('seller.update.password') }}"
                                enctype="multipart/form-data">

                                @csrf

                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Old Password</label>
                                    <div class="col-sm-12 col-md-10">


                                        <input class="form-control @error('old_password') is-invalid @enderror"
                                            type="password" name="old_password" id="old_password"
                                            placeholder="Enter old password">
                                    </div>
                                    @error('old_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">New Password</label>
                                    <div class="col-sm-12 col-md-10">


                                        <input class="form-control @error('new_password') is-invalid @enderror"
                                            type="password" name="new_password" id="new_password"
                                            placeholder="Enter new password">
                                    </div>
                                    @error('new_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Confirm New Password</label>
                                    <div class="col-sm-12 col-md-10">


                                        <input class="form-control" type="password" name="new_password_confirmation"
                                            id="new_password_confirmation" placeholder="Confirm your password">
                                    </div>

                                </div>




                                <button type ="submit" class="btn btn-primary mr-auto">Save Changes</button>
                            </form>



                        </div>
                    </div>

                </div>
            </div>
            <div class="footer-wrap pd-20 mb-20 card-box mt-4">
                Art Trade
                <a href="https://github.com/dropways" target="_blank">Nuwandi Nawanjana</a>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            });
        });
    </script>




@endsection
