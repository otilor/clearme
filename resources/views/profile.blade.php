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
                    <input type="submit" name="time" class="mt-4 mb-4 btn btn-primary">
                </form>
            </div>
        </div>
    </div>
@endsection
