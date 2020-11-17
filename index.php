<?php
    require ("includes/common.php");
    if(isset($_SESSION["email"])){
        header('location:products.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Home | Crackers Store
        </title>
        <link rel="stylesheet" href="crackerstore.css">
        <!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    </head>
    <body>
        <?php
            include 'includes/header.php';
        ?>
        <div class="container-fluid">
            <div class="banner-image img-responsive">
            <div class="banner-content">
                <h3 style="font-family:Tangerine;font-size:60px">India's First Online Crackers Store</h3>
                <p>Upto 40% OFF on all products</p>
                <a href="products.php" class="btn btn-danger btn-lg-active">Shop Now</a>
            </div>
        </div>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>