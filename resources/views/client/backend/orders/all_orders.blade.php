@extends('client.client_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'All Orders')
@section('client')

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Orders</h4>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Export Datatable start -->
                <div class="card-box mb-30">

                    <div class="pb-20">
                        <table class="table hover multiple-select-row data-table-export nowrap"><br>
                            <thead>
                                <tr>

                                    <th>ID</th>

                                    <th>Product Name</th>

                                    <th>Quantity</th>
                                    <th>Total Price</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allorders as $key => $item)
                                    <tr>

                                        <td>{{ $key + 1 }}</td>

                                        <td>{{ $item->p_name }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->total_price }}</td>
                                        <td>
                                            @if ($item->delivery_status == 'pending')
                                                <span class="badge badge-danger" style="font-size: 0.8rem;">Not
                                                    Shipped</span>
                                            @elseif($item->delivery_status == 'shipped')
                                                <span class="badge badge-warning" style="font-size: 0.8rem;">Shipped</span>
                                            @else
                                                <span class="badge badge-success" style="font-size: 0.8rem;">Received</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->delivery_status == 'shipped')
                                                <a href="{{ route('edit.orders', $item->id) }}" class="btn btn-warning">Edit</a>

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
