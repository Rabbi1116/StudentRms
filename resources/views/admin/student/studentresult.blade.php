@extends('admin/masterTemplate')

@section('title')
Selected Result
@endsection
@section('page-heading')
Selected Result
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
                    <div class="card-body">
                        <table id="example1" class="table table-bordered ">
                            <col style="width:10%">
                            <col style="width:20%">
                            <col style="width:50%">
                            <col style="width:20%">
                            <thead>

                                <tr>
                                    <th>ON</th>
                                    <th>Student Name</th>
                                    <th>Result</th>
                                    <th>GPA</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($stname as $key => $studentname)

                                <tr>
                                    <td>{{$key+1}}</td>

                                    <td>{{$studentname->name}}</td>
                                    <td>
                                        <table class="table  ">
                                            <tr>
                                                <th>Subject</th>
                                                <th>Grade Point</th>
                                                <th>Number</th>

                                            </tr>
                                            @foreach($result as $result)
                                            <tr class="table-bordered">

                                                <td>{{$result->title}}</td>
                                                <td>{{$result->marks}}</td>
                                                <td>{{$result->grade}}</td>
                                                

                                            </tr>
                                            @endforeach
                                        </table>
                                    </td>

                                    <td></td>
                                </tr>
                                @endforeach

                                </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>


            </div>
        </div>
    </div>

</section>

@endsection