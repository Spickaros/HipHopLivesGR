<?php
if (isset($_POST['btn'])) {
    session_start();
    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../singup.php?error=emptyfields&uid=" . $username . "&email=" . $email);
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../singup.php?error=invalidmail&uid");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../singup.php?error=invalidmail&uid=" . $username);
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../singup.php?error=invaliduid&mail=" . $email);
        exit();
    } else if ($password !== $passwordRepeat) {
        header("Location: ../singup.php?error=passwordchec&uid=" . $username . "&mail=" . $email);
        exit();
    } else {
        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../singup.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);

            if ($resultCheck > 0) {
                header("Location: ../singup.php?error=usertaken&email=" . $email);
                exit();
            } else {
                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../singup.php?error=sqlerror");
                    exit();
                } else {
                    // Insert the user into the database
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);

                    // Set session variables to indicate that the user is logged in
                    $_SESSION['userId'] = mysqli_insert_id($conn); // Store the ID of the newly created user
                    $_SESSION['userUid'] = $username; // Store the username
                    $_SESSION['mailUid'] = $email; // Store the email
                    $_SESSION['loggedin'] = true; // Set the logged-in flag to true

                    header("Location: ../home.php?singup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: ../singup.php");
    exit();
}
?>
