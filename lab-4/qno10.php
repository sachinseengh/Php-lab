<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hide and Show Image</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#hideBtn").click(function() {
                $("#image").hide();
            });

            $("#showBtn").click(function() {
                $("#image").show();
            });
        });
    </script>
</head>

<body>

    <button id="hideBtn">Hide Image</button>
    <button id="showBtn">Show Image</button>

    <img id="image" src="boy.png" alt="Example Image" style="width: 50px; height: 50px;">

</body>

</html>