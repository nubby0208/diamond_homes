<!DOCTYPE html>
<html>
<head>
  <title>Diamond Homes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
	<!--login-->
	<section>
		<div class="container-fluid">
			<div class="row full">
				<div class="col-md-6 text-center logo">
					<p><img src="images/logo.png" alt="logo"></p>
				</div>
				<div class="col-md-6 ">
					<div class="application-page">
						<h1><img src="images/checked.png" alt="sent">&nbsp;&nbsp;APPLICATION RECEIVED</h1>
						<p>Thank You For Signing Up. You will receive an email soon to validate your email.</p>
						<a href="{{url('login')}}"><button type="button" class="btn btn-pri">Go to Login</button></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>