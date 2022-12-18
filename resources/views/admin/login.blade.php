<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Login</title>
  <link href="{{ asset('/css/auth.css') }}" rel="stylesheet">
</head>

<body>
  <section>
    <div class="login-box">
      <form action="{{ route('admin-login') }}" method="post">
        @csrf
        <h2>Administrator Login</h2>
        <form>
          <div class="user-box">
            <input type="text" name="email" required id="email">
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required id="password">
            <label>Password</label>
          </div>

          @if ($errors->has('cred_fail'))
            <div class="error-box">
              <p>{{ $errors->first('cred_fail') }}</label>
            </div>
          @endif

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
    </div>
    </div>
  </section>
</body>
</html>