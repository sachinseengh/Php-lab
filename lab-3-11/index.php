<?php
$uname = "ashish";
$pass = "admin123";


if (isset($_POST['submit'])) {

    if ($uname == $_POST['username'] && $pass == $_POST['password']) {
        header('Location:welcome.php?v="Login Successful!"');
    } else {
        echo "Invalid username or password";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Login</h2>
    <form method="post" action="">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login" name="submit">
    </form>
</body>

</html>


<!-- Write a program for implementing login with username and
password and redirect to welcome page if validated otherwise prints
an error. -->