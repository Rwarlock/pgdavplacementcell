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

<body id="registered-drive">
    
    <?php include "assets/php/prfnavbar.php" ?>   
    
    <div class="container">
        <div class="row">
            <div class="col-lg-10" style="margin:auto"> 
                <h1 style="text-center">Drives you registered for:-</h1>
            
                <?php
                        include "assets/backend/db.php";
                         $sql = "SELECT * FROM `registered` WHERE `email_student`='$email'";
                            $result = $mysqli->query($sql);  
                            if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                ?>
                               <ul class="list-group">
                              <li class="list-group-item"><?php echo $row["drive_name"]; ?></li>
                            </ul>
                                <?php
                            }
                            ?>
                        
                            <?php
                        } else {
                            echo "0 results";
                        }
                                  $mysqli->close();
                            ?>
                
                
                
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
    

