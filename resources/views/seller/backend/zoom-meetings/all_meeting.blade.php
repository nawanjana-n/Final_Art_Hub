@extends('seller.seller_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Seller Meeting List')
@section('seller')

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>My Meeting List</h4>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Export Datatable start -->
                <div class="card-box mb-30">
                    <br>
                    <div class="pb-20">
                        <table class="table hover multiple-select-row data-table-export nowrap">
                            <thead>
                                <tr>

                                    <th>ID</th>
                                    <th>Product Name</th>
                                    <th>Customer ID</th>
                                    <th>Meeting Link</th>
                                    <th>Meeting Date</th>
                                    <th>Meeting Time</th>
                                    <th>Action</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($zooms as $key => $item)
                                    <tr>

                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->p_name }}</td>
                                        <td>{{ $item->customer_id }}</td>
                                        <td>{{ $item->zoom_link }}</td>
                                        <td>{{ $item->zoom_date }}</td>
                                        <td>{{ $item->zoom_time }}</td>

                                        <td>
                                            @if ($item->zoom_status == 'need')
                                                <a href="{{ route('confirm.meetings', $item->id) }}"
                                                    class="btn btn-success">Create</a>
                                                    @else
                                                <span class="badge badge-info" style="font-size: 0.85rem;">No</span>
                                            @endif

                                        </td>
                                        <td>
                                            @if ($item->zoom_status == 'need')
                                                <form action="{{ route('seller.zoom.status', ['id' => $item->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-danger">Finished</button>
                                                </form>
                                            @elseif($item->zoom_status == 'finished')
                                                <span class="badge badge-info" style="font-size: 0.85rem;">Finished</span>
                                            @else
                                                <span class="badge badge-warning" style="font-size: 0.85rem;">Future
                                                    Date</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Export Datatable End -->
            </div>

        </div>
    </div>



@endsection
