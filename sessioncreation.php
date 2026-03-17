<?php
// Start session
session_start();

// Store data in session
$_SESSION['username'] = "sugish";
$_SESSION['email'] = "sugishdevkota1@gmail.com";

// Display session data
echo "Session Created!<br>";
echo "Username: " . $_SESSION['username'];
?>