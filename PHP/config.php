<?php
$db_host	= 'localhost'; 

$db_usn		= 'Andreas Kristiawan'; 

$db_pwd		= 'J5-pr9KVz6F&eR*';  

$db	= 'uas_db';

$db_link	= mysqli_connect($db_host,$db_usn,$db_pwd,$db);

if (!$db_link){

	echo 'Tidak dapat terhubung ke database';

}

?>