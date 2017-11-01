@extends('admin::layouts.master')

@section('styleHead')
    <!-- DataTables -->
    <link href="/modules/admin/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="/modules/admin/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/modules/admin/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/modules/admin/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/modules/admin/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="m-t-0 header-title"><b>Users</b></h4>
                        <p class="text-muted font-13 m-b-30">
                            Bạn có thể sửa người dùng tại đây
                        </p>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('users.create') }}" class="btn btn-primary pull-right">
                            Create an User
                        </a>
                    </div>
                </div>
                
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($listData as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('users.edit', $data->email) }}" style="float: left; margin-right: 5px">Edit</a>
                                    <form action="{{ route('users.destroy', $data->id) }}" method="post" style="float: left; width: auto;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>No data</td>
                                <td>No data</td>
                                <td>No data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('srcScript')
    <!-- Datatables-->
    <script src="/modules/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/modules/admin/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="/modules/admin/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="/modules/admin/plugins/datatables/dataTables.scroller.min.js"></script>

    <!-- Datatable init js -->
    <script src="/modules/admin/pages/datatables.init.js"></script>
@endsection

@section('script')
     <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').dataTable();
        } );
        TableManageButtons.init();
    </script>
@endsection
