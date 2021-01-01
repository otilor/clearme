@extends('layouts.main')

@section('content')
    <div class="mx-auto col-lg-8">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Complete your profile</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form>
                    <div class="form-group mb-4">
                        <label for="exampleFormControlInput2">Matriculation number</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="AUL/SCI/17/01234">
                    </div>
                    <div class="form-group mb-4">
                        <label for="exampleFormControlSelect1">Select your faculty</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Science and Science Education</option>
                            <option>Humanities</option>
                            <option>Social and Management Sciences</option>
                        </select>
                    </div>
                    <div>
                        <button class="btn btn-primary" type="submit">Save <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
