<?php
session_start();
if (!isset($_SESSION["logged_in"])) {
    header("Location: 09-login-challenge.php");
    exit();
}

if ($_SESSION["role"] != "user") {
    echo "<h2>Access Denied</h2>";
    exit();
}

$username = $_SESSION["username"];
$role = $_SESSION["role"];
$login_time = $_SESSION["login_time"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Dashboard <?php echo ucfirst($role); ?></h2>

    <div class="header">
    <p>Selamat datang, <?php echo $username; ?></p>
    <p>Role: <?php echo ucfirst($role); ?></p>
    <p>Login TIme: <?php echo $login_time; ?></p>
    </div>

    <a href="09-profile.php" class="btn">
        <button>View Profile</button>
    </a>
    
    <a href="08-logout.php" class="logout">
        <button>Logout</button>
    </a>


</body>
</html>