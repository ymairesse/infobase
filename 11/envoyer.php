<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../../styleisnd.css">
<link rel="stylesheet" type="text/css" href="../../stylebton.css">
</head>
<body><div id="conteneur">
<p>
  <?php
include ("../2/./top.inc.php");
?>
</p>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="750"> <h2>Merci</h2>
      <table width="100%">
        <tr> 
          <td width="32" align="center" valign="top"><img src="../images/info.gif" width="32" height="32"></td>
          <td width="720"> 
            <?php
			if (empty($aime) && empty($aimepas) && empty($rem)) {
				echo "<div align=\"center\"> Dommage, j'aurai donc ton avis une autre fois.</div>";
				}
				else
				{ $texte = "Mon nom: ".$nom;
				  $texte .="\nMon école: ".$ecole;
				  $texte .="\nMon pays: ".$pays;
				  $texte .="\nMon âge: ".$age;
				  $texte .="\n\nJ'aime: ".stripslashes($aime);
				  $texte .="\n\nJ'aime pas: ".stripslashes($aimepas);
				  $texte .="\n\nRemarque: ".stripslashes($rem);
				  mail ("ymairesse@isnd.be","Opinion Chapitre 11 Infobase", $texte); 
				  echo "<div align=\"center\">Ton message vient de m'&ecirc;tre envoy&eacute;.<br>";
				  echo "Merci d'avoir accept&eacute; de r&eacute;pondre.<br>";
				  echo "Y. Mairesse</div>";}				  
				  ?>
            </td>
        </tr>
      </table></td>
  </tr>
</table>
<?php
include ("../../pied.inc.php");
?>
</div></body>
</html>
