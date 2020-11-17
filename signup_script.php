<?php
    require("includes/common.php");
    
    $name = $_POST['name'];
    $name = mysqli_real_escape_string($con,$name);
    
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con,$email);

    $password = $_POST['password'];
    $password = mysqli_real_escape_string($con,$password);
    $password = md5($password);

    $contact = $_POST['contact'];
    $contact = mysqli_real_escape_string($con,$contact);

    $city = $_POST['city'];
    $city = mysqli_real_escape_string($con,$city);
    
    $address = $_POST['address'];
    $address = mysqli_real_escape_string($con,$address);

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
    $num = mysqli_num_rows($result);

    $regex_num = "/^[789][0-9]{9}$/";
    $regex_email = "/^[a-z0-9.%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";

    if ($num != 0){
        $m = "<span class='red'>Email Already Exists</span>";
        header('location:signup.php');
    }elseif(!preg_match($regex_num,$contact)){
        $n="<span class='red'>Please Enter a valid Phone number</span>";
    }elseif(!preg_match($regex_email, $email)){
        $o = "<span class='red'>Please Enter a valid Email</span>";
    }else{
        $query1 = "INSERT INTO users (name,email,password,contact,city,address)VALUES('$name','$email','$password','$contact','$city','$address')";
        $result1 = mysqli_query($con,$query1) or die(mysqli_error($con));
        $_SESSION['email'] = $email;
        $_SESSION['id'] = mysqli_insert_id($con);

        header("location:products.php");
    }
?>
