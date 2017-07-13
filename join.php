<?php 
/* Main page with two forms: sign up and log in */
require 'assets/backend/db.php';
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

<body id="join"> 
    
<?php include "assets/php/navbar.php";  
    file_put_contents("test.txt", ob_get_contents());
?>
<?php include "assets/php/banner.php"; 
?>
    
<?php include "assets/php/register_form.php";
?>    
    
<?php include "assets/php/footer.php"; ?>
    
    

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
