@extends('admin/masterTemplate')



@section('page-heading')
Student Roll
@endsection

@section('title')
Student Roll
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
                                        <th>Roll Number</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($stroll as $key=>$roll)
                                    <tr>
                                    
                                        <td>{{$roll->name}}</td>
                                        <td>{{$roll->number}}</td>

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