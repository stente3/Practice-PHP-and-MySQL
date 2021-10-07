<!-- conditionals (that is, conditional statements, conditional expressions and conditional constructs,) are programming language commands for handling decisions. 
... Although dynamic dispatch is not usually classified as a conditional construct, it is another way to select between alternatives at runtime. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./favicon.svg" type="image/x-icon">
    <title>Conditionals</title>
</head>

<body>
    <?php
    $a = 10.123;
    $b = 10.70;
    $c = 10;

    $a_round = intval($a);

    if ($a_round === 10) {
        echo 'The number ' . $a . ' was rounded';
    } else {
        echo gettype($a_round);
    }
    ?>
</body>

</html>