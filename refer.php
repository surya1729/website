<?php
session_start();
$nsid = $_GET['sid'];
require 'connect.php';
$q="SELECT `rid`,`rname`, `url` FROM `refer` WHERE sid=$nsid";
$r=mysqli_query($conn,$q);
?>

<!DOCTYPE html>
<html> 
<head>
<title>REFERENCES</title>
</head>
<body>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Home</title>
        <link rel="stylesheet" type="text/css" href="HOMEstyle.css">
        <div class="nav">
    <a href="userpr.php">Home</a>
    

    
    
     </div>
     <link rel="stylesheet" type="text/css" href="book-refer.css">
     <a>References:<br>
     
     
     </a>
 </body>
<?php
while($d =mysqli_fetch_assoc($r)){
    
    echo '<a href="openrefer.php?rid='.$d['rid'].'">'.$d['rname'].'</a>';
    echo"<br>";
    echo "\r\n";

}
?>


</body>

</html>