<?php
    include "ftfl_config.php";

    $query="SELECT * FROM reg_info";
    $result=mysqli_query($con,$query);
    $c="<br />";
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
            <th>Track Information</th>
            <th>Basic Information</th>
            <th>Contact Information</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($result as $row){ ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo "Preferred Track: ".$row['pre_track'].$c."S.S.C Board: ".$row['ssc_board'].$c.$row['hsc_board'].$c.$row['has_laptop'].$c.$row['ssc_roll'].$c.$row['hsc_roll'].$c.$row['pre_exam_center'] ?></td>
                <td><?php echo "Name: ".$row['name'].$c.$row['father'].$c.$row['mother'].$c.$row['gender'].$c.$row['religion'].$c.$row['birth_date'].$c.$row['nationality'].$c.$row['id_national'].$c.$row['birth_reg'].$c.$row['passport_number'] ?></td>
                <td><?php echo $row['mobile'].$c.$row['h_phone'].$c.$row['e_contact'].$c.$row['email'].$c.$row['a_email'].$c.$row['c_location'].$c.$row['p_address'].$c.$row['per_address'] ?></td>
                <td><a href="ftfl_update.php?id=<?php echo $row['id']?>">Edit</a> / <a href="ftfl_delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure want to delete id = <?php echo $row['id'] ?> ?');">Delete</a></td>

            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <td align="center" colspan="5"><a href="ftfl_reg.html"><b>Back</b></a></td>
        </tr>
        </tfoot>
    </table>
    </body>
    </html>

<?php mysqli_close($con);?>