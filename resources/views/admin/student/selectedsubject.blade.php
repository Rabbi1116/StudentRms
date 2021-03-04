@extends('admin/masterTemplate')


@section('title')
Selected Subject
@endsection
@section('page-heading')
Selected Subject
@endsection

@section('mainContent')
<div class="card">
    <div class="card-header">

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered ">
            <col style="width:10%">
            <col style="width:45%">
            <col style="width:45%">
            <thead>

                <tr>
                    <th>ON</th>
                    <th>Name</th>
                    <th>Subject</th>

                </tr>
            </thead>
            <tbody>
                @foreach($test as $key=> $student)

                <tr>
                    <td>{{$key+1}}</td>

                    <td>{{$student->name}}</td>
                    <td>
                        <table class="table table-bordered ">
                            <tr class="bg-info">
                                @foreach($subjects as $subjectname)
                                @if($student->student_id == $subjectname->student_id)
                                <td>{{$subjectname->title}}</td>
                                @endif
                                @endforeach
                            </tr>
                        </table>
                    </td>
                </tr>

                @endforeach
                </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection