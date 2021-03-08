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
                            <col style="width:20%;">
                            <col style="width:60%">
                            <col style="width:10%">
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
                                            @foreach($result as $results)
                                            <tr class="table-bordered">
                                            @if($results->student_id == $studentname->student_id)

                                                <td>{{$results->title}}</td>
                                                <td>{{$results->marks}}</td>
                                                <td>{{$results->grade}}</td>
                                                

                                                @endif
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