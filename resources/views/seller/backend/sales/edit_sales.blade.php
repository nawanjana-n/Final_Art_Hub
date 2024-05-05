@extends('seller.seller_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Edit Sales')
@section('seller')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Edit Sales</h4>
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

                            <form method="POST" action="{{ route('update.sales') }}">

                                @csrf
                                <input type="hidden" name="id" value="{{ $sales->id }}">

                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Product Name</label>
                                    <div class="col-sm-12 col-md-10">


                                        <input class="form-control @error('products_name') is-invalid @enderror"
                                            value =" {{ $sales->p_name }}" type="text" name="name" readonly>
                                    </div>

                                </div>




                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Delivery Status</label>
                                    <div class="col-sm-12 col-md-10">


                                        <select name="delivery_status" class="custom-select col-12" required>
                                            <option value="shipped">Shipped</option>
                                        </select>
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
