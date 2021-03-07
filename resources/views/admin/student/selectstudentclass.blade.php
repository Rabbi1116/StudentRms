@extends('admin/masterTemplate')

@section('title')
Student class
@endsection
@section('page-heading')
Student class
@endsection

@section('mainContent')

<section class="content">

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">

                <div class="card card-default">
                    <div class="card-header">

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('studentresult') }}" method="post"
                            class="col-md-12 justify-content-center">
                            @csrf
                            <div class="row justify-content-center">

                                <div class="form-group">
                                    <h4>Student Class</h4>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">

                                        <select name="class" class="form-control select2"
                                            style="width: 100%; height:50px">

                                            <option selected="selected" disabled>Select</option>

                                            <option value="one">One</option>
                                            <option value="two">Two</option>
                                            <option value="three">Three</option>
                                            <option value="four">Four</option>
                                            <option value="five">Five</option>

                                        </select>
                                    </div>

                                </div>
                                <div>
                                    <button type="submit" class="btn btn-info btn-sm">Submit</button>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection