<?php
session_start();

if (isset($_POST['login-submit'])) {
    require 'dbh.inc.php'; // Ensure this file contains correct database connection code

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    // Check if fields are empty
    if (empty($mailuid) || empty($password)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    } else {
        // Prepare SQL query to select user by uidUsers or emailUsers
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            // Fetch user data
            if ($row = mysqli_fetch_assoc($result)) {
                // Verify password
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if ($pwdCheck === false) {
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                } else if ($pwdCheck === true) {
                    // Set session variables for logged-in user
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];
                    $_SESSION['mailUid'] = $row['emailUsers'];
                    session_regenerate_id();
                    $_SESSION['loggedin'] = TRUE;
                    header("Location: ../home.php?login=success");
                    exit();
                }
            } else {
                header("Location: ../login.php?error=nouser");
                exit();
            }
        }
    }
}
