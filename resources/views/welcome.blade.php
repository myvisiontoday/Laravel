@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>
                <div class="panel-body">
                    <div class="col-lg-5">
                    <h1>WEB 3</h1>
                <h4>Course description</h4>
                <p>    In this course we focus on back-end (PHP & MySQL) development.
                    You will be applying the knowledge gained about frond-end development during this course,
                    but we will not teach you any new techniques. During this course you will be making use of a PHP Framework
                    called Laravel. With this framework you will create a multiuser web application with ‘dynamic’ content
                    containing text and images (examples: reviews, recipes, life hacks, events, POI, etc.).</p>
                    </div>

                    <div class=" col-lg-6 img-responsive pull-right"><img src="/uploads/avatars/laravel.png"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
