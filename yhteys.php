<?php
$palvelin="mysql:host=localhost; dbname=esim2";
try{
	$db=new PDO($palvelin, "phpuser","phppass");
	//echo "yhteys OK";

} catch (Exception $e) {
	echo "ERROR".$e->getMessage();
}



?>