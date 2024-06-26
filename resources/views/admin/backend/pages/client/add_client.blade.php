@extends('admin.admin_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Client Profile')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Add Client</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row col-lg-12">

                    <div class="col-lg-12">
                        <div class="pd-20 card-box ">

                            <form method="POST" action="{{ route('store.client') }}">

                                @csrf

                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Client Username</label>
                                    <div class="col-sm-12 col-md-10">


                                        <input class="form-control @error('username') is-invalid @enderror"
                                            type="text" name="username"
                                            placeholder="Enter Username">
                                    </div>
                                    @error('username')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Client Name</label>
                                    <div class="col-sm-12 col-md-10">


                                        <input class="form-control @error('name') is-invalid @enderror"
                                            type="text" name="name"
                                            placeholder="Enter Name">
                                    </div>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>



                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Admin Email</label>
                                    <div class="col-sm-12 col-md-10">


                                        <input class="form-control @error('email') is-invalid @enderror"
                                            type="text" name="email"
                                            placeholder="Enter Email">
                                    </div>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Admin Phone</label>
                                    <div class="col-sm-12 col-md-10">


                                        <input class="form-control @error('phone') is-invalid @enderror"
                                            type="text" name="phone"
                                            placeholder="Enter Phone Number">
                                    </div>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>





                                <button type ="submit" class="btn btn-primary mr-auto">Save Changes</button>
                            </form>



                        </div>
                    </div>

                </div>
            </div>
            <div class="footer-wrap pd-20 mb-20 card-box mt-4">
                Art Trade Hub
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


