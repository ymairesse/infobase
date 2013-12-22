<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Introduction à l'Internet</title></head><body>
<div id="conteneur">
<?php 
include ("./top.inc.php");
?>
<div id="texte">
<h2>Les origines de l'Internet: questions</h2>
<form name="form1" method="post" action="print1.php">
  <p>Réponds aux questions suivantes en utilisant <strong>des phrases
complètes</strong> et <strong>correctement structurées</strong>.</p>
  
  <p>1. Pourquoi l'armée américaine était-elle motivée à réussir la mise en réseau de ses ordinateurs ?</p>

  <p> <textarea name="R1" cols="60" rows="3" id="R1"></textarea></p>
  <p>2. Quelle a été la première expérience de chat sur un réseau d'ordinateurs?</p>
  <p> <textarea name="R2" cols="60" rows="3" id="R1"></textarea></p>
  <p>3. Pourquoi un réseau centralisé serait-il fragile, au départ?</p>
  <p> <textarea name="R3" cols="60" rows="4" id="R2"></textarea></p>
  <p>4. Quel est le système imaginé par la DARPA pour résoudre le
problème de fragilité du réseau? Base ton explication sur
l'illustration ci-dessous.</p>
  <p style="text-align: center;"><img src="images/arpanet.gif" style="width: 468px; height: 375px;" alt="ARPANET"></p>
  <p> <textarea name="R4" cols="60" rows="4" id="R3"></textarea></p>
  <p>Quand tu as répondu, indique tes références ci-dessous puis clique
sur le bouton Envoyer pour imprimer.</p>

  <label>Nom&nbsp;:</label> <input name="nom" size="30" maxlength="40" type="text"><br>

  <label>Prénom&nbsp;:</label> <input name="prenom" size="30" type="text"><br>
  <label>Classe&nbsp;:</label> <input name="classe" size="4" type="text"><br>
  <div style="text-align: center;"> <input name="submit" value="Envoyer à l'impression" style="text-align: center;" type="submit"> </div>

</form>
<p>Quand tu as répondu à toutes les questions et que la page imprimée
est entre tes mains, passe à la page suivante.<?php include ("../../suivant.inc.php");?> </p>
</div>
<?php include ("../../pied.inc.php"); ?> </div>

</body></html>
