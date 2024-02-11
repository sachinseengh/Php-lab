<!DOCTYPE html>
<html>
<head>
    <title>PHP Read File Example</title>
</head>
<body>

<?php
// Specify the file path
$filePath = 'example.txt';

// Check if the file exists
if (file_exists($filePath)) {
    // Read the file content
    $fileContent = file_get_contents($filePath);

    // Display the file content
    echo "<h3>File Content:</h3>";
    echo "<pre>$fileContent</pre>";
} else {
    echo "<p>File not found!</p>";
}
?>

</body>
</html>
