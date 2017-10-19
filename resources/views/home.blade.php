@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Employees
                    <button class="btn btn-sm btn-primary" onclick="location.href='/create'"> Add New</button>
                    <button class="pull-right btn btn-sm btn-primary" onclick="location.href='/getPDF'">Print</button></div>

                <div class="panel-body">
                    <div class="table-responsive">

                        <table class="table">
                            <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Update</th>
                            <th>Delete</th>
                            </thead>
                            @foreach($user as $users)
                                <tr>
                                    <td>{{$users->id}}</td>
                                    <td>{{$users->name}}</td>
                                    <td>{{$users->email}}</td>
                                    <td><a href='edit/{{$users->id}}'>Update</a></td>
                                    <td><a href='delete/{{$users->id}}'>Delete</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
