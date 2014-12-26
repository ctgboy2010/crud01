<?php
//include('connect.php');
$con=mysqli_connect("localhost","root","lict@2","personal_info") or die("Error: ".mysqli_error($con));

$id=$_GET['id'];
$query="DELETE FROM `personal_info`.`personalinfo` WHERE `personalinfo`.`id` = $id";
$result=mysqli_query($con,$query);
$rows=mysqli_fetch_array($result);

$gender=$rows['gender'];
$religion=$rows['religion'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>FTFLMS</title>
</head>
<body>
<h1>Applicant Personal Information</h1>
<form action="list.php?id=<?php echo $_GET['id'] ?>" method="post">
    <input type="hidden" id="update_id" value="<?php echo $id ?>" />
    <fieldset>
        <legend>Basic Information</legend>
        <div>
            <label>Name *</label>
            <input type="text" name="name" value="<?php echo $rows['name']?>" />
        </div>

        <div>
            <label>Father *</label>
            <input type="text" name="father" value="<?php echo $rows['father']?>" />
        </div>

        <div>
            <label>Mother *</label>
            <input type="text" name="mother" value="<?php echo $rows['mother']?>" />
        </div>

        <div>
            <label>Gender *</label>
            <select name="gender">
                <option value="1" selected="selected">--Select Gender--</option>
                <option <?php if ($gender == 'Male' ) echo 'selected'; ?> value="Male">Male</option>
                <option <?php if ($gender == 'Female' ) echo 'selected'; ?> value="Female">Female</option>
            </select>
        </div>

        <div>
            <label>Religion *</label>
            <select name="religion">
                <option value="1" selected="selected">--Select Religion--</option>
                <option <?php if ($religion == 'Islam' ) echo 'selected'; ?> value="Islam">Islam</option>
                <option <?php if ($religion == 'Christianity' ) echo 'selected'; ?> value="Christianity">Christianity</option>
                <option <?php if ($religion == 'Buddhism' ) echo 'selected'; ?> value="Buddhism">Buddhism</option>
                <option <?php if ($religion == 'Hinduism' ) echo 'selected'; ?> value="Hinduism">Hinduism</option>
                <option <?php if ($religion == 'Others' ) echo 'selected'; ?> value="Others">Others</option>
            </select>
        </div>

        <div>
            <label>Date of Birth *</label>
            <input title="Date format: YYYY-MM-DD" placeholder="yyyy-mm-dd" maxlength="10" type="text" name="birth_date" value="<?php echo $rows['birth_date']?>" />
        </div>

        <div>
            <label>Nationality </label>
            <input maxlength="255" type="text" name="nationality" value="<?php echo $rows['nationality']?>" />
        </div>

        <div>
            <label>National ID *</label>
            <input maxlength="17" minlength="13" type="text" name="national_id" value="<?php echo $rows['national_id']?>" />
        </div>

        <div>
            <label>OR</label>
        </div>

        <div>
            <label>Birth Reg # </label>
            <input maxlength="17" type="text" name="birth_reg" value="<?php echo $rows['birth_reg']?>" />
        </div>

        <div>
            <label>Passport Number </label>
            <input maxlength="17" type="text" name="passport_number" value="<?php echo $rows['passport_number']?>" />
        </div>
    </fieldset>

    <hr>
    <div>
        <input type="submit" value="Update" name="update" />
        <!-- &nbsp;&nbsp;
        <button type="reset" style="width: 210px;">Cancel</button> -->
    </div>
</form>
<br />
<a href="list.php"><b>Goto List</b></a>
</body>
</html>