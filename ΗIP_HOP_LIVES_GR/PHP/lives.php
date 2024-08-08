<?php
session_start();
require "header.php";

?>
<?php 
include "includes\dbh.inc.php"
?>
<?php
include "fetch_data.php"
?>
<html>
  <body>
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
.sub-menu .user{
  margin-right: 180px;
}
      @font-face{
   font-family:juraGR;
   src:url(fonts/Jura-Medium.otf)
   }
   
body {
  margin: 0; /* Remove default margin */
  padding: 0; /* Remove default padding */
  background-image: url('img/grey-back.jpg');
  background-size: cover;
  background-position: center;
  min-height: 100vh;
  background-repeat: no-repeat;

}
  
   .lives-form{
   width: 1500px;
   margin: 20vh auto 0 auto;
   padding: 100px;
   border-radius: 4px;
   font-size: 15px;
   padding-left: 300px;
   padding-right: 300px;
   margin-top: auto;
   margin-left: auto;
   
   
      }
      
.lives-form a{
   color: #000;
   text-decoration: underline;
}

.lives-form a:hover{
    color: gray;
}
p{
 text-align: center;
 }

.img-lives{
 position: relative;
 width: 390px;
 border-radius: 4px;
 height: 130px;
 top: 0px;
 left: 0px;
    /*
float: right;
margin: 5px;
border-radius: 8px; 
max-width: 100%;
width: 100%;*/
}
.images:hover{
    transform: scale(1.1);
}

 .images{
    margin: 30px;
    border: 0px solid rgba(236, 236, 236, 0);
    box-shadow: rgba(255, 255, 255, 0.5) 0px 3px 8px;
    background-color:  rgba(236, 236, 236, 0.5);

    object-fit: contain;
    border-radius: 4px;
    box-sizing: 120px;
    float: left;
    width: 390px;
    height: 300px;
    bottom: -50px;
    
}


.desc{
    margin-bottom: 0px;
    text-align: center;
    color: white;
    font-family:'Jura',juraGR;
    font-size: 1.1rem;
}
:root {
  --radius: 2px;
  --baseFg: dimgray;
  --baseBg: white;
  --accentFg: #006fc2;
  --accentBg: #bae1ff;
}

.theme-pink {
  --radius: 2em;
  --baseFg: #c70062;
  --baseBg: #ffe3f1;
  --accentFg: #c70062;
  --accentBg: #ffaad4;
}

.theme-construction {
  --radius: 0;
  --baseFg: white;
  --baseBg: black;
  --accentFg: black;
  --accentBg: orange;
}

select {
  width: 15%;
  font: 400 20px/2 sans-serif;
  -webkit-appearance: none;
  appearance: none;
  color: var(--baseFg);
  border: 1px solid var(--baseFg);
  line-height: 1;
  outline: 0;
  padding: 0.65em 2.5em 0.55em 0.75em;
  border-radius: 10px;
  background-color: var(--baseBg);
  background-image: linear-gradient(var(--baseFg), var(--baseFg)),
    linear-gradient(-135deg, transparent 50%, var(--accentBg) 50%),
    linear-gradient(-225deg, transparent 50%, var(--accentBg) 50%),
    linear-gradient(var(--accentBg) 42%, var(--accentFg) 42%);
  background-repeat: no-repeat, no-repeat, no-repeat, no-repeat;
  background-size: 1px 100%, 20px 22px, 20px 22px, 20px 100%;
  background-position: right 20px center, right bottom, right bottom, right bottom;   
  
}

select:hover {
  background-image: linear-gradient(var(--accentFg), var(--accentFg)),
    linear-gradient(-135deg, transparent 50%, var(--accentFg) 50%),
    linear-gradient(-225deg, transparent 50%, var(--accentFg) 50%),
    linear-gradient(var(--accentFg) 42%, var(--accentBg) 42%);
}

select:active {
  background-image: linear-gradient(var(--accentFg), var(--accentFg)),
    linear-gradient(-135deg, transparent 50%, var(--accentFg) 50%),
    linear-gradient(-225deg, transparent 50%, var(--accentFg) 50%),
    linear-gradient(var(--accentFg) 42%, var(--accentBg) 42%);
  color: var(--accentBg);
  border-color: var(--accentFg);
  background-color: var(--accentFg);
}

.date {
  float: right;
  margin-left: 70px;
  margin-top: -60px;
  color: white;
  font-style: italic;
  font-weight: 300;
  margin-right: 35px; /* Adjust this margin as needed */
}

