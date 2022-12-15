@extends('customer.layout')

@section('content-user')

<head>
  <link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>

<body style="background-color:#AFDCEC;">
  <div class="container">
    <div class="forms">
      <div class="form login">
        <span class="title"> Register </span>

        <form action="{{url('/user_create')}}" method="POST">
        @csrf

          <div class="input-field">
            <input type="email" placeholder="Enter your email" name="email" id="email" required />
            <i class="uil uil-envelope icon"></i>
          </div>

          <div class="input-field">
            <input type="password" placeholder="Enter your password" name="password" id="password" required />
            <i class="uil uil-lock icon"></i>
            <i class="uil uil-eye-slash showHidePw" style="cursor: pointer;" onclick="showPass()"></i>
          </div>

          <div class="input-field">
            <input type="password" placeholder="Enter your password" name="confirmPassword" id="confirmPassword" required />
            <i class="uil uil-lock icon"></i>
            <i class="uil uil-eye-slash showHidePw" style="cursor: pointer;" onclick="showConfirmPass()"></i>
          </div>

          <div class="checkbox-text">
            <div class="checkbox-content">
              <input type="checkbox" id="logCheck" />
              <label for="logCheck" class="text">Remember me</label>
            </div>
            <a href="#" class="text"> Forget password?</a>
          </div>

          <div class="input-field button">
            <input type="submit" value="Register Now" />
          </div>
        </form>

        <div class="login-signup">
          <span class="text">Already have a account?
            <a href="{{ url('/login') }}" class="text signup-text">Signin Now</a></span>
        </div>
      </div>
    </div>
  </div>
</body>

<script>
 function showPass() {
  var password = document.getElementById("password");
  if (password.type === "password") {
    password.type = "text";
  } else {
    password.type = "password";
  }
}

function showConfirmPass() {
  var conPassword = document.getElementById("confirmPassword");
  if (conPassword.type === "password") {
    conPassword.type = "text";
  } else {
    conPassword.type = "password";
  }
}
</script>
@endsection