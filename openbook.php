<?php
session_start();

$bid = $_GET["bid"];
$sub = $_SESSION["uid"];
require 'connect.php';
$reg = "insert into `history` (bid,uid) values ($bid,$sub)";
mysqli_query($conn,$reg);

$q="SELECT `bname`, `url` FROM `books` WHERE bid=$bid";
$r=mysqli_query($conn,$q);

if($r) {
    try {
        $file = mysqli_fetch_assoc($r)["url"];
        header('Location: '.$file);
    } catch(Exception $d) {
        echo "/////";
    }
} else {
    echo "file not found";
}


?>