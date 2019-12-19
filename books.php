<?php
session_start();
$nsid = $_GET['sid'];
require 'connect.php';
$q="SELECT `bid`,`bname`, `url` FROM `books` WHERE sid=$nsid";
$r=mysqli_query($conn,$q);
?>

<!DOCTYPE html>
<html> 
<head>
<title>BOOKS</title>

</head>
<body>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>HOME</title>
        <link rel="stylesheet" type="text/css" href="HOMEstyle.css">
        <div class="nav">
    <a href="userpr.php">Home</a>

    
    
     </div>
     <link rel="stylesheet" type="text/css" href="book-refer.css">
     <a>Books:<br></a>
 </body>


<?php
while($d =mysqli_fetch_assoc($r)){
    
    echo '<a href="openbook.php?bid='.$d['bid'].'">'.$d['bname'].'</a>';
    echo"<br>";
    echo "\r\n";
}
?>


</body>

</html>