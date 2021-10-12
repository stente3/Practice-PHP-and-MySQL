<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon.svg" type="image/x-icon">
    <title>Useful function for number</title>
</head>
<body>
    <?php 
    /* to round numbers */
    $number1 = 20.5040;
    echo round($number1), '<br>';

    /* to get a random number */
    echo rand(0, 10), '<br>';

    /* to round a number to the nearest greater integer */
    echo ceil(10.1), '<br>';
    ?>
</body>
</html>