<?php

include 'config.php';

if (isset($_POST['ttambah'])) {
	$TIME = $_POST['RECEIVED TIMESTAMP'];
	$RainfallIntensity5M = $_POST['RAINFALL INTENSITY 5M MM'];
	$RainfallIntensity10M = $_POST['RAINFALL INTENSITY 10M MM'];
	$RainfallIntensity15M = $_POST['RAINFALL INTENSITY 15M MM'];
	$RainfallIntensity30M = $_POST['RAINFALL INTENSITY 30M MM'];
	$RainfallIntensity45M = $_POST['RAINFALL INTENSITY 45M MM'];
	$RainfallIntensity60M = $_POST['RAINFALL INTENSITY 60M MM'];
	$RainfallIntensity120M = $_POST['RAINFALL INTENSITY 120M MM'];
	$RainfallIntensity3H = $_POST['RAINFALL INTENSITY 3H MM'];
	$RainfallIntensity6H = $_POST['RAINFALL INTENSITY 6H MM'];
	$RainfallIntensity12H = $_POST['RAINFALL INTENSITY 12H MM'];
	$Rainfall07 = $_POST['RAINFALL 07 08 MM'];
	$Rainfall08 = $_POST['RAINFALL 08 09 MM'];
	$Rainfall09 = $_POST['RAINFALL 09 10 MM'];
	$Rainfall10 = $_POST['RAINFALL 10 11 MM'];
	$Rainfall11 = $_POST['RAINFALL 11 12 MM'];
	$Rainfall12 = $_POST['RAINFALL 12 13 MM'];
	$Rainfall13 = $_POST['RAINFALL 13 14 MM'];
	$Rainfall14 = $_POST['RAINFALL 14 15 MM'];
	$Rainfall15 = $_POST['RAINFALL 15 16 MM'];
	$Rainfall16 = $_POST['RAINFALL 16 17 MM'];
	$Rainfall17 = $_POST['RAINFALL 17 18 MM'];
	$Rainfall18 = $_POST['RAINFALL 18 19 MM'];
	$Rainfall19 = $_POST['RAINFALL 19 20 MM'];
	$Rainfall20 = $_POST['RAINFALL 20 21 MM'];
	$Rainfall21 = $_POST['RAINFALL 21 22 MM'];
	$Rainfall22 = $_POST['RAINFALL 22 23 MM'];
	$Rainfall23 = $_POST['RAINFALL 23 00 MM'];
	$Rainfall00 = $_POST['RAINFALL 00 01 MM'];
	$Rainfall01 = $_POST['RAINFALL 01 02 MM'];
	$Rainfall02 = $_POST['RAINFALL 02 03 MM'];
	$Rainfall03 = $_POST['RAINFALL 03 04 MM'];
	$Rainfall04 = $_POST['RAINFALL 04 05 MM'];
	$Rainfall05 = $_POST['RAINFALL 05 06 MM'];
	$Rainfall06 = $_POST['RAINFALL 06 07 MM'];

	$sql	= 'insert into deli_intensitashujan (RECEIVED TIMESTAMP, RAINFALL INTENSITY 5M MM, RAINFALL INTENSITY 10M MM, RAINFALL INTENSITY 15M MM, RAINFALL INTENSITY 30M MM, RAINFALL INTENSITY 45M MM, RAINFALL INTENSITY 60M MM, RAINFALL INTENSITY 120M MM, RAINFALL INTENSITY 3H MM, RAINFALL INTENSITY 6H MM, RAINFALL INTENSITY 12H MM, RAINFALL 07 08 MM, RAINFALL 08 09 MM, RAINFALL 09 10 MM, RAINFALL 10 11 MM, RAINFALL 11 12 MM, RAINFALL 12 13 MM, RAINFALL 13 14 MM, RAINFALL 14 15 MM,RAINFALL 15 16 MM,RAINFALL 16 17 MM,RAINFALL 17 18 MM,RAINFALL 18 19 MM,RAINFALL 19 20 MM, RAINFALL 20 21 MM, RAINFALL 21 22 MM, RAINFALL 22 23 MM, RAINFALL 23 00 MM, RAINFALL 00 01 MM, RAINFALL 01 02 MM, RAINFALL 02 03 MM,RAINFALL 03 04 MM, RAINFALL 04 05 MM,RAINFALL 05 06 MM, RAINFALL 06 07 MM) values ("' . $TIME . '","' . $RainfallIntensity5M . '","' . $RainfallIntensity10M . '","' . $RainfallIntensity15M . '","' . $RainfallIntensity30M . '","' . $RainfallIntensity45M . '","' . $RainfallIntensity60M . '","' . $RainfallIntensity120M . '","' . $RainfallIntensity3H . '","' . $RainfallIntensity6H . '","' . $RainfallIntensity12H . '","' . $Rainfall07 . '","' . $Rainfall08 . '","' . $Rainfall09 . '","' . $Rainfall10 . '","' . $Rainfall11 . '","' . $Rainfall12 . '","' . $Rainfall13 . '","' . $Rainfall14 . '","' . $Rainfall15 . '","' . $Rainfall16 . '","' . $Rainfall17 . '","' . $Rainfall18 . '","' . $Rainfall19 . '","' . $Rainfall20 . '","' . $Rainfall21 . '","' . $Rainfall22 . '","' . $Rainfall23 . '","' . $Rainfall00 . '","' . $Rainfall01 . '","' . $Rainfall02 . '","' . $Rainfall03 . '","' . $Rainfall04 . '","' . $Rainfall05 . '","' . $Rainfall06 . '")';
	$query	= mysqli_query($db_link, $sql);
	if ($query) {
		header('location: data.php');
	} else {
		echo 'Gagal';
	}
}

