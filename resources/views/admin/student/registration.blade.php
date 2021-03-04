<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width           = device-width, initial-scale                                 = 1">
    <title>AdminLTE 3 | Log in</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <!-- Google Font                              : Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family                           = Source+Sans+Pro                 : 300,400,400i,700&display                   = fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
</head>

<body class="register-page" style="min-height: 542px;">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h1"><b>Student </b><i class="fas fa-registered    "></i></a>
            </div>
            <div class="card-body">


                <form action="/registration" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Full name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>

                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span id="" class="fas fa-envelope-square"></span>

                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">

                        <span id="error_email"></span>

                    </div>
                    <div class="input-group mb-3">
                        <select class="form-control" name="class">
                            <option value="Class" selected disabled>Class</option>
                            <option value="one">One</option>
                            <option value="two">Two</option>
                            <option value="three">Three</option>
                            <option value="four">Four</option>
                            <option value="five">Five</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-graduation-cap"></span>


                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone-square-alt"></span>

                            </div>
                        </div>
                    </div>
                    <span id="error_phone"></span>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="contact" placeholder="Your Address">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-address-card"></span>

                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-control" name="gender">
                            <option value="Class" selected disabled>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>

                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-venus-mars"></span>

                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>

                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <button type="submit" id="register" class="btn btn-primary btn-block">Register</button>
                    </div>
                    {{ csrf_field() }}
                    <!-- /.col -->
            </div>
            </form>

            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>


</body>

</html>
<script>
    $(document).ready(function() {

        $('#email').blur(function() {
            var error_email = '';
            var email = $('#email').val();
            var _token = $('input[name="_token"]').val();
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!filter.test(email)) {
                $('#error_email').html('<label class="text-danger">Invalid Email</label>');
                $('#email').addClass('has-error');
                $('#register').attr('disabled', 'disabled');
            } else {
                $.ajax({
                    url: "{{ route('email_available.check') }}",
                    method: "POST",
                    data: {
                        email: email,
                        _token: _token
                    },
                    success: function(result) {
                        //  alert(result);
                        if (result == 'unique') {
                            $('#error_email').html('<label class="text-success">Email Available</label>');
                            $('#email').removeClass('has-error');
                            $('#register').attr('disabled', false);
                        } else {
                            $('#error_email').html('<label class="text-danger">Email not Available</label>');
                            $('#email').addClass('has-error');
                            $('#register').attr('disabled', 'disabled');
                        }
                    }
                })
            }
        });

        $('#phone').blur(function() {
            var error_phone = '';
            var phone = $('#phone').val();
            var _token = $('input[name="_token"]').val();
            var filter = /^([0-10])/;
         
            if (!filter.test(phone)) {
               
                $('#error_phone').html('<label class="text-danger">Invalid phone number</label>');
                $('#phone').addClass('has-errors');
                $('#register').attr('disabled', 'disabled');
            } else {
                $.ajax({
                    url: "{{ route('phone_available.phnchk') }}",
                    method: "POST",
                    data: {
                        phone: phone,
                        _token: _token
                    },
                    success: function(aaaaa) {
                      
                        if (aaaaa == 'unique') {
                            $('#error_phone').html('<label class="text-success">Phone Available</label>');
                            $('#phone').removeClass('has-errors');
                            $('#register').attr('disabled', false);
                        } else {
                            $('#error_phone').html('<label class="text-danger">Phone not Available</label>');
                            $('#phone').addClass('has-errors');
                            $('#register').attr('disabled', 'disabled');
                        }
                    }
                })
            }
        });
    });

 
</script>