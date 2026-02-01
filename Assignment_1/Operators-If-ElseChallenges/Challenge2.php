<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 2 | Assignment 2</title>
</head>
<body>
    <?php
        $NUMBER = 2;
        $IS_EVEN = ($NUMBER % 2) == 0;
        if( $IS_EVEN ) {
           echo"Number: $NUMBER is an even number";
        } else {
             echo"Number: $NUMBER is an odd number";
        }
        
    ?>
</body>
</html>