@extends('admin.admin_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'All Category')
@section('admin')

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Art Category</h4>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Export Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <div class="row justify-content-end">
                        <div class="col-auto">
                            <a href="{{ route('add.category') }}" class="btn btn-info">Add Category Type</a>
                        </div>
                    </div>
                </div>
                <div class="pb-20">
                    <table class="table hover multiple-select-row data-table-export nowrap">
                        <thead>
                            <tr>

                                <th>ID</th>
                                <th>Image</th>
                                <th>Category Name</th>
                                <th>Action</th>


                            </tr>
                        </thead>
                        <tbody>
                           @foreach($types as $key => $item)
                            <tr>

                                <td>{{ $key+1 }}</td>
                                <td class="table-plus">
                                    <div class="name-avatar d-flex align-items-center">
                                        <div class="avatar mr-2 flex-shrink-0">
                                            @if (!empty($item->photo) && file_exists(public_path('upload/category_images/' . $item->photo)))
                                                <img src="{{ url('upload/category_images/' . $item->photo) }}"
                                                    alt="{{ $item->name }}" class="border-radius-100 shadow"
                                                    width="50" height="50" style="object-fit: cover;width: 70px; height: 70px;" />
                                            @else
                                                <img src="{{ url('upload/no_image.jpg') }}"
                                                    alt="{{ $item->name }}" class="border-radius-100 shadow"
                                                     style="object-fit: cover; width: 70px; height: 70px;" />
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $item->category_name }}</td>

                                <td>
                                    <a href="{{(route('edit.category',$item->id))}}" class="btn btn-warning">Edit</a>
                                    <a href="{{(route('delete.category',$item->id))}}" class="btn btn-danger" id="delete">Delete</a>
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
