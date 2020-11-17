<?php
    function check_if_added_to_cart($item_id) {
        if(isset($_SESSION["user_id"])){
            $user_id = $_SESSION["user_id"];
        }
        require ("common.php");
       
        $query = "SELECT * FROM users_items WHERE item_id = '$item_id' AND user_id='$user_id' And status='Added to cart'";
       
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result)>=1){
            return true;
        } else {
            return false;
        }
}
?>