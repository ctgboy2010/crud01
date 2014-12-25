<?php
    include "ftfl_config.php";

    $id=$_GET['id'];
    $query="DELETE FROM `ftfl`.`reg_info` WHERE `reg_info`.`id` = $id";
    mysqli_query($con,$query);
    header('location: ftfl_read.php');
    mysqli_close($con);
?>