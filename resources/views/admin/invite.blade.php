@extends('layouts.main')

@section('pageTitle', 'Dashboard')

@section('content')
    <link href="{{ asset('assets/css/components/timeline/custom-timeline.css') }}" rel="stylesheet" type="text/css"/>

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
                @foreach($sections as $section)
                    <div class="transactions-list">
                        <div class="t-item">
                            <div class="t-company-name">
                                <div class="t-name">
                                    <h4>{{ $section->name  }}</h4>
                                    {{--                                    <p class="meta-date">4 Aug 1:00PM</p>--}}
                                </div>

                            </div>`
                            <div class="t-rate rate-dec">
                                <a class="btn btn-primary" href="/admin/sections/{{ $section->id  }}/invite">
                                    Invite
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
