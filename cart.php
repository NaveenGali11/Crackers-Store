<?php
  require("includes/common.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cart | Crackers Store</title>
        <!-- link to Bootstrap minified css-->
        <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- link to Jquery minified-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!---Link to external css-->
        <link rel="stylesheet" type="text/css"href="crackerstore.css">
    </head>
    <body style="padding-top: 50px;">
        
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->
        
        <div class="container">
            <div class="row">
             <div class="col-sm-offset-3">
                 <table class="table table-stripped" style="margin-bottom: 460px">
                     
                     <?php
                     $sum = 0;
                     $user_id = $_SESSION['user_id'];
                     $query = "SELECT items.price AS price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status = 'Added to cart'";
                     $result = mysqli_query($con, $query)or die($mysqli_error($con));
                     if (mysqli_num_rows($result) >= 1) {
                         ?>
                         <thead>
                             <tr>
                                 <th>Item Number</th>
                                 <th>Item Name</th>
                                 <th>Price</th>
                                 <th></th>
                             </tr>
                         </thead>
                     
                         <tbody>
                             <?php
                             while ($row = mysqli_fetch_array($result)) {
                                 $sum+= $row["price"];
                                 $id="";
                                 $id .=$row["id"] . ",";
                                 echo "<tr>
                                           <td>". "#" . $row["id"] . "</td>
                                           <td>". $row["Name"] . "</td>
                                           <td>Rs " .$row["price"] . "</td>
                                           <td><a href='cart_remove.php?id={$row['id']}'
                                           class='remove_item_link'> X </a></td>
                                        </tr>";
                             }
                             $id = rtrim($id, ",");
                             echo "<tr>
                                      <td></td>
                                      <td>Total</td>
                                      <td>Rs " . $sum . "</td>
                                      <td><a href='success.php?itemsid=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
                                      </tr>";
                         ?>
                     </tbody>
                     <?php
                        } else {
                            echo "<h2>Add items to the cart first!</h2>";
                        }
                        ?>
                        <?php
                        ?>
                 </table>
                </div>
            </div>
        </div>
            <?php
                        include 'includes/footer.php';
            ?>
    </body>
</html>   