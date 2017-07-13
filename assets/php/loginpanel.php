<?php
session_start();
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12" style="padding-top:100px">
        <div class="col-lg-6" >
        <div class="panel panel-default">
              <div class="panel-heading">Login</div>
              <div class="panel-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label>Email : </label>
                                <input class="form-control" type="email"
                                id="inputname" name="email" placeholder="Your Email Id" required autocomplete="email">
                        </div>
                    <label>Password : </label>
                    <div class="form-group">
                                <input class="form-control" type="password"
                                id="password" name="password" placeholder="Password" autocomplete="off" required autocomplete="password">
                    </div>
                        <input type="submit" name="submit" value="Log In" class="btn btn-default" required>

                </form>
                  <div id="message" style="color:red">
<?php

// Escape email to protect against SQL injections

include "assets/backend/db.php";
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $email = $mysqli->escape_string($_POST['email']);
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
        $result   = $mysqli->query("SELECT * FROM user WHERE email='$email'");
        
        if ($result->num_rows == 0) { // User doesn't exist
            echo "User with that email doesn't exist!";
        }
        
        else { // User exists
            $user = $result->fetch_assoc();
            
            if (password_verify($_POST['password'], $user['password'])) {
                $_SESSION['name']     = $user['name'];
                $_SESSION['email']     = $user['email'];
                $_SESSION['active']    = $user['active'];
                $_SESSION['logged_in'] = 1;
                header("location:profile.php");
            } else {
                echo "You have entered wrong password, try again!";
            }
        }
    }
}

?>
         </div>        
            </div>
        </div>
        </div>
            <div class="col-lg-6">
                        <?php
include "assets/php/updates.php";
?>

            </div>
    </div>
    </div>
</div>