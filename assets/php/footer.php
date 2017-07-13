    <div class="container">
        <div class="row">
            <div class="alert alert-success" role="alert">
                <?php    
                    if(isset($_POST['submit'])){ //check if form was submitted
                     include "assets/backend/newsletter.php";
                    }
                    ?>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color:#222222">
        <div class="row">
            <div class="container" style="margin-top:15px;
                margin-bottom:15px">
                <div class="col-lg-4" style="color:#f3f6f9">
                    <img src="images/pc%20logo.png" width="80px" height="80px">
                    <h4 >
                        PLACEMENT  
                        <cell style="font-weight:bold">CELL</cell>
                    </h4>
                    <p>Nehru Nagar, Ring Road <br>New Delhi <br>
                        Ph :(+91) 964 328 0581<br>
                        Email : placements.pgdav@gmail.com
                    </p>
                    <a href="https://www.facebook.com/pgdavplacements">  <img src="images/f.png" height="30px" width="30px" >
                    </a>
                    <img src="images/i.png" height="30px" width="30px">
                    <img src="images/linkedin.png" height="30px" width="30px">
                </div>
                <div class="col-lg-4" style="color:#f3f6f9;
                    padding-top:30px">
                    <h4>Subscribe to Our Newsletter</h4>
                    <form action=" " method="post">
                        <div class="form-group">
                            <input class="form-control" type="email"
                                id="inputemail" name="email_newsletter" placeholder="Your Email ID">
                        </div>
                        <input type="submit" name="submit" class="btn btn-default" value="subscribe">
                    </form>
                </div>
                <div class="col-lg-4" style="color:#f3f6f9;
                    padding-top:29px">
                    <h4>Links</h4>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutcell.php">About Cell</a></li>
                        <li><a href="">Registration</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid" style="background-color:#f3f6f9">
                <div class="row">
                    <div class="container" style="padding-top:7px">
                        <div class="col-lg-6 col-sm-12 col-xs-12">© All the Rights Reserved with Placement Cell</div>
                        <div class="col-lg-6 col-sm-12 col-xs-12" style="text-align:right"><a href="https://www.linkedin.com/in/bhanukrsingh/">Developed By Bhanu Singh</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>