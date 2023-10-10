<?php
include('conn.php');
$id = $_GET['id'];
$sql="DELETE FROM `index` WHERE p_id =$id";
mysqli_query($conn,$sql);
header('Location:fetch.php');
?>