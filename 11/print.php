<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../../styleisnd.css">
<link rel="stylesheet" type="text/css" href="../../stylebton.css">
<script language="JavaScript">
function WindowPrint () {
window.print ();
alert('Vérifie que la page est correctement imprimée avant de poursuivre la leçon.');
history.go(-1);
}</script>
</head>
<body><div id="conteneur">
<p>
  <?php
include ("./top.inc.php");
?>
</p>
<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="750"> <h2>Titre</h2></td>
  </tr>
  <tr> 
    <td height="40"><table width="100%" border="0">
        <tr> 
          <td valign="top"> <form method="post" action="print.php">
              <p>&nbsp;</p><hr>

              <table width="100%" border="0" align="center">
                <tr> 
                  <td width="16%">Nom: </td>
                  <td width="84%"> 
                    <?php
				  echo $nom;
				  ?>
                  </td>
                </tr>
                <tr> 
                  <td width="16%">Pr&eacute;nom:</td>
                  <td width="84%"> 
                    <?php
				  echo $prenom;
				  ?>
                  </td>
                </tr>
                <tr> 
                  <td>Classe:</td>
                  <td> 
                    <?php
				  echo $classe;
				  ?>
                  </td>
                </tr>
              </table>
              <p align="center"> 
                <input type="button" name="Submit" value="Imprimer" onClick="WindowPrint()">
              </p>
            </form></td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>
<?php
include ("../../pied.inc.php");
?>
</div></body>
</html>
