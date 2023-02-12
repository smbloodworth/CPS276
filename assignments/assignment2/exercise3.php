<?php

$rowCount = 0;
$rowLabel = 0;
$cellCount = 0;
$cellLabel = 0;
$rowCountSetter = 15; //Sets the desired number of rows in the table
$cellCountSetter = 5; //Sets the desired number of cells within a given row

$tableBuilder = "<table border='1'>";

while ($rowCount < $rowCountSetter) {
    $tableBuilder .= "<tr>"; //Creates new row
    $rowLabel++; //Updates row label to be print to the screen
    $cellCount = 0;//
    $cellLabel = 0;//
    while ($cellCount < $cellCountSetter) {
        $cellLabel++;//Updates cell label to be print to the screen
        $tableBuilder .= "<td> Row {$rowLabel} Cell {$cellLabel}</td>"; //Creates new cell
        $cellCount++;
    }
    $rowCount++;
    $tableBuilder .= "</tr>";//Closes current row
}

$tableBuilder .= "</table>";//Closes table

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3 - Table Builder</title>
</head>
<body>
    <p><?php echo $tableBuilder; ?></p> <!--This line generates and outputs the desired table -->
</body>
</html>