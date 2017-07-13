<?php 
/* Main page with two forms: sign up and log in */
include "assets/backend/db.php";
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
    
}
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
  <meta charset="UTF-8">
  <!--IE Edge Meta TAg-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--viewport-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Minifies CSS-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="shortcut icon" type="image/x-icon" href="favicon-32x32.png" />
  <link href="ytLoad.jquery.css" rel="stylesheet" type="text/css">
  <title>Profile :<?= $name ?></title>

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Roboto+Condensed:300,400,700" rel="stylesheet"></head>

<body id="drive_regestering">
    
    <?php include "assets/php/prfnavbar.php" ?>   
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="margin:auto;
            padding:15px">  
                <div class="panel panel-warning">
              <div class="panel-heading"><h1>Registration Panel</h1></div>
              <div class="panel-body">             

<?php
?>
<h4><b>Drive Name  :</b></h4> <p><?php echo $_SESSION["drive_name"]; ?></p>
<h4><b>Drive Date  :</b></h4><p><?php echo $_SESSION["drive_date"]; ?></p>
<h4><b>Drive time  :</b></h4><p><?php echo $_SESSION["drive_time"]; ?></p>

<?php
    if(isset($_POST['submit'])){
    if(isset($_SESSION["drive_id"])){
    $drive_id=$_SESSION["drive_id"];
    if(isset($_SESSION["email"])){
    $user_email=$_SESSION["email"];
    if(isset($_SESSION["drive_name"])){
    $drive_name=$_SESSION["drive_name"];
    $emailcheck="SELECT * FROM registered WHERE email_student='$user_email'";
    $sql="INSERT INTO `registered`(`drive_id`, `email_student`, `drive_name`) VALUES ('$drive_id','$user_email','$drive_name')";
    $result=$mysqli->query($emailcheck);
    if($result->num_rows==0){
      $mysqli->query($sql);
       ?> <p style="color:green"> <?php echo"You have successfully registered for the drive.";?></p>
       <?php
    }
    else {
     ?> <p style="color:red">    <?php  echo "You have already registered for this Drive.";?></p><?php
    }
    
   }
  }
 } 
}
?>
</div>
</div>
                    <form method="POST" action="">
                    <input type="submit" class="btn btn-default" name="submit" value="Register">
                    </form>
            </div>
          </div>
    </div>
                    
     <?php include "assets/php/footer.php" ?>   

   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script src="js/script.js"></script>
<script src="/path/to/jquery.transit.js"></script>
<script src="/path/to/jquery.ytLoad.js"></script>
    
        
</body>
    