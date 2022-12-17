<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <link href="{{ asset('/css/auth.css') }}" rel="stylesheet">
</head>

<body> 
  {{-- VIDEO BACKGROUND --}}
  <video autoplay muted loop id="bg-video">
    <source src="{{ asset('/video/bg-video-web.mp4')}}" type="video/mp4" />
  </video>

  <section>
    <div class="login-box">
      <form action="{{ route('process-register') }}" method="post">
        @csrf
        <h2>REGISTER</h2>
        <form>
        <div class="user-box">
            <input type="text" name="name" required id="name">
            <label>Name</label>
          </div>
          <div class="user-box">
            <input type="text" name="email" required id="email_address">
            <label>Email</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required id="password">
            <label>Password</label>
          </div>
          <div class="user-box">
            <input type="password" name="confirm_password" required>
            <label>Confirm Password</label>
          </div>

          @if ($errors->has('pass_not_match'))
            <div class="error-box">
              <p>Password and confirm password not match</label>
            </div>
          @endif

          <div class="submit-button">
            <div class="btn-submit">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <input type="submit" name="submit" value="Register"/>
            </div>
          </div>

        </form>
        <div class="register-now">
          <p>Already have an account? <a href="/login">Login now</a></p>
        </div>
        
      
        
        <!-- <input type="text" name="name" placeholder="Enter your Name" required class="box" id="name">
        <input type="email" name="email" placeholder="Enter your Email" required class="box" id="email_address">
        <input type="password" name="password" placeholder="Enter your Password" required class="box" id="password">
        <input type="password" name="cpassword" placeholder="Confirm your Password" required class="box">
        <input type="submit" name="submit" value="register now" class="btn">
        <p>Already have an account? <a href="/login">Login now</a></p> -->
      </form>
    </div>
  </section>
</body>

</html>