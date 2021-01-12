<?php

include 'config.php';

?>

<table border="1">

 <tr>
   <th width="200" align="center" valign="middle">Date</th>
   <th width="200" align="center" valign="middle">OT</th>
   <th width="200" align="center" valign="middle">LAT</th>
   <th width="200" align="center" valign="middle">Long</th>
   <th width="200" align="center" valign="middle">Depth</th>
   <th width="200" align="center" valign="middle">Mag</th>
   <th width="200" align="center" valign="middle">Location & Remark</th>
   <th width="150" align="center" valign="middle">Edit Data</th>
  </tr>

  <?php

  $data = mysqli_query($db_link, "select * from datagempa");

  $no = 1;

  while($d = mysqli_fetch_array($data)){

  ?>

  <tr>
    <td p align="center"><?php echo $d['Date']; ?></td>
    <td p align="center"><?php echo $d['OT']; ?></td>
    <td p align="center"><?php echo $d['Lat']; ?></td>
    <td p align="center"><?php echo $d['Long']; ?></td>
    <td p align="center"><?php echo $d['Depth']; ?></td>
    <td p align="center"><?php echo $d['Mag']; ?></td>
    <td p align="center"><?php echo $d['Location&Remark']; ?></td>
    <td p align="center">
	<a href="edit.php?ni=<?php echo $d['Date'];?>" title="Edit data ini"> EDIT ||</a>
	<a href="delete.php?ni=<?php echo $d['Date'];?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini ?');"> HAPUS </a>
    </td>
  </tr>

  <?php

  }

  ?>

</table>
