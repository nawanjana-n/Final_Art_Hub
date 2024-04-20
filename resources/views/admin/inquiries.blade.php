@extends('admin.admin_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Inquiries')
@section('admin')

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>All Inquiries</h4>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Export Datatable start -->
                <div class="card-box mb-30"><br>

                    <div class="pb-20">
                        <table class="table hover multiple-select-row data-table-export nowrap" id="example">
                            <thead>
                                <tr>

                                    <th>ID</th>

                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>




                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admininquiries as $key => $item)
                                    <tr>

                                        <td>{{ $key + 1 }}</td>



                                        <td>{{ $item->f_name }}</td>

                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->subject }}</td>
                                        <td>{{ $item->message }}</td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Export Datatable End -->
            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                Art Trade Hub
                <a href="https://github.com/dropways" target="_blank">Nuwandi Nawanjana</a>
            </div>
        </div>
    </div>

    <script>
        $('#example').DataTable().destroy();
    </script>

@endsection
