<?php
session_start();
session_destroy();
header("Location: 07-login.php");
?>