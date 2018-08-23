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
    <h3>Create a PHP Constant</h3>
    <?php
    define("GREETING", "Welcome to W3Schools.com!", true); // true makes case insensitive
    echo greeting;
    ?>
    <h3>Constants are Global</h3>
    <?php
    define("GREETING", "Welcome to W3Schools.com!", true);

    function myTest() {
        echo greeting;
    }

    myTest();
    ?>
</body>
</html>