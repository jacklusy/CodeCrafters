<?php
session_start();

unset($_SESSION['authenticated']);
unset($_SESSION['auth_student']);
unset($_SESSION['verify_token']);
$_SESSION['status'] = "You Are Logged Out Successfully.";
header("Location: login.php");
exit(0);
?>