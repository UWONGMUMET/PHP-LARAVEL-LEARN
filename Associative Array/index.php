<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="country">Enter a country:</label>
        <input type="text" id="country" name="country" required>
        <input type="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $capitals = array(
                "USA" => "Washington D.C.",
                "Japan" => "Tokyo", 
                "South Korea" => "Seoul",
                "India" => "New Delhi"
            );

            $country = htmlspecialchars($_POST["country"]);
            
            if (array_key_exists($country, $capitals)) {
                $capital = $capitals[$country];
                echo "The capital of {$country} is {$capital}.";
            } else {
                echo "Sorry, we don't have the capital for {$country}.";
            }
        }
    ?>
</body>
</html>
