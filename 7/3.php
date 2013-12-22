<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type"
 content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css"  media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Les outils du système d'exploitation</title>
</head>
<body>
<div id="conteneur">
<?php include ("./top.inc.php"); ?>
<div id="texte">
<h2>Le système d'exploitation: synthèse</h2>
<form name="form1" method="post" action="print.php">
<div class="info">
<p>Dans un ordinateur, on trouve deux programmes de base qui sont 
<input name="r1" size="10" value="le " type="text"> 
qui peut être comparé à 
<input name="r2" size="20" value="un" type="text">
et 
<input name="r3" size="25" value="le" type="text"> 
qui peut être comparé à 
<input name="r4" size="30" value="un" type="text">
.</p>
<p>En fait, le rôle du 
<input name="r5" size="30" type="text"> 
est d'organiser le travail de l'ordinateur.</p>
<p>Il s'occupe, entre autres, d'organiser</p>
<p> <textarea name="r6" cols="60" rows="3"></textarea> </p>
<p>et d'organiser </p>
<p> <textarea name="r7" cols="60" rows="3"></textarea> </p>
</div>

  <p>Quand tu as terminé, indique tes références ci-dessous et envoie
ton texte à l'impression. </p>
  <label for="nom">Nom&nbsp;:</label> <input name="nom" size="30" type="text" id="nom"> <br>
  <label for="prenom">Prénom&nbsp;: </label> <input name="prenom" size="30" type="text" id="prenom"><br>
  <label for="classe">Classe:</label> <input name="classe" size="30" type="text" id="classe"><br>
  <p style="text-align:center"><input name="Submit" value="Envoyer à l'impression" type="submit"></p>
   </form>
<p> Quand ta feuille est imprimée, passe à la page suivante.
<?php include ("../../suivant.inc.php");
?></p>
</div>
<?php include ("../../pied.inc.php");
?>
</div>
</body>
</html>
