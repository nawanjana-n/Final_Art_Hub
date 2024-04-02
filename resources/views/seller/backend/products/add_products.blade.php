@extends('seller.seller_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'seller Profile')
@section('seller')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Add a Product</h4>
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

                            <form method="POST" action="{{ route('store.products') }}" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Product Name</label>
                                    <div class="col-sm-12 col-md-10">


                                        <input class="form-control @error('name') is-invalid @enderror"
                                            type="text" name="name" placeholder="Enter Product Name" required>
                                    </div>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>




                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Price</label>
                                    <div class="col-sm-12 col-md-10">


                                        <input class="form-control @error('price') is-invalid @enderror"
                                            type="number" name="price" placeholder="Enter the price"
                                            required>
                                    </div>
                                    @error('price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>








                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Category</label>
                                    <div class="col-sm-12 col-md-10">

                                        <select class="form-control" id="category" name="category">
                                            @foreach ($categoryall as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('category')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>



                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Description</label>
                                    <div class="col-sm-12 col-md-10">


                                        <input class="form-control @error('description') is-invalid @enderror"
                                            type="text" name="description" placeholder="Enter the description   "
                                            required>
                                    </div>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>






                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Product Images</label>
                                    <div class="col-sm-12 col-md-10">
                                        <div class="form-group">

                                            <input type="file" class="form-control-file form-control height-auto"
                                                id = "image" name="photo[]" required multiple/>
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
