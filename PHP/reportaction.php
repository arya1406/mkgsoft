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
  
  
	  $sql	= "INSERT INTO maros_penguapan VALUES ('$WMO_ID','$data_timestamp','$height_diff','$rainfall','$evaporation','$windspeed','$temp_water')";
	  $query	= mysqli_query($db_link, $sql);
	  if ($query) {
		  header('location: datamaros.php');
	  } else {
		  echo 'Gagal';
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
  
	  $sql	= "INSERT INTO maros_penguapan VALUES ('$WMO_ID','$data_timestamp','$height_diff','$rainfall','$evaporation','$windspeed','$temp_water')";
	  $query	= mysqli_query($db_link, $sql);
	  if ($query) {
		  header('location: datamaros.php');
	  } else {
		  echo 'Gagal';
	  }
  }
?>