
<?php
session_start();

$sql = "SELECT b.url as burl,s.sname,r.url as rurl,b.bname,r.rname FROM history h,books b,refer r,subjects s where (h.bid=b.bid OR h.rid=r.rid) AND (b.sid=s.sid OR r.sid=s.sid) AND `uid`=".$_SESSION["uid"];
require 'connect.php';
$query = mysqli_query($conn,$sql);



?>
<!DOCTYPE html>
<html>
<head>
    <title>History</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="historystyle.css">
<div class="x">
	<div class="v" style="font-size: 30px;"></div>
	<!-- <button class="v" >Login</button> -->
	<div class="v" style="font-size: 60px;margin-top: 0px;margin-right: 10px">|</div>
	<div class="v" style="font-size: 30px;"><a href="logout.php">Log Out</a></div>
	<div class="v" style="font-size: 60px;margin-top: 0px;margin-right: 10px">|</div>
	<!--<div class="v" style="font-size: 30px;"><a href="">Request Blood</a></div>
	<div class="v" style="font-size: 60px;margin-top: 0;margin-right: 10px">|</div>
	<div class="v" style="font-size: 30px;"><a href="donate.php">Donate Blood</a></div>
 	<div class="v" style="font-size: 60px;margin-top: 0;margin-right: 10px">|</div>-->
	<div class="v" style="font-size: 30px;"><a href="userpr.php">Home</a></div> 
	<div style="font-size: 30px;padding-top: 20px;font-weight: bold;padding-left: 10px"><a>My History</a></div>
<div style="margin: 0px; height: 640px; /*background: black right top*/; margin-top:23px;">
	<div style="height: 100%;width: 100%;">
		<!--<h1 align="center">Donation Details</h1>-->
		<div style="border: 2px indianred;height: 620px; width:1285px; overflow-y:scroll;">
		 
			<table style=" ">
			 	<tr>
			 		<th>
			 			<td class="th">Subject</td>
			 			<td  class="th">Books/References</td>
			 			<td  class="th">URL</td>
                    	<!-- <td  class="th">Time</td> -->
                 </tr>
				 <?php
				 
				 if($query) {
					 while($row = mysqli_fetch_assoc($query)) {
						?>
						<tr>
							<td><?php echo $row["sname"] ?></td>
							<td><?php echo $row["bname"].$row["rname"] ?></td>
							<td><?php echo $row["burl"].$row["rurl"] ?></td>
						</tr>
						
						<?php
					 }
				 }
				 
				 ?>
			 </table>
		</div>
	</div>
</div>
</div>
</body>
</html>