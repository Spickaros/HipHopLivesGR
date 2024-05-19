<?php
require "header.php";
?>

<main>
 
<style>
    body {
  margin: 0; /* Remove default margin */
  padding: 0; /* Remove default padding */
  background-image: url('img/grey-back.jpg');
  background-size: cover;
  background-position: center;
  min-height: 100vh;
}
</style>


 
<div class="form-box signup"> 
<section class="section-default">
<h2>Login</h2>
  <form action="includes/login.inc.php" method="post">
  
<span class="form-icon"><ion-icon name="mail-outline"></ion-icon></span>
<input type="text" name="mailuid" placeholder="Email...">


<span class="form-icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
<input type="password" name="pwd" placeholder="Password...">


<!--<div class="remember-forgot">
  <label><input type="checkbox">Remember me</label>
</div>-->

<a href="my-tickets.php"><button type="submit" class="login-submit" name="login-submit">Login</button></a>
<div class="login-register">
<p>Don't have an account?<a class="login-link" href="singup.php">Signup</a></p>
</div>
 
</form>
</section>
</div>
</main>
