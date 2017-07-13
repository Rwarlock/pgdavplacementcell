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

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Roboto+Condensed:300,400,700" rel="stylesheet"></head>

<body id="dashboard"> 
    
    <?php include "navbar-datacheck.php" ?>

    
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
    <?php 
    include "../backend/db.php";
    $sql = "SELECT * from newsletter";
    $result = $mysqli->query($sql);  
    if ($result->num_rows > 0) {
    ?>
    <table class="table table-striped">
        <tr>
            <td>ID</td>
            <td>Email</td>
            <td>Action</td>
        </tr>
    <?php
    while($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><a href="delete.php">Delete</a></td>
        </tr>
        <?php
    }
    ?>
    </table>
    <?php
} else {
    echo "0 results";
}
          $mysqli->close();
    ?>
         
        
            </div>
        </div>
    </div>
    
    
  
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
    <script src="js/script.js"></script>
    
        
</body>

    
</html>   