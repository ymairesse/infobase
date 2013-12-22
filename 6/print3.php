<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../styleisnd.css" rel="stylesheet" type="text/css">
<script language="JavaScript">
function WindowPrint () {
window.print ();
alert('Vérifie que ta page est imprimée avant de poursuivre.');
history.go(-1);
}
</script>
</head>
<body><div id="conteneur">
  <?php
include ("./top.inc.php");
?>
<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="750"> <h2>Capacit&eacute; de stockage des disques</h2>
      <table width="100%">
        <tr> 
          <td width="48" valign="top"><div align="center"><img src="../../images/girl1.gif" width="48" height="48" align="top" name="Image1"></div></td>
          <td width="720"><p>Une page de texte form&eacute;e de 60 lignes de 50 
              caract&egrave;res compte donc 3000 caract&egrave;res. Le nombre 
              de pages que l'on pourrait enregistrer sur les diff&eacute;rents 
              supports est repris dans le tableau ci-dessous.<br>
              <span class="micro">(Pour simplifier, un ko contient 1000 octets).</span></p>
            <table width="100%" border="1" align="center" bordercolor="#FFFFFF" bordercolorlight="#99CCFF">
              <tr bgcolor="#FFFFCC"> 
                <td width="15%">Type de disque</td>
                <td width="45%"> <div align="center">Capacit&eacute;</div></td>
                <td width="45%"><div align="center">Calcul</div></td>
                <td width="38%"> <div align="center">Nombre de pages</div></td>
              </tr>
              <tr> 
                <td width="15%">3&quot;1/2 2 DD</td>
                <td> <div align="center">720 ko</div></td>
                <td><div align="center">720.000 octets 
                    <hr>
                    3000 octets/page</div></td>
                <td> <div align="center">240 pages</div></td>
              </tr>
              <tr> 
                <td width="15%">3&quot;1/2 2 HD</td>
                <td> <div align="center"> 
                    <?php
				  echo $c1;
				  ?>
                    Mo</div></td>
                <td><div align="center"> 
                    <?php
				  echo $o1;
				  ?>
                    octets<br>
                    <hr>
                    3000 octets/page</div></td>
                <td> <div align="center"> 
                    <?php
				  echo $p1;
				  ?>
                    pages</div></td>
              </tr>
              <tr> 
                <td width="15%">Disque dur</td>
                <td> <div align="center"> 
                    <?php
				  echo $c2;
				  ?>
                    Mo</div></td>
                <td><div align="center"> 
                    <?php
				  echo $o2;
				  ?>
                    octets<br>
                    <hr>
                    3000 octets/page</div></td>
                <td> <div align="center"> 
                    <?php
				  echo $p2;
				  ?>
                    pages </div></td>
              </tr>
              <tr> 
                <td width="15%">Disque Zip 250</td>
                <td> <div align="center"> 
                    <?php
				  echo $c3;
				  ?>
                    Mo </div></td>
                <td><div align="center"> 
                    <?php
				  echo $o3;
				  ?>
                    octets<br>
                    <hr>
                    3000 octets/page</div></td>
                <td> <div align="center"> 
                    <?php
				  echo $p3;
				  ?>
                    pages</div></td>
              </tr>
              <tr> 
                <td width="15%">CD-ROM</td>
                <td> <div align="center"> 
                    <?php
				  echo $c4;
				  ?>
                    Mo </div></td>
                <td><div align="center"> 
                    <?php
				  echo $o4;
				  ?>
                    octets 
                    <hr>
                    3000 octets/page</div></td>
                <td> <div align="center"> 
                    <?php
				  echo $p4;
				  ?>
                    pages</div></td>
              </tr>
              <tr> 
                <td>DVD-ROM</td>
                <td><div align="center">jusqu'&agrave; 
                    <?php
				  echo $c5;
				  ?>
                    Go </div></td>
                <td><div align="center"> 
                    <?php
				  echo $o5;
				  ?>
                    octets 
                    <hr>
                    3000 octets/page</div></td>
                <td><div align="center"> 
                    <?php
				  echo $p5;
				  ?>
                    pages</div></td>
              </tr>
            </table>
            <p>Un volume d'une encyclop&eacute;die contient 2500 pages. Sur un 
              seul CD-ROM, on pourrait enregistrer 
              <?php
				  echo "<b>$vol</b>";
				  ?>
              volumes.</p>
            <table width="100%" border="0">
              <tr> 
                <td width="250">Nom: </td>
                <td width="79%"> 
                  <?php
				  echo $nom;
				  ?>
                </td>
              </tr>
              <tr> 
                <td width="250">Pr&eacute;nom:</td>
                <td> 
                  <?php
				  echo $prenom;
				  ?>
                </td>
              </tr>
              <tr> 
                <td width="250">Classe</td>
                <td> 
                  <?php
				  echo $classe;
				  ?>
                </td>
              </tr>
            </table>
            <p align="center"> 
              <input type="button" name="Submit" value="Imprimer" onClick="WindowPrint()">
            </p></td>
        </tr>
      </table></td>
  </tr>
</table>
<?php
include ("../pied.inc.php");
?>
</div></body>
</html>
