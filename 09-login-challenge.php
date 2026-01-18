<?php
session_start();
$message = "";
$messageType = "";


if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username) || empty($password)) {
        $message = "Username dan Password wajib diisi!";
        $messageType = "error";
    }
    elseif ($username == "CharlyAdmin" && $password == "admin123") {
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;
        $_SESSION["role"] = "admin";
        $_SESSION["login_time"] = date("Y-m-d H:i:s");

        header("Location: 09-dashboard-admin.php");
        exit();
    }
    elseif ($username == "CharlyUser" && $password == "user123") {
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;
        $_SESSION["role"] = "user";
        $_SESSION["login_time"] = date("Y-m-d H:i:s");

        header("Location: 09-dashboard-user.php");
        exit();
    }
    else {
        $message = "Username atau Password ada yang salah";
        $messageType = "error";
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Challenge</title>
</head>
<body>
    <h2>Form</h2>
    <p>Form Login</p>
    <p>Role terdiri dari Admin, User.</p>

    <?php if (!empty($message)): ?>
        <div class="message <?php echo $messageType; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif?>
    
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" placeholder="Silahkan masukkan username...">

        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Silahkan masukkan password...">

        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>