<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax GET and POST Requests</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>

    <h2>Perform Ajax GET Request</h2>
    <button id="getRequestBtn">Send GET Request</button>
    <div id="getResponse"></div>

    <h2>Perform Ajax POST Request</h2>
    <button id="postRequestBtn">Send POST Request</button>
    <div id="postResponse"></div>

    <script>
        $(document).ready(function() {
            // Perform Ajax GET request
            $("#getRequestBtn").click(function() {
                $.get("example.php", function(data, status) {
                    $("#getResponse").html("Response: " + data + "<br>Status: " + status);
                });
            });

            // Perform Ajax POST request
            $("#postRequestBtn").click(function() {
                $.post("example.php", {
                    name: "John",
                    age: 30
                }, function(data, status) {
                    $("#postResponse").html("Response: " + data + "<br>Status: " + status);
                });
            });
        });
    </script>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        echo "This is a GET request.";
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];
        echo "This is a POST request. Name: $name, Age: $age";
    } else {
        echo "Unsupported request method.";
    }

    ?>

</body>

</html>