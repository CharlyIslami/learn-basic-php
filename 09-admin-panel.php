<?php
session_start();
if (!isset($_SESSION["logged_in"])) {
    header("Location: 09-login-challenge.php");
}

if ($_SESSION["role"] != "admin") {
    echo "<h2>Acces Denied</h2>";
    echo "<p>Halaman ini hanya untuk admin</p>";
    echo "<a href=09-dashboard-user.php><button>Kembali ke dashboard</button></a>";
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
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
        }
        .header {
            background: #dc3545;
            color: white;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .user-list {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .user-item {
            padding: 10px;
            margin: 10px 0;
            background: white;
            border-left: 4px solid #007bff;
            border-radius: 3px;
        }
        .admin-badge {
            background: #dc3545;
            color: white;
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 12px;
        }
        .user-badge {
            background: #28a745;
            color: white;
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 12px;
        }
        button {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
        }
        .btn-primary {
            transition: all 0.3s ease-in-out;
            background: #007bff; 
        }
        .btn-danger { 
            transition: all 0.3s ease-in-out;
            background: #dc3545; 
        }

        .btn-primary:hover {
           transform: translateY(-3px);
            background: #3272b7ff; 
        }

        .btn-danger:hover {
            transform: translateY(-3px);
            background: #a43440ff;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>🛠️ Admin Panel</h2>
        <p>Manage System Users</p>
    </div>
    
    <div>
        <p><strong>Logged in as:</strong> <?php echo $username; ?> 
           <span class="admin-badge">ADMIN</span>
        </p>
        <p><strong>Login Time:</strong> <?php echo $login_time; ?></p>
    </div>
    
    <div class="user-list">
        <h3>User Management</h3>
        <p><strong>Total Users: 2</strong></p>
        
        <div class="user-item">
            <strong>User 1:</strong> admin 
            <span class="admin-badge">admin</span>
            <p style="margin: 5px 0; color: gray; font-size: 14px;">
                Full access to system
            </p>
        </div>
        
        <div class="user-item">
            <strong>User 2:</strong> user 
            <span class="user-badge">user</span>
            <p style="margin: 5px 0; color: gray; font-size: 14px;">
                Standard user access
            </p>
        </div>
    </div>
    
    <div style="margin-top: 20px;">
        <a href="09-dashboard-admin.php">
            <button class="btn-primary">⬅️ Back to Dashboard</button>
        </a>
        
        <a href="09-profile.php">
            <button class="btn-primary">👤 View Profile</button>
        </a>
        
        <a href="09-logout.php">
            <button class="btn-danger">🚪 Logout</button>
        </a>
    </div>


</body>
</html>