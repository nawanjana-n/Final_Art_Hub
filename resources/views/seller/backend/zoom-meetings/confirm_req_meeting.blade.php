@extends('seller.seller_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Confirm Zoom Meeting')
@section('seller')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Confirm Zoom Meeting</h4>
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

                            <form method="POST" action="{{ route('update.req') }}">

                                @csrf
                                <input type="hidden" name="id" value="{{ $zooms->id }}">

                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Product Name</label>
                                    <div class="col-sm-12 col-md-10">


                                        <input class="form-control "
                                            value =" {{ $zooms->p_name }}" type="text"  readonly>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Customer ID</label>
                                    <div class="col-sm-12 col-md-10">


                                        <input class="form-control" type="number"
                                            name="price" value ="{{ $zooms->customer_id }}" readonly>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Meeting Link</label>
                                    <div class="col-sm-12 col-md-10">


                                        <input class="form-control" type="text"
                                            name="zoom_link"  value ="{{ $zooms->zoom_link }}" required>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Meeting Date</label>
                                    <div class="col-sm-12 col-md-10">


                                        <input class="form-control" type="date"
                                            name="zoom_date" value ="{{ $zooms->zoom_date }}" required>
                                    </div>

                                </div><div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Meeting Time</label>
                                    <div class="col-sm-12 col-md-10">


                                        <input class="form-control" type="time"
                                            name="zoom_time" value ="{{ $zooms->zoom_time }}" required>
                                    </div>

                                </div>

                                <button type ="submit" class="btn btn-primary mr-auto">Confirm Meeting</button>
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
