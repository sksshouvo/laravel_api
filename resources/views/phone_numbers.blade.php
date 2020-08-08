@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <table class="table table-responsive table-striped">
        <tr>
            <th>User name</th><th>Phone Number</th>
        </tr>
        @foreach ($phone_number as $key=> $pn)
            <tr>
                <th>{{$pn->user->name}}</th>
                <th>{{$pn->phone_number}}</th>
            </tr>
        @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
