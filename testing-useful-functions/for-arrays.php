<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon.svg" type="image/x-icon">
    <title>Useful function for arrays</title>
</head>
<body>
    <?php 
        /* to extract the arrays as variables */
        $example = array('name' => 'Camilo', 'number' => 30123202, 'location' => 'Medellín');
        extract($example);
        echo $number, '<br>';

        /* to remove the last element from the array */
        $week = array(
            'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'
        );
        array_pop($week);
        foreach ($week as $key) {
            echo $key, '<br>';
        }

        /* to define what will be between each element of an array */
        echo join(' - ', $week), '<br>';

        /* to count element number in array */
        echo count($week), '<br>';
    ?>
</body>
</html>