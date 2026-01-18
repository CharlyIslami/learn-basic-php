<?php
session_start();
if(!isset($_SESSION["logged_in"])) {
    header("Location: 09-login-challenge.php")
    exit();
}

$username = $_SESSION["username"];
$role = $_SESSION["role"];
$login_time  = $_SESSION["login_time"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    
</body>
</html>
