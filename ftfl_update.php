<?php
    include "ftfl_config.php";

    $id=$_GET['id'];
    $query="SELECT * FROM `ftfl`.`reg_info` WHERE `reg_info`.`id` = $id";
    $result=mysqli_query($con,$query);
    $rows=mysqli_fetch_array($result);
    $track=$rows['pre_track'];
    $ssc=$rows['ssc_board'];
    $radio=$rows['has_laptop'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>FTFLMS</title>
</head>3
<body>
<h1>Applicant Personal Information</h1>
<form action="ftfl_read.php?id=<?php echo $_GET['id'] ?>" method="post">
<input type="hidden" id="update_id" value="<?php echo $id ?>" />
<fieldset>
    <legend>Track Information</legend>
    <div>
        <label>Preferred Track *</label>
        <select id="track" name="track">
            <option value="1" selected="selected">--Select Track--</option>
            <option <?php if ($track == 'ITS' ) echo 'selected'; ?> value="ITS">ITS</option>
            <option <?php if ($track == 'ITES' ) echo 'selected'; ?> value="ITES">ITES</option>
            <option <?php if ($track == 'ITSS' ) echo 'selected'; ?> value="ITSS">ITSS</option>
        </select>
    </div>

    <div>
        <label>S.S.C Board *</label>
        <select name="ssc">
            <option value="1" selected="selected">--Select Board--</option>
            <option <?php if ($ssc == 'ITS' ) echo 'selected'; ?> value="Dhaka">Dhaka</option>
            <option value="Chittagong" >Chittagong</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Jessore">Jessore</option>
            <option value="Comilla">Comilla</option>
            <option value="Dinajpur">Dinajpur</option>
            <option value="Barisal">Barisal</option>
            <option value="Madrasah">Madrasah</option>
            <option value="Technical">Technical</option>
            <option value="DIBS">DIBS</option>
        </select>
    </div>
    <div>
        <label>H.S.C Board *</label>
        <select name="hsc">
            <option value="" selected="selected">--Select Board--</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Chittagong" >Chittagong</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Jessore">Jessore</option>
            <option value="Comilla">Comilla</option>
            <option value="Dinajpur">Dinajpur</option>
            <option value="Barisal">Barisal</option>
            <option value="Madrasah">Madrasah</option>
            <option value="Technical">Technical</option>
            <option value="DIBS">DIBS</option>
        </select>
    </div>

    <div>
        <label>Has Laptop: </label>
        <input type="radio" name="laptop" value="1" id="yes" <?php if($radio==1) echo 'checked="checked"'; ?> />
        <label>Yes</label>

        <input type="radio" name="laptop" value="0" id="no" <?php if($radio==0) echo 'checked="checked"'; ?> />
        <label>No</label>
    </div>

    <div>
        <label>S.S.C Roll *</label>
        <input type="text" name="ssc_roll" />
    </div>

    <div>
        <label>H.S.C Roll *</label>
        <input type="text" name="hsc_roll" />
    </div>

    <div>
        <label>Preferred Exam Center *</label>
        <select name="exam_center">
            <option value="1" selected="selected">BCC Dhaka</option>
            <option value="2">BCC Chittagong</option>
            <option value="3">BCC Rajshahi</option>
            <option value="4">BCC Barishal</option>
            <option value="5">BCC Khulna</option>
            <option value="6">BCC Sylhet</option>
            <option value="7">BCC Faridpur</option>
        </select>
    </div>
</fieldset>

<fieldset>
    <legend>Basic Information</legend>
    <div>
        <label>Name *</label>
        <input type="text" name="name" />
    </div>

    <div>
        <label>Father *</label>
        <input type="text" name="fname" />
    </div>

    <div>
        <label>Mother *</label>
        <input type="text" name="mname" />
    </div>

    <div>
        <label>Gender *</label>
        <select name="gender">
            <option value="Male" selected="selected">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
        </select>
    </div>

    <div>
        <label>Religion *</label>
        <select name="religion">
            <option value="Islam">Islam</option>
            <option value="Christianity">Christianity</option>
            <option value="Buddhism">Buddhism</option>
            <option value="Hinduism">Hinduism</option>
            <option value="Others">Others</option>
        </select>
    </div>

    <div>
        <label>Date of Birth *</label>
        <input title="Date format: YYYY-MM-DD" placeholder="yyyy-mm-dd" maxlength="10" type="text" name="bdate" />
    </div>

    <div>
        <label>Nationality </label>
        <input maxlength="255" type="text" name="nationality" />
    </div>

    <div>
        <label>National ID *</label>
        <input maxlength="17" minlength="13" type="text" name="id_national" />
    </div>

    <div>
        <label>OR</label>
    </div>

    <div>
        <label>Birth Reg # </label>
        <input maxlength="17" type="text" name="breg" />
    </div>

    <div>
        <label>Passport Number </label>
        <input maxlength="17" type="text" name="pass_number" />
    </div>
</fieldset>

<fieldset>
    <legend>Contact Information</legend>
    <div>
        <label>Mobile </label>
        <input maxlength="255" type="text" name="mobile" />
    </div>

    <div>
        <label>Home Phone </label>
        <input maxlength="255" type="text" name="h_phone" />
    </div>

    <div>
        <label>Emergency Contact </label>
        <input maxlength="255" type="text" name="e_contact" />
    </div>

    <div>
        <label>Email </label>
        <input maxlength="255" type="text" name="email" />
    </div>

    <div>
        <label>Alternate Email </label>
        <input maxlength="255" type="text" name="a_email" />
    </div>

    <div>
        <label>Current Location *</label>
        <select name="c_location">
            <option value="1" selected="selected">Dhaka</option>
            <option value="2">Chittagong</option>
            <option value="3">Khulna</option>
            <option value="4">Barishal</option>
            <option value="5">Barguna</option>
            <option value="6">Barisal</option>
            <option value="7">Bhola</option>
            <option value="8">Jhalokat</option>
            <option value="9">Patuakhali</option>
            <option value="10">Pirojpur</option>
            <option value="11">Bandarban</option>
            <option value="12">Brahmanbaria</option>
            <option value="13">Chandpur</option>
            <option value="14">Comilla</option>
            <option value="15">Cox's Bazar </option>
            <option value="16">Feni</option>
            <option value="17">Khagrachhari</option>
            <option value="18">Lakshmipur</option>
            <option value="19">Noakhali </option>
            <option value="20">Rangamati</option>
            <option value="21">Faridpur</option>
            <option value="22">Gazipur</option>
            <option value="23">Gopalganj </option>
            <option value="24">Jamalpur</option>
            <option value="25">Kishoreganj </option>
            <option value="26">Madaripur</option>
            <option value="27">Manikganj </option>
            <option value="28">Munshiganj</option>
            <option value="29">Mymensingh </option>
            <option value="30">Narayanganj </option>
            <option value="31">Narsingdi</option>
            <option value="32">Netrakona</option>
            <option value="33">Rajbari </option>
            <option value="34">Shariatpur</option>
            <option value="35">Sherpur </option>
            <option value="36">Tangail</option>
            <option value="37">Bagerhat </option>
            <option value="38">Chuadanga</option>
            <option value="39">Jessore</option>
            <option value="40">Jhenaidah</option>
            <option value="41">Kushtia </option>
            <option value="42">Magura</option>
            <option value="43">Meherpur</option>
            <option value="44">Narail </option>
            <option value="45">Satkhira</option>
            <option value="46">Bogra</option>
            <option value="47">Joypurhat</option>
            <option value="48">Naogaon</option>
            <option value="49">Natore</option>
            <option value="50">Nawabganj</option>
            <option value="51">Pabna</option>
            <option value="52">Rajshahi</option>
            <option value="53">Sirajganj</option>
            <option value="54">Dinajpur</option>
            <option value="55">Gaibandh</option>
            <option value="56">Kurigram </option>
            <option value="57">Lalmonirhat</option>
            <option value="58">Nilphamari</option>
            <option value="59">Panchagarh </option>
            <option value="60">Rangpur</option>
            <option value="61">Thakurgaon </option>
            <option value="62">Habiganj</option>
            <option value="63">Moulvibazar </option>
            <option value="64">Sunamganj</option>
            <option value="65">Sylhet</option>
        </select>
    </div>

    <div>
        <label>Present Address *</label>
        <textarea name="p_address"></textarea>
    </div>

    <div>
        <label>Permanent Address *</label>
        <textarea name="per_address"></textarea>
    </div>
</fieldset>
<hr>
<div>
    <button type="submit" name="submit" style="width: 210px;">Submit</button>
    <!-- &nbsp;&nbsp;
    <button type="reset" style="width: 210px;">Cancel</button> -->
</div>
</form>
</body>
</html>