<?php
include 'config.php';

?>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Edit Data</th>
            <th>Data Time Stamp</th>
            <th>Height Diff (MM)</th>
            <th>Rainfall (MM)</th>
            <th>Evaporation (MM)</th>
            <th>Wind Speed (KMH)</th>
            <th>Temp Water (C)</th>

        </tr>
    </thead>
    <tbody>
        <?php

        $data = mysqli_query($db_link, "select * from maros_penguapan");

        $no = 1;

        while ($d = mysqli_fetch_array($data)) {

        ?>
            <tr>
                <td p align="center">
                    <a href="./PHP/edit1.php?ni=<?php echo $d['data_timestamp'] ?>" title="Edit data ini"> EDIT ||</a>
                    <a href="./PHP/delete.php?ni=<?php echo $d['data_timestamp'] ?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini ?');"> HAPUS </a>
                </td>
                <td p align="center"><?php echo $d['data_timestamp']; ?></td>
                <td p align="center"><?php echo $d['height_diff']; ?></td>
                <td p align="center"><?php echo $d['rainfall']; ?></td>
                <td p align="center"><?php echo $d['evaporation']; ?></td>
                <td p align="center"><?php echo $d['windspeed']; ?></td>
                <td p align="center"><?php echo $d['temp_water']; ?></td>


            </tr>
    </tbody>
<?php
        }
?>

</table>