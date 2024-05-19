<?php
session_start();

if (isset($_POST['toggleMenu'])) {
    $_SESSION['subMenuOpen'] = !$_SESSION['subMenuOpen'];
}
?>
