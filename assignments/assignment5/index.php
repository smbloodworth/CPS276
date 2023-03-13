<?php
    require_once 'FilesDirectoriesDemo.php';
    $filesDirectoriesDemo = new Directories();
    $output = $filesDirectoriesDemo->generateFile();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File and Directory Assignment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h2>File and Directory Assignment</h2>
<p>Enter a folder name and the contents of a file. Folder names should contain alpha-numeric characters only.</p>
<p><?php echo $output ?></p>
<form method="FilesDirectoriesDemo.php" action="post">
        <div class="mb-3">
            <label for="folderNameInput" class="form-label">Folder Name:</label>
                <input type="email" class="form-control" id="folderNameInput">
        </div>
        <div class="mb-3">
            <label for="fileContentInput" class="form-label">File Content</label>
                <textarea class="form-control" id="fileContentInput" rows="3"></textarea>
        </div>
        <button type="button" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>