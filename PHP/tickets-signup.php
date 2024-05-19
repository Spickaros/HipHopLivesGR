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
<h2>Singup</h2>
  <form action="includes/singup.inc.php" method="post">
 
  <span class="form-icon"><ion-icon name="person-outline"></ion-icon></span>
  <input type="text" name="uid"placeholder="Username...">
  
  
<span class="form-icon"><ion-icon name="mail-outline"></ion-icon></span>
<input type="text" name="mail" placeholder="Email...">


<span class="form-icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
<input type="password" name="pwd" placeholder="Password...">


<span class="form-icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
<input type="password" name="pwd-repeat" placeholder="Repeat password...">

<!--<div class="remember-forgot">
  <label><input type="checkbox">Remember me</label>
</div>-->

<button type="submit" class="login-submit" name="ticket-btn">Signup</button>
<div class="login-register">
<p>Already have an account?<a class="login-link" href="login.php">Login</a></p>
</div>
 
</form>
</section>
</div>


<!--
    <div class="wrapper">
    <div class="signup-form">
        <section class="section-default">
        <h2>Singup</h2>
        <form class="form-signup" action="includes/singup.inc.php" method="post">
        
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Repeat password">
        <button type="submit" class="singup-submit" name="singup-submit">Singup</button>
    </form>
        </section>

    </div>
    </div>
-->
   

</main>

<?php
require "footer.php";
?>