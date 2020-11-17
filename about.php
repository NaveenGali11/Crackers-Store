<?php
    include 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            About Us | Crackers Store
        </title>
        <!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="crackerstore.css">
    </head>
    <body>
        <?php
            include 'includes/header.php';
        ?>
        <div class="container" style="padding-bottom:220px">
        <div style="padding-top:150px" class="col-xs-6">
            <h1>About Us</h1>
            <p>Created this website with our own interest on webdevelopment.We prepared this for Rev-hack2020.This is our first project for a hackathon.</p>
        </div> 
        
        <img src="images/about-us.png" style="height:350px;padding-top:40px" class="img-responsive col-xs-6">
        </div>
        
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>