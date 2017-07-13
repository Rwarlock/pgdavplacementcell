
<div class="container" style="padding:20px">
        <div class="row">
            <div class="col-lg-12">
                
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Registration Form</h2>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-6">
                            <form action="" method="post">
                        <div class="form-group">
                        <label>Name :</label>
                                <input class="form-control" type="string"
                                id="inputname" name="name" placeholder="Your Name" required>
                        </div>
                         <div class="form-group">
                               <label for="sel1">Select Course :</label>
                                  <select class="form-control" id="course" name="course" required>
                                    <option>B.A. Programme </option>
                                    <option>B.Com </option>
                                    <option>B.Com(Hons.)</option>
                                    <option>B.A.(Hons) Economics</option>
                                    <option>B.A. (Hons.) English</option>
                                    <option>B.A. (Hons.) History</option>
                                    <option>B.A. (Hons.) Hindi</option>
                                    <option>B.A. (Hons.) Political Science</option>
                                    <option>B.A. (Hons.) Sanskrit</option>
                                    <option>B.Sc. (Hons.) Mathematics</option>
                                    <option>B.Sc.(Hons) Statistics</option>
                                    <option>B.Sc.(Hons) Computer Science</option>
                                    <option>B.Sc. Mathematical Science</option>
                                  </select>
                        </div> 
                        <div class="form-group">
                               <label for="sel1">Year :</label>
                                  <select class="form-control" id="year" name="year" required>
                                    <option>1 </option>
                                    <option>2</option>
                                    <option>3</option>
                                  </select>
                        </div>
                        <div class="form-group">
                        <label>Password : </label>
                                <input class="form-control" type="password"
                                id="password" name="password" placeholder="Password" autocomplete="off" required>
                        </div> 
                        <div class="form-group">
                        <label>Confirm Password  : </label>
                                <input class="form-control" type="text"
                                id="confirm_password" name="confirm_password" placeholder="Confirm password" required>
                        </div>  
                        <div class="form-group">
                        <label>Contact No. : </label>
                                <input class="form-control" type="phonenum"
                                id="inputnumber" name="contact" placeholder="Your Contact Number" required>
                        </div>
                        <div class="form-group">
                        <label>Email : </label>
                                <input class="form-control" type="email"
                                id="inputname" name="email" placeholder="Your Email Id" required>
                        </div>
                        <input type="submit" name="submit" value="Register" class="btn btn-default" required>
                        <a href="login.php"><button type="button" class="btn btn-default">Or Login</button></a>
                        </form>
                        </div>
                                
                             <div class="col-lg-6">
                    <div class="panel panel-default">
                      <div class="panel-body">
                          <?php 
                          session_start();
                                    include "assets/backend/db.php";
                                    if(isset($_POST['name'])) {
                                        $name=$_POST['name'];

                                    $name = $mysqli->escape_string($_POST['name']);
                                    if(isset($_POST['course'])) {
                                        $course=$_POST['course'];

                                    if(isset($_POST['year'])) {
                                        $year=$_POST['year'];

                                    if(isset($_POST['password'])) {
                                        $password=$_POST['password'];
$password = $mysqli->escape_string( password_hash( "$password" , PASSWORD_BCRYPT));
                                    
                                        if(isset($_POST['contact'])) {
                                        $contact=$_POST['contact'];

                                        $contact = $mysqli->escape_string($_POST['contact']);
                                    if(isset($_POST['email'])) {
                                    $email=$_POST['email'];
                                        

                                    $email = $mysqli->escape_string($_POST['email']);
                                    $result = $mysqli->query("SELECT * FROM user WHERE email='$email'") or die($mysqli->error());
                                    if ( $result->num_rows > 0 ) {
                                    $_SESSION['message']='User with this email already exists!';
                                    header("location: error.php");
                                     ob_end_flush();

                                    }
                                    else { 
                                    $hash = $mysqli->escape_string(md5(rand(0,1000)));
                                    $sql="INSERT INTO `user`(`name`, `course`, `year`, `password`, `contact`, `email`, `hash`) VALUES ('$name','$course','$year','$password','$contact','$email','$hash')";
                                    if ( $mysqli->query($sql) ){
                                    $_SESSION['active']=0;
                                    $_SESSION['logged_in']=true;  
                                    $_SESSION['message']= "You are successfully registered";
                                        
                                        //send registration confirmation link(verify.php)
                                        $to=$email;
                                        $subject='Account Verification (pgdavplacements.com)';
                                        $message_body='Hello '.$name.', Thank you for signing up.';
                                       // mail($to,$subject,$message_body);
                                        
                                    header("location: profile.php");
                                        }
                                        else {
                                            $_SESSION['message']="Registration failed";
                                            header("location:error.php");
                                        } 
                                    }
                                        $_SESSION['email'] =$email;
                                        $_SESSION['name'] = $name;

                                    }
                                    }
                                    }
                                    }
                                    }
                                    }
                                   
                                    ?>

                        </div>
                    </div>
                    
                
                </div>
                        
                        <div class="col-lg-6" style="margin-top:10px">
                            <div class="panel panel-warning" >
                                  <div class="panel-heading"><h3>Information</h3></div>
                                  <div class="panel-body">
                                    <ul>
                                    <li>Complete the from to register with us.</li>  
                                    <li>Fill out the Details carefully.</li>  
                                    <li>Fill in your name as it is in your college ID.</li>  
                                    <li>Use your correct Email ID and Conatact No. so that we can contact to you.</li>  
                                    <li>By Registering with us you automatically subscribe to our Newsletter service .</li>
                                    </ul>
                                  </div>
                            </div>
                        </div>
                        
                   
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
            var password = document.getElementById("password")
          , confirm_password = document.getElementById("confirm_password");

        function validatePassword(){
          if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
          } else {
            confirm_password.setCustomValidity('');
          }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>

   