if (isset($_POST['tedit'])) {
	$TIME = $_POST['RECEIVED TIMESTAMP'];
	$RainfallIntensity5M = $_POST['RAINFALL INTENSITY 5M MM'];
	$RainfallIntensity10M = $_POST['RAINFALL INTENSITY 10M MM'];
	$RainfallIntensity15M = $_POST['RAINFALL INTENSITY 15M MM'];
	$RainfallIntensity30M = $_POST['RAINFALL INTENSITY 30M MM'];
	$RainfallIntensity45M = $_POST['RAINFALL INTENSITY 45M MM'];
	$RainfallIntensity60M = $_POST['RAINFALL INTENSITY 60M MM'];
	$RainfallIntensity120M = $_POST['RAINFALL INTENSITY 120M MM'];
	$RainfallIntensity3H = $_POST['RAINFALL INTENSITY 3H MM'];
	$RainfallIntensity6H = $_POST['RAINFALL INTENSITY 6H MM'];
	$RainfallIntensity12H = $_POST['RAINFALL INTENSITY 12H MM'];
	$Rainfall07 = $_POST['RAINFALL 07 08 MM'];
	$Rainfall08 = $_POST['RAINFALL 08 09 MM'];
	$Rainfall09 = $_POST['RAINFALL 09 10 MM'];
	$Rainfall10 = $_POST['RAINFALL 10 11 MM'];
	$Rainfall11 = $_POST['RAINFALL 11 12 MM'];
	$Rainfall12 = $_POST['RAINFALL 12 13 MM'];
	$Rainfall13 = $_POST['RAINFALL 13 14 MM'];
	$Rainfall14 = $_POST['RAINFALL 14 15 MM'];
	$Rainfall15 = $_POST['RAINFALL 15 16 MM'];
	$Rainfall16 = $_POST['RAINFALL 16 17 MM'];
	$Rainfall17 = $_POST['RAINFALL 17 18 MM'];
	$Rainfall18 = $_POST['RAINFALL 18 19 MM'];
	$Rainfall19 = $_POST['RAINFALL 19 20 MM'];
	$Rainfall20 = $_POST['RAINFALL 20 21 MM'];
	$Rainfall21 = $_POST['RAINFALL 21 22 MM'];
	$Rainfall22 = $_POST['RAINFALL 22 23 MM'];
	$Rainfall23 = $_POST['RAINFALL 23 00 MM'];
	$Rainfall00 = $_POST['RAINFALL 00 01 MM'];
	$Rainfall01 = $_POST['RAINFALL 01 02 MM'];
	$Rainfall02 = $_POST['RAINFALL 02 03 MM'];
	$Rainfall03 = $_POST['RAINFALL 03 04 MM'];
	$Rainfall04 = $_POST['RAINFALL 04 05 MM'];
	$Rainfall05 = $_POST['RAINFALL 05 06 MM'];
	$Rainfall06 = $_POST['RAINFALL 06 07 MM'];

	$sql	= 'insert into deli_intensitashujan (RECEIVED TIMESTAMP, RAINFALL INTENSITY 5M MM, RAINFALL INTENSITY 10M MM, RAINFALL INTENSITY 15M MM, RAINFALL INTENSITY 30M MM, RAINFALL INTENSITY 45M MM, RAINFALL INTENSITY 60M MM, RAINFALL INTENSITY 120M MM, RAINFALL INTENSITY 3H MM, RAINFALL INTENSITY 6H MM, RAINFALL INTENSITY 12H MM, RAINFALL 07 08 MM, RAINFALL 08 09 MM, RAINFALL 09 10 MM, RAINFALL 10 11 MM, RAINFALL 11 12 MM, RAINFALL 12 13 MM, RAINFALL 13 14 MM, RAINFALL 14 15 MM,RAINFALL 15 16 MM,RAINFALL 16 17 MM,RAINFALL 17 18 MM,RAINFALL 18 19 MM,RAINFALL 19 20 MM, RAINFALL 20 21 MM, RAINFALL 21 22 MM, RAINFALL 22 23 MM, RAINFALL 23 00 MM, RAINFALL 00 01 MM, RAINFALL 01 02 MM, RAINFALL 02 03 MM,RAINFALL 03 04 MM, RAINFALL 04 05 MM,RAINFALL 05 06 MM, RAINFALL 06 07 MM) values ("' . $TIME . '","' . $RainfallIntensity5M . '","' . $RainfallIntensity10M . '","' . $RainfallIntensity15M . '","' . $RainfallIntensity30M . '","' . $RainfallIntensity45M . '","' . $RainfallIntensity60M . '","' . $RainfallIntensity120M . '","' . $RainfallIntensity3H . '","' . $RainfallIntensity6H . '","' . $RainfallIntensity12H . '","' . $Rainfall07 . '","' . $Rainfall08 . '","' . $Rainfall09 . '","' . $Rainfall10 . '","' . $Rainfall11 . '","' . $Rainfall12 . '","' . $Rainfall13 . '","' . $Rainfall14 . '","' . $Rainfall15 . '","' . $Rainfall16 . '","' . $Rainfall17 . '","' . $Rainfall18 . '","' . $Rainfall19 . '","' . $Rainfall20 . '","' . $Rainfall21 . '","' . $Rainfall22 . '","' . $Rainfall23 . '","' . $Rainfall00 . '","' . $Rainfall01 . '","' . $Rainfall02 . '","' . $Rainfall03 . '","' . $Rainfall04 . '","' . $Rainfall05 . '","' . $Rainfall06 . '")';
	$query	= mysqli_query($db_link, $sql);
	if ($query) {
		header('location: data.php');
	} else {
		echo 'Gagal';
	}
}
