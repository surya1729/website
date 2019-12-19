<?php
session_start();
if(!isset($_SESSION["email"]))
    header("Location: newloginpage.php");
?>

<!DOCTYPE html>
<html>
<head>
    <h1>LOOK TO LEARN</h1>
    </head>
    <body>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Myaccount</title>
        <link rel="stylesheet" type="text/css" href="USERstyle.css">
        <div class="nav">
            <a href = "about.php"> About</a>
            <a href = "contact.php">Contact us</a>
    <a href="history.php">History</a>
    <a href ="feedback.php">feedback</a>
    <a href="logout.php">Log out</a>
                   
        </div>
         <div>
                  <select class="drop-box" name="vghf" onchange="location= 'subjects.php?sid='+this.options[this.selectedIndex].value;">
                      <option  disabled selected>Subject</option>
                      <?php 
                    //   $_SESSION['nsid'] = $_GET["sid"];
                      
                      $sql = "SELECT `sid`, `sname`, `descr` FROM `subjects`";
                      require 'connect.php';
                      $query = mysqli_query($conn,$sql);
                      while($row = mysqli_fetch_assoc($query)) {
                          ?>
                            <option value="<?php echo $row["sid"]; ?>"><?php echo $row["sname"]; ?></option>                          
                          <?php
                      }

                      ?>
            </select>
        </div>
   </body> 
   
   <header>
      <div class="hero-text-box">
          <ul>  <li><h2>A library is the delivery room for the birth of ideas,<br>a place where history comes to life</h2><br></li>
              <li> <h2> Here in our site<br> you can find many books and tutorial videos</h2><br></li>
              <li><h2>Have fun with our site</h2></li></ul>
    </div>
</header>
</html>