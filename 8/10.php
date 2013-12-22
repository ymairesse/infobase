<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  
  <meta name="generator"
 content="HTML Tidy for Windows (vers 1st July 2004), see www.w3.org">
  <title>Les boutons d'option</title>
  <meta http-equiv="Content-Type"
 content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css"
 media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css"
 media="print">
</head>
<body>
<div id="conteneur"><?php include ("./top.inc.php"); ?>
<div id="texte">
<h2> Les boutons d'option </h2>
<p class="info"> <img src="images/option.jpg" alt="Boutons d'option"
 align="right" height="187" hspace="10" vspace="10" width="305">Les
boutons d'option représentent des possibilités <u>qui s'excluent
mutuellement</u>: on ne peut sélectionner qu'un bouton à la fois. Quand
un bouton est choisi, les autres ne peuvent pas être sélectionnés. </p>
<p> Si une option est inaccessible, elle apparaît en grisé.&nbsp;</p>
<h3> Comment les utiliser? </h3>
<p class="info"> Pour sélectionner un bouton d'option, cliquer avec la
souris sur le cercle ou sur le mot accompagnant le bouton. Le bouton
sélectionné reçoit un point noir. Tout autre bouton est désélectionné
et redevient blanc.&nbsp;</p>
<h3> Exemple </h3>
<table style="text-align: left; margin-left: auto; margin-right: auto;"
 border="1" cellpadding="5" cellspacing="0" width="400">
  <tbody>
    <tr style="color: rgb(255, 255, 255); font-weight: bold;">
      <td bgcolor="#000080"> <b>Exemples de boutons d'option</b> </td>
    </tr>
    <tr>
      <td bgcolor="#c0c0c0"> Cet ordinateur ne distribue pas de glaces.
Fais ton choix malgré tout.
      <p> &nbsp; <input value="V1" checked="checked" name="R1"
 type="radio"> Une boule </p>
      <p> &nbsp; <input value="V1" name="R1" type="radio"> Deux boules
      </p>
      <p> &nbsp; <input value="V1" name="R1" type="radio"> Trois
boules </p>
      </td>
    </tr>
  </tbody>
</table>
<p>Quand tu as choisi ta glace et que tu as&nbsp;tout lu, passe à la
page suivante?<?php include ("../../suivant.inc.php"); ?>
</p>
</div>
<?php include ("../../pied.inc.php"); ?> </div>
</body>
</html>
