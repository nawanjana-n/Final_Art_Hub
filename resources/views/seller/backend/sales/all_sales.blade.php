@extends('seller.seller_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'All Sales')
@section('seller')

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Sales</h4>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Export Datatable start -->
                <div class="card-box mb-30">

                    <div class="pb-20">
                        <table class="table hover multiple-select-row data-table-export nowrap">
                            <thead>
                                <tr>

                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Product Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allsale as $key => $item)
                                    <tr>

                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->p_name }}</td>
                                        <td>{{ $item->address }} {{ $item->zip }} {{ $item->town }} {{ $item->state }} {{ $item->country }}</td>
                                        <td>{{ $item->phone }}</td>
                                        {{-- <td>{{ optional($item->category)->category_name ?: 'N/A' }}</td> --}}

                                        <td>
                                            <a href="{{ route('edit.sales', $item->id) }}"
                                                class="btn btn-warning">Edit</a>

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
