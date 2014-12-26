<?php
    include('connection.php');
    $id = $_GET['id'];

    $query = "SELECT * FROM `academic_info`.`information` WHERE `information`.`id` = $id";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    //print_r($row);
    var_dump($row);
?>
<br />
<a href="list.php">Goto List</a>