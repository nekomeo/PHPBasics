<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Basics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>My first PHP Page</h1>
    <?php
    echo "Hello World!";
    ?>
    <br>
    <h3>Comments in PHP</h3>
    <?php
    // This is a single-line comment
    # This is also a single-line comment

    /*
    This is a multiple-lines comment block
    that spans over multiple
    lines
    */

    // You can also use comments to leave out parts of a code line
    $x = 5 /* + 15 */ + 5;
    echo $x;
    ?>
    <h3>PHP Case Sensitivity</h3>
    <?php
    ECHO "Hello World!<br>";
    echo "Hello World!<br>";
    EcHo "Hello World!<br>";

    $color = "red";
    echo "My car is " . $color . "<br>";
    echo "My house is " . $COLOR . "<br>";
    echo "My boat is " . $coLOR . "<br>";
    ?>
</body>
</html>