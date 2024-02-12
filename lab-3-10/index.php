<?php
// Check if the cookie is set
if (isset($_COOKIE['username'])) {
    echo "Welcome back, " . $_COOKIE['username'] . "!";
} else {
    // If the cookie is not set, set a new cookie
    $username = "Ashish Thapa";
    setcookie('username', $username, time() + (86400 * 30), "/"); // 86400 = 1 day
    echo "Hello, $username! We have set a cookie to remember you.";
}
?>
