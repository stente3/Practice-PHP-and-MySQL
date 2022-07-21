<!-- Comparison operators are used in conditional expressions to determine which block of code executes, thus controlling the program flow.
    Comparison operators compare two values in an expression that resolves to a value of true or false -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./favicon.svg" type="image/x-icon">
    <title>Comparison operators</title>
</head>

<body>
    <?php
    $a = 10;
    $b = 20;
    $c = 10;

    echo ($a === $c) && ($a < $b), "<br>";
    echo ($a === $b) || ($a < $b), "<br>";
    ?>
</body>

</html>