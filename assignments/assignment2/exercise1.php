<?php

$mainListQuantity = 4;//Sets the number of items in the main list
$subListQuantity = 5;//Sets the number of items in the sublists
$mainListCount = 0;//incrementing variable for tracking main list building
$subListCount =0;//incrementing variable for tracking sublist building

$listBuilder = "<ul>"; //Creates main list

    while ($mainListCount < $mainListQuantity) {
        $mainListCount++;
        $listBuilder .= "<li>$mainListCount<ul>";//Creates bullet in main list and starts sublist
        $subListCount = 0;
        while ($subListCount < $subListQuantity) {
            $subListCount++;
            $listBuilder .= "<li>$subListCount</li>";//Creates bullet in sublist
       }
       $listBuilder .= "</ul>";//Closes sublist
    }
$listBuilder .= "</ul>";//Closes main list

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1 - Nested Lists</title>
</head>
<body>
    <p> <?php echo $listBuilder; ?></p> <!--This line generates and outputs the desired nested lists -->
</body>
</html>