@extends('layouts.main')

@section('pageTitle', 'Dashboard')

@section('content')
    <link href="{{ asset('assets/css/components/timeline/custom-timeline.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/components/cards/card.css') }}" rel="stylesheet" type="text/css"/>
    <style>
        .widget-table-one .transactions-list .t-item .t-icon .icon svg {
            color: #fff !important;
        }

    </style>
    <!-- END PAGE LEVEL STYLES -->
    <div class="mx-auto text-center col-lg-8 layout-spacing">
        {{--            <form action="clearance/start" method="post">--}}
        {{--                @csrf--}}
        {{--                <input class="btn btn-lg btn-primary" type="submit" value="Begin clearance">--}}
        {{--                --}}
        {{--            </form>--}}

        <div class="widget widget-table-one">
            <div class="widget-heading">
                <h5 class="">Timeline of clearance process</h5>
            </div>

                Current_phase
                    <div class="widget-content">
                        <div class="transactions-list">
                            <div class="t-item">
                                <div class="t-company-name">
                                    <div class="t-icon">
                                        <div class="icon bg-success text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        </div>
                                    </div>
                                    <div class="t-name">
                                        <h4>{{ $clearanceRequest->current_phase }}</h4>
                                        {{--                                    <p class="meta-date">4 Aug 1:00PM</p>--}}
                                    </div>

                                </div>
                                <div class="t-rate rate-dec">
                                    <span class="badge outline-badge-success"> Cleared </span>
                                </div>
                            </div>
                        </div>
                    </div>

            {{--                TODO: add icons--}}
            @isset($clearanceRequest->passed_phases)
                Passed phases
                @foreach($clearanceRequest->passed_phases as $phase)
            <div class="widget-content">
                    <div class="transactions-list">
                        <div class="t-item">
                            <div class="t-company-name">
                                <div class="t-icon">
                                    <div class="icon bg-success text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    </div>
                                </div>
                                <div class="t-name">
                                    <h4>{{ $phase->passed_phases }}</h4>
                                    {{--                                    <p class="meta-date">4 Aug 1:00PM</p>--}}
                                </div>

                            </div>
                            <div class="t-rate rate-dec">
                                    <span class="badge outline-badge-success"> Cleared </span>
                            </div>
                        </div>
                    </div>
            </div>
                @endforeach
            @endisset
        </div>
    </div>
@endsection
