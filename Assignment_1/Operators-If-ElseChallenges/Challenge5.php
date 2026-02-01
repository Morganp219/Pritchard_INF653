<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 2 | Assignment 5</title>
</head>
<body>
    <?php
        $YEAR = 2024;
        if($YEAR % 400 == 0) {
            echo"Is a Leap Year";
        } else {
            if($YEAR % 100 == 0) {
                echo "Is not a leap year";
            } else {
                if($YEAR % 4 == 0) {
                    echo"Is a Leap Year";
                } else {
                    echo "Is not a leap year";
                }
            }
        }
    ?>
</body>
</html>