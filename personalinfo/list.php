<?php
//include('per_config');
$con=mysqli_connect("localhost","root","lict@2","personal_info") or die("Error: ".mysqli_error($con));

if(isset($_POST['update'])){
    $update_id=$_GET['id'];
    if(isset($update_id)){
        $sql = "UPDATE `personal_info`.`personalinfo` SET `name` = '$_POST[name]', `father` = '$_POST[father]', `mother` = '$_POST[mother]', `gender` = '$_POST[gender]', `religion` = '$_POST[religion]', `birth_date` = '$_POST[birth_date]', `nationality` = '$_POST[nationality]', `national_id` = '$_POST[national_id]', `birth_reg` = '$_POST[birth_reg]', `passport_number` = '$_POST[passport_number]' WHERE `personalinfo`.`id` = $update_id";
        mysqli_query($con,$sql);
    }
}

$query="SELECT * FROM personalinfo";
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
    <table border="1" align="center" width="100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Father</th>
            <th>Mother</th>
            <th>Gender</th>
            <th>Religion</th>
            <th>Birth Date</th>
            <th>Nationality</th>
            <th>National Id</th>
            <th>Birth Reg</th>
            <th>Passport Number</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($result as $row){ ?>
            <tr align="center">
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['father'] ?></td>
                <td><?php echo $row['mother'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td><?php echo $row['religion'] ?></td>
                <td><?php echo $row['birth_date'] ?></td>
                <td><?php echo $row['nationality'] ?></td>
                <td><?php echo $row['national_id'] ?></td>
                <td><?php echo $row['birth_reg'] ?></td>
                <td><?php echo $row['passport_number'] ?></td>
                <td><a href="update.php?id=<?php echo $row['id']?>">Edit</a> / <a href="delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure want to delete id = <?php echo $row['id'] ?> ?');">Delete</a></td>

            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <td align="center" colspan="12"><a href="info.html"><b>Back</b></a></td>
        </tr>
        </tfoot>
    </table>
    </body>
    </html>

<?php mysqli_close($con);?>