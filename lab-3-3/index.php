<!DOCTYPE html>
<html>
<head>
    <title>PHP Loops Example</title>
</head>
<body>

<?php
// Using for loop to print numbers 1 to 5
echo "<h3>Using for loop:</h3>";
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i <br>";
}

// Using while loop to print numbers 1 to 5
echo "<h3>Using while loop:</h3>";
$j = 1;
while ($j <= 5) {
    echo "Number: $j <br>";
    $j++;
}

// Using foreach loop to iterate through an array
echo "<h3>Using foreach loop:</h3>";
$colors = array("Red", "Green", "Blue", "Yellow", "Orange");
foreach ($colors as $color) {
    echo "Color: $color <br>";
}
?>

</body>
</html>
