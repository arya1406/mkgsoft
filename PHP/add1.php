<?php

include 'config.php';

if (isset($_POST['ttambah'])) {
    $WMO_ID = '97184';
    $data_timestamp = $_POST['data_timestamp'];
    $height_diff = $_POST['height_diff'];
    $rainfall = $_POST['rainfall'];
    $evaporation = $_POST['evaporation'];
    $windspeed = $_POST['windspeed'];
    $temp_water = $_POST['temp_water'];


    $sql    = "INSERT INTO maros_penguapan VALUES ('$WMO_ID','$data_timestamp','$height_diff','$rainfall','$evaporation','$windspeed','$temp_water')";
    mysqli_query($db_link, $sql);

    $num = mysqli_affected_rows($db_link);

    if ($num > 0) {
        echo '<script>window.location.href = "http://localhost/mkgsoft/reportmonitorhujan.php";</script>';
    } else {
        echo "<script>alert('edit data gagal dilakukan, cek kembali koneksi database');</script>";
    }
}

if (isset($_POST['tedit'])) {
    $WMO_ID = "97184";
    $data_timestamp = $_POST['data_timestamp'];
    $height_diff = $_POST['height_diff'];
    $rainfall = $_POST['rainfall'];
    $evaporation = $_POST['evaporation'];
    $windspeed = $_POST['windspeed'];
    $temp_water = $_POST['temp_water'];

    $sql    = "INSERT INTO maros_penguapan VALUES ('$WMO_ID','$data_timestamp','$height_diff','$rainfall','$evaporation','$windspeed','$temp_water')";
    mysqli_query($db_link, $sql);
}
?>

<body bgcolor="#CCCCCC">
    <h2>
        <p align="center">ADD DATA</p>
    </h2>
    <form method="post" action="">
        <table width="1000" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF">

            <tr>
                <td width="189" height="20"> </td>
                <td width="26"> </td>
                <td width="331"> </td>
            </tr>

            <tr>
                <td width='42%' height="27" align="right" valign="middle">Data Time Stamp</td>
                <td width='3%' align="center" valign="middle">:</td>
                <td width='15%' align="left" valign="middle"><label>
                        <input name="data_timestamp" type="text" size="10">
                    </label></td>
                <td width='40%' height="27" align="left" valign="middle">(Contoh: 2015-12-16 00:00:00.0 +0:00)</td>
            </tr>

            <tr>
                <td height="27" align="right" valign="middle">Height Diff. (mm)</td>
                <td align="center" valign="top">:</td>
                <td valign="middle"><label>
                        <input name="height_diff" type="text" size="5">
                    </label></td>
                <td width='300' height="27" he align="left" valign="middle">(Contoh: 25.2)</td>
            </tr>

            <tr>
                <td height="27" align="right" valign="middle">Rainfall (mm)</td>
                <td align="center" valign="top">:</td>
                <td valign="middle"><label>
                        <input type="text" name="rainfall" size="5">
                    </label></td>
                <td width='300' height="27" he align="left" valign="middle">(Contoh: 1.5)</td>
            </tr>

            <tr>
                <td height="27" align="right" valign="middle">Evaporation (mm)</td>
                <td align="center" valign="top">:</td>
                <td valign="middle"><label>
                        <input type="text" name="evaporation" size="5">
                    </label></td>
                <td width='300' height="27" he align="left" valign="middle">(Contoh: 20.1)</td>
            </tr>

            <tr>
                <td height="27" align="right" valign="middle">Wind Speed (KMH)</td>
                <td align="center" valign="top">:</td>
                <td valign="middle"><label>
                        <input type="text" name="windspeed" size="5">
                    </label></td>
                <td width='300' height="27" he align="left" valign="middle">(Contoh: 2)</td>
            </tr>

            <tr>
                <td height="27" align="right" valign="middle">Temperature Water (C)</td>
                <td align="center" valign="top">:</td>
                <td valign="middle"><label>
                        <input type="text" name="temp_water" size="5">
                    </label></td>
                <td width='300' height="27" he align="left" valign="middle">(Contoh: 32)</td>
            </tr>

            <tr>
                <td height="42"> </td>
                <td> </td>
                <td><input type="submit" name="ttambah" value"TAMBAH"></td>
            </tr>

        </table>
    </form>
</body>