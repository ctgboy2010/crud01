<?php
    $con=mysqli_connect("localhost","root","lict@2","info") or die("Error: ".mysqli_error($con));

    $query="INSERT INTO `info`.`emails` (`id` ,`email` ,`created`) VALUES (NULL , '$_POST[email]', NOW( ));";

    if(mysqli_query($con,$query))
        echo "Successfully added 1 data";
    else
        die("Error: ".mysqli_error($con));
?>

    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>
    <body>
    <br />
    <a href="create_email.php"><b>Back</b></a>
    </body>
    </html>

<?php mysqli_close($con);?>