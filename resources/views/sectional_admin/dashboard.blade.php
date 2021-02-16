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
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">State reason</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="modal-text">Leave the student with a message</p>
                                <textarea class="row col-12" placeholder="Why do you want to reject this application?" autofocus></textarea>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                <button type="button" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
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
                                            <input type="hidden" name="student_id" value="{{ $students[$i]->id }}">
                                            @csrf
                                            <button class="btn btn-danger btn-rounded" type="submit"  data-toggle="modal" data-target="#exampleModal">Reject</button>
                                    @else
                                        <form action="/clearance/approve/{{$students[$i]->id}}" method="post">
                                            <input type="hidden" name="student_id" value="{{ $students[$i]->id }}">
                                            @csrf
                                            <button class="btn btn-success btn-rounded" type="submit">Approve</button>
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
