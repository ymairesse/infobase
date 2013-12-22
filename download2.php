
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">


<link href="../info.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="conteneur">
<div id="texte">
    <?php
	echo "<h2>Téléchargement du fichier $fichier</h2>";

	if (!isset($merci))
		{
  		echo "<p>Afin d'&eacute;viter le t&eacute;l&eacute;chargement massif par les logiciels
    aspirateurs -et donc l'encombrement du serveur de t&eacute;l&eacute;chargement,
    je vous demande d'arborer votre plus beau sourire et de frapper simplement
  le mot &quot;<strong>merci</strong>&quot; dans la zone ci-dessous:</p>";

  		echo "<form name=\"form2\" method=\"post\" action=\"$PHP_SELF?fichier=$fichier\">";
  		echo "<input type=\"hidden\" name=\"telecharger\" value=$fichier>";
  		echo "<p align=\"center\"><input name=\"merci\" type=\"text\" size=\"5\" maxlength=\"5\"></p>";
  		echo "<p>Cliquez ensuite sur le bouton &quot;T&eacute;l&eacute;charger&quot;.</p>";
  		echo "<p align=\"center\"><input type=\"submit\" name=\"Submit2\" value=\"T&eacute;l&eacute;charger\"></p>";
  		echo "</form>";
		echo "<p align=\"center\">Le lien de t&eacute;l&eacute;chargement appara&icirc;tra ici-même.</p>";
		}
		else
		{
		if (strtolower($merci)=="merci")
	  		{
	   		echo "<p align=\"center\"><a href='ftp://ftp2.sio2.be/sio/infobase/$telecharger'>";
	   		echo "Cliquez pour t&eacute;l&eacute;charger le fichier $fichier</a>";
	   		$texte = "Le fichier $fichier est téléchargé par ";
	   		$texte .= gethostbyaddr($REMOTE_ADDR)."\n";
	   		$texte .= $REMOTE_ADDR;
	   		mail ("ymairesse@sio2.be", "Téléchargement d'un fichier", $texte);
	   		echo "<p align=\"center\">Merci de me faire parvenir vos commentaires apr&egrave;s lecture.</p>";
	   		echo "<div align=\"center\"><a href=\"javascript:history.go(-2)\"> RETOUR </a></div>";
	   		}
	   		else
	   		{echo "<center><a href='http://www.disneylandparis.com'>Au revoir!</a></center>";}
		}
		?>
    <?php
include ("/home/sio/www/footer.inc.php");
?>
</div>
</body>
</html>
