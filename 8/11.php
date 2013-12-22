<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  
  <meta name="generator"
 content="HTML Tidy for Windows (vers 1st July 2004), see www.w3.org">
  <title>Les cases à cocher</title>
  <meta http-equiv="Content-Type"
 content="text/html; charset=iso-8859-1">
  <script language="JavaScript" type="text/javascript">
<!--
function Reponse (form){
var I=0
while (!form.BR[I].checked) { I++ }
alert (form.BR[I].value)}
// -->
  </script>
  <link rel="stylesheet" type="text/css" href="../../info.css"
 media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css"
 media="print">
</head>
<body>
<div id="conteneur"><?php include ("./top.inc.php"); ?>
<div class="info" id="texte">
<h2> Les cases à cocher. </h2>
<p class="info"><img class="imagedroite" src="images/cocher.jpg"
 alt="Boutons d'option" align="left" height="166" hspace="10"
 vspace="10" width="241">Les cases à cocher apparaissent à côté des
options qu'il est possible d'activer ou de désactiver. Contrairement
aux boutons d'option, <strong>on peut activer autant de cases à cocher
que l'on veut</strong>. Lorsqu'elle est activée, un coche apparaît dans
la case correspondant à une option. </p>
<h3> Comment les utiliser? </h3>
<p class="info"> Pour sélectionner une case à cocher, cliquer avec la
souris sur le carré ou sur le mot accompagnant la case. La case
sélectionnée reçoit une croix. Toutes les autres cases gardent leur
état, sélectionné ou désélectionné. </p>
&nbsp;
<h3> Exemple </h3>
<table style="text-align: left; margin-left: auto; margin-right: auto;"
 border="1" cellpadding="5" cellspacing="0" width="400">
  <tbody>
    <tr style="color: rgb(255, 255, 255); font-weight: bold;">
      <td bgcolor="#000080"> <b>Exemples de cases à cocher</b> </td>
    </tr>
    <tr>
      <td bgcolor="#c0c0c0"> Cet ordinateur ne distribue aucune des
glaces suivantes. Fais ton choix.
      <p> <input name="C1" value="ON" checked="checked" type="checkbox">Chocolat
      </p>
      <p> <input name="C12" value="ON" type="checkbox"> Fraise </p>
      <p> <input name="C12" value="ON" type="checkbox"> Framboise </p>
      </td>
    </tr>
  </tbody>
</table>
<p>Quand tu as choisi ta glace et que tu as tout lu, passe à la page
suivante.<?php include ("../../suivant.inc.php"); ?>
</p>
</div>
<?php include ("../../pied.inc.php"); ?> </div>
</body>
</html>
