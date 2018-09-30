@extends('layouts.master')

@section('title', 'Dashboard')

@section('page-title', 'Dashboard')



@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>User Profile</h4>
            </div>
            <div class="card-body">
               @can('manage-users')
               I can manage users.
               @else
               i cannot manage users.
               @endcan<br>

               @can('manage-website')
               i can manage website
               @else
               i cannot manage services
               @endcan
           </div>
       </div>
   </div>
</div>
@endsection