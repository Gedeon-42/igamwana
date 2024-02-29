<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student ms</title>
    <link rel="stylesheet" href="/assets/css/dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-center">
        <div class="form-container">
            <form class="login-form" method="POST" action="/register">
                @csrf
                <h1 class="text-center display-2 h1-login">Create free Account</h1>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="ul-error">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="form-flex">
                    <label for="exampleInputEmail1" class="form-label"> Your Name</label>
                    <input type="text" name="name" value="{{old('name')}}">
                    @error('name')
                        <p class="errors">{{$message}}</p>
                    @enderror
                  </div>
                <div class="form-flex">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" value="{{old('email')}}">
                  @error('email')
                  <p class="errors">{{$message}}</p>
              @enderror
                </div>
                <div class="form-flex">
                  <label for="exampleInputPassword1"  class="form-label">Password</label>
                  <input type="password" name="password" value="{{old('password')}}">
                  @error('password')
                  <p class="errors">{{$message}}</p>
              @enderror
                  <label for="exampleInputPassword1"  class="form-label">Confirm Password</label>
                  <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" >
                  @error('password_confirmation')
                  <p class="errors">{{$message}}</p>
              @enderror
                  <div class="flex-password" >
                    <div class="keep-me">
                        <input type="checkbox">
                        <p>keep me logged in</p>
                    </div>
                   <a href="">Forgot Password ?</a>
                  </div>
                  <button type="submit" >sign up</button>
                </div>    
                  
                </div>
                
              </form>
                </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</body>
</html>