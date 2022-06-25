<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{url('images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/login.css')}}">
	<link href="{{url('css/registeration.css')}}" rel="stylesheet" media="all">
<!--===============================================================================================-->

</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
				<form method="POST" action="/users/authenticate" class="login100-form validate-form">
					@if(Session::get('fail'))
						<div class="alert alert-danger">{{ Session::get('fail') }}</div>
					@endif
					@csrf
					<span class="login100-form-title">
						Member Login
					</span>
						<div class="wrap-input100 validate-input">
					<!-- <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz"> -->
						<input class="input100" type="email"  value="{{ old('email') }}" name="email" placeholder="Nhập Email">
						@error('email')
						<p class="text-red-500 text-xs mt-1">{{$message}}</p>
						@enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" >
					<!-- <div class="wrap-input100 validate-input" data-validate = "Password is required"> -->
						<input class="input100" type="password" name="password" placeholder="Nhập mật khẩu">
						@error('password')
						<p class="text-red-500 text-xs mt-1">{{$message}}</p>
						@enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-10">
						<a class="txt2" href="register">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
