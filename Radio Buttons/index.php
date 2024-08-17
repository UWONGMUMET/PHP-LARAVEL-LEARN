<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Your Credit Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        .message {
            font-weight: bold;
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <h1>Select Your Credit Card</h1>
    <form action="index.php" method="post">
        <label>
            <input type="radio" name="credit_card" value="Visa">
            Visa
        </label><br>
        <label>
            <input type="radio" name="credit_card" value="Mastercard">
            Mastercard
        </label><br>
        <label>
            <input type="radio" name="credit_card" value="American Express">
            American Express
        </label><br>
        <input type="submit" name="confirm" value="Confirm">
    </form>

    <?php
        if(isset($_POST["confirm"])) {
            if(isset($_POST["credit_card"])) {
                $credit_card = $_POST['credit_card'];
                
                echo '<div class="message">';
                switch($credit_card) {
                    case "Visa":
                        echo "You selected Visa.";
                        break;
                    case "Mastercard":
                        echo "You selected Mastercard.";
                        break;
                    case "American Express":
                        echo "You selected American Express.";
                        break;
                    default:
                        echo "Invalid selection.";
                        break;
                }
                echo '</div>';
            } else {
                echo '<div class="message" style="color: red;">Please select a credit card type.</div>';
            }
        }
    ?>
</body>
</html>
