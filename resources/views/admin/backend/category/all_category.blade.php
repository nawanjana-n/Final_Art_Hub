@extends('admin.admin_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Admin Profile')
@section('admin')

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>DataTable</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <a href="{{route('add.category')}}" class="btn btn-inverse-info">Add Category Type</a>

                            </ol>
                        </nav>
                    </div>

                </div>
            </div>

            <!-- Export Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Types of Art Categories</h4>
                </div>
                <div class="pb-20">
                    <table class="table hover multiple-select-row data-table-export nowrap">
                        <thead>
                            <tr>

                                <th>Sl</th>
                                <th>Category Name</th>


                            </tr>
                        </thead>
                        <tbody>
                           @foreach($types as $key => $item)
                            <tr>

                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->category_name }}</td>

                                <td>
                                    <a href="{{(route('edit.category',$item->id))}}" class="btn btn-inverse-warning">Edit</a>
                                    <a href="{{(route('delete.category',$item->id))}}" class="btn btn-inverse-danger" id="delete">Delete</a>
                                </td>
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



@endsection
