@extends('seller.seller_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'All Products')
@section('seller')

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Products</h4>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Export Datatable start -->
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <div class="row justify-content-end">
                            <div class="col-auto">
                                <a href="{{ route('add.products') }}" class="btn btn-info">Add Products</a>
                            </div>
                        </div>
                    </div>
                    <div class="pb-20">
                        <table class="table hover multiple-select-row data-table-export nowrap">
                            <thead>
                                <tr>

                                    <th>ID</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Category Name</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($types as $key => $item)
                                    <tr>

                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ optional($item->category)->category_name ?: 'N/A' }}</td>

                                        <td>
                                            <a href="{{ route('edit.products', $item->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <a href="{{ route('delete.products', $item->id) }}" class="btn btn-danger"
                                                id="delete">Delete</a>
                                                <a href="{{ route('view.products', $item->id) }}"
                                                    class="btn btn-info">View</a>
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
