@extends('layouts.main')

@section('pageTitle', 'Dashboard')

@section('content')
    <link href="{{ asset('assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />

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
                        <caption>List of all users</caption>
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
                        @forelse($students as $student)
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-primary">{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td class=""><span class=" shadow-none badge outline-badge-primary">Complete</span></td>
                            <td><button class="btn btn-success">Approve</button></td>
                        </tr>
                        @empty
                            <p>No student here!</p>
                        @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
