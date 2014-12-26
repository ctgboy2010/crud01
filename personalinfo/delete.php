<?php
//include('connect.php');
$con=mysqli_connect("localhost","root","lict@2","personal_info") or die("Error: ".mysqli_error($con));

$id=$_GET['id'];
$query="DELETE FROM `personal_info`.`personalinfo` WHERE `personalinfo`.`id` = $id";
mysqli_query($con,$query);
header('location: list.php');
mysqli_close($con);
?>