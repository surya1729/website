<?php
session_start();
if(isset($_SESSION["email"])) {
    header("Location: userpr.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <h1>LOOK TO LEARN</h1>
    </head>
    <body>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>HOME</title>
        <link rel="stylesheet" type="text/css" href="HOMEstyle.css">
        <div class="nav">
    <a href="about.php">About</a>
    <a href="contact.php">Contact us</a>
    <a href="newloginpage.php">Login</a>
    

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
