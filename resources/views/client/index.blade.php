@extends('client.client_dashboard')
@section('pageTitle',isset($pageTitle) ? $pageTitle : 'Client Dashboard')
@section('client')



<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="min-height-200px">
        <div class="title pb-20">
            <h2 class="h3 mb-0">Art Trade Hub</h2>
        </div>

        {{-- <div class="row pb-10">
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">75</div>
                            <div class="font-14 text-secondary weight-500">
                                Appointment
                            </div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#00eccf">
                                <i class="icon-copy dw dw-calendar1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">124,551</div>
                            <div class="font-14 text-secondary weight-500">
                                Total Patient
                            </div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#ff5b5b">
                                <span class="icon-copy ti-heart"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">400+</div>
                            <div class="font-14 text-secondary weight-500">
                                Total Doctor
                            </div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon">
                                <i
                                    class="icon-copy fa fa-stethoscope"
                                    aria-hidden="true"
                                ></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">$50,000</div>
                            <div class="font-14 text-secondary weight-500">Earning</div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#09cc06">
                                <i class="icon-copy fa fa-money" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 --}}

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

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


    </div>
</div>
</div>



@endsection
