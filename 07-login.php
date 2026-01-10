<?php
$message = "";
$messageType = "";

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username) || empty($password)) {
        $message = "Username dan password wajib diisi!";
        $messageType = "error";
    }
    elseif ($username == "charly" && $password == "12345") {
        $message = "Login berhasil! Selamat datang, $username";
        $messageType = "succsess";
    }
    else {
        $message = "Username atau password salah!";
        $messageType = "error";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #1d3168ff;
        }
        .message {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            text-align: center;
        }
        .succsess {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            text-align: center;
        }
        input {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Form Login</h2>
    <?php if (!empty($message)): ?>
        <div class="message <?php echo $messageType; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" placeholder="Masukkan Username..."><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Masukkan Password..."><br><br>

        <button type="submit" name="login">Login</button>
    </form>

    <p style="color: gray; font-size: 12px;">
        Hint: username = charly, password = 12345
    </p>
</body>
</html>