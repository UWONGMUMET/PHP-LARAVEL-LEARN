<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle and Sphere Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .result {
            margin-top: 20px;
            font-size: 1.2em;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="radius">Radius:</label>
        <input type="number" id="radius" name="radius" step="any" min="0" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $radius = isset($_POST['radius']) ? floatval($_POST['radius']) : null;

        if ($radius !== null && $radius > 0) {
            $circumference = 2 * pi() * $radius;
            $circumference = round($circumference, 2);

            $area = pi() * pow($radius, 2);
            $area = round($area, 2);

            $volume = 4 / 3 * pi() * pow($radius, 3);
            $volume = round($volume, 2);

            echo "<div class='result'>";
            echo "Circumference = {$circumference} cm<br>";
            echo "Area = {$area} cm²<br>";
            echo "Volume = {$volume} cm³<br>";
            echo "</div>";
        } else {
            echo "<p class='error'>Please enter a valid radius greater than zero.</p>";
        }
    }
    ?>
</body>
</html>
