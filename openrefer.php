<?php
session_start();

$rid = $_GET["rid"];
$sub = $_SESSION["uid"];
require 'connect.php';
$reg = "insert into `history` (rid,uid) values ($rid,$sub)";
mysqli_query($conn,$reg);

$q="SELECT `rname`, `url` FROM `refer` WHERE rid=$rid";
$r=mysqli_query($conn,$q);

if($r) {
    try {
        $file = mysqli_fetch_assoc($r)["url"];
        header('Location: '.$file);
    } catch(Exception $d) {
        echo "fuck";
    }
} else {
    echo "file not found";
}


?>