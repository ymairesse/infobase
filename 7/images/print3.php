<?php //anti-moz ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
	<link rel="stylesheet" type="text/css" href="../../print.css" media="print">
<script language="JavaScript" type="text/javascript">
function WindowPrint () {
window.print ();
alert('Vérifie que te page est correctement imprimée avant de poursuivre.');
history.go(-1);
}
</script>
<?php
foreach ($_POST as $key=>$value)
	$$key = stripslashes(htmlentities($value));
?>
    <title>Les outils du système d'exploitation</title>
  </head>
  <body>
    <div id="conteneur">
      <?php include ("./top.inc.php"); ?>
      <div id="texte">
        <h2>Les menus</h2>
        <p class="info">
          La plupart des applications disposent dune série de menus.
        </p>
        <p>
          Dans un logiciel, un menu est :<br>
          <?php echo $menu; ?>
        </p>
        <p>
          Voici quatre raccourcis-clavier appartenant au logiciel d'exploration du web que j'utilise actuellement:
        </p>
        <table border="0" cellpadding="5" cellspacing="5" width="100%">
          <tbody>
            <tr>
              <td valign="top" width="22%">
                Raccourci
              </td>
              <td width="78%">
                Explication
              </td>
            </tr>
            <tr>
              <td valign="top" width="22%">
                1. <?php echo $r1; ?>
              </td>
              <td width="78%"><?php echo $expl1; ?></td>
            </tr>
            <tr>
              <td valign="top" width="22%">2.<?php echo $r2; ?></td>
              <td width="78%"><?php echo $expl2; ?></td>
            </tr>
            <tr>
              <td valign="top" width="22%">
                3.<?php echo $r3; ?></td>
              <td width="78%"><?php echo $expl3; ?></td>
            </tr>
            <tr>
              <td valign="top" width="22%">
                4.<?php echo $r4; ?></td>
              <td width="78%"><?php echo $expl4; ?></td>
            </tr>
          </tbody>
        </table>
        <p>
          <span class="label">Nom :</span>
		  <?php echo $nom; ?>
        </p>
        <p>
          <span class="label">Prénom :</span>
		  <?php echo $prenom; ?>
        </p>
        <p>
          <span class="label">Classe :</span>
		  <?php echo $classe; ?>
        </p>
        <div style="text-align: center;" class="invisible">
          <img src="../../images/printr3c.gif" class="pointer" onclick="WindowPrint()" height="32" width="32">
        </div>
      </div>
	  <?php include ("../../pied.inc.php"); ?>
    </div>
  </body>
</html>