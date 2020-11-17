<?php
    require("includes/common.php");
    
    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
    
    $old_password = $_POST['old_password'];
    $old_password = mysqli_real_escape_string($con, $old_password);
    $old_password = md5($old_password);
    
    $new_password = $_POST['new_password'];
    $new_password = mysqli_real_escape_string($con, $new_password);
    $new_password = md5($new_password);
    
    $repeat_password = $_POST['repnew_password'];
    $repeat_password = mysqli_real_escape_string($con, $repeat_password);
    $repeat_password = md5($repeat_password);
    
    $query = "SELECT email, password FROM users WHERE email = '".$_SESSION['email']."'";
    $result = mysqli_query($con, $query);
    
    $row = mysqli_fetch_array($result);
    
    $original_password = $row['password'];
    
    if($new_password != $repeat_password){
        header('location:settings.php?error=The two passwords don\'t match');
    }else{
        if($old_password = $original_password){
        $query = "UPDATE users SET password = '".$new_password."' WHERE email = '".$_SESSION['email']."'";
        mysqli_query($con, $query) or die(mysqli_error($con));
        header('location:settings.php?error=Password Successfully Updated');
    }else {
             header('location:settings.php?error=Wrong Old Password');
        }      
}
?>