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
                                @if(is_null($section->admin_invite))
                                    <a class="btn btn-primary" href="/admin/sections/{{ $section->id  }}/invite">
                                        Invite
                                    </a>
                                @else
                                    Invited
                                @endif

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{--    <div id="timelineBasic" class="col-lg-12 layout-spacing">--}}
        {{--        <div class="statbox widget box box-shadow">--}}
        {{--            <div class="widget-header">--}}
        {{--                <div class="row">--}}
        {{--                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">--}}
        {{--                        <h4> Clearance process</h4>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--            <div class="widget-content widget-content-area pb-1">--}}
        {{--                <div class="mt-container mx-auto">--}}
        {{--                    <div class="timeline-line">--}}

        {{--                        <div class="item-timeline">--}}
        {{--                            <p class="t-time">10:00</p>--}}
        {{--                            <div class="t-dot t-dot-primary" data-original-title="" title="">--}}
        {{--                            </div>--}}
        {{--                            <div class="t-text">--}}
        {{--                                <p>Registrar's office</p>--}}
        {{--                                <p class="t-meta-time">25 mins ago</p>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}

        {{--                        <div class="item-timeline">--}}
        {{--                            <p class="t-time">12:45</p>--}}
        {{--                            <div class="t-dot t-dot-success" data-original-title="" title="">--}}
        {{--                            </div>--}}
        {{--                            <div class="t-text">--}}
        {{--                                <p>Academic affairs division</p>--}}
        {{--                                <p class="t-meta-time">2 hrs ago</p>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}

        {{--                        <div class="item-timeline">--}}
        {{--                            <p class="t-time">14:00</p>--}}
        {{--                            <div class="t-dot t-dot-warning" data-original-title="" title="">--}}
        {{--                            </div>--}}
        {{--                            <div class="t-text">--}}
        {{--                                <p>Sports division</p>--}}
        {{--                                <p class="t-meta-time">4 hrs ago</p>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}

        {{--                        <div class="item-timeline">--}}
        {{--                            <p class="t-time">16:00</p>--}}
        {{--                            <div class="t-dot t-dot-info" data-original-title="" title="">--}}
        {{--                            </div>--}}
        {{--                            <div class="t-text">--}}
        {{--                                <p>Laboratories & studios</p>--}}
        {{--                                <p class="t-meta-time">6 hrs ago</p>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}

        {{--                        <div class="item-timeline">--}}
        {{--                            <p class="t-time">17:00</p>--}}
        {{--                            <div class="t-dot t-dot-danger" data-original-title="" title="">--}}
        {{--                            </div>--}}
        {{--                            <div class="t-text">--}}
        {{--                                <p>Faculty</p>--}}
        {{--                                <p class="t-meta-time">9 hrs ago</p>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}

        {{--                        <div class="item-timeline">--}}
        {{--                            <p class="t-time">16:00</p>--}}
        {{--                            <div class="t-dot t-dot-dark" data-original-title="" title="">--}}
        {{--                            </div>--}}
        {{--                            <div class="t-text">--}}
        {{--                                <p>Hall of residence</p>--}}
        {{--                                <p class="t-meta-time">8 hrs ago</p>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}

        {{--                    </div>--}}
        {{--                </div>--}}

        {{--                <div class="code-section-container">--}}

        {{--                    <button class="btn btn-danger"><span>Stop <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></button>--}}
        {{--                    <button class="btn btn-success"><span>Print out <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg></span></button>--}}
        {{--</span></button>--}}


        {{--                    <div class="code-section text-left">--}}
        {{--                                            <pre class="hljs javascript">&lt;div <span class="hljs-class"><span class="hljs-keyword">class</span></span>=<span class="hljs-string">"mt-container mx-auto"</span>&gt;--}}
        {{--    <span class="xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"timeline-line"</span>&gt;</span>--}}

        {{--        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item-timeline"</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-time"</span>&gt;</span>10:00<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-dot t-dot-primary"</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-text"</span>&gt;</span>--}}
        {{--                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Bursary department<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>--}}
        {{--                <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-meta-time"</span>&gt;</span>25 mins ago<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>--}}
        {{--        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>--}}

        {{--        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item-timeline"</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-time"</span>&gt;</span>12:45<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-dot t-dot-success"</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-text"</span>&gt;</span>--}}
        {{--                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Backup Files EOD<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>--}}
        {{--                <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-meta-time"</span>&gt;</span>2 hrs ago<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>--}}
        {{--        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>--}}

        {{--        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item-timeline"</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-time"</span>&gt;</span>14:00<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-dot t-dot-warning"</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-text"</span>&gt;</span>--}}
        {{--                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Send Mail to HR and Admin<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>--}}
        {{--                <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-meta-time"</span>&gt;</span>4 hrs ago<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>--}}
        {{--        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>--}}

        {{--        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item-timeline"</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-time"</span>&gt;</span>16:00<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-dot t-dot-info"</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-text"</span>&gt;</span>--}}
        {{--                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Conference call with Marketing Manager.<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>--}}
        {{--                <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-meta-time"</span>&gt;</span>6 hrs ago<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>--}}
        {{--        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>--}}

        {{--        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item-timeline"</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-time"</span>&gt;</span>17:00<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-dot t-dot-danger"</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-text"</span>&gt;</span>--}}
        {{--                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Collected documents from <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"javascript:void(0);"</span>&gt;</span>Sara<span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>--}}
        {{--                <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-meta-time"</span>&gt;</span>9 hrs ago<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>--}}
        {{--        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>--}}

        {{--        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"item-timeline"</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-time"</span>&gt;</span>16:00<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-dot t-dot-dark"</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-text"</span>&gt;</span>--}}
        {{--                <span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Server rebooted successfully<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>--}}
        {{--                <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"t-meta-time"</span>&gt;</span>8 hrs ago<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span>--}}
        {{--            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>--}}
        {{--        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>--}}

        {{--    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></span>--}}
        {{--<span class="xml"><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></span></pre>--}}
        {{--                    </div>--}}
        {{--                </div>--}}

        {{--            </div>--}}
        {{--        </div>--}}
        {{--    </div>--}}
@endsection
