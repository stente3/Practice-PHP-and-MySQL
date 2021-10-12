<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon.svg" type="image/x-icon">
    <title>Useful function for strings</title>
</head>
<body>
    <?php
    /* To avoid injected code */
    $code = '<h1>Hola</h1>';
    $newCode = htmlspecialchars($code);
    echo $code;
    echo $newCode, '<br>';

    /* To remove all spaces  */
    $name = '               Camilo           ';
    $newName = trim($name);
    echo $name, '<br>';
    echo $newName, '<br>';

    /* To calculate the size */
    echo strlen($name), '<br>';
    echo strlen($newName), '<br>';

    /* To cut out words */
    echo substr($newName, 0, 4), '<br>';

    /* To capitalize text */
    echo strtoupper($name), '<br>';

    /* to convert the text to lowercase */
    echo strtolower($name), '<br>';
    ?>
</body>
</html>