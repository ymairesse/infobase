<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta id="_moz_prolog" content="">
  <meta http-equiv="Content-Type"
 content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css"
 media="screen">
  <title>Organisation des fichiers sur les disques</title>
</head>
<body>
<div id="conteneur"><?php include ("./top.inc.php");
?>
<div id="texte">
<h2>Ton avis m'intéresse </h2>
<p class="info">Afin d'améliorer ce cours, il me serait utile de
disposer de quelques informations sur la façon dont tu l'as perçu. Cela
m'aiderait beaucoup que tu répondes rapidement aux quelques questions
suivantes. Tu n'es pas obligé(e) de répondre à toutes les questions. </p>
<form name="form1" method="post" action="../../envavis.php"> <span
 class="label">Nom</span><input name="nom" id="nom" type="text"><br>
  <label>École</label> <input name="ecole" id="ecole"
 type="text"><br>
  <label>Pays</label> <input name="pays" id="pays"
 type="text"><br>
  <label>Âge</label> <input name="age" id="age" size="3"
 maxlength="3" type="text"><br>
  <label>e-mail</label> <input name="email" id="email"
 type="text"> <br>
(si tu souhaites une réaction) <input name="matiere" id="matiere"
 value="infobase" type="hidden"> <input name="chapitre" id="chapitre"
 value="18" type="hidden">
  <p>J'ai aimé <span class="micro">(indique une chose que tu as
appréciée)</span></p>
  <p> <textarea name="aime" cols="60" rows="5" id="aime"></textarea> </p>
  <p>Je n'ai pas aimé <span class="micro">(indique une chose que tu
n'as pas appréciée et qu'il faudrait supprimer ou complètement changer)</span></p>
  <p> <textarea name="aimepas" cols="60" rows="5" id="aimepas"></textarea>
  </p>
  <p>Autre remarque:</p>
  <p> <textarea name="rem" cols="60" rows="3" id="rem"></textarea> </p>
  <p style="text-align: center;"> <input name="Submit" value="Envoyer"
 type="submit"> </p>
</form>
<?php include ("../../psuivante.inc.php");
?>
</div>
<?php include ("../../pied.inc.php");
include ("../../stat.inc.php");
?>
</div>
</body>
</html>
