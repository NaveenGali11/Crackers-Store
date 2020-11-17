    <!DOCTYPE html>
    <html>
        <head>
            <title>Contact Us | Crackers Store</title>
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
                include "includes/header.php";
            ?>
            <div class="container">
                    
                <div class="row" style="padding:50px;margin-bottom:63px">
                        
                    <img src="images/contact-us-1.jpg" style="height:350px;padding-top:40px;width:100%" class="img-responsive col-sm-5">
                    
                    <div class="col-sm-5">
                        
                        <h2>Contact Us</h2>
                            <div class="form-group col-sm-10">
                                <label>Name :</label>
                                <input class="form-control" placeholder="Enter Your Name" name="name" required>
                            </div>

                            <div class="form-group col-sm-10">
                                <label>E-mail :</label>
                                <input type="email" class="form-control" placeholder="Enter Your email" name="email" required>
                            </div>
                            
                            <label>Feedback or Message :</label>
                            <div class="form-group col-sm-10">
                                
                                <textarea class="form-group" placeholder="Enter Your Feedback or Message"></textarea>
                            </div>
                            
                            <div class="col-sm-10">
                                <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button><br><br>
                            </div>
                        
                             
                    </div>
                    </div>
            </div>
            <?php
                include "includes/footer.php";
            ?>

        </body>
    </html>