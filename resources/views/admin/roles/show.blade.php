@extends('layouts.master')

@section('title', 'Roles')

@section('page-title', 'View Role')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <h4> Show Role</h4>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $role->name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong class="m-b-10">Permissions:</strong>
                            <br>
                            @if(!empty($rolePermissions))
                            @foreach($rolePermissions as $v)
                            <label class="badge badge-success">{{ $v->name }},</label>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
</div>


@endsection