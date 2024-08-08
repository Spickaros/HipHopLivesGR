<?php
session_start();

include 'header.php';
include 'includes/dbh.inc.php';
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <title>View Tickets</title>
    <style type="text/css">
        .sub-menu {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Adjust the logout button */
        .logout-btn {
            position: absolute;
            top: 85px;
            right: 5px;
            padding-top: 0;
        }

        .sub-menu a:hover {
            color: rgb(68, 68, 68);
        }

        .sub-menu p {
            margin-right: 100px;
            font-style: italic;
            font-weight: 300;
            margin-bottom: -15px;
        }

        .sub-menu .user {
            margin-right: 180px;
        }

        @font-face {
            font-family: juraGR;
            src: url(fonts/Jura-Medium.otf)
        }

        .card-header {
            background: -webkit-linear-gradient(to right, #5bc0de, #fff);
            background: linear-gradient(to right, #5bc0de, #fff);
        }

        body {
            margin: 0;
            padding: 0;
            background-image: url('img/grey-back.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }

        .tickets-form {
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

        .tickets-form a {
            color: #000;
            text-decoration: underline;
        }

        .tickets-form a:hover {
            color: gray;
        }

        p {
            text-align: center;
        }

        .img-tickets {
            position: relative;
            width: 300px;
            border-radius: 4px;
            height: 155px;
            top: -50px;
            left: -65px;
        }

        .tickets {
            position: relative;
            float: left;
            margin: 30px;
            border: 50px solid rgba(236, 236, 236, 0);
            box-shadow: rgba(255, 255, 255, 0.5) 0px 3px 8px;
            background-color: rgba(236, 236, 236, 0.5);
            object-fit: contain;
            border-radius: 4px;
            box-sizing: 120px;
            float: left;
            width: 1200px;
            height: 150px;
            bottom: -50px;
            margin-left: 150px;
        }

        .desc {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            font-family: 'Jura', juraGR;
            z-index: 2;
        }

        .date {
            position: relative;
            top: 20px;
            left: 430px;
            text-align: right;
            padding: 10px;
            color: white;
            font-family: 'Jura', juraGR;
            display: inline-block;
        }

        .fullscreen-box {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.8), rgba(128, 128, 128, 0.2));
            z-index: 1;
        }

        .dark-theme .fullscreen-box {
            width: 1217px;
            height: 155px;
            border-radius: 4px;

            animation: none;
            text-align: left;
            z-index: 2;
            margin-left: -65px; /* Set z-index to -1 for events that have passed */
            margin-top: -50px; /* Set z-index to -1 for events that have passed */
        }

        .light-theme .fullscreen-box {
            background: transparent;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row my-5">
        <?php
        $_SESSION['loggedin'] = true;

        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
            $loggedInUserId = $_SESSION['userUid'];
            $ticketsTableName = 'tickets';
            require 'includes/dbh.inc.php';
            $formatter = new IntlDateFormatter('el_GR.utf8', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
            $query1 = "SELECT users.uidUsers, users.emailUsers, tickets.artist
                    FROM  tickets
                    INNER JOIN users ON users.uidUsers = tickets.user
                    WHERE users.uidUsers = ?";
            $stmt1 = mysqli_prepare($conn, $query1);
            mysqli_stmt_bind_param($stmt1, 's', $loggedInUserId);
            mysqli_stmt_execute($stmt1);
            $result1 = mysqli_stmt_get_result($stmt1);
            while ($row1 = mysqli_fetch_assoc($result1)) {
            }
          
            $query2 = "SELECT tickets.artist, tickets.location, lives.images, lives.location, lives.date, lives.beginDate, lives.endDate
            FROM tickets
            INNER JOIN lives ON lives.artist = tickets.artist AND lives.location= tickets.location
          
            WHERE tickets.user = ?
            ORDER BY lives.date DESC"; // Adding ORDER BY clause
            
          
 $stmt2 = mysqli_prepare($conn, $query2);
 mysqli_stmt_bind_param($stmt2, 's', $loggedInUserId);
 mysqli_stmt_execute($stmt2);
 $result2 = mysqli_stmt_get_result($stmt2);
 

            // Check if there are no tickets
            if (mysqli_num_rows($result2) === 0) {
                ?><p style='color:white; font-size:large;'>Δεν υπάρχουν εισιτήρια.</p><?php
            } else {
                while ($row2 = mysqli_fetch_assoc($result2)) {
                    $imagePath = 'img/' . $row2['images'];
                    $eventDate = new DateTime($row2['date']);
                    $eventEndDate = new DateTime($row2['endDate']);
                    $currentDate = new DateTime();
                    $themeClass = 'light-theme'; // Default to light theme

                    if ($eventDate < $currentDate && $eventEndDate < $currentDate) {
                        $themeClass = 'dark-theme'; // Set to dark theme if either date is in the past
                    }
                    ?>
                    <div class="live-event-container <?php echo $themeClass; ?>">
                        <div class="tickets">
                           
                            <img class="img-tickets" src="<?php echo $imagePath; ?>" alt="Image Description">
                            <div class="desc">
                                <h4><?php echo $row2['artist']; ?></h4>
                                <p><?php echo $row2['location']; ?></p>
                                <div class="date">
                                    <p>
                                        <ion-icon name="calendar-outline" class="tour-date-icon"></ion-icon>
                                        <?php
                                        $eventStartDate = new DateTime($row2['beginDate']);
                                        $eventEndDate = new DateTime($row2['endDate']);
                                        $eventDate = new DateTime($row2['date']);
                                        $formattedStartDate = $formatter->format($eventStartDate);
                                        $formattedEndDate = $formatter->format($eventEndDate);
                                        $formattedEventDate = $formatter->format($eventDate);
                                        if ($formattedStartDate !== $formattedEndDate) {
                                            echo $formattedStartDate . ' - ' . $formattedEndDate;
                                        } else {
                                            echo $formattedEventDate;
                                        }
                                        ?>
                                         
                                    </p>
                                    
                                </div>
                              
                            </div>
                            <div class="fullscreen-box">
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }

            mysqli_stmt_close($stmt2);
            mysqli_close($conn);
        } else {
            echo "<p>User is not logged in.</p>";
        }
        ?>
    </div>
</div>
</body>
</html>
<?php include 'footer.php' ?>
