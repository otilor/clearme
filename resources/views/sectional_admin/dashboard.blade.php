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
                <h5 class="">Invite admins for the following sections</h5>
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
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-primary">Shaun Park</td>
                            <td>johndoe@yahoo.com</td>
                            <td class=""><span class=" shadow-none badge outline-badge-primary">Complete</span></td>
                            <td>5 min ago</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="text-primary">Andy King</td>
                            <td>andyking@gmail.com</td>
                            <td class=""><span class="badge outline-badge-secondary shadow-none">Pending</span></td>
                            <td>10 min ago</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td class="text-primary">Mary McDonald</td>
                            <td>lisadoe@live.com</td>
                            <td class=""><span class="badge outline-badge-info shadow-none">In Progress</span></td>
                            <td>1 hour ago</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td class="text-primary">Vincent Carpenter</td>
                            <td>vinnyc@outlook.com</td>
                            <td class=""><span class="badge outline-badge-danger shadow-none">Cancel</span></td>
                            <td>1 day ago</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
