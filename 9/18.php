<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
 <link href="../../info.css" rel="stylesheet" type="text/css" media = "screen"> 
 <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
<title>Introduction � l'Internet</title>
</head> 
<body> 
<div id="conteneur">
<?php include ("./top.inc.php"); ?> 
<div id="texte"> 
<h2> Ton avis m'int�resse </h2> 
<p class="info"> Afin d'am�liorer ce cours, il me serait utile de disposer de quelques informations sur la fa�on dont tu l'as per�u. Cela m'aiderait beaucoup que tu r�pondes rapidement aux quelques questions suivantes. Tu n'es pas oblig�(e) de r�pondre � toutes les questions. </p> 
 <form name="form1" method="post" action="../../envavis.php" id="form1"> 
 <input name="chapitre"
 value="9" type="hidden"> <input name="matiere" value="infobase"
 type="hidden"> <label>Nom</label><input name="nom" id="nom"
 type="text"><br> <label>�cole</label><input name="ecole" id="ecole"
 type="text"><br> <label>Pays</label><input name="pays" id="pays"
 type="text"><br> <label>�ge</label><input name="age" id="age" size="3"
 maxlength="3" type="text"><br> <label>e-mail</label><input
 name="email" id="email" maxlength="30" type="text"> (si tu souhaites
une r�action) <p> J'ai aim� <span class="micro">(indique une chose
que tu as appr�ci�e)</span> </p> <p> <textarea name="aime" cols="60"
 rows="5" id="aime"></textarea> </p> <p> Je n'ai pas aim� <span
 class="micro">(indique une chose que tu n'as pas appr�ci�e et qu'il
faudrait supprimer ou compl�tement changer)</span> </p> <p> <textarea
 name="aimepas" cols="60" rows="5" id="aimepas"></textarea> </p> <p>
Autre remarque <span class="micro">(�ventuellement adresse e-mail pour
obtenir une r�action)</span>: </p> <p> <textarea name="rem" cols="60"
 rows="3" id="rem"></textarea> </p> <p style="text-align: center;"> <input
 name="Submit" value="Envoyer" type="submit"> </p> </form> </div><?php include ("../../pied.inc.php");
      ?>
</div> </body></html>
