@extends('admin/masterTemplate')

@section('page-heading')
Profile
@endsection

@section('title')
Profile
@endsection

@section('mainContent')
<section class="content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{$userAuth->image}}" alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center">{{$userAuth->name}}</h3>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Father Name</b> <a class="float-right">{{$userAuth->fatherName}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Mother Name</b> <a class="float-right">{{$userAuth->motherName}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Phone</b> <a class="float-right">{{$userAuth->phone}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Address</b> <a class="float-right">{{$userAuth->contact}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Gender</b> <a class="float-right">{{$userAuth->gender}}</a>
                            </li>
                        </ul>
                        <a href="{{ route('profileedit')}}" class="btn btn-primary btn-block"><b>Edit Your Profile</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  

</section>






@endsection