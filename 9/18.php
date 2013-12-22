<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
 <link href="../../info.css" rel="stylesheet" type="text/css" media = "screen"> 
 <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
<title>Introduction à l'Internet</title>
</head> 
<body> 
<div id="conteneur">
<?php include ("./top.inc.php"); ?> 
<div id="texte"> 
<h2> Ton avis m'intéresse </h2> 
<p class="info"> Afin d'améliorer ce cours, il me serait utile de disposer de quelques informations sur la façon dont tu l'as perçu. Cela m'aiderait beaucoup que tu répondes rapidement aux quelques questions suivantes. Tu n'es pas obligé(e) de répondre à toutes les questions. </p> 
 <form name="form1" method="post" action="../../envavis.php" id="form1"> 
 <input name="chapitre"
 value="9" type="hidden"> <input name="matiere" value="infobase"
 type="hidden"> <label>Nom</label><input name="nom" id="nom"
 type="text"><br> <label>École</label><input name="ecole" id="ecole"
 type="text"><br> <label>Pays</label><input name="pays" id="pays"
 type="text"><br> <label>Âge</label><input name="age" id="age" size="3"
 maxlength="3" type="text"><br> <label>e-mail</label><input
 name="email" id="email" maxlength="30" type="text"> (si tu souhaites
une réaction) <p> J'ai aimé <span class="micro">(indique une chose
que tu as appréciée)</span> </p> <p> <textarea name="aime" cols="60"
 rows="5" id="aime"></textarea> </p> <p> Je n'ai pas aimé <span
 class="micro">(indique une chose que tu n'as pas appréciée et qu'il
faudrait supprimer ou complètement changer)</span> </p> <p> <textarea
 name="aimepas" cols="60" rows="5" id="aimepas"></textarea> </p> <p>
Autre remarque <span class="micro">(éventuellement adresse e-mail pour
obtenir une réaction)</span>: </p> <p> <textarea name="rem" cols="60"
 rows="3" id="rem"></textarea> </p> <p style="text-align: center;"> <input
 name="Submit" value="Envoyer" type="submit"> </p> </form> </div><?php include ("../../pied.inc.php");
      ?>
</div> </body></html>
