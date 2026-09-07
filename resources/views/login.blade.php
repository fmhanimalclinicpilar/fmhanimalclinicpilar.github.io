<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FMH Animal Clinic | Log In</title>

  <link rel="stylesheet" href="{{ asset('css/animal.css') }}">
</head>
<body class="login-page">

  <header>

    <h2 class="logo"><x-clinic-icon name="paw" size="1.2em" /> FMH Animal Clinic</h2>

  </header>

  <main class="login-container">

    <div class="login-card">

      <h1>Welcome Back!</h1>

      <p class="login-description">
        Sign in to continue to your account.
      </p>

      <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="form-group">

          <label for="email">
            Email Address
          </label>

          <input
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email address"
            autocomplete="email"
            required>

        </div>

        <div class="form-group">

          <label for="password">
            Password
          </label>

          <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter your password"
            autocomplete="current-password"
            required>

        </div>

        <div class="login-options">

          <label class="rememberme">

            <input
              type="checkbox"
              id="rememberme"
              name="rememberme">

            Remember Me

          </label>

          <a href="{{ route('password.request') }}">
            Forgot Password
          </a>

        </div>

        <button class="loginbtn" type="submit">
          Login
        </button>

      </form>

      <div class="divider">

        <span>OR</span>

      </div>

      <div class="register">

        <p>

          Don't have an account?

          <a href="{{ route('register') }}">
            Create Account
          </a>

        </p>

      </div>

    </div>

  </main>

</body>
</html>