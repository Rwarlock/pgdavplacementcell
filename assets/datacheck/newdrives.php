
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
    <div class="container">
        <div class="row">
            <div class="col-lg-10" style="margin:auto">
            <div class="panel panel-default">
              <div class="panel-heading"><h1>ADD DRIVE, SEMINAR or EVENT</h1></div>
              <div class="panel-body">
                  <div id="message" style="color:red">
                  <?php 
                          session_start();
                                    include "../backend/db.php";
                                    if(isset($_POST['drive_name'])) {
                                        $drive_name=$_POST['drive_name'];

                                    $name = $mysqli->escape_string($_POST['drive_name']);
                                    if(isset($_POST['drive_date'])) {
                                        $drive_date=$_POST['drive_date'];

                                    if(isset($_POST['drive_time'])) {
                                        $drive_time=$_POST['drive_time'];

                                    if(isset($_POST['eligibility1'])) {
                                        $eligibility1=$_POST['eligibility1'];
                                    
                                    if(isset($_POST['eligibility2'])) {
                                    $eligibility2=$_POST['eligibility2'];
                                            
                                    if(isset($_POST['eligibility3'])) {
                                    $eligibility3=$_POST['eligibility3'];
                                        
                                    if(isset($_POST['drive_info'])) {
                                    $drive_info=$_POST['drive_info'];
                                    $drive_info = $mysqli->escape_string($_POST['drive_info']);   


                                    $sql="INSERT INTO `drive`(`drive_name`, `drive_date`, `drive_time`, `drive_info`, `eligibility1`, `eligibility2`, `eligibility3`) VALUES ('$drive_name','$drive_date','$drive_time','$drive_info','$eligibility1','$eligibility2','$eligibility3')";
                                    if ( $mysqli->query($sql) ){
                                    
                                    echo  '"'.$drive_name.'"'." is succesufully added."."<br>";
                                    echo "After you have succesfully registered a drive don't refresh again.";

            
                                        }
                                        else {
                                            echo "Drive Couldn't be added.";
                                        } 
                                    
                                  

                                    }
                                    }
                                    }
                                    }
                                    }
                                    }
                                    }
                                   
                                    ?>
                  </div>
                   
                  
                <form action="" method="post">
                        <div class="form-group">
                        <label>Drive Name :</label>
                                <input class="form-control" type="string"
                                id="inputdrivename" name="drive_name" placeholder="Drive Name" required>
                        </div>
                         

                        <div class="form-group">
                        <label>Drive Date </label>
                                <input class="form-control" type="date"
                                id="drivedate" name="drive_date" placeholder="Drive Date" autocomplete="off" required>
                        </div>
    
                        <div class="form-group">
                        <label>Drive Time : </label>
                                <input class="form-control" type="time"
                                id="Drivetime" name="drive_time" placeholder="Confirm password" required>
                        </div>  
                        <div class="form-group">
                        <label>Eligibility for 1st year Students: </label>
                                <input class="form-control" type="text"
                                id="inputeligibility1" name="eligibility1" placeholder="1 if eligible 0 if not eligible" required>
                        </div>
    
    
                        <div class="form-group">
                        <label>Eligibility for 2nd year Students: </label>
                                <input class="form-control" type="text"
                                id="inputeligibility2" name="eligibility2" placeholder="1 if eligible 0 if not eligible" required>
                        </div>
    
    
                        <div class="form-group">
                        <label>Eligibility for 3rd year Students: </label>
                                <input class="form-control" type="text"
                                id="inputeligibility3" name="eligibility3" placeholder="1 if eligible 0 if not eligible" required>
                        </div>
    
    
                        <div class="form-group">
                        <label>Information : </label>
                                <textarea class="form-control" type="textarea" 
                                          id="inputinfo" name="drive_info" placeholder="Drive Info. Max Length :8000 Characters" required cols="20" rows="20"></textarea>
                        </div>
                        <input type="submit" name="submit" value="Make it Online" class="btn btn-default" required><br>
                       
                        </form>
                            
                       
                </div>
            </div>
                 
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