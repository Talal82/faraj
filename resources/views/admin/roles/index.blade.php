@extends('layouts.master')

@section('title', 'Roles')

@section('page-title', 'All Roles')

@section('stylesheets')

{{-- datatables  --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}">
{{-- reponsive datatables --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/datatables/select.bootstrap4.min.css') }}">

@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <h4>Role Management</h4>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('roles.create') }}"><i class="fa fa-plus"></i> New</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="90px">
                                <select id="multiple_select" class="custom-select m-b-5" width="100" name="multiple_select">
                                  <option value="0">action</option>
                                  <option value="1">delete</option>
                              </select>
                                {{-- <button style="margin: 5px;" class="btn btn-danger btn-xs delete-all" data-url="">Delete All</button>
                                <input type="checkbox" id="check_all"> --}}
                                <input type="checkbox" id="check_all"><label for="check_all">Check All</label>
                            </th>
                            <th>Sr.</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th width="200px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $key => $role)
                        <tr>
                            <td><input type="checkbox" class="checkbox checkbox-custom" data-id="{{$role->id}}"></td>
                            <td>{{ ++$key }}</td>
                            <td>{{ $role->name }}</td>
                            <td>{{ date('M j,Y h:ia' , strtotime($role -> created_at)) }}</td>
                            <td>{{ date('M j,Y h:ia' , strtotime($role -> updated_at)) }}</td>
                            <td>
                                <a class="btn btn-info btn-sm" href="{{ route('roles.show',$role->id) }}">Show</a>
                                <a class="btn btn-primary btn-sm" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                                    {{-- {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!} --}}
                                    <a href="javascript:void(0);" data-id="{{$role->id}}" class="sa-remove"><button class="waves wave-effect btn btn-danger btn-sm">Delete{{-- <i class="fa fa-trash"></i> --}}</button></a>

                                    {!! Form::open(['route' => ['roles.destroy', $role -> id], 'method' => 'DELETE', 'id' => 'form']) !!}
                                    <input type="submit" name="" style="display: none; visibility: none;">
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>


    @endsection

    @section('scripts')

    <!-- Required datatable js -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.select.min.js') }}"></script>

    <script>
      var table = $('.table').DataTable({
        "ordering": true, 
        "sort": true,
        order: [[ 1, 'asc' ]]
    });
</script>


{{-- sweet alert cdn --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
   $('.sa-remove').click(function (e) {
      e.preventDefault();
      swal({
        title: "Are you sure ??",
        text: 'This will be deleted permanently.', 
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
      .then((willDelete) => {
        if (willDelete) {
          $('#form').submit();
      }
  }); 
  });
</script>
<script>
  var url = 'delete-multiple-roles';
</script>
<script type="text/javascript" src="{{ asset('js/custom/selectDeleteMultiple.js') }}"></script>

@endsection