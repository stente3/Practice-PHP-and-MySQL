<!-- Variables can store data of different types, and different data types can do different things. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./favicon.svg" type="image/x-icon">
    <title>Data types</title>
</head>

<body>
    <?php
    $string = "Hello world";
    $integer = 10;
    $double = 10.10;
    $boolean = true;
    $array = array("name" => "Camilo", "location" => "Medellín");
    $object = new stdClass;
    $object->name = "Camilo";
    $object->location = "Medellín";
    $object->age = 17;
    $null = null;

    var_dump($string, "<br>");
    var_dump($integer, "<br>");
    var_dump($double, "<br>");
    var_dump($boolean, "<br>");
    var_dump($array, "<br>");
    var_dump($object, "<br>");
    var_dump($null, "<br>");
    ?>
</body>

</html>