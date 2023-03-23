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
  <link rel="stylesheet" href="style.css">
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
                   <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="grey">
                    <div class="login ">
                        <h1>LOG IN</h1>
                        <p>User Name</p>
                      
                          <input id="user_name" type="text" class="@error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete="user_name" autofocus>
                            @error('user_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <p>Password</p>
                           <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <p class="password">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                            </p>
                        <button type="submit" class="btn btn-pri">Login</button>
                        <p class="small_claim">Don't Have An Account ?   <a class="btn btn-link" href="{{ route('register') }}"><span>Sign Up</span></a></p>
                    </div>
                    </div>
                     </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>