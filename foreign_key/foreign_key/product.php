<?php
if(isset($_POST['sub'])){
    include('conn.php');
    $pname = $_POST['pname'];
    $pprice= $_POST['pprice'];
    $cid = $_POST['id'];
    $sql= "INSERT INTO `product`( `p_name`, `p_price`, `cid`) VALUES ('$pname','$pprice','$cid')";
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
        <input type="text" name="pname">
        <input type="number" name="pprice">
        <select name="id" id="">
            <?php 
            include('conn.php');
            $sql="SELECT * FROM category";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result)){
            ?>
            <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>

            <?php
            }
            ?>
        </select>
        <input type="submit" name="sub">
    </form>
</body>
</html>