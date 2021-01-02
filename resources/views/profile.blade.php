@extends('layouts.main')

@section('pageTitle', 'Complete Profile')
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
                <form action="/profile" method="post">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="exampleFormControlInput2">Matriculation number</label>
                        <input name="matric_number" type="text" class="form-control" id="exampleFormControlInput2" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="exampleFormControlSelect1">Select your faculty</label>
                        <select name= "faculty" class="form-control" id="faculty" required>
                            <option selected="true" disabled="disabled">Choose Your faculty</option>
                            <option>Science and Science Education</option>
                            <option>Social and Management Sciences</option>
                            <option>Humanities</option>
                        </select>
                    </div>

                    <div class="form-group mb-4 departments" id="science_departments" style="display: none">
                        <label for="exampleFormControlSelect1">Select your department</label>
                        <select name= "department" class="form-control" id="exampleFormControlSelect1" required>
                            <option selected="true" disabled="disabled">Choose Your department</option>
                            <option>Mathematical Sciences</option>
                            <option>Biological Sciences</option>
                            <option>Chemical Sciences</option>
                        </select>
                    </div>

                    <div class="form-group mb-4 departments" id="social_science_departments" style="display: none">
                        <label for="exampleFormControlSelect1">Select your department</label>
                        <select name= "department" class="form-control" id="exampleFormControlSelect1" required>
                            <option selected="true" disabled="disabled">Choose Your department</option>
                            <option>Political Science and International Relations</option>
                            <option>Economics</option>
                            <option>Accounting</option>
                            <option>Business Administration</option>
                            <option>Mass Communication</option>
                        </select>
                    </div>

                    <div class="form-group mb-4 departments" id="humanities_departments" style="display: none">
                        <label for="exampleFormControlSelect1">Select your department</label>
                        <select name= "department" class="form-control" id="exampleFormControlSelect1" required>
                            <option selected="true" disabled="disabled">Choose Your department</option>
                            <option>English and Literary studies</option>
                            <option>History and diplomatic studies</option>
                            <option>French</option>
                            <option>Christian Religious Studies</option>
                        </select>
                    </div>


                    <div>
                        <button class="btn btn-primary" type="submit">Save <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script
        src="{{ asset('assets/js/jquery-3.5.1.slim.min.js') }}"></script>
    <script>
        $('#faculty').on('change',function(){
            $(".departments").hide();
            var selection = $(this).val();
            switch(selection){
                case "Science and Science Education":
                    $("#science_departments").show()
                    break;
                case "Humanities":
                    $("#humanities_departments").show()
                    break;

                case "Social and Management Sciences":
                    $("#social_science_departments").show()
                default:
                    $("#science_departments").hide()
            }
        });
    </script>
@endsection
