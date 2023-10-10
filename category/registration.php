<?php

if(isset($_POST['sub'])){
    include('conn.php');
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="INSERT INTO `regitration table`(`fname`, `lname`, `email`, `password`) VALUES ('$fname','$lname','$email','$password')";
    mysqli_query($conn,$sql);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form method="post">
    <input type="text" name="fname">
    <input type="text" name="lname">
    <input type="text" name="email">
    <input type="text" name="password">
    <input type="submit" name="sub" value="create account">
</form>
</body>
</html>