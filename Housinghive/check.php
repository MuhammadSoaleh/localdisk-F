<?php
include('config.php');
$id=mysqli_real_escape_string($con,$_GET['id']);
$res=mysqli_query($con,"UPDATE `user` set veri_status='1' where verification_id='$id'");
if ($res) { 
    header('Location:login.php');}

?>

