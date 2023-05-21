<!DOCTYPE html>
<html>
<head>
	<title>isHere - Login</title>
	<link rel="stylesheet" type="text/css" href="css/loginsignin.css">
</head>
<body>
	<div class="login-container">
		<form action="{{ route('tenant.create')}}" method="post" class="user">
			{!! csrf_field() !!}
			<h1>Login</h1>
			<label for="email"><b>email</b></label>
			{{-- <input type="text" placeholder="Enter Username" name="username" required> --}}
			<input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" value="{{old('email')}}">

			<label for="password"><b>Password</b></label>
			{{-- <input type="password" placeholder="Enter Password" name="password" required> --}}
			<input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password" value="{{old('email')}}">

			<button type="submit">Login</button>
			<p>Don't have an account? <a href="{{ url('/register') }}">Register</a></p>
			<p>Go to Homepage <a href="{{ url('/') }}">Home</a></p>
		</form>
	</div>
</body>
</html>
