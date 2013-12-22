<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Les outils du système d'exploitation</title>
</head>
<body>
<div id="conteneur">
<?php include ("./top.inc.php"); ?>
<div id="texte">
<h2> Eléments des fenêtres </h2>
<div class="info">
<p> Les interfaces graphiques utilisent des cadres encore appelés <strong>des fenêtres</strong> (d'où découle le nom "Windows" qui signifie "Fenêtres", en anglais).</p>
<p> Le cours que tu travailles actuellement se déroule dans une fenêtre.</p>
</div>
<h3>Sous un système d'exploitation Microsoft</h3>
<p>L'exemple ci-dessous montre une fenêtre dans un système Windows. Les fenêtres sont munies d'un certain nombre d'outils qui sont mis en évidence par des numéros sur l'illustration.</p>
<p style="text-align:center"><img style="width: 490px; height: 117px;" alt="Haut de la fenêtre" src="images/top.png"> </p>
<p> Rétablis la légende des éléments de cette fenêtre. </p>
<form method="post" action="print2.php" class="travail"> 
<input name="r1" size="5" maxlength="1" tabindex="1" type="text">Barre de titre: elle contient le titre de la fenêtre; sa couleur change selon que la fenêtre est active ou inactive<br />
<input name="r2" size="5" maxlength="1" tabindex="2" type="text">Case de réduction: c'est un carré marqué d'un trait horizontal dans le bas de la case<br />
<input name="r3" size="5" maxlength="1" tabindex="3" type="text">Case d'agrandissement: c'est un carré marqué d'un trait horizontal dans le haut de la case<br />
<input name="r4" size="5" maxlength="1" tabindex="4" type="text">Case du menu système: c'est un carré contenant l'icone du programme en réduction<br />
<input name="r5" size="5" maxlength="1" tabindex="5" type="text">Case de fermeture: c'est un carré contenant une croix <p> Indique tes références ci-dessous puis envoie à l'impression.</p>
<label>Nom</label> <input name="nom" size="30" tabindex="6" type="text"><br>
<label>Prénom</label> <input name="prenom" size="30" tabindex="7" type="text"> 
<input name="Submit" value="Envoyer à l'impression" tabindex="9" type="submit"><br>
<label>Classe</label> <input name="classe" id="classe" size="5" tabindex="8" type="text">
<input name="OS" value="Windows" type="hidden"> 
</form>
<h3>Sous un système d'exploitation&nbsp;Linux</h3>
<p>L'exemple ci-dessous montre une fenêtre dans un système <a href="javascript:void(0)" class="bulle">Linux<span>Il existe plusieurs variantes sous Linux. L'illustration montre une fenêtre dans un système Ubuntu Linux (Debian)</span></a>.
Les fenêtres sont munies d'un certain nombre d'outils qui sont mis en évidence par des numéros sur l'illustration.</p>
<div style="text-align: center;">
	<img style="width: 559px; height: 84px;" alt="Fenêtre Linux" src="images/toplinux.png">
</div>

<form method="post" action="print2b.php" class="travail"> 
<input name="r1" size="5" maxlength="1" tabindex="10" type="text"> Barre de titre: elle contient le titre de la fenêtre; sa couleur change selon que la fenêtre est active ou inactive<br>
<input name="r2" size="5" maxlength="11" tabindex="11" type="text">Case de réduction: c'est un carré marqué d'un trait horizontal dans le bas de la case<br>
<input name="r3" size="5" maxlength="12" tabindex="12" type="text">Case d'agrandissement ou de restauration: elle contient un rectangle de taille variable<br>
<input name="r4" size="5" maxlength="13" tabindex="13" type="text">Case du menu fenêtre: elle contient l'icone du programme en réduction.<br>
<input name="r5" size="5" maxlength="14" tabindex="14" type="text">Case de fermeture: c'est un carré contenant une croix   <p> Indique tes références ci-dessous puis envoie à l'impression.</p>
<label>Nom</label> <input name="nom" size="30"  tabindex="15" type="text"><br>
<label>Prénom</label><input name="prenom" size="30" tabindex="16" type="text"> 
<input name="Submit" value="Envoyer à l'impression" tabindex="18" type="submit"><br>
<label>Classe</label> <input name="classe" size="5" tabindex="17" type="text">
<input name="OS" value="Linux" type="hidden"> 
</form>
<p> Quand ton document est imprimé, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?> </p>
</div>
<?php include ("../../pied.inc.php"); ?> </div>
</body>
</html>
