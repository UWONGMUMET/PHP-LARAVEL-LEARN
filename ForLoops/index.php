<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a number to count to: </label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $counter = $_POST["counter"];
    
    if (is_numeric($counter) && $counter >= 0) {
        $counter = (int)$counter;
        for ($i = 1; $i <= $counter; $i++) {
            echo $i . "<br>";
        }
    } else {
        echo "Please enter a valid positive number.";
    }
}
?>
