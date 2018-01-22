@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                  <center><h1>Laravel WP Clone Project</h1></center>
                <div class="panel-body">

                  <center>
                    <a href="{{ url('/login') }}"class="btn btn-primary">Login</a>
                    <a href="{{ url('/register')}}"class="btn btn-primary">Register</a>
                </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
