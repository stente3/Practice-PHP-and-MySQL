<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon.svg" type="image/x-icon">
    <title>Show data</title>
</head>
<body>
    <?php
        $age = $_POST["age"];
        echo 'Your age is = ' . $age . "<br>";
        if($age >= 18){
            echo 'Then you can enter';
        }else{
            echo 'You are not old enough';
        }
    ?>
</body>
</html>