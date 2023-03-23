
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
					<p><img src="{{ asset('images/logo.png') }}" alt="logo"></p>
				</div>
				<div class="col-md-6 ">
				   
					<div class="for-page">
					      @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                         @endif
						<h1>FORGOT PASSWORD</h1>
						
                         <form method="POST" action="{{ route('password.email') }}">
                        @csrf
						<p>Email</p>
						<input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                 <button type="submit" class="btn btn-pri">
                                    {{ __('Next') }}
                            </button>
                             </form>  
					
						<p class="small_login"><span><a href="{{url('login')}}">Back to Login</a></span></p>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
