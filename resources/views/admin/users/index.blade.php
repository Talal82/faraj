@extends('layouts.master')

@section('title', 'Users')

@section('page-title', 'All Users')

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
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 style="display: inline-block;">Users</h4>
        <a class="btn btn-primary pull-right" href="{{ route('users.create') }}"><i class="fa fa-plus"></i> New</a>
      </div>
      <div class="card-body">
       <table class="table table-responsive">
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
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Status</th>
          <th>Address</th>
          <th style="width: 100px">Actions</th>
        </tr>
      </thead>
      <tbody>
       @foreach($users as $key => $user)
       @if($user -> email != Auth::user() -> email)
       <tr>
        <td><input type="checkbox" class="checkbox checkbox-custom" data-id="{{$user->id}}"></td>
        <td>{{ ++$key }}</td>
        <td>{{ $user -> first_name }}</td>
        <td>{{ $user -> last_name }}</td>
        <td>{{ $user -> email }}</td>
        <td class="text-center">
         @if($user -> status == true)
         <a href="{{ route('users.status', [$user -> id]) }}" class="btn btn-success btn-sm waves waves-effect">Active</a>
         @else
         <a href="{{ route('users.status', [$user -> id]) }}" class="btn btn-danger btn-sm waves waves-effect">Blocked</a>
         @endif
       </td>
       <td>{{ $user -> address }}</td>
       <td>

        <a href="{{ route('users.show', [$user -> id]) }}" class="btn btn-info btn-sm pull-left m-r-5 waves waves-effect" title="View User"><i class="fa fa-eye" title="View User"></i></a>

         <a href="{{ route('users.edit', [$user -> id]) }}" class="btn btn-primary btn-sm pull-left m-r-5 waves waves-effect" title="Edit User"><i class="fa fa-wrench" title="Edit User"></i></a>

         <a href="javascript:void(0);" data-id="{{$user->id}}" class="sa-remove"><button class="waves wave-effect btn btn-danger btn-sm" title="Delete User"><i class="fa fa-trash"></i></button></a>

         {!! Form::open(['route' => ['users.destroy', $user -> id], 'method' => 'DELETE', 'id' => 'form']) !!}
         <input type="submit" name="" style="display: none; visibility: none;">
         {!! Form::close() !!}
       </td>
     </tr>
     @endif
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
    text: 'The user will be deleted permanently.', 
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
  var url = 'delete-multiple-users';
</script>
<script type="text/javascript" src="{{ asset('js/custom/selectDeleteMultiple.js') }}"></script>
@endsection
