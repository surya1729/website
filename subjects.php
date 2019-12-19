<?php
session_start();
$sub = $_GET["sid"];
$sql = "SELECT `sid`, `sname`, `descr` FROM `subjects` WHERE `sid`=$sub";
require 'connect.php';
$query = mysqli_query($conn,$sql);
$det = mysqli_fetch_assoc($query);

?>


<!DOCTYPE html>
<html>
<head>
    <title>    
        <?php echo $det["sname"] ?>    
    </title>
    <link rel=stylesheet type="text/css"  href="DBMSstyle.css">
    </head>
    <body>
    <h1>
        <?php echo $det["sname"] ?>
        </h1>
    <ul>
        <li>
            
            <button><a href ="userpr.php">Home</a></button>
            <button><a href='books.php?sid=<?php echo $_GET["sid"] ?>'>Books</a></button>
            <button><a href='refer.php?sid=<?php echo $_GET["sid"] ?>'>References</a></button>
        </li>
        </ul>
        <?php

            echo $det["descr"];
        
        ?>
    </body>    
</html>