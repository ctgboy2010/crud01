<?php
    $con=mysqli_connect("localhost","root","lict@2","info") or die("Error: ".mysqli_error($con));

    $query="SELECT * FROM emails";
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
            <th>Email</th>
            <th>Date / Time</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($result as $row){ ?>
            <tr align="center">
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['created'] ?></td>
                <td><a href="update.php?id=<?php echo $row['id']?>">Edit</a> / <a href="delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure want to delete id = <?php echo $row['id'] ?> ?');">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <td align="center" colspan="5"><a href="create_email.php"><b>Back</b></a></td>
        </tr>
        </tfoot>
    </table>
    </body>
    </html>

<?php mysqli_close($con);?>