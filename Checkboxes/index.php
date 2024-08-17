<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Your Favorite Foods</title>
</head>
<body>
    <h1>Select Your Favorite Foods</h1>
    <form action="index.php" method="post">
        <label>
            <input type="checkbox" name="foods[]" value="Pizza"> Pizza
        </label><br>
        <label>
            <input type="checkbox" name="foods[]" value="Hamburger"> Hamburger
        </label><br>
        <label>
            <input type="checkbox" name="foods[]" value="Hotdog"> Hotdog
        </label><br>
        <label>
            <input type="checkbox" name="foods[]" value="Taco"> Taco
        </label><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        if (isset($_POST["submit"])) {
            if (isset($_POST["foods"])) {
                $foods = $_POST["foods"];
                echo "<h2>You selected:</h2>";
                foreach ($foods as $food) {
                    echo htmlspecialchars($food) . "<br>";
                }
            } else {
                echo "<h2 style='color: red;'>Please select at least one food.</h2>";
            }
        }
    ?>
</body>
</html>
