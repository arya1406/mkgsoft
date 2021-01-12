<?php
include 'config.php';
?>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            
            <th>Received Time Stamp</th>
            <th>Rainfall intensity 5M MM</th>
            <th>Rainfall intensity 10M MM</th>
            <th>Rainfall intensity 15M MM</th>
            <th>Rainfall intensity 30M MM</th>
            <th>Rainfall intensity 45M MM</th>
            <th>Rainfall intensity 60M MM</th>
            <th>Rainfall intensity 120M MM</th>
            <th>Rainfall intensity 3H MM</th>
            <th>Rainfall intensity 6H MM</th>
            <th>Rainfall intensity 12H MM</th>
            <th>Rainfall 07 08 MM</th>
            <th>RainfalL 08 09 MM</th>
            <th>Rainfall 09 10 MM</th>
            <th>Rainfall 10 11 MM</th>
            <th>Rainfall 11 12 MM</th>
            <th>Rainfall 12 13 MM</th>
            <th>Rainfall 13 14 MM</th>
            <th>Rainfall 14 15 MM</th>
            <th>Rainfall 15 16 MM</th>
            <th>Rainfall 16 17 MM</th>
            <th>Rainfall 17 18 MM</th>
            <th>Rainfall 18 19 MM</th>
            <th>Rainfall 19 20 MM</th>
            <th>Rainfall 20 21 MM</th>
            <th>Rainfall 21 22 MM</th>
            <th>Rainfall 22 23 MM</th>
            <th>Rainfall 23 00 MM</th>
            <th>Rainfall 00 01 MM</th>
            <th>Rainfall 01 02 MM</th>
            <th>Rainfall 02 03 MM</th>
            <th>Rainfall 03 04 MM</th>
            <th>Rainfall 04 05 MM</th>
            <th>Rainfall 05 06 MM</th>
            <th>Rainfall 06 07 MM</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $data = mysqli_query($db_link, "select * from deli_intensitashujan");

        $no = 1;

        while ($d = mysqli_fetch_array($data)) {

        ?>
            <tr>
                
                <td p align="center"><?php echo $d['RECEIVED TIMESTAMP']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL INTENSITY 5M MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL INTENSITY 10M MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL INTENSITY 15M MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL INTENSITY 30M MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL INTENSITY 45M MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL INTENSITY 60M MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL INTENSITY 120M MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL INTENSITY 3H MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL INTENSITY 6H MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL INTENSITY 12H MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 07 08 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 08 09 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 09 10 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 10 11 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 11 12 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 12 13 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 13 14 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 14 15 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 15 16 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 16 17 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 17 18 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 18 19 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 19 20 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 20 21 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 21 22 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 22 23 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 23 00 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 00 01 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 01 02 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 02 03 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 03 04 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 04 05 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 05 06 MM']; ?></td>
                <td p align="center"><?php echo $d['RAINFALL 06 07 MM']; ?></td>

            </tr>
    </tbody>
<?php
        }
?>

</table>