@extends('client.client_dashboard')
@section('pageTitle',isset($pageTitle) ? $pageTitle : 'Client Profile')
@section('client')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Profile</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{route('client.dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Client Profile
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row col-12">
                <div class="col-4">
                    <div class="pd-20 card-box ">
                        <div class="profile-photo">

                            <img src="{{ !empty($profileData->photo) ? url('upload/client_images/' . $profileData->photo) : url('upload/no_image.jpg') }}"
                                alt="" class="avatar-photo" style="object-fit: cover;width: 160px; height: 160px;"/>

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

                        <form method="POST" action="{{ route('client.profile.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Username</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name = "username"
                                        value = "{{ $profileData->username }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Name</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name = "name"
                                        value = "{{ $profileData->name }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="email" name = "email"
                                        value = "{{ $profileData->email }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Phone</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name = "phone"
                                        value = "{{ $profileData->phone }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Address</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name = "address"
                                        value = "{{ $profileData->address }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Photo</label>
                                <div class="col-sm-12 col-md-10">
                                    <div class="form-group">

                                        <input type="file" class="form-control-file form-control height-auto"
                                            id = "image" name="photo" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label"></label>
                                <div class="col-sm-12 col-md-10">
                                    <div class="form-group">
                                        <img id="showImage"
                                            src="{{ !empty($profileData->photo) ? url('upload/client_images/' . $profileData->photo) : url('upload/no_image.jpg') }}"
                                            alt="" class="avatar-photo" style="width: 100px; height: auto;" />
                                    </div>
                                </div>
                            </div>

                            <button type ="submit" class="btn btn-primary mr-auto">Save Changes</button>
                        </form>



                    </div>
                </div>

            </div>
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
