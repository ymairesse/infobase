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
<h2>Ton avis m'int�resse </h2>
<p class="info">Afin d'am�liorer ce cours, il me serait utile de
disposer de quelques informations sur la fa�on dont tu l'as per�u. Cela
m'aiderait beaucoup que tu r�pondes rapidement aux quelques questions
suivantes. Tu n'es pas oblig�(e) de r�pondre � toutes les questions. </p>
<form name="form1" method="post" action="../../envavis.php"> <span
 class="label">Nom</span><input name="nom" id="nom" type="text"><br>
  <label>�cole</label> <input name="ecole" id="ecole"
 type="text"><br>
  <label>Pays</label> <input name="pays" id="pays"
 type="text"><br>
  <label>�ge</label> <input name="age" id="age" size="3"
 maxlength="3" type="text"><br>
  <label>e-mail</label> <input name="email" id="email"
 type="text"> <br>
(si tu souhaites une r�action) <input name="matiere" id="matiere"
 value="infobase" type="hidden"> <input name="chapitre" id="chapitre"
 value="18" type="hidden">
  <p>J'ai aim� <span class="micro">(indique une chose que tu as
appr�ci�e)</span></p>
  <p> <textarea name="aime" cols="60" rows="5" id="aime"></textarea> </p>
  <p>Je n'ai pas aim� <span class="micro">(indique une chose que tu
n'as pas appr�ci�e et qu'il faudrait supprimer ou compl�tement changer)</span></p>
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
