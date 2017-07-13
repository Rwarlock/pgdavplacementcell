
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

<body id="backend"> 
    
<div class="container-fluid">
    <div class="row">
       <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Admin Login</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" id="email" name="email" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" id="password" name="password" type="password" value="">
                                </div>
                               
                                <div class="form-group">
                                    <input class="form-control" id="submit" name="submit" type="submit" value="submit">
                                </div>
                            </fieldset>
                            
                        </form>
						<br/><div id="errorMessage"><div class="loginmsg"></div></div>
                            <div class="container">
                                    <div class="row">
                            <div  style="margin:auto">
                            
                            <div class="alert alert-success" role="alert">
                            <?php    
                            if(isset($_POST['submit'])){ //check if form was submitted
                            if(isset($_POST['email'])){
                                $username=$_POST['email'];
                            
                            if(isset($_POST['password'])){
                            $password=$_POST['password'];
                            
    
                        if ($username=="bhanu" & $password=="bhanu")
                            {
                            header("Location:dashboard.php",TRUE,303);
                        }
                                else echo "wrong details" ;
                            }
                            }
                            }
                            ?>
                            </div>  
                            </div>  
                            </div>  
                            </div>  
    
                        
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