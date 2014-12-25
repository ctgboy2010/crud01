<?php
    include('connect.php');
    $id=$_GET['id'];
    $query="SELECT * FROM `students`.`users` WHERE `users`.`id` = $id";
    $result=mysqli_query($con,$query);
    $rows=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Information Form</title>
</head>
<body>
<form action="list.php?id=<?php echo $_GET['id'] ?>" method="post">
    <input type="hidden" id="update_id" value="<?php echo $id ?>" />
    <label>First Name: </label>
    <input type="text" name="fname" title="Enter the First Name" value="<?php echo $rows['first_name']?>" required />
    <br />
    <label>Last Name: </label>
    <input type="text" name="lname" title="Enter the Last Name" value="<?php echo $rows['last_name']?>" required />
    <br />
    <label>Phone Number: </label>
    <input type="text" name="pnumber" title="Enter the phone number" value="<?php echo $rows['phone_number']?>" required />
    <br />
    <br />
    <input type="submit" value="Update" name="update" />
</form>
<br />
<a href="list.php"><b>Goto List</b></a>
</body>
</html>

<?php mysqli_close($con);?>
