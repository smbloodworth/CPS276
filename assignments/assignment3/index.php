<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Project</title>
</head>
<body>
<?php
require_once "Calculator.php";
$Calculator = new Calculator();
echo $Calculator->calc("/", 10, 0);
echo $Calculator->calc("*", 10, 2);
echo $Calculator->calc("/", 10, 2);
echo $Calculator->calc("-", 10, 2);
echo $Calculator->calc("+", 10, 2);
echo $Calculator->calc("*", 10);
echo $Calculator->calc(10);
?>
</body>
</html>