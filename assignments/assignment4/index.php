<?php
if(count($_POST) > 0){
 require_once 'AddNamesProc.php';
 $addName = new AddNamesProc();
 $output = $addName->addClearNames();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 4 - Bloodworth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Add Names</h1>
            <button type="button" class="btn btn-primary">Add Names</button>
            <button type="button" class="btn btn-primary">Clear Names</button>
            <div class="mb-3">
                <label for="enterNameInput" class="form-label">Enter Name</label>
                <input type="email" class="form-control" id="enterNameInput">
            </div>
            <div class="mb-3">
                <label for="listOfNamesOutput" class="form-label">List of Names</label>
                <textarea style="height: 500px;" class="form-control" id="listOfNamesOutput" name="namelist"><?php echo $output ?></textarea>
            </div>
    </div>
</body>
</html>