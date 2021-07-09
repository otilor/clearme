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
                        <caption>*List of all students who need clearance</caption>
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


                                    @if($clearanceRequest['payload']['status'][auth()->user()?->mySection->slug] === \App\Models\ClearanceRequest::APPROVED)
                                        <button class="btn btn-dark btn-rounded">
                                            Approved
                                        </button>
                                    @endif


                                        @if($clearanceRequest['payload']['status'][auth()->user()?->mySection->slug] === \App\Models\ClearanceRequest::PENDING)
                                            <span class=" shadow-none badge outline-badge-dark">
                                                Pending
                                            </span>
                                        @endif

                                        @if($clearanceRequest['payload']['status'][auth()->user()?->mySection->slug] === \App\Models\ClearanceRequest::DECLINED)
                                            <span class=" shadow-none badge outline-badge-danger">
                                                Declined
                                            </span>
                                        @endif


                                </td>
                                <td>


                                    @if($clearanceRequest['payload']['status'][auth()->user()?->mySection->slug] === \App\Models\ClearanceRequest::APPROVED)
                                        <a href="#" class="badge outline-badge-danger">
                                                Reject
                                        </a>
                                    @endif

                                        @if($clearanceRequest['payload']['status'][auth()->user()?->mySection->slug] === \App\Models\ClearanceRequest::DECLINED)
                                            <form action="/clearance/approve" method="post">
                                                <input type="hidden" name="student_id" value="2">
                                                @csrf
                                                <button class="btn btn-success" type="submit">Approve</button>
                                            </form>
                                        @endif

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
