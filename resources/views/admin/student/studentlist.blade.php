@extends('admin/masterTemplate')


@section('title')
Student List
@endsection
@section('page-heading')
Student List
@endsection

@section('mainContent')
<section class="content">

    <div class="container-fluid">


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">



                    </div>
                    <!-- /.card-header -->
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Fother Name</th>
                                        <th>Mother Name</th>
                                        <th>Phone</th>
                                        <th>Class</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $student as $list)
                                    <tr>

                                        <td>{{$list->name}}</td>
                                        <td>{{$list->fatherName}}</td>
                                        <td>{{$list->motherName}}</td>
                                        <td>{{$list->phone}}</td>
                                        <td>{{$list->class}}</td>
                                        <td>{{$list->contact}}</td>
                                        @if($list->status == 0)
                                        <td><a href=""><button class="btn btn-success">Active</button></a></td>
                                        @elseif($list->status == 1)
                                        <td><a href=""><button class="btn btn-danger">Inactive</button></a></td>
                                        @endif

                                    </tr>
                                    @endforeach

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection