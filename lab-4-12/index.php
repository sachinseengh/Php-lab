<?php

if (isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "script";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO students (name, address, phone, age, gender)
        VALUES ('$name', '$address', '$phone', '$age', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "Student details saved successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details Form</title>
</head>

<body>
    <h2>Student Details Form</h2>
    <form method="post" action="">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address" required><br>

        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" required><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" required><br>

        <label for="gender">Gender:</label><br>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label><br><br>

        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>



<!-- Create a form to collect student details such as name, address,
phone,age, gender and store into the database. -->