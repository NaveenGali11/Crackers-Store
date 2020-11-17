<?php
    require ("includes/common.php");
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Settings | BookStore</title>
               <!-- link to Bootstrap minified css-->
        <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- link to jquery minified-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- link to Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                <!---Link to external css-->
                <link rel="stylesheet" type="text/css"href="crackerstore.css">
        <style>
            body .container-fluid{
                background-image:url(images/settings.jpg);
                background-repeat: no-repeat;
                background-size:cover;
                width: 100%;
            }
            h1{
                color: white
            }
        </style>
    </head>
    
    <body>
        <?php include 'includes/header.php'; ?>
        
        <div class="container-fluid" id="content" style="padding: 100px;padding-bottom:290px">
            <div class="row">
                <div class="col-lg-4" id="settings-container">
                    <h1>Change Password</h1>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old_password" pattern=".{6,}" placeholder="Old Password">
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-control" name="new_password" pattern=".{6,}" placeholder="New Password">
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-control" name="new_password" pattern=".{6,}"
                                   placeholder="Re-type New Password">
                        </div>
                        
                        <div class="red">
                            <?php
                                if(isset($_GET["error"])){
                                    echo $_GET["error"];
                                }
                            ?>
                        </div>
                        <br>
                        <center>
                        <button type="submit" class="btn btn-primary btn-block ">Change</button>
                        </center>
                    </form>
                </div>
            </div>
            
        </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>