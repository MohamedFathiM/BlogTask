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
<form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="register is-active">
          <div class="form-element">
            <span><i class="fa fa-user"></i></span><input type="text" name="name" value="{{old('name')}}" placeholder="Full Name" autocomplete="name" autofocus/>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
           @enderror
          </div>
          <div class="form-element">
            <span><i class="fa fa-envelope"></i></span><input type="email" name="email" value="{{old('email')}}" placeholder="Your Email Address" autocomplete='email'/>
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
              </span>                
            @enderror
          </div>

          <div class="form-element">
              <span><i class="fa fa-image"></i></span><input type="file" name="image"   />
              @error('image')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
             @enderror
            </div>

          <div class="form-element">
            <span><i class="fa fa-lock"></i></span><input type="password" name="password" placeholder="Password" />
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
           @enderror
          </div>
          <div class="form-element">
            <span><i class="fa fa-lock"></i></span><input type="password" name="password_confirmation" placeholder="Re-Enter Password"/>
          </div>
          <button type="submit" class="btn-register">register</button>
        </div>
    </form>
    <div class="login-view-toggle is-active">
    <div class="login-toggle is-active">Already have an account? <a href="login">Login</a></div>
    </div>
</div>
</form>
<script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/js/Loginscript.js')}}"></script>
  
</body>
</html>
