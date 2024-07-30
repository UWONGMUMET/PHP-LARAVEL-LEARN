<?php
    $grade = 'B'; // Anda bisa mengganti nilai ini dengan nilai lain seperti 'A', 'C', 'D', dll.

    switch ($grade) {
        case 'A':
            echo "Excellent! You got an A.";
            break;
        case 'B':
            echo "Good job! You got a B.";
            break;
        case 'C':
            echo "Average work. You got a C.";
            break;
        case 'D':
            echo "Below average. You got a D.";
            break;
        case 'F':
            echo "Failed. You got an F.";
            break;
        default:
            echo "Invalid grade.";
            break;
    }
?>
