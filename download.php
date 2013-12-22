<?php 
$fichier = isset($_GET['fichier'])?$_GET['fichier']:Null;
$merci = isset($_POST['merci'])?$_POST['merci']:Null;
if (!$fichier) die();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="../info.css" rel="stylesheet" type="text/css">
    <title>Téléchargement</title>
  </head>
  <body>
    <div id="conteneur">
      <div id="texte">
        <h2><?php echo "Téléchargement du fichier $fichier"; ?></h2>
        <p class="info">Afin d'éviter le téléchargement massif par les logiciels aspirateurs -et donc l'encombrement du serveur de
          téléchargement, je vous demande d'arborer votre plus beau sourire et de frapper simplement le mot
          "<strong>merci</strong>" dans la zone ci-dessous. Les robots et les aspirateurs ne savent pas dire "merci".</p>
        <p>
          <p>Attention, le sourire est important...</p>
          <?php 
          echo "<form name=\"form2\" method=\"post\" action=\"$PHP_SELF?fichier=$fichier\">";
		  echo "<input type=\"hidden\" name=\"telecharger\" value=$fichier>";
		  echo "<p align=\"center\"><input name=\"merci\" type=\"text\" size=\"5\" maxlength=\"5\"></p>";
		  echo "<p>Cliquez ensuite sur le bouton &quot;T&eacute;l&eacute;charger&quot;.</p>";
		  echo "<p align=\"center\"><input type=\"submit\" name=\"Submit2\" value=\"T&eacute;l&eacute;charger\"></p>";
		  echo "</form>";
		  
		  if (!isset($merci))
				{echo "<p align=\"center\">Le lien de t&eacute;l&eacute;chargement appara&icirc;tra ci-dessous.</p>";}
				else
				{
				if (strtolower($merci)=="merci") {
					echo "<p>Merci à vous pour l'intérêt que vous voulez bien porter à mon travail.</p>";
				   echo "<p style=\"text-align:center\"><a href='ftp://ftp2.sio2.be/sio/infobase/$fichier'>";
				   echo "Cliquez pour télécharger le fichier $fichier</a>";
				   // $texte = "Le fichier $fichier est téléchargé par ";
				   // $texte .= gethostbyaddr($REMOTE_ADDR)."\n";
				   // $texte .= $REMOTE_ADDR;
				   // mail ("ymairesse@sio2.be", "Téléchargement d'un fichier", $texte);
				   echo "<p style=\"text-align:center\">Tous vos commentaires apr&egrave;s lecture sont très bienvenus.</p>";
				   echo "<form name=\"form1\"><div style=\"text-align: center\">";
				   echo "<input type=\"button\" name=\"Submit\" value=\"Retour\" onClick=\"javascript:history.go(-2)\">";
				   echo "</div></form>";
				   }
				   else
				   echo "<p style=\"text-align:center\"><a href='http://www.disneylandparis.com'>Au revoir!</a></p>";
				}
		?>
		<?php include ("pied2.inc.php"); ?>
        </p>
      </div>
    </div>
  </body>
</html>
