<?php
session_start();

if (!isset($_SESSION["logged_in"])) {
    header("Location: 07-login.php");
    exit();
}

$username = $_SESSION["username"];
$role = $_SESSION["role"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
     <style>
        body { font-family: Arial; max-width: 600px; margin: 50px auto; }
        .header { background: #007bff; color: white; padding: 20px; border-radius: 5px; }
        .content { margin: 20px 0; padding: 20px; border: 1px solid #ddd; }
    </style>
</head>
<body>
    <div class="header">
        <h2>Dashboard <?php echo ucfirst($role); ?></h2>
        <p>Selamat datang, <?php echo $username;?></p>
    </div>

    <div class="content">
        <h3>Informasi Session:</h3>
        <p>Username: <?php echo $_SESSION["username"]; ?></p>
        <p>Role: <?php echo $_SESSION["role"]; ?></p>
        <p>Status: Logged In</p>
    </div>

    <a href="08-logout.php">
        <button style="padding: 10px 20px; background: red; color: white; border: none;">
            Logout
        </button>
    </a>
</body>
</html>