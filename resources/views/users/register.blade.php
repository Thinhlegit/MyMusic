<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registeration</title>

    <!-- Icons font CSS-->
    <link href="{{url('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{url('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{url('css/registeration.css')}}" rel="stylesheet" media="all">
    <!--  -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                colors: {
                    laravel: '#ef3b2d',
                },
                },
            },
        }
    </script>
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-100 p-b-90 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title ">Đăng Ký Thành Viên</h2>
                    <form method="POST" enctype="multipart/form-data" action="/users">
                        @csrf
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">name</label>
                                    <input class="input--style-4" type="text" name="name" value="{{old('name')}}">
                                    @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password" value="{{old('password')}}">
                                    @error('password')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" value="{{old('email')}}">
                                    @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-2">
                              <div class="input-group">
                                    <label for="password2" class="label inline-block text-lg mb-2">
                                    Confirm Password
                                    </label>
                                    <input type="password"  class="input--style-4" name="password_confirmation"
                                    value="{{old('password_confirmation')}}" />
                                    @error('password_confirmation')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                              </div>
                            </div>
                        </div>
                        <div class="row row-space">
                             <!-- img -->
                            <div class="col-2">
                                    <label for="img" class="file">
                                        <input name="img" type="file" class="rounded-lg border rounded" >
                                    <span class="file-custom"></span>
                                    </label>
                            </div>
                            <div class="col-2 goback">
                                <a href="/login">
                                    Already Registered ! Login Here
                                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="p-t-30 ">
                              <button class="btn btn--radius-2 submit" style="background: #55dbb1;" type="submit">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
