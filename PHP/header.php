<?php

include 'includes/dbh.inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" media="screen" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
 
<header>
<nav class="nav-header-main">
    
<img src="img/raper.jpg" alt="raper"  width="50px" height="auto"></a>
   
        <a class="links selected" href="home.php">Home</a>
        <a class="links" href="lives.php">Lives</a>
        <a class="links" href="about.php">About us</a>
        <a class="links" href="my-tickets.inc.php">My Tickets</a>
        
        
     <!-- 
    <div class="form-box login"> 
      <form action="includes/login.inc.php" method="post">
        
      <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
      <input type="text" name="mailuid" placeholder="Username/Email...">
      
    
     <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
     <input type="password" name="pwd" placeholder="Password...">
    
   
    <button type="submit" class="btn" name="login-btn">Login</button>
    <div class="signup">
   <button type="submit" class="btn"><a class="signup-link" href="singup.php">Signup</a></button>
    </div>
  </form>

  <form  action="includes/logout.inc.php" method="post">
       <button type="submit" class="btn" name="logout-submit">Logout</button>
    </form>
    </div>-->

<img src="img/person_login.png" class="login-img" onclick="toggleMenu()">
    <div class="sub-menu-wrap" id="subMenu">
      <div class="sub-menu">
        <div class="user-info">
          
    <?php if (!isset($_SESSION['loggedin'])) { ?>
        <a href="login.php">Login /</a> <a href="singup.php">Signup</a>
    <?php } else if(isset($_SESSION['loggedin'])){ ?>
      
        <p class='user'><?php echo $_SESSION['userUid']; ?></p>
        <p class="mail"><?php echo $_SESSION['mailUid'] . "<br>"?></p>
        <button type="submit" class="logout-btn"><a href="includes/logout.inc.php">Logout</a></button>
    <?php } ?>
</div>

        
      </div>
    </div>    
    

<script src="script.js"></script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="filter.js"></script>
<script>
  let subMenu = document.getElementById('subMenu');
  function toggleMenu(){
    subMenu.classList.toggle('open-menu');

  }
</script>
</header>