@extends('layouts.main')

@section('pageTitle', 'Dashboard')

@section('content')
    <link href="{{ asset('assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css"/>

    <div class="mx-auto text-center col-lg-12 layout-spacing">
        <div class="widget widget-table-one">
            <div class="widget-heading">
                <h5 class="">Clearance report</h5>
                <span class="ml-4 btn btn-sm btn-primary">Print clearance report</span>
            </div>

            {{--                TODO: add icons--}}
            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table mb-4">
                        <caption>*List of all sections with their clearance statuses</caption>
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th class="">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $counter=0
                        @endphp
                        @foreach($clearanceRequest->payload['status'] as $sectionName => $sectionStatus)
                            <tr>
                                <td class="text-center">{{ $counter }}</td>
                                <td class="text-primary">{{ \Illuminate\Support\Str::title(str_replace('-', ' ', $sectionName)) }}</td>
                                <td class="">

                                    @if($sectionStatus === \App\Models\ClearanceRequest::APPROVED)
                                        <button class="badge badge-success event-badge">
                                            Approved
                                        </button>
                                    @endif

                                    @if($sectionStatus === \App\Models\ClearanceRequest::PENDING)
                                        <span class=" shadow-none badge outline-badge-dark">
                                            Pending
                                        </span>
                                    @endif

                                    @if($sectionStatus === \App\Models\ClearanceRequest::DECLINED)
                                        <span class=" shadow-none badge outline-badge-danger">
                                                Declined
                                            </span>
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
