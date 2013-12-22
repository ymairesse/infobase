<?php
$hostname = gethostbyaddr($REMOTE_ADDR);
$date = date("Y-m-d H:i:s");
$origine = $HTTP_REFERER;
$destination = $PHP_SELF;

$liste = explode("/", $origine);
$pos = strpos(strtolower($liste[2]), "sio2");
if ($pos)
	{
	$lienDB = mysql_connect("sql3", "siomaires", "2RxKOIzw");
	mysql_select_db ("siomaires");
	$sql = "INSERT INTO logs (hote, adresse, date, origine, destination) VALUES ('$hostname', '$REMOTE_ADDR', '$date', '$origine', '$destination')";
	mysql_query ($sql);
	mysql_close ($lienDB);
	}

?>