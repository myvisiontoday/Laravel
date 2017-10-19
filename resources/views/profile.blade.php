@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
               <img src="/uploads/avatars/{{$user->avatar}}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;">
                <h2>{{$user->name}}'s Profile </h2>
                <h4>Name: {{$user->name}}</h4>
                <h4>Email: {{$user->email}}</h4>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label>Update Profile Image</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
                <h6>Copyright 2016</h6>

            </div>
        </div>
    </div>
</div>
@endsection
