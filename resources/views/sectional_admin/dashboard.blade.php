@extends('layouts.main')

@section('pageTitle', 'Dashboard')

@section('content')
    <link href="{{ asset('assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css"/>

    <div class="mx-auto text-center col-lg-12 layout-spacing">
        <div class="widget widget-table-one">
            <div class="widget-heading">
                <h5 class="">Students pending clearance</h5>
            </div>

            {{--                TODO: add icons--}}
            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table mb-4">
                        <caption>List of all students who need clearance</caption>
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th class="">Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                        $counter=0
                            @endphp
                        @foreach($clearanceRequests as $clearanceRequest)
                            @php
                            $counter++
                            @endphp
                            <tr>
                                <td class="text-center">{{ $counter }}</td>
                                <td class="text-primary">{{$clearanceRequest->student->name}}</td>
                                <td>{{ $clearanceRequest->student->email }}</td>
                                <td class="">

                                    <button class="btn btn-dark btn-rounded">
                                        Approved
                                    </button>

                                        <span class=" shadow-none badge outline-badge-dark">
                                            Pending
                                        </span>
                                </td>
                                <td>


                                    <a href="#" class="badge outline-badge-danger">
                                            Cancel
                                        </a>

                                        <form action="/clearance/approve/1" method="post">
                                            <input type="hidden" name="student_id" value="2">
                                            @csrf
                                            <button class="btn btn-success" type="submit">Approve</button>
                                        </form>

                                </td>
                            </tr>

                        @endforeach


{{--                        @empty($students)--}}
{{--                            <p>No student here!</p>--}}
{{--                        @endempty--}}
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
