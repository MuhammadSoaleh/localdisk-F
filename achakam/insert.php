<?php

if (isset($_REQUEST['sub'])){
    include('conn.php');
    $name=$_POST['name'];
    $price=$_POST['price'];
    $imgname=$_FILES['img']['name'];
    $tmpname=$_FILES['img']['tmp_name'];
    $sql="INSERT INTO `index`(`p_name`, `p_price`, `p_img`) VALUES ('$name','$price','$imgname')";
    move_uploaded_file($tmpname,'uploads/'.$imgname);
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
<style>
    body{background-size: cover;
    background-image: url(dynamic-modern-red-shape-white-background_105940-1326.avif);}
        input{border: #ff8080;}
        input:focus{
            border: #ff8080;
        }
    ::placeholder{
        color: black !important;
        font-family: sans-serif !important       ; 
        font-size: small;
        border: #ff8080;
        
        
        
    }
    
    .button{ box-shadow: 2px 2px #ff8080;
        border: #ff8080;

    }
</style>


</head>
<body>
    <form method="post" enctype="multipart/form-data">

   <input type="text" name="name" placeholder="👤 𝙣𝙖𝙢𝙚**" class="rounded-pill" aria-hidden="true" >
    <input type="number" name="price" placeholder=" 🏷️𝙥𝙧𝙞𝙘𝙚**" class="rounded-pill" >
    <input type="file" name="img" placeholder="file**" class="rounded-pill button " >
    <input type="submit" name="sub" class="rounded-pill button" >
    <!-- <input type="text" placeholder="&#9993; Enter your email"> -->

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>