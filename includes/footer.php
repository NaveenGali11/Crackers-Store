<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-4">
                <h3>Information</h3>
                <p><a href="about.php"><span style="color: white">About Us</span></a></p>
               
                <p><a href="contact.php"><span style="color: white">Contact Us</span></a></p>
            </div>
            

            <div class="col-xs-4">
            <?php
                if(!isset($_SESSION["email"])){
            ?>
                <h3>My Account</h3>
                <p><a href="login.php"><span style="color: white">Login</span></a></p>
                <p><a href="signup.php"><span style="color: white">Sign Up</span></a></p>
            <?php
                }else{
            ?>
                <h3>Manage account</h3>
                <p><a href="cart.php"><span style="color: white"> Cart</span></a></p>
                
                <p><a href="settings.php"><span style="color: white">Settings</span></a></p>
                
                <p><a href="logout_script.php"><span style="color: white">Log Out</span></a></p>
                
               <?php
                }
                ?> 
            </div>
            
            <div class="col-xs-4">
                <h3>Contact Us</h3>
                <p>Contact No. +91 9581381907</p>
                <p>Crackers Store <?php echo date('Y');?><br>All Rights Reserved.</p>
                <p>Proudly made in INDIA.</p>
            </div>
            
        </div>
    </div>
</footer>