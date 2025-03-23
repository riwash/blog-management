@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Blog Edit</div>
                <div class="card-body">
                    {!! html()->form('PATCH', route('blog.update',$blog->id))->class('needs-validation')->open() !!}
                    @include('admin.blogs.form')
                    {!! html()->form()->close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
