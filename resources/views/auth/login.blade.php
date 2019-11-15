<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/Loginstyle.css') }}">
    <title></title>
    <style>
        .invalid-feedback{
          color:red !important;
          display:inline !important;
        }
      
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="login is-active">
          <div class="profile"><i class="fa fa-camera fa-2x"></i></div>
          <form action="{{ route('login') }}" method="POST">
            @csrf
          <div class="form-element">
            <span><i class="fa fa-envelope"></i></span><input type="email" placeholder="Your Email Address" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" autocompelete='email' autofocus/>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>
          <div class="form-element">
            <span><i class="fa fa-lock"></i></span><input type="password" placeholder=" Password" @error('password') is-invalid @enderror name="password"  autocompelete='email'/>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>
          <button type="submit" class="btn-login">login</button>
        </div>
       </form>
       
      

        <div class="login-view-toggle">
        <div class="sign-up-toggle is-active">Don't have an account? <a href="register">Sign Up</a></div>
        </div>
   
    <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/Loginscript.js')}}"></script>
      
</body>
</html>
