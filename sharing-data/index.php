<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon.svg" type="image/x-icon">
    <title>Input Data</title>
</head>

<body>
    <h3>In the following form you need to say what your age is</h3>
    <form action="show-data.php" method="post">
        <label for="age">Write your age</label>
        <br>
        <input type="number" name="age" placeholder="Age">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>