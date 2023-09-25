<?php
session_start();

if (!isset($_SESSION['authenticated'])) {
    $_SESSION['status'] = "Please Login To Access User Dashbord.";
    header("Location: ../auth/login.php");
    exit(0);
}
