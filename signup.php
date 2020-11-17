<?php
    require("includes/common.php");
    if(isset($_SESSION['email'])){
        header('location:products.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SignUp | Crackers Store</title>
        <!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="crackerstore.css">
         <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Grandstander">
        
        <style>
            body{background: url(images/crackers1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            color: white}
        </style>
    </head>
    <body>
        <?php
            include "includes/header.php";
        ?>
        <div class="container">
            <div class="row" style="padding:50px;margin-bottom:63px">
                <div class="col-sm-5">
                    <h2 style="font-family:Grandstander">Sign Up</h2>
                    <form action="signup_script.php" method="post">
                        
                        <div class="form-group col-sm-10">
                            <input class="form-control" placeholder="Enter Your Name" name="name" required>
                        </div>
                        
                        <div class="form-group col-sm-10">
                            <input type="email" class="form-control" placeholder="Enter Your email" name="email" required>
                        </div>
                        
                        <div class="form-group col-sm-10">
                            <input type="password" class="form-control" placeholder="Enter Your password" pattern=.{6,} name="password" required>
                        </div>
                        
                        <div class="form-group col-sm-10">
                            <input type="number" class="form-control" placeholder="Phone Number" name="contact" required>
                        </div>
                        
                        <div class="form-group col-sm-10">
                            <input type="text" class="form-control" placeholder="City" name="city" required>
                        </div>
                        
                        <div class="form-group col-sm-10">
                            <input type="Address" class="form-control" placeholder="Enter Your address" name="address" required>
                        </div>
                        
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
                        </div>
                        
                        <div class="col-sm-10">
                            Already have an account ? <a href="login.php">Click here</a> to log in.
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
            include "includes/footer.php";
        ?>
    </body>
</html>