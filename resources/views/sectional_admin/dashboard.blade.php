@extends('layouts.main')

@section('pageTitle', 'Dashboard')

@section('content')
    <link href="{{ asset('assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css"/>

    <div class="mx-auto text-center col-lg-12 layout-spacing">
        {{--            <form action="clearance/start" method="post">--}}
        {{--                @csrf--}}
        {{--                <input class="btn btn-lg btn-primary" type="submit" value="Begin clearance">--}}
        {{--                --}}
        {{--            </form>--}}


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
                        @for($i = 0; $i<$students->count(); $i++)
                            <tr>
                                <td class="text-center">{{ $i+1 }}</td>
                                <td class="text-primary">{{ $students[$i]->name }}</td>
                                <td>{{ $students[$i]->email }}</td>
                                <td class=""><span class=" shadow-none badge outline-badge-primary">Complete</span></td>
                                <td>
                                    @if($students[$i]->clearanceRequest->is_cleared)
                                        <form action="/clearance/reject/{{$students[$i]->id}}" method="post">
                                            <input type="hidden" name="student_id" value="{{ $students[$i]->id }}">
                                            @csrf
                                            <button class="btn btn-danger" type="submit">Reject</button>
                                        </form>
                                    @else
                                        <form action="/clearance/approve/{{$students[$i]->id}}" method="post">
                                            <input type="hidden" name="student_id" value="{{ $students[$i]->id }}">
                                            @csrf
                                            <button class="btn btn-success" type="submit">Approve</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endfor

                        @empty($students)
                            <p>No student here!</p>
                        @endempty
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
