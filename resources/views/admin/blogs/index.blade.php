@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-body">
                <a class="btn btn-primary w-25" href="{{ route('blog.create') }}"> Add Blog </a>
               <table class="table table-striped">
                <tr>
                    <th> SN. </th>
                    <th> Title </th>
                    <th> Content </th>
                    <th> Action </th>
                 </tr>
                 @forelse($blogs as $key => $blog)
                 <tr>
                    <td> {{ $key +1 }} </td>
                    <td> {{ $blog->title }}</td>
                    <td> {{ $blog->content }} </td>
                    <td>
                        <a href="{{ route('blog.edit',$blog->id) }}" class="btn btn-info">
                            Edit
                        </a>
                        <a href="{{ route('blog.destroy',$blog->id) }}" class="btn btn-danger">
                            Delete
                        </a>

                    </td>
                 </tr>
                 @empty
                    <tr> blog Not Found </tr>
                 @endforelse
               </table>
               {{ $blogs->links() }}
        </div>
    </div>
</div>
@endsection
