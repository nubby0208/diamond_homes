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
  <!-- Scripts -->
  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
   
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
                    <div class="grey2">
                    <h1>SIGN UP</h1>
                     <form method="POST" action="{{ route('register') }}">
                        @csrf
                     
                        <div class="signup ">
                            
                            <div class="row">
                                <div class="col-md-6">
                                      <p>Title</p>
                                      <select  class="@error('title') is-invalid @enderror" name="title">
                                          <option value="Mr">Mr.</option>
                                          <option value="Mrs">Mrs</option>
                                          <option value="Ms">Ms</option>
                                          <option value="Miss">Miss</option>
                                      </select>
                                  
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>
                                <div class="col-md-6">
                                    <p>Username</p>
                                    <input type="text" placeholder="" name="user_name" autocomplete="off" value="{{ old('user_name') }}" class="@error('user_name') is-invalid @enderror">
                                     @error('user_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                       <p>First Name</p>
                                        <input type="text" placeholder="" name="first_name" value="{{ old('first_name') }}" class="@error('first_name') is-invalid @enderror" autocomplete="off">
        
                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                </div>
                                <div class="col-md-6">
                                   <p>Last Name</p>
                                    <input type="text" placeholder="" name="last_name" value="{{ old('last_name') }}" class="@error('last_name') is-invalid @enderror" autocomplete="off">
                                     @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                       <p>Email</p>

                                        <input type="text" placeholder="" name="email"  value="{{ old('email') }}"  class="@error('email') is-invalid @enderror" autocomplete="off">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                </div>
                                <div class="col-md-6">
                                    <p>Phone No.</p>
                                    <input type="text" placeholder="" name="phone" value="{{ old('phone') }}" class="@error('last_name') is-invalid @enderror" autocomplete="off">
                                     @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Password</p>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" autocomplete="off">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>
                                <div class="col-md-6">
                                  
                                    <p>Re-enter Password</p>
                                    <input  placeholder="" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" autocomplete="off">
                                
                                     @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Address</p>
                                    <input type="text" placeholder="" name="address"  value="{{ old('address') }}"  class="@error('address') is-invalid @enderror" autocomplete="off">
    
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>
                                 <div class="col-md-6">
                                     <p>City</p>
                                     
                                      <select  class="@error('city') is-invalid @enderror" name="city">
                                          <option value="0">Select City</option>
                                          <option value="Auckland">Auckland</option>
                                          <option value="Wellington">Wellington</option>
                                          <option value="Hamilton">Hamilton</option>
                                          <option value="Whangarei">Whangarei</option>
                                      </select>
                              
                                     @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>
                            
                            </div>
                            
                            <div class="row">
                               
                                <div class="col-md-6">
                                  
                                    <p>Country</p>
                                    
                                      <input type="text" placeholder="" name="address"  class="@error('country') is-invalid @enderror" value="New Zealand" autocomplete="off" style="background: #ddd;" disabled>
                                   
                                   
                                     @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>
                                <div class="col-md-6">
                                <p>Language</p>
                                 <select  class="@error('language') is-invalid @enderror" name="language">
                                          <option value="0">Select language</option>
                                          <option value="English">English</option>
                                          <option value="Mandarin">Mandarin</option>
                                  </select>
                               
                                 @error('language')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            
                            
                          <div class="row">
                            
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-pri sign">Sign Up</button>
                                  <p class="small_claim">Have already An Account ?   <a class="btn btn-link" href="{{ route('login') }}"><span>Login Here</span></a></p>
                            </div>
                            
                        </div>
                        </div>
                        
                    </form>
                </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>