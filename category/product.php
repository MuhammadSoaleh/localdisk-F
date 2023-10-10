<?php

session_start();
if(!isset($_SESSION['email']))


{
    header("Location:login.php");
}
?>
<?php
if (isset($_POST['sub'])){
    include('conn.php');
    $pname=$_POST['pname'];
    $pprice=$_POST['pprice'];
    $cid=$_POST['cid'];
    
    
    $sql="INSERT INTO `product`(`p_name`, `p_price`, `cid`) VALUES ('$pname','$pprice','$cid')";
    
  $result=mysqli_query($conn,$sql);
    if ($result){
        echo "<script> alert('inserted') </script>";
    }
    else{
        echo "<script> alert('error') </script>";
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
        <input type="text" name="pname">
        <input type="number" name="pprice">
        <select name="cid" id="">
            <?php
            include('conn.php');
            $sql="SELECT * FROM category";
            $result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
            
            ?>
            <option value="<?php echo $row['c_id']; ?>"><?php echo $row['category']; ?></option>
            <?php
}
            ?>
        </select>
        <input type="submit" name="sub" value="submit">
    </form>
    <a href="logout.php">logout</a>
</body>
</html>