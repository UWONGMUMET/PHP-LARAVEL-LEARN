<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Pizza</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .message {
            margin-top: 20px;
            font-size: 1.2em;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="index.php" method="get">
            <label for="quantity">Quantity:</label><br>
            <input type="number" id="quantity" name="quantity" min="1" required>
            <input type="submit" value="Calculate Total">
        </form>

        <?php
        // Set default values
        $item = "pizza";
        $price = 5.99;
        $quantity = 0;
        $total = 0.0;
        $message = "";

        if (isset($_GET['quantity'])) {
            $quantity = (int)$_GET['quantity'];

            if ($quantity > 0) {
                $total = $quantity * $price;
                $message = "<p class='success'>You have ordered {$quantity} x {$item}.<br>Your total is: \$" . number_format($total, 2) . "</p>";
            } else {
                $message = "<p class='error'>Please enter a valid quantity greater than zero.</p>";
            }
        }
        echo "<div class='message'>{$message}</div>";
        ?>
    </div>
</body>
</html>
