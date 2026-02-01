<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 2 | Assignment 4</title>
</head>
<body>
    <?php
        $GRADE = 85;
        if($GRADE > 90) {
            echo"You got a A!";
        } else if($GRADE < 89 && $GRADE > 80) {
            echo"You got a B!";
        } else if($GRADE < 79 && $GRADE > 70) {
            echo"You got a C!";
        } else if($GRADE < 69 && $GRADE > 60) {
            echo"You got a D!";
        } else {
            echo"You got a F!";
        }
    ?>
</body>
</html>