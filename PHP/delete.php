<?php

include 'config.php';

$ni	= $_GET['ni'];
$ni2  = substr_replace($ni, '+', -5, -4);
$sql	='DELETE FROM maros_penguapan WHERE data_timestamp = "' . $ni2 . '" ';

$query	= mysqli_query($db_link, $sql);

$num = mysqli_affected_rows($db_link);

if ($num > 0) {
    echo "<script>alert('Hapus data BERHASIL dilakukan');</script>";
    header('location: ../reportmonitorhujan.php');
  } else {
    echo "<script>alert('Hapus data GAGAL dilakukan, cek kembali koneksi database');</script>";
  }
