@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Blog Create</div>
                <div class="card-body">
                    {!! html()->form('POST', route('blog.store'))->class('needs-validation')->open() !!}
                    @include('admin.blogs.form')
                    {!! html()->form()->close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
