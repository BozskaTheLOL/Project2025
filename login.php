
<head>
    <link rel="stylesheet" href="/Bozska/New/login.css">
    <script src="/Bozska/New/login.js"></script>
</head>
<body>
    

<section class="forms-section">
  <h1 class="section-title">Belépés</h1>
  <div class="forms">
    <div class="wrapper is-active">
      <button type="button" class="switch slogin">Login
        <span class="underline"></span>
      </button>
      <form class="form login-form">
        <fieldset>
          <legend>Please, enter your email and password for login.</legend>
          <div class="input-block">
            <label for="login-email">E-mail</label>
            <input id="login-email" type="email" required>
          </div>
          <div class="input-block">
            <label for="login-password">Password</label>
            <input id="login-password" type="password" required>
          </div>
        </fieldset>
        <button type="submit" class="login-btn">Login</button>
      </form>
    </div>
    <div class="wrapper">
      <button type="button" class="switch ssignup">
        Sign Up
        <span class="underline"></span>
      </button>
      <form class="form signup-form">
        <fieldset>
          <legend>Please, enter your email, password and password confirmation for sign up.</legend>
          <div class="input-block">
            <label for="signup-email">E-mail</label>
            <input id="signup-email" type="email" required>
          </div>
          <div class="input-block">
            <label for="signup-password">Password</label>
            <input id="signup-password" type="password" required>
          </div>
          <div class="input-block">
            <label for="signup-password-confirm">Confirm password</label>
            <input id="signup-password-confirm" type="password" required>
          </div>
        </fieldset>
        <button type="submit" class="signup-btn">Continue</button>
      </form>
    </div>
  </div>
</section>
</body>