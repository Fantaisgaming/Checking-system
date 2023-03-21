<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>School Checking System - Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $name = $_POST["name"];
        $class = $_POST["class"];
        $date = $_POST["date"];

        // Check if the student attended class
        // Replace this with your own logic to check if the student attended class
        $attended = true;

        if ($attended) {
            echo "<h1>Student attended class</h1>";
        } else {
            echo "<h1>Student did not attend class</h1>";
        }
    ?>
</body>
</html>
