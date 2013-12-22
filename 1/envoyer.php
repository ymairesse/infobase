<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../info.css" rel="stylesheet" type="text/css">
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
          <td width="32" align="center" valign="top"><img src="../../images/info.gif" width="32" height="32"></td>
          <td width="720"> 
            <?php
				  $texte = '';
				  $texte .=$nom;
				  $texte .="\n".$ecole;
				  $texte .="\n".$pays;
				  $texte .="\n".$age;
				  $texte .="\n\n".stripslashes($aime);
				  $texte .="\n\n".stripslashes($aimepas);
				  $texte .="\n\n".stripslashes($rem);
				  mail ("ymairesse@isnd.be","Opinion Chapitre 1 Infobase", $texte);				  
				  ?>
            <div align="center"> Ton message vient de m'&ecirc;tre envoy&eacute;.<br>
              Merci d'avoir accept&eacute; de r&eacute;pondre.<br>
              Y. Mairesse</div></td>
        </tr>
      </table></td>
  </tr>
</table>
<?php
include ("../pied.inc.php");
?>
</div></body>
</html>
