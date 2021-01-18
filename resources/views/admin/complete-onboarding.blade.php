@extends('layouts.main')

@section('pageTitle', 'Complete Onboarding')
@section('content')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/elements/alert.css') }}">
    <div class="mx-auto my-3">
        <div class="alert alert-danger mb-4" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
            <strong>Hello!</strong> You have to create at least an administrator before you complete signup..</button>
        </div>

        <div class="mx-auto mt-5">
            <form action="/admin/complete-onboarding" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput2">Name</label>
                    <input name="name" type="text" class="form-control" id="exampleFormControlInput2" required placeholder="John Doe">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="text" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput2">Section</label>
                    {{--Todo: dynamically display sections from database--}}
                    <select class="form-control" name="section">
                        <option class="form-group">Bursary</option>
                        <option class="form-group">Security department</option>
                        <option class="form-group">Academic affairs</option>
                        <option class="form-group">University Library</option>
                        <option class="form-group">Student Affairs</option>
                        <option class="form-group">Sports division</option>
                        <option class="form-group">Biology laboratory</option>
                        <option class="form-group">Microbiology laboratory</option>
                        <option class="form-group">Chemistry laboratory</option>
                        <option class="form-group">Biochemistry laboratory</option>
                        <option class="form-group">Physics laboratory</option>
                        <option class="form-group">Language</option>
                        <option class="form-group">Mass communication studio</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Save <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                  width="24" height="24"
                                                                                  viewBox="0 0 24 24" fill="none"
                                                                                  stroke="currentColor" stroke-width="2"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"
                                                                                  class="feather feather-save"><path
                                    d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline
                                    points="17 21 17 13 7 13 7 21"></polyline><polyline
                                    points="7 3 7 8 15 8"></polyline></svg></span></button>
                </div>
            </form>
        </div>
    </div>
@endsection
