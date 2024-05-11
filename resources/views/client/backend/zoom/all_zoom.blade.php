@extends('client.client_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Zoom Meeting List')
@section('client')

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Zoom Meeting List</h4>
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
                                    <th>Seller Name</th>
                                    <th>Meeting Link</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($zooms as $key => $item)
                                    <tr>

                                        <td>{{ $key + 1 }}</td>

                                        <td>{{ $item->p_name }}</td>
                                        <td>{{ $item->seller_id }}</td>
                                        <td><a target="_blank" href="{{ $item->zoom_link }}">{{ $item->zoom_link }}</a></td>
                                        <td>{{ $item->zoom_date }}</td>
                                        <td>{{ $item->zoom_time }}</td>

                                       {{-- <td>
                                            <form action="{{ route('zoom.update.status', ['id' => $item->id]) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-success">Request Meeting</button>
                                            </form>
                                        </td> --}}
                                        <td>
                                            @if($item->zoom_status == 'no')
                                                <form action="{{ route('zoom.update.status', ['id' => $item->id]) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-success">Request Meeting</button>
                                                </form>
                                            @else
                                                <span class="badge badge-warning" style="font-size: 0.85rem;">Alredy Requested</span>
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
