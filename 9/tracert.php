<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../../info.css">
<title>Traceroute</title>
<script language="javascript" type="text/javascript">
function init ()
{
window.focus();
document.forms.form1.host.select();
}
</script>
</head>
<?php
$host = isset($_POST['host']) ? $_POST['host'] : 'sio2.be';
?>
<body onLoad="init()">
<b>Indique ci-dessous le nom du serveur dont tu souhaites connaître l'adresse IP</b>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="margin:10px; background-color:#FFFFCC; border: 1px solid red; padding:5px;">
  Nom du serveur&nbsp;: 
  <input name="host" type="text" value="<?php echo $host;?>">
  <input type="submit" name="Submit" value="Chercher">
</form>
<?php
if (isset($host))
	{
	$ip = gethostbyname($host);
	echo "<p style=\"text-align:center\">Adresse IP de $host&nbsp;: <b>";
	if ($ip != $host)
		echo $ip;
		else echo "Pas trouv&eacute;e";
	echo "</b></p>";
	}
?>
</div></body>
</html>