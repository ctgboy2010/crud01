<?php
include "config.php";

$query="INSERT INTO `personal_info`.`personalinfo` (`id`, `name`, `father`, `mother`, `gender`, `religion`, `birth_date`, `nationality`, `national_id`, `birth_reg`, `passport_number`) VALUES ('', '$_POST[name]', '$_POST[father]', '$_POST[mother]', '$_POST[gender]', '$_POST[religion]', '$_POST[birth_date]', '$_POST[nationality]', '$_POST[national_id]', '$_POST[birth_reg]', '$_POST[passport_number]');";

if(mysqli_query($con,$query))
    echo "Successfully added 1 data into database";
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
    <a href="info.html"><b>Back</b></a>
    </body>
    </html>

<?php mysqli_close($con);?>