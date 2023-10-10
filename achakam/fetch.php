<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2px">
        <tr>
            <th>Product Name</th>
            <th>Product price</th>
            <th>product image</th>
            <th>Action</th>
        </tr>
        <?php
        include('conn.php');
        $sql="SELECT * FROM `index`";
        $result= mysqli_query($conn,$sql);
        while($rows=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $rows['p_name']; ?></td>
                <td><?php echo $rows['p_price']; ?></td>
                <td> <img src="<?php echo 'uploads/'.$rows['p_img']; ?>" alt=""></td>
                <td><a href="">Delete</a></td>
            </tr>
            <?php
        }
            ?>
    </table>
</body>
</html>