.tour-date {
  float: right;
  margin-left: 70px;
  margin-top: -60px;
  color: white;
  font-style: italic;
  font-weight: 300;
  margin-right: 35px; /* Adjust this margin as needed */
}
.date-icon{
  height: 85px;
  margin-left: 360px;
  color: white;
  margin-top: 70px;
  padding-right: -20px;

}
.tour-date-icon{
  height: 85px;
  margin-left: 360px;
  color: white;
  margin-top: 70px;
  padding-right: -20px;
}
a{
  text-decoration: none !important;
}

</style>

<div class="lives">
   <div class="filters">
     
    <select name="locations" id="locations" class="theme-construction " >
        <option value="All" selected>All</option>
        <option value="Athens">Athens</option>
        <option value="Thessaloniki">Thessaloniki</option>
        <option value="Giannena">Giannena</option>
        <option value="Patra">Patra</option>
        <option value="Tour">Tour</option>
    
      </select>

   </div>
   <?php
$currentDate = date('Y-m-d');

$sql = "SELECT * FROM lives WHERE (date >= '$currentDate' OR (location = 'Tour' AND endDate >= '$currentDate'))";
  $query = mysqli_query($conn, $sql);
  if (!$query) {
      echo "Query does not work";
  } else {
      while ($row = mysqli_fetch_array($query)) {
      
  ?>
 <div class='lives-form'>
       <div class="lives-result">

          <div class='images'>
     <a href="<?php echo $row['link']?>" target="_blank" class="lives-link">
                <img src="img/<?php echo $row['images']?>" class="img-lives">
                <p class="desc"><?php echo $row['artist']?>-<?php echo $row['location']?></p>
                <?php
      setlocale(LC_TIME, 'el_GR.utf8'); // Set Greek locale

        $location = $row['location'];
        
        if ($location == 'Tour') {
            $beginDate = $row['beginDate'];
            $endDate = $row['endDate'];
            $formatter = new IntlDateFormatter('el_GR.utf8', IntlDateFormatter::LONG, IntlDateFormatter::NONE);

            ?>
            
            <div class="tour-date">
            <?php echo $formatter->format(strtotime($beginDate)); ?>
        - <?php echo $formatter->format(strtotime($endDate)); ?>
        <ion-icon name="calendar-outline" class="tour-date-icon"></ion-icon>

            </div>
            <?php
        } else {
            $date = $row['date'];
            $formatter = new IntlDateFormatter('el_GR.utf8', IntlDateFormatter::LONG, IntlDateFormatter::NONE);

            ?>
       
            <div class="date">
            <?php echo $formatter->format(strtotime($date)); ?>
            <ion-icon name="calendar-outline" class="date-icon">

            </div>
            
       <?php
    }
                ?>
     </a>
            </div>
            <?php 
            }
        }
    
            
            ?>
      
        
    
      
   

  

   </div>
   </div>

</div>

<script type="text/javascript">
$(document).ready(function(){
    // Function to fetch and display data
    function fetchData(location) {
        $.ajax({
            url: "fetch_data.php",
            type: "POST",
            data: "request=" + location,
            beforeSend: function() {
                $(".lives-result").html("<span>Working</span>");
            },
            success: function(data) {
                // Update the content with the filtered data
                $(".lives-result").html(data);
            }
        });
    }

    // Trigger the filter function on page load with the default "All" value
    fetchData("All");

    // Handle filter changes
    $('#locations').on('change', function() {
        var value = $(this).val();
        
        if (value === "") {
            // If "All" is selected, restore the original content
            fetchData("All");
        } else {
            // Otherwise, filter based on the selected location
            fetchData(value);
        }
    });
});
</script>



<!--
<div class='lives-form'>
    
<div class="images">
<a href="https://www.viva.gr/tickets/music/dani-summer-2023/" target="_blank">
    <img class="img-lives1" src="img\danitour_1220x370.jpg">
    <div class="desc">Dani Gambino X Dj The Boy Tour</div>


</a>
    </div>

    <div class="images">
<a href="https://www.viva.gr/tickets/music/logos-timis-live-stin-athina/" target="_blank">
    <img class="img-lives2" src="img\1220x370.jpeg">
    <div class="desc"> Λογος Τιμης Live Αθηνα</div>

</a>
    </div>



    <div class="images">
<a href="https://www.viva.gr/tickets/music/ethismos-nikaia/" target="_blank">
    <img class="img-lives1" src="img\1220kh370.jpg">
    <div class="desc">Εθισμος Live Αθηνα</div>


</a>
    </div>

    <div class="images">
<a href="https://www.viva.gr/tickets/music/lex-2023/" target="_blank">
    <img class="img-lives2" src="img\lex_summertour2023_viva_1220x370.png">
    <div class="desc">'ΛΕΞ Tour</div>

</a>
    </div>
</div>

    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    </body>
</html>
