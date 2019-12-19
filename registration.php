<?php
session_start();



$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'looktolearn');

$name = $_POST['email'];
$pass = $_POST['password'];
$bran = $_POST['branch'];
$yer = $_POST['year'];



$s = "select * from `user` where name = '$name'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo"username already taken";
    header('location:newloginpage.php');

}
else{
    $reg = "insert into `user` (name,password,branch,year) values ('$name','$pass','$bran','$yer')";
    mysqli_query($conn,$reg);
    echo"registration successfull";
    header('Location:userpr.php');
}
?>