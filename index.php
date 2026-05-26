<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

  <div class="left">
    <div class="left-overlay"></div>

    <div class="logo-container">
      <img src="https://i.namu.wiki/i/NEjcf-MynEjYiccjszRgIQOCB9MizABK4LfEBAuGlOe4SvttmHFy_SmViJQb-wJ9blFuadnDqdO-F8hvb-nvDA.webp" alt="logo" class="logo-img">
    </div>
    
    <div class="left-content">
      <h1>Hello Admin!</h1>
      <p>Please login to your admin account.</p>
    </div>
  </div>

  <div class="right">
    <form class="login-box" method="POST" action="login.php">
      <h2>LOGIN</h2>

      <div class="input-box">
        <input type="text" name="username" placeholder="Username" required>
      </div>
      
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
      </div>

      <button type="submit" class="btn-login">LOGIN</button>

      <div class="register">
        <a href="register.php">Don't have an account? Register!</a>
      </div>

      <?php
      if (isset($_SESSION['error'])) {
        echo "<p style='color:red; text-align:center; margin-top:15px;'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);
      }
      ?>
    </form>
  </div>

</div>

</body>
</html>