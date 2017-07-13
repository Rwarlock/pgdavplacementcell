<?php
/* Main page with two forms: sign up and log in */
require 'assets/backend/db.php';
session_start();


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


<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Roboto+Condensed:300,400,700" rel="stylesheet"></head>

<body id="home"> 
<?php
include "assets/php/navbar.php";
?>
<?php
include "assets/php/banner.php";
?>
<div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <?php
include "assets/php/aboutplacementcell.php";
?>                           
                        </div>
                    <div class="col-lg-4 " style="padding:15px;">
                    
                              <?php
include "assets/php/updates.php";

?>


               </div>
            </div>
        </div>
    </div>
    </div>
    
    <div class="container"><hr></div>
<?php
include "assets/php/frontpanel.php";
?>   
       <div class="container"><hr></div>
<?php
include "assets/php/footer.php";
?>   
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