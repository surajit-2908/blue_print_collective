<!DOCTYPE html>
<html lang="en-US">

<head>
    @include('includes.header')
</head>

<body>
	<section class="login-body-bg">
		<div class="login-form">
			<div class="container">
				<div class="login-logo"><img src="{{asset('assets/images/logo-black.png')}}" alt="Hero Fit"></div>
				@yield('content')
				@include('includes.footer-text')
			</div>
		</div>
	</section>
	@include('includes.footer')
</body>

</html>
