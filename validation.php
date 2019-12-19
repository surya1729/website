<?php
session_start();

$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'looktolearn');

$name = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from `user` where name = '$name'&& password = '$pass'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 1){
    session_start();
    $row =mysqli_fetch_assoc($result);
    $_SESSION["email"] = $row["name"];
    $_SESSION["uid"] = $row["uid"];
  header('location:userpr.php');  
}
else{
    echo"not registered";
    header('location:newregisterform.php');
    
}
?>