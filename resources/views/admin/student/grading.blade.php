@extends('admin/masterTemplate')

@section('page-heading')
Grading
@endsection

@section('title')
Grading
@endsection

@section('mainContent')
<section class="content">
    <div class="container-fluid">


        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row" method="post">
                    @csrf
                    <div class="col-12">
                        <div class="form-group">
                            <label>Student Name:</label>
                            <select id="studentname" onchange="getSubjectList(this.value)" class="select2" style="width: 100%; padding:0 0 10px 0;">
                                <option value="0">Select Student</option>
                                @foreach($student as $name)
                                <option value="{{$name->student_id}}">{{$name->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 offset-md-3">

                <!-- /.card-header -->
                <div class="card-body p-0">
                    <form action="{{ route('markadd') }}" method="post">

                        @csrf
                        <div id="showList" style='text-align:center'>
                            
                        </div>
                        <button id="btn" type="submit" class="btn btn-primary">Add Marks</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

<script>
    function getSubjectList(studentId) {
        var _token = $('input[name="_token"]').val();
        $.ajax({

            url: "{{ route('subjectname') }}",
            method: "post",
            data: {
                studentId: studentId,
                _token: _token

            },
            dataType: "html",
            success: function(data) {
                // alert(data);
                $("#showList").html(data);
            }
        });
    }
</script>