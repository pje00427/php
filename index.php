<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WEB</h1>
    <ol>
        <li><a href="index.php?id=HTML">HTML</li>
        <li><a href="index.php?id=CSS">CSS</li>
        <li><a href="index.php?id=JavaScript">JavaScript</li>
    </ol>      
    <h2>
        <?php
            echo $_GET['id'];
        ?>
    </h2>

   <?php
    echo file_get_contents("data/".$_GET['id']);
   ?>
</body>
</html>