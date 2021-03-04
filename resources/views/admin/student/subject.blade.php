@extends('admin/masterTemplate')

@section('title')
Subject
@endsection

@section('page-heading')
Subject
@endsection

@section('mainContent')
<section class="content">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <form action="{{route('subjectselect')}}" method="POST">

                        @csrf
                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body">

                                <table id="example1" 
                                
                                
                                class="table table-bordered table-striped">
                                    <thead>
                                        <tr>

                                            <th>Select</th>
                                            <th>Subject Name</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($subj as $subject)
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="subject[]" id="input" class="form-control"
                                                    value="{{$subject->id}}">
                                            </td>
                                            <td>{{$subject->title}}</td>
                                        </tr>
                                        @endforeach

                                    </tbody>

                                </table>
                                <div class="border border-light p-3 mb-4">

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">ADD SUBJECT</button>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </form>

                </div>
              
            </div>

        </div>
    </div>
</section>
@endsection