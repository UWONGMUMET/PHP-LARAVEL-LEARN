<?php
    $message1 = "I like pizza";
    $message2 = "It's really good";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Order</title>
</head>
<body>
    <h1><?php echo $message1; ?></h1>
    <p><?php echo $message2; ?></p>
    <br>
    <button onclick="orderPizza()">Order Pizza</button>

    <script>
        function orderPizza() {
            alert("Pizza ordered!");
        }
    </script>
</body>
</html>
