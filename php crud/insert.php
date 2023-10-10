<?php
if (isset($_REQUEST['sub'])) {
    include('conn.php');
    $f_name=$_POST['f_name'];
    $l_name=$_POST['l_name'];
    $age=$_POST['age'];
    $date=$_POST['date'];
    $sql="INSERT INTO `user`(`f_name`, `l_name`, `age`, `date`) VALUES ('$f_name','$l_name','$age','$date')";
    $result=mysqli_query($conn,$sql);

   if ($result) {
        echo "<script>alert('imported');</script>";
    } else {
        echo "<script>alert('error');</script>";
 
   }
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
    <input type="text" name="f_name">
    <input type="text" name="l_name">
    <input type="number" name="age">
    <input type="date" name="date">
    <input type="submit" name="sub" value="add">

</form>
</body>
</html>