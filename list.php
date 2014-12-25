<?php
    include('connect.php');

    if(isset($_POST['update'])){
        $update_id=$_GET['id'];
        if(isset($update_id)){
            $sql = "UPDATE users SET first_name='$_POST[fname]',last_name='$_POST[lname]',phone_number='$_POST[pnumber]' WHERE id=$update_id";
            mysqli_query($con,$sql);
        }
    }
    $query="SELECT * FROM users";
    $result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        thead {color:red;}
        tbody {color:blue;}
        tfoot {color:black;}
        table,th,td
        {border:1px solid black;}
    </style>
</head>
<body>
<table border="1" align="center" width="60%">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($result as $row){ ?>
        <tr align="center">
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['first_name'] ?></td>
            <td><?php echo $row['last_name'] ?></td>
            <td><?php echo $row['phone_number'] ?></td>
            <td><a href="update.php?id=<?php echo $row['id']?>">Edit</a> / <a href="delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure want to delete id = <?php echo $row['id'] ?> ?');">Delete</a></td>

        </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td align="center" colspan="5"><a href="create_form.html"><b>Back</b></a></td>
        </tr>
    </tfoot>
</table>
</body>
</html>

<?php mysqli_close($con);?>