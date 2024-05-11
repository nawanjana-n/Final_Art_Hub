@extends('admin.admin_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Admin Profile')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Add Category</h4>
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

                            <form method="POST" action="{{ route('store.category') }}" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Category Name</label>
                                    <div class="col-sm-12 col-md-10">


                                        <input class="form-control @error('category_name') is-invalid @enderror"
                                            type="text" name="category_name"
                                            placeholder="Enter Category Name" required>
                                    </div>
                                    @error('category_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Photo</label>
                                    <div class="col-sm-12 col-md-10">
                                        <div class="form-group">

                                            <input type="file" class="form-control-file form-control height-auto"
                                                id = "image" name="photo" required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label"></label>
                                    <div class="col-sm-12 col-md-10">
                                        <div class="form-group">
                                            <img id="showImage"
                                                src="{{ !empty($profileData->photo) ? url('upload/category_images/' . $profileData->photo) : url('upload/no_image.jpg') }}"
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
