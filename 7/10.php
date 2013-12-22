<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
	<link rel="stylesheet" type="text/css" href="../../print.css" media="print">
	<title>Les outils du syst�me d'exploitation</title>
</head>
<body>
<div id="conteneur"><?php include ("./top.inc.php"); ?>
<div id="texte">
<form method="post" action="print3.php">
<h2> Les menus </h2>
  <p class="info"> La plupart des applications disposent d'une s�rie de menus. </p>
  <div class="travail">Un menu est (retourne voir dans les pages pr�c�dentes si tu as oubli�) :<br>
  <textarea name="menu" cols="50" rows="3"></textarea>
  </div>
  <p>Dans le haut de l'�cran, <strong>les menus</strong> sont repr�sent�s par une s�rie de mots plac�s g�n�ralement sous la barre de titre. Dans l'illustration ci-dessous, la barre de menus contient&nbsp;7 menus. </p>
  <div style="text-align:center"><img style="width: 375px; height: 25px;" alt="Menus" src="images/menus.png"> </div>
  <p> Le menu&nbsp;<span style="text-decoration: underline;" class="menu">?</span> est bien un menu. </p>
  <p> Chacun de ces menus donne acc�s � un certain nombre de <strong>commandes</strong>.</p>
  <div style="text-align:center"><img style="width: 221px; height: 122px;" src="images/commandes.png" alt="Les commandes du menu &quot;Fichier&quot;"> </div>
  <p> Les commandes non-disponibles sont en gris�. Un certain nombre de raccourcis-clavier sont indiqu�s. </p>
  <p> Indique ci-dessous quatre raccourcis-clavier de ton logiciel de navigation sur le web et explique leur r�le en quelques mots (exp�rimente �ventuellement). </p>
  <table class="travail" border="1" cellpadding="5" cellspacing="5"
 width="100%">
    <tbody>
      <tr>
        <td width="22%"> Raccourci </td>
        <td width="78%"> Explication </td>
      </tr>
      <tr>
        <td width="22%"> <input name="r1" type="text"> </td>
        <td width="78%"> <textarea name="expl1" cols="40" rows="3"></textarea>
        </td>
      </tr>
      <tr>
        <td width="22%"> <input name="r2" type="text"> </td>
        <td width="78%"> <textarea name="expl2" cols="40" rows="3"></textarea>
        </td>
      </tr>
      <tr>
        <td width="22%"> <input name="r3" type="text"> </td>
        <td width="78%"> <textarea name="expl3" cols="40" rows="3"></textarea>
        </td>
      </tr>
      <tr>
        <td width="22%"> <input name="r4" type="text"> </td>
        <td width="78%"> <textarea name="expl4" cols="40" rows="3"></textarea>
        </td>
      </tr>
    </tbody>
  </table>
  <p> Indique tes r�f�rences ci-dessous, puis envoie � l'impression. </p>
  <label>Nom:</label> <input name="nom" size="30"  type="text"><br>
  <label>Pr�nom:</label> <input name="prenom" size="30" type="text"> 
  <input name="Submit" value="Envoyer � l'impression" type="submit"><br>
  <label>Classe:</label> <input name="classe" size="30" type="text"><br>
  <p> Quand ton document est imprim�, passe � la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
</form>
</div>
<?php include ("../../pied.inc.php"); ?> </div>
</body>
</html>
