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

<body id="mydata">
<?php include "assets/php/prfnavbar.php" ?>   
<?php 
  $sql="SELECT `id`, `name`, `course`, `year`, `password`, `contact`, `email`, `date`, `hash`, `active` FROM `user` WHERE email = '$email';";
  $result=$mysqli->query($sql);
  $user = $result->fetch_assoc();
  $_SESSION['name'] = $user['name'];
  $_SESSION['course'] = $user['course'];
  $_SESSION['year'] = $user['year'];
  $_SESSION['contact'] = $user['contact'];
  $_SESSION['email'] = $user['email'];
  $_SESSION['date'] = $user['date'];
    
?>
    <div class="container">
      <div class="row">
      <div class="col-lg-4 col-md-5 col-sm-6 col-xm-12">
          <div id="profile_picture" style="padding:20px">
          <img src="prfl.png" class="img-responsive img-circle" width="50%" height="50%">
          </div>
          <div class="form-group">
          <form action="" method="post" enctype="multipart/form-data">
            Upload your profile photo:
            <label class="btn btn-default btn-file">
                Browse<input type="file" name="fileToUpload" style="display: none;" id="fileToUpload">
            </label>
            <input type="submit" class="btn btn-default" value="Upload" name="submit">
        </form> 
        </div>
        </div> 
      </div>
    </div>
  


    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-default">
                  <div class="panel-heading"><h2>Information</h2></div>
          
                      <div class="col-10" style="magin:auto"> 
                        <table class="table table-striped">
                        
                            <tr>
                            <th>
                            Field
                            </th>
                             <th>
                            value
                            </th>
                            </tr>
                            <tr>
                            <td>Name :</td>
                            <td><?= $user['name'] ?></td>
                            </tr>
                            
                            <tr>
                            <td>Course :</td>
                            <td><?= $user['course'] ?></td>
                            </tr>
                            
                            <tr>
                            <td>Year :</td>
                            <td><?= $user['year'] ?></td>
                            </tr>
                            
                            <tr>
                            <td>Contact :</td>
                            <td><?= $user['contact'] ?></td>
                            </tr>
                            
                            <tr>
                            <td>Email :</td>
                            <td><?= $user['email'] ?></td>
                            </tr>
                            
                            <tr>
                            <td>Account Since :</td>
                            <td><?= $user['date'] ?></td>
                            </tr>
                      
                      </table>
                          
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
    


    