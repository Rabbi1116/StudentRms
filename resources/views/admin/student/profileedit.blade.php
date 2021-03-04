@extends('admin/masterTemplate')



@section('page-heading')
Profile  Edit
@endsection

@section('title')
Profile  Edit
@endsection

@section('mainContent')

<div class="container bootstrap snippet">


    </hr><br>

    <div class="row">

        <div class="col-sm-12">

            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>

                    <form class="form" action="{{'update/'.$profile->id}}" enctype="multipart/form-data" method="POST"
                        id="registrationForm">
                        <div class="text-center">
                            <img src="{{$profile->image}}" class="profile-user-img img-fluid img-circle" alt="avatar">
                            <h6>Upload a different photo...</h6>
                            <input type="file" name="image" class="text-center center-block file-upload">
                           
                        </div>

                        @csrf
                        <div class="col-sm-6">

                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name">
                                    <h4>Student Name</h4>
                                </label>


                                <input type="text" class="form-control" name="name" value="{{ $profile->name }}"
                                    placeholder="Full Name">



                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name">
                                    <h4>Father Name</h4>
                                </label>

                                <input type="text" class="form-control" name="fatherName"
                                    value="{{ $profile->fatherName }}" placeholder="Father Name">

                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="phone">
                                    <h4>Mother Name</h4>
                                </label>

                                <input type="text" class="form-control" value="{{ $profile->motherName }}"
                                    name="motherName" placeholder="Mother Name">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="mobile">
                                    <h4>Class</h4>
                                </label>

                                <select class="form-control" name="class">

                                    <option value="Class" selected disabled>Class</option>
                                    <option {{ $profile->class == "one" ? 'selected' : '' }} value="one">One</option>
                                    <option {{ $profile->class == "two" ? 'selected' : '' }} value="two">Two</option>
                                    <option {{ $profile->class == "three" ? 'selected' : '' }} value="three">Three
                                    </option>
                                    <option {{ $profile->class == "four" ? 'selected' : '' }} value="four">Four</option>
                                    <option {{ $profile->class == "five" ? 'selected' : '' }} value="five">Five</option>


                                </select>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email">
                                    <h4>Phone Number</h4>
                                </label>

                                <input type="text" class="form-control" value="{{ $profile->phone }}" name="phone"
                                    placeholder="Phone Number">

                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">

                                <label class="form-check form-check-inline" for="email">
                                    <h4>Gender</h4>
                                </label></br>

                                <div class="btn-group">
                                    <input type="radio" {{ $profile->gender == "male" ? 'checked' : '' }} class="btn-check" name="gender" id="option2" autocomplete="off"
                                        value="male" />
                                    <label class="btn btn-secondary" for="option2">Male</label>

                                    <input type="radio" {{ $profile->gender == "female" ? 'checked' : '' }} class="btn-check" value="female" name="gender" id="option3"
                                        autocomplete="off" />
                                    <label class="btn btn-secondary" for="option3">Female</label>
                                </div>


                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password">
                                    <h4>Address</h4>
                                </label>

                                <input type="text" class="form-control" name="contact" value="{{ $profile->contact }}"
                                    placeholder="Address">

                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password2">
                                    <h4>Password</h4>
                                </label>

                                <input type="password" class="form-control" name="password2" id="password2"
                                    placeholder="password2">

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i
                                        class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>
                                    Reset</button>
                            </div>
                        </div>
                    </form>

                    <hr>

                </div>

            </div>
        </div>


        @endsection