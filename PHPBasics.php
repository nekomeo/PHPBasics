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
    <h3>PHP - The if Statement</h3>
    <?php
    $t = date("H");
    echo "The hour of the server is " . $t;

    if ($t < "20") {
        echo "<br>Have a good day!";
    }
    ?>
    <h3>PHP - The if...else Statement</h3>
    <?php
    $t = date("H");

    if ($t < "20") {
        echo "Have a good day!";
    }
    else {
        echo "Have a good night!";
    }
    ?>
    <h3>PHP - The if...elseif....else Statement</h3>
    <?php
    $t = date("H");

    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    ?>
</body>
</html>