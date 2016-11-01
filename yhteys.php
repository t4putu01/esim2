<?php
$palvelin="mysql:host=localhost; dbname=esim2";
try{
	$db=new PDO($palvelin, "phpuser","phppass");
	//echo "yhteys OK";
	$testi=true;

} catch (Exception $e) {
	echo "ERROR".$e->getMessage();
}



?>