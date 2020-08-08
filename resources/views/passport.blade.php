@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <table class="table table-responsive table-striped">
        <tr>
            <th>User name</th><th>Passport Id</th>
        </tr>
        @foreach ($passport as $key=> $pass)
            <tr>
                <th>{{$pass->user->name}}</th>
                <th>{{$pass->passport_number}}</th>
            </tr>
        @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
