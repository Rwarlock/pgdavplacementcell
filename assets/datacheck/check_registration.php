
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
  <link rel="stylesheet" href="styles.css">
<link rel="shortcut icon" type="image/x-icon" href="favicon-32x32.png" />

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Roboto+Condensed:300,400,700" rel="stylesheet"></head>

<body id="backend"> 

    
    <?php include "navbar-datacheck.php"?>
    <div class="container" style="margin:25px">
        <div class="row">
          <div class="col-lg-6">
        <?php

  include "../backend/db.php";
  $sql = "SELECT * from drive";
  $result = $mysqli->query($sql);  
  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
   session_id("session2");

  $_SESSION['drive_name']=$row["drive_name"];
  $_SESSION['drive_id']=$row["drive_id"];

  ?>
    <ul class="list-group">
    <li><div class="list-group-item"><a href="registered.php"><?php echo $row["drive_name"]; ?></a></div>
 </li>
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
   <?php session_destroy(); ?>
    
    
    
        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
    <script src="js/script.js"></script>
    
        
</body>

    
</html>    