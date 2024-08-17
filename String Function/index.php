<?php
    $username = "Bro The Code";
    
    $length = strlen($username);
    $sub = substr($username, 0, 3);
    $pos = strpos($username, "The");
    $replaced = str_replace("Code", "Programming", $username);
    $repeated = str_repeat("A", 5);
    $capitalized = ucfirst("hello");
    $title = ucwords("hello world");
    $split = str_split($username, 3);
    $lower = strtolower($username);
    $upper = strtoupper($username);
    $trimmed = trim("  Hello World!  ");
    $ltrimmed = ltrim("   Hello World!");
    $rtrimmed = rtrim("Hello World!   ");
    $reversed = strrev($username);
    $safe = htmlspecialchars("<a href='test'>Test</a>");
    
    echo "Length: $length<br>";
    echo "Substring: $sub<br>";
    echo "Position of 'The': $pos<br>";
    echo "Replaced: $replaced<br>";
    echo "Repeated: $repeated<br>";
    echo "Capitalized: $capitalized<br>";
    echo "Title: $title<br>";
    echo "Split: " . implode(", ", $split) . "<br>";
    echo "Lowercase: $lower<br>";
    echo "Uppercase: $upper<br>";
    echo "Trimmed: '$trimmed'<br>";
    echo "Left Trimmed: '$ltrimmed'<br>";
    echo "Right Trimmed: '$rtrimmed'<br>";
    echo "Reversed: $reversed<br>";
    echo "Safe HTML: $safe<br>";
?>
