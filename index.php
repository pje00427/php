<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="index.php">WEB</h1>
    <ol>
        <li><a href="index.php?id=HTML">HTML</li>
        <li><a href="index.php?id=CSS">CSS</li>
        <li><a href="index.php?id=JavaScript">JavaScript</li>
        <li><a href="index.php?id=PHP">PHP</li>
    </ol>   
    <?php
    $list = scandir('data');
    $i = 0;
    while($i<count($list)){
        
    }
    ?>   
    <h2>
        <?php
            if(isset($_GET['id'])){
                echo $_GET['id'];
            } else{
                echo 'Welcome';
            }

        ?>
    </h2>

   <?php
   if(isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
   } else {
       echo "Hello, PHP";
   }
   ?>
</body>
</html>