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
                                    <td style="padding:100px 0; text-align:center;">{{$key+1}}</td>

                                    <td style="padding:100px 0; text-align:center;">{{$studentname->name}}</td>
                                    <td>
                                        <table class="table  ">
                                            <tr>
                                                <th>Subject</th>
                                                <th>Number</th>
                                                <th>Grade Point</th>
                                                <th>GPA</th>

                                            </tr>
                                            <?php $k = 0; ?>
                                            @foreach($result as $results)
                                            <tr class="table-bordered">

                                                @if($results->student_id == $studentname->student_id)

                                                @if($results->marks < 33) 

                                                <?php $k++; ?>

                                                 @endif
                                                 
                                                <td>{{$results->title}}</td>
                                    <td>{{$results->marks}}</td>
                                    <td>{{$results->grade_point}}</td>
                                    <td>{{$results->grade}}</td>

                                    @endif
                                </tr>

                                @endforeach
                                <tr>
                                    <th style="border: none;text-align:right">Total:</th>
                                    <th style="border: none;">{{$studentname->number}}</th>
                                </tr>
                        </table>

                        </td>

                        <td style=" padding-top:100px; text-align:center;">
                            <h6>
                                <b>
                                    @if($k > 0)
                                    {{ 'Faild in : '.$k.' Subject'}}
                                    @else

                                    {{$studentname->pointes/5}}

                                    @endif
                                </b>
                            </h6>
                        </td>
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