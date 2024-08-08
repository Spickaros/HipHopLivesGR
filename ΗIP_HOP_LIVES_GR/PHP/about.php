<?php
session_start();
include 'includes/dbh.inc.php';
?>


<?php
require "header.php";
?>
<!DOCTYPE html>
<html>

<head>
  <title>W3.CSS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <style>
       .sub-menu {
    /* Existing CSS properties */
    display: flex;
    justify-content: center; /* Center items horizontally */
    align-items: center; /* Center items vertically */
}

/* Adjust the logout button */
.logout-btn {
    /* Existing CSS properties */
    position: absolute; /* Remove this property */
    top: 85px; /* Remove this property */
    right: 5px; /* Remove this property */
    padding-top: 0; /* Remove this property */
}
.sub-menu a:hover {
   color: rgb(68, 68, 68);
}

.sub-menu p {
   margin-right: 100px; /* Remove negative margin */
   font-style: italic;
   font-weight: 300;
   margin-bottom: -15px; /* Adjust the margin-top value */
}
        @font-face{
   font-family:juraGR;
   src:url(fonts/Jura-Medium.otf)
   }
   .carousel-caption {
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column; /* Align the items vertically */
    }
    .full-screen {
      height: 100vh;
      width: 100vw;
      overflow: hidden;
      position: relative;
    }

    .mySlides {
      display: none;
      height: 900px;
  width: 1000px;
  object-fit: cover;
    }

    .w3-content {
      max-width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
    .fullscreen-box {
  position: absolute;
  top: -950px;
  left: -600px;
  width: 3800px;
  height: 1000px;
  background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.8), rgba(128, 128, 128, 0.2));
  animation: fadeIn 2s; /* Add a smooth fade-in animation */
  text-align: -20px;
}
.home-box1 {
  position: absolute;
  top: 250px;
  left: -10px;
  width: 1500px;
  height: 500px;
  animation: fadeIn 2s; /* Add a smooth fade-in animation */
  font-size: large;
  
}
.home-box {
  position: absolute;
  top: 250px;
  left: -10px;
  width: 1500px;
  height: 500px;
  animation: fadeIn 2s; /* Add a smooth fade-in animation */
  font-size: large;
  
}

.home-box1 p{
  font-family:'Jura',juraGR;
  margin-top: 300px;
  width: 500px;
  margin-left: 900px;
}
.home-box p{
  font-family:'Jura',juraGR;
  margin-top: 300px;
  width: 500px;
  margin-left: 900px;
}



@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

  </style>
</head>

<body id="app-parent">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/lex-petra (1).jpg" alt="lex">
      <div class="carousel-caption d-none d-md-block">
        <div class="fullscreen-box">
        <div class="home-box1">
        <p >Το Hip Hop Lives GR είναι μια ιστοσελίδα που παρέχει πληροφορίες για διάφορες hip-hop εκδηλώσεις στην πόλη σου. Εάν εγγραφείς στον ιστότοπο, μπορείς να αποθηκεύσεις τις προτιμήσεις σου, ώστε να λαμβάνεις σχετικά email. Αυτά τα email θα περιλαμβάνουν ενημερώσεις για μελλοντικά hip-hop events που ίσως σε ενδιαφέρουν. 
        Επιπλέον, μπορείς να αποθηκεύσεις τα εισιτήριά σου στον ιστότοπο, έτσι ώστε να έχεις εύκολη πρόσβαση σε αυτά και να τα διαχειρίζεσαι από εκεί. Αυτό σου παρέχει τη δυνατότητα να έχεις μια κεντρική τοποθεσία για την πληροφόρηση και τη διαχείριση όλων των σχετικών σου αναγκών για το hip-hop. <a href="singup.php">Κάνε την εγγραφη σου τωρα!</a> </p>
        <?php include 'footer.php' ?>
      </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/logos_timis_novel_729_theatro_petras_inexarchiagr_01.jpg" alt="lt">
      <div class="carousel-caption d-none d-md-block">
      <div class="fullscreen-box">
        <div class="home-box">
        <p >Το Hip Hop Lives GR είναι μια ιστοσελίδα που παρέχει πληροφορίες για διάφορες hip-hop εκδηλώσεις στην πόλη σου. Εάν εγγραφείς στον ιστότοπο, μπορείς να αποθηκεύσεις τις προτιμήσεις σου, ώστε να λαμβάνεις σχετικά email. Αυτά τα email θα περιλαμβάνουν ενημερώσεις για μελλοντικά hip-hop events που ίσως σε ενδιαφέρουν. 
        Επιπλέον, μπορείς να αποθηκεύσεις τα εισιτήριά σου στον ιστότοπο, έτσι ώστε να έχεις εύκολη πρόσβαση σε αυτά και να τα διαχειρίζεσαι από εκεί. Αυτό σου παρέχει τη δυνατότητα να έχεις μια κεντρική τοποθεσία για την πληροφόρηση και τη διαχείριση όλων των σχετικών σου αναγκών για το hip-hop. <a href="singup.php">Κάνε την εγγραφη σου τωρα!</a> </p>
        <?php include 'footer.php' ?>  
      </div>
        </div>
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/dani-live (1) (1).jpg" alt="dani">
      <div class="carousel-caption d-none d-md-block">
      <div class="fullscreen-box">
        <div class="home-box">
        <p >Το Hip Hop Lives GR είναι μια ιστοσελίδα που παρέχει πληροφορίες για διάφορες hip-hop εκδηλώσεις στην πόλη σου. Εάν εγγραφείς στον ιστότοπο, μπορείς να αποθηκεύσεις τις προτιμήσεις σου, ώστε να λαμβάνεις σχετικά email. Αυτά τα email θα περιλαμβάνουν ενημερώσεις για μελλοντικά hip-hop events που ίσως σε ενδιαφέρουν. 
         Επιπλέον, μπορείς να αποθηκεύσεις τα εισιτήριά σου στον ιστότοπο, έτσι ώστε να έχεις εύκολη πρόσβαση σε αυτά και να τα διαχειρίζεσαι από εκεί. Αυτό σου παρέχει τη δυνατότητα να έχεις μια κεντρική τοποθεσία για την πληροφόρηση και τη διαχείριση όλων των σχετικών σου αναγκών για το hip-hop. <a href="singup.php">Κάνε την εγγραφη σου τωρα!</a> </p>
         <?php include 'footer.php' ?>
        </div>
        </div>
    </div>
  </div>
  </div>
  </a>
</div>

 
  </div>
</div>
</body>

</html>
