<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('include.css')
    <style>
        html,
        body {
            /* background-color: #EDEFF0; */
            background-image: url(public/img/admin_background.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;

        }

        #edge {
            border-radius: 10px;
        }

        #glass {
            background: inherit;
        }

        #glass:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            box-shadow: inset 0 0 2000px rgba(255, 255, 255, .5);
            filter: blur(10px);
            background: inherit;
        }

        .fa-user-circle {
            font-size: 70px;
            color: #1c8eff;
        }

        .calue_icon {
            font-size: 35px;
            color: white;
        }

    </style>
</head>

<body id="glass">
    @include('include.nav')
    @include('include.side_bar')
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-5 mt-5">
                <div class="card card-primary" id="edge">
                    <div class="card-header" style="border-radius:10px 10px 0px 0px;">
                        <h3 class="card-title">Admin Login</h3>
                    </div>
                    <center>

                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                                <div class="form-group mt-2">
                                    <p class="card-text">Email address</p>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder=""
                                        style="border-radius:20px;">
                                    <small style="color:#A5A5A5">Enter your email address</small>
                                </div>
                                <div class="form-group">
                                    <p class="card-text">Password</p>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="" style="border-radius:20px;">
                                    <small style="color:#A5A5A5">Enter your password </small>
                                </div>


                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer" id="edge">

                                <button type="submit" class="btn btn-primary"
                                    style="border-radius:10px;">Submit</button>
                            </div>
                        </form>
                    </center>
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-2" style="margin-top:18%;">
                <center>
                    <div class="image">
                        {{-- <img src="{{url('public/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                        alt="User Image"> --}}
                        
                    </div>
                </center>
            </div>
        </div>
    </div>

    @include('include.js')
    @include('include.footer')
</body>

</html>
