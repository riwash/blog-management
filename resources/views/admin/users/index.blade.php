@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-body">
               <table class="table table-striped">
                <tr>
                    <th> SN. </th>
                    <th> Name </th>
                    <th> Email </th>
                    <th> User Type </th>
                    <th> Action </th>
                 </tr>
                 @forelse($users as $key => $user)
                 <tr>
                    <td> {{ $key +1 }} </td>
                    <td> {{ $user->name }}</td>
                    <td> {{ $user->email }} </td>
                    <td> {{ $user->user_type_name }} </td>
                    <td>
                        <a href="{{ route('users.edit',$user->id) }}" class="btn btn-info">
                            Edit
                        </a>
                        <a href="{{ route('users.destroy',$user->id) }}" class="btn btn-danger">
                            Delete
                        </a>

                    </td>
                 </tr>
                 @empty
                    <tr> User Not Found </tr>
                 @endforelse
               </table>


        </div>
    </div>
</div>
@endsection
