<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="style_reg.css">
</head>
<body>

<div class="container">

  <div class="left">
    <div class="left-content">
      <h1>Join Us!</h1>
      <p>Please create a new account to access the admin system.</p>
    </div>
  </div>

  <div class="right">
    <form class="register-box" method="POST" action="proses_register.php">
      <h2>REGISTER</h2>

      <div class="input-box">
        <input type="text" name="username" placeholder="Username" required>
      </div>
      
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
      </div>

      <button type="submit" class="btn-register">REGISTER</button>

      <div class="login-link">
        <a href="index.php">Already have an account? Login!</a>
      </div>
    </form>
  </div>

</div>

</body>
</html>