@extends('admin/masterTemplate')

@section('title')
Setting
@endsection
@section('page-heading')
Setting
@endsection

@section('mainContent')

<section class="content ">

    <div class="container-fluid ">

        <div class="row ">
            <div class="col-12">

                <div class="card card-warning">

                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title">General Setting</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body ">
                        <form method="post" action="{{ route('setting_web') }}">

                            @csrf

                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- text input -->
                                    <div class="form-group ">
                                        <label>School Name</label>
                                       
                                        <input type="text" name="school_name" value="{{$setup->school_name}}" class="form-control" placeholder="Enter ...">
                                   
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Copyright text</label>
                                        <textarea class="form-control"   name="copyright" rows="3" placeholder="Enter ...">{{$setup->copyright_text}}</textarea>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-info ">Save</button>
                            <!-- input states -->

                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        </div>
    </div>
</section>

@endsection