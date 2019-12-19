
<!DOCTYPE html>
<html>
<head>
	<title>FEEDBACK</title>
	<link rel="stylesheet" type="text/css" href="feedbackstyle.css">

</head>
<body>
	<h1>LOOK TO LEARN</h1>


	    <div class="nav">
                	<a href="userpr.php">Home</a>
        </div>
		<div class="container">
        <?php
session_start();


if($_SERVER["REQUEST_METHOD"]=="POST") {
    $conn = mysqli_connect('localhost','root','');
    mysqli_select_db($conn,'looktolearn');
    
    $name = $_POST['email'];
    $expe = $_POST['experience'];
    $cmt = $_POST['comments'];
    
        $reg = "insert into `feedback` (username,experience,comment) values ('$name','$expe','$cmt')";
        $quer =mysqli_query($conn,$reg);
        if($quer) {
            ?>
                <script>
                    alert("Thanks for feedback");
                    window.location= 'userpr.php';
                </script>
            <?php
        }
        else {
            ?>
                <script>
                    alert("Failed");
                    // window.location= 'userpr.php';
                </script>
            <?php
        }
}

?>
            <h2>Feedback</h2> 
            <form action="feedback.php" method="POST">
                <div class="row">
                        
                    <p1>Username:<label><input name="email" type="text"> </label> </p1>               	  
                    <p>Please provide your feedback below: 
                    <!--<div class="txtb">-->

                        <input type="text" placeholder="experience(good/bad/satisfactory)" name="experience" required>
                    <!--</div>--></p>
                </div>
                <br>
                <div class="com">
                    Comments:
                        <p>
                        <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="10000" rows="10" columns="56" ></textarea><br>
                           <button type="submit" class="submit" >Submit </button>
                        </p>

        
                </div>
                </form>
        </div>
</body>
</html>