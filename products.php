<?php
    require "includes/common.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BookStore.com</title>
        <!-- link to Bootstrap minified css-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- link to Jquery minified-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- link to Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!---Link to external css-->
        <link rel="stylesheet" type="text/css"href="crackerstore.css">
         <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Syne Mono">
         <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Lobster">
        
        <style>
            body
            {
                background-color: #eee;
            }    
        </style>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check_if_added.php';
        ?>
        <br>
        <br>
        <div class="jumbotron">
            <div>
                <center><h1 style="font-family:Syne Mono">Welcome to our Crackers Store</h1></center>
                <center><p style="font-family:Lobster">India's First online cracker's Store</p></center>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-6">
                <div class="thumbnail">
                    <img src="images/12cm-electric-crackersshope.jpg" style="height:278px" class="img-responsive">
                    <div class="caption">
                        <center>
                        <h3>12 cm Sparkles</h3>
                        <p>Price:Rs.<strike>200</strike> 150 /-</p>
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="login.php" type="button" class="btn btn-block btn-danger">Add to cart</a>     
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(1)){?>
                        <a href="login.php" class="btn btn-block btn-success">Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php }
                        
                        } ?>
                    </div>    
                </div>
            </div>
            
            <div class="col-xs-6">
                <div class="thumbnail">
                    <img src="images/lunik-rocket-express.jpg" style="height: 278px" class="img-responsive">
                    <div class="caption">
                        <center>
                        <h3>Rockets </h3>
                        <p>Price:Rs.<strike>250</strike> 200 /-</p>
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="login.php" type="button" class="btn btn-block btn-danger">Add to cart</a>     
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(2)){?>
                        <a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php }
                        
                        } ?>
                    </div>    
                </div>
            </div>
        </div>    
        
        <div class="row">    
           <div class="col-xs-6">
                <div class="thumbnail">
                    <img src="images/Ground-Chakara-Big-1-scaled.jpg"style="height: 278px" class="img-responsive">
                    <div class="caption">
                        <center>
                            <h3>Big Ground Chakras</h3>
                        <p>Price:Rs.<strike>250</strike> 200/-</p>
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="login.php" type="button" class="btn btn-block btn-danger">Add to cart</a>     
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(3)){?>
                        <a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php }
                        
                        } ?>
                    </div>    
                </div>
            </div>
            
            <div class="col-xs-6">
                <div class="thumbnail">
                    <img src="images/Screenshot_20201105-092924__01.jpg" style="height: 278px" class="img-responsive">
                    <div class="caption">
                        <center>
                        <h3>Small Combo Pack</h3>
                        <p>Price:Rs.<strike>500</strike> 400/-</p>
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="login.php" type="button" class="btn btn-block btn-danger">Add to cart</a>     
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(4)){?>
                        <a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php }
                        
                        } ?>
                    </div>    
                </div>
            </div>
        </div>
        
        <div class="row">    
            <div class="col-xs-6">
                <div class="thumbnail">
                    <img src="images/Lotus-Wheel-Ground-Chakkar-scaled.jpg" style="height:278px" class="img-responsive">
                    <div class="caption">
                        <center>
                        <h3>Lotus Wheel ground chakra</h3>
                        <p>Price:Rs.<strike>250</strike> 200/-</p>
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="login.php" type="button" class="btn btn-block btn-danger">Add to cart</a>     
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(5)){?>
                        <a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php }
                         
                        } ?>
                    </div>    
                </div>
            </div>
            
            <div class="col-xs-6">
                <div class="thumbnail">
                    
                    <img src="images/Spin-Master-Red-Green-Ground-chakkar-scaled.jpg" style="height: 278px" class="img-responsive">
                    <div class="caption">
                        <center>
                        <h3>Red-Greed Ground chakra</h3>
                        <p>Price:Rs.<strike>200</strike> 150/-</p>
                        
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="login.php" type="button" class="btn btn-block btn-danger">Add to cart</a> 
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(6)){?> 
                        <a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php }
                        
                        } ?>
                    </div>    
                </div>
            
            </div>
        </div>
        
        <div class="row">    
            <div class="col-xs-6">
                <div class="thumbnail">
                    <img src="images/Chit-Put-min-scaled.jpg" style="height:278px" class="img-responsive">
                    <div class="caption">
                        <center>
                        <h3>Chit - Phats</h3>
                        <p>Price:Rs.<strike>500</strike> 400/-</p>
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="login.php" type="button" class="btn btn-block btn-danger">Add to cart</a>     
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(7)){?>
                        <a href="login.php" class="btn btn-block btn-block btn-success" disabled>Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php }
                        
                        } ?>
                    </div>    
                </div>
            </div>
            
            <div class="col-xs-6">
                <div class="thumbnail">
                    <img src="images/Screenshot_20201105-093438__01.jpg" style="height: 257px" class="img-responsive">
                    <div class="caption">
                        <center>
                        <h3>Combo Pack</h3>
                        <p>Price:Rs.<strike>1500</strike> 1250/-</p>
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="login.php" type="button" class="btn btn-block btn-danger">Add to cart</a>     
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(8)){?>
                        <a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php }
                        
                        } ?>
                    </div>    
                </div>
            </div>
        </div>    
        <div class="row">    
            <div class="col-xs-6">
                <div class="thumbnail">
                    <img src="images/Screenshot_20201105-094316__01.jpg" style="height:278px" class="img-responsive">
                    <div class="caption">
                        <center>
                        <h3>100 WALA</h3>
                        <p>Price:Rs.<strike>500</strike> 400/-</p>
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="login.php" type="button" class="btn btn-block btn-danger">Add to cart</a>     
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(9)){?>
                        <a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php }
                        
                        } ?>
                    </div>    
                </div>
            </div>
            
            <div class="col-xs-6">
                <div class="thumbnail">
                    <img src="images/Screenshot_20201105-094333__01.jpg" style="height: 278px " class="img-responsive">
                    <div class="caption">
                        <center>
                        <h3>2000 WALA</h3>
                        <p>Price:Rs.<strike>2500</strike> 2000/-</p>
                        
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="login.php" type="button" class="btn btn-block btn-danger">Add to cart</a>     
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(10)){?>
                        <a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php }
                        
                        } ?>
                    </div>    
                </div>
            </div>
        </div>    
        <div class="row">    
                <div class="col-xs-6">
                <div class="thumbnail">
                    <img src="images/Iron-Man-scaled.jpg" style="height:260px" class="img-responsive">
                <div class="caption">
                    <center>
                        <h3>Iron man crackers</h3>
                    <p>Price:Rs.<strike>500</strike> 400/-</p>
                    </center>
                    <?php if(!isset($_SESSION['email'])){ ?>
                    <a href="login.php" type="button" class="btn btn-block btn-danger">Add to cart</a> 
                    <?php }else{ ?>
                        <?php if(check_if_added_to_cart(11)){?>
                    <a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>
                        <?php }else{ ?>
                    <a href="cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php }

                    } ?>
                </div>    
                </div>
                </div>

            <div class="col-xs-6">
                <div class="thumbnail">
                    

                    <img src="images/S7B6241-scaled.jpg" style="height:259px" class="img-responsive">
                    <div class="caption">
                        <center>
                        <h3>Special Shots</h3>
                        <p>Price:Rs.<strike>1500</strike> 1000/-</p>
                        </center>
                        
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <a href="login.php" type="button" class="btn btn-block btn-danger">Add to cart</a>     
                        <?php }else{ ?>
                            <?php if(check_if_added_to_cart(12)){?>
                        <a href="login.php" class="btn btn-block btn-success" disabled>Added to cart</a>
                            <?php }else{ ?>
                        <a href="cart_add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php }
                        
                        } ?>
                    </div>    
                </div>
            </div>
            
        </div>
        
    </body>
    <?php
            include 'includes/footer.php';
        ?>
</html>