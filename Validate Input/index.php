<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        Username:<br>
        <input type="text" name="username"><br>

        Age:<br>
        <input type="text" name="age"><br>

        Email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

<?php
if (isset($_POST['login'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    if (empty($username)) {
        echo "Username is required.<br>";
    } else {
        echo "Hello, {$username}<br>";
    }

    if ($age === false || $age === null || $age < 0) {
        echo "That number wasn't valid for age.<br>";
    } else {
        echo "You are $age years old<br>";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.<br>";
    } else {
        echo "Your email is: {$email}<br>";
    }
}
?>