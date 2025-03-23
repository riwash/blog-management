@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">User Edit</div>
                <div class="card-body">
                    {!! html()->form('PATCH', route('users.update',$user->id))->class('needs-validation')->open() !!}
                    @include('admin.users.form')
                    {!! html()->form()->close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
