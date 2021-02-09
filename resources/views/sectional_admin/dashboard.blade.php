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
                    <table class="table table-bordered mb-4">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Sale</th>
                            <th class="text-center">Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Shaun Park</td>
                            <td>10/08/2019</td>
                            <td>320</td>
                            <td class="text-center"><span class="text-success">Complete</span></td>
                            <td class="text-center"><svg> ... </svg></td>
                        </tr>
                        <tr>
                            <td>Alma Clarke</td>
                            <td>11/08/2019</td>
                            <td>420</td>
                            <td class="text-center"><span class="text-secondary">Pending</span></td>
                            <td class="text-center"><svg> ... </svg></td>
                        </tr>
                        <tr>
                            <td>Xavier</td>
                            <td>12/08/2019</td>
                            <td>130</td>
                            <td class="text-center"><span class="text-info">In progress</span></td>
                            <td class="text-center"><svg> ... </svg></td>
                        </tr>
                        <tr>
                            <td>Vincent Carpenter</td>
                            <td>13/08/2019</td>
                            <td>260</td>
                            <td class="text-center"><span class="text-danger">Canceled</span></td>
                            <td class="text-center"><svg> ... </svg></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
