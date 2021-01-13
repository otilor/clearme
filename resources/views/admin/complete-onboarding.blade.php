@extends('layouts.main')

@section('pageTitle', 'Complete Onboarding')
@section('content')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/elements/alert.css') }}">
<div class="mx-auto my-3">

    <div class="alert alert-danger mb-4" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
        <strong>Hello!</strong> You have to create at least an administrator before you complete signup..</button>
        <a class="btn btn-lg btn-light" href="#">Create</a>
    </div>
    <div class="d-none">
            Welcome
        </div>
</div>
@endsection
