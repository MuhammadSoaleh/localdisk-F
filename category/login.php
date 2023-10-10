<?php
session_start();
if(isset($_POST['sub'])){
    include('conn.php');
    // $fname=$_POST['fname'];
    // $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM `regitration table` WHERE `email`='$email' AND `password`='$password'";
    // mysqli_query($conn,$sql);
    $result=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($result);
    if($row){
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;

        header("location:product.php");
    }
    else{
        echo "<script> alert('invalid email password error') </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">

    <input type="text" name="email">
    <input type="password" name="password">
    <input type="submit" name="sub">
    </form>
</body>
</html>