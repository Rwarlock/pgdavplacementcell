<?php 
/* Main page with two forms: sign up and log in */
require 'assets/backend/db.php';
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

<body id="home">
<?php include "assets/php/prfnavbar.php" ?>   
    
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Welcome</h1>
                <div style="font-size:16px;color:green">
                  <?php 
                  // Display message about account verification link only once
                  if ( isset($_SESSION['message']) )
                  {
                      echo $_SESSION['message'];

                      // Don't annoy the user with more messages upon page refresh
                      unset( $_SESSION['message'] );
                  }

                  ?>
              </div>
                <hr>
                <div style="font-size:16px;color:#e0150b">
                 <?php
          
                  // Keep reminding the user this account is not active, until they activate
                  if ( !$active ){
                      echo
                      $_SESSION['message'] = "Your Account is Unverified. Verify by clicking on the verify link which has been sent to your registerd mail ID.!";
                    header("location: error.php");
                  }

                  ?>
                </div>
               
                <hr>
                <div class="jumbotron">
                    <div class="container">
                        <h1><?php echo $name; ?></h1>
                    <p><?= $email ?></p>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10" style="margin:auto">
                        <h2 style="color:green">Upcoming Drives and Seminars</h2>

<?php
  include "assets/backend/db.php";
  $sql = "SELECT * from drive";
  $result = $mysqli->query($sql);  
  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
  $_SESSION['drive_name']=$row["drive_name"];
  $_SESSION['drive_id']=$row["drive_id"];
  $_SESSION['drive_date']=$row["drive_date"];
  $_SESSION['drive_time']=$row["drive_time"];
  ?>
    <div class="panel panel-default">
    <div class="panel-heading"><?php echo $row["drive_name"]; ?></div>
    <div class="panel-body">
    <b>Drive Date  :</b><p><?php echo $row["drive_date"]; ?></p><br>
    <b>Drive Time  :</b><p><?php echo $row["drive_time"]; ?></p>
    <b>Drive Info  :</b><b></b><p><?php echo $row["drive_info"]; ?></p>
    <a href="drive_registering.php"><button type="button" class="btn btn-default">Register </button></a>
    </div>
    </div>
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

    
</html>