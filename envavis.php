<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../info.css">
<title>Merci</title>
</head>
<body>
<div id="conteneur">
<div id="texte">
  <h1>Merci</h1>
	<?php
	$nom = $_POST['nom'];
	$ecole = $_POST['ecole'];
	$pays = $_POST['pays'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$aime = $_POST['aime'];
	$aimepas = $_POST['aimepas'];
	$rem = $_POST['rem'];
	$chapitre = $_POST['chapitre'];
	$hostname = gethostbyaddr($REMOTE_ADDR);
	$IP = "\n Message post&eacute; depuis IP $REMOTE_ADDR , $hostname";
	if (empty($aime) && empty($aimepas) && empty($rem)) 
		{
		echo "<div align=\"center\"><font color=\"red\"><b>Aucune rubrique concernant ton avis n'est compl&eacute;t&eacute;e.<br>Dommage, j'aurai donc ton opinion une autre fois.</b></font></div>";
		}
		else
		{
		$texte = "Mon nom: ".$nom;
		$texte .="\nMon école: ".$ecole;
		$texte .="\nMon pays: ".$pays;
		$texte .="\nMon âge: ".$age;
		$texte .="\nMon adresse e-mail: ".$email;
		$texte .="\n\nJ'aime: ".stripslashes($aime);
		$texte .="\n\nJ'aime pas: ".stripslashes($aimepas);
		$texte .="\n\nRemarque: ".stripslashes($rem);
		$texte .="$IP";
		
		mail ("ymairesse@sio2.be","Opinion Chapitre $chapitre Infobase", $texte); 
		echo "<div align=\"center\">Ton message vient de m'&ecirc;tre envoy&eacute;.<br />";
		echo "Merci d'avoir accept&eacute; de r&eacute;pondre.<br />";
		echo "Y. Mairesse</div><hr>";
		echo "<span class='micro'>($IP)";
		echo "<br />";
		echo "(informations transmises au destinataire) </td></span>";}				  
		?>
    <div style="text-align:center;"><a href="javascript:history.go(-1)">Retour</a>
	</div>
        <?php
include ("pied.inc.php");
?>
</div>
</body>
</html>