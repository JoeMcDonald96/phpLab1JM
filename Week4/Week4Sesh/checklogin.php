<?php

$username = $_POST["name"];
$password = $_POST["password"];

$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

if($username == "username" && $password == "password") {
    session_start();
    $_SESSION['access_level_session'] = "standarduser";
}

header('location: LoggedIn.php');

?>