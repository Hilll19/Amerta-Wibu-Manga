<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Amerta Manga</title>
  <link href="{{ asset('/css/auth.css') }}" rel="stylesheet">
</head>

<body>
  {{-- VIDEO BACKGROUND --}}
  <video autoplay muted loop id="bg-video">
    <source src="{{ asset('/video/bg-video-web.mp4')}}" type="video/mp4" />
  </video>

  <section>
    <div class="login-box">
      <form action="{{ route('process-login') }}" method="post">
        @csrf
        <h2>Login</h2>
        <form>
          <div class="user-box">
            <input type="text" name="email" required id="email">
            <label>Email</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required id="password">
            <label>Password</label>
          </div>
          <div class="submit-button">
            <div class="btn-submit">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <input type="submit" name="submit" value="Login">
            </div>
          </div>
        </form>

        <div class="register-now">
          <p>Don't have an account? <a href="/register">Register now</a></p>
        </div>
    </div>
        <!-- <div class="user-box">
          <input type="email" name="email" placeholder="Enter your Email" required class="box" id="email" />
        </div>
        <div class="user-box">
          <input type="password" name="password" placeholder="Enter your Password" required class="box" id="password" />
        </div>
          <input type="submit" name="submit" value="login now" class="btn" />
        <p>Don't have an account? <a href="/register">Register now</a></p> -->
    </div>
  </section>
</body>
</html>