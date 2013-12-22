<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Les outils du syst�me d'exploitation</title>
</head>
<body>
<div id="conteneur">
<?php include ("./top.inc.php"); ?>
<div id="texte">
<h2> El�ments des fen�tres </h2>
<div class="info">
<p> Les interfaces graphiques utilisent des cadres encore appel�s <strong>des fen�tres</strong> (d'o� d�coule le nom "Windows" qui signifie "Fen�tres", en anglais).</p>
<p> Le cours que tu travailles actuellement se d�roule dans une fen�tre.</p>
</div>
<h3>Sous un syst�me d'exploitation Microsoft</h3>
<p>L'exemple ci-dessous montre une fen�tre dans un syst�me Windows. Les fen�tres sont munies d'un certain nombre d'outils qui sont mis en �vidence par des num�ros sur l'illustration.</p>
<p style="text-align:center"><img style="width: 490px; height: 117px;" alt="Haut de la fen�tre" src="images/top.png"> </p>
<p> R�tablis la l�gende des �l�ments de cette fen�tre. </p>
<form method="post" action="print2.php" class="travail"> 
<input name="r1" size="5" maxlength="1" tabindex="1" type="text">Barre de titre: elle contient le titre de la fen�tre; sa couleur change selon que la fen�tre est active ou inactive<br />
<input name="r2" size="5" maxlength="1" tabindex="2" type="text">Case de r�duction: c'est un carr� marqu� d'un trait horizontal dans le bas de la case<br />
<input name="r3" size="5" maxlength="1" tabindex="3" type="text">Case d'agrandissement: c'est un carr� marqu� d'un trait horizontal dans le haut de la case<br />
<input name="r4" size="5" maxlength="1" tabindex="4" type="text">Case du menu syst�me: c'est un carr� contenant l'icone du programme en r�duction<br />
<input name="r5" size="5" maxlength="1" tabindex="5" type="text">Case de fermeture: c'est un carr� contenant une croix <p> Indique tes r�f�rences ci-dessous puis envoie � l'impression.</p>
<label>Nom</label> <input name="nom" size="30" tabindex="6" type="text"><br>
<label>Pr�nom</label> <input name="prenom" size="30" tabindex="7" type="text"> 
<input name="Submit" value="Envoyer � l'impression" tabindex="9" type="submit"><br>
<label>Classe</label> <input name="classe" id="classe" size="5" tabindex="8" type="text">
<input name="OS" value="Windows" type="hidden"> 
</form>
<h3>Sous un syst�me d'exploitation&nbsp;Linux</h3>
<p>L'exemple ci-dessous montre une fen�tre dans un syst�me <a href="javascript:void(0)" class="bulle">Linux<span>Il existe plusieurs variantes sous Linux. L'illustration montre une fen�tre dans un syst�me Ubuntu Linux (Debian)</span></a>.
Les fen�tres sont munies d'un certain nombre d'outils qui sont mis en �vidence par des num�ros sur l'illustration.</p>
<div style="text-align: center;">
	<img style="width: 559px; height: 84px;" alt="Fen�tre Linux" src="images/toplinux.png">
</div>

<form method="post" action="print2b.php" class="travail"> 
<input name="r1" size="5" maxlength="1" tabindex="10" type="text"> Barre de titre: elle contient le titre de la fen�tre; sa couleur change selon que la fen�tre est active ou inactive<br>
<input name="r2" size="5" maxlength="11" tabindex="11" type="text">Case de r�duction: c'est un carr� marqu� d'un trait horizontal dans le bas de la case<br>
<input name="r3" size="5" maxlength="12" tabindex="12" type="text">Case d'agrandissement ou de restauration: elle contient un rectangle de taille variable<br>
<input name="r4" size="5" maxlength="13" tabindex="13" type="text">Case du menu fen�tre: elle contient l'icone du programme en r�duction.<br>
<input name="r5" size="5" maxlength="14" tabindex="14" type="text">Case de fermeture: c'est un carr� contenant une croix   <p> Indique tes r�f�rences ci-dessous puis envoie � l'impression.</p>
<label>Nom</label> <input name="nom" size="30"  tabindex="15" type="text"><br>
<label>Pr�nom</label><input name="prenom" size="30" tabindex="16" type="text"> 
<input name="Submit" value="Envoyer � l'impression" tabindex="18" type="submit"><br>
<label>Classe</label> <input name="classe" size="5" tabindex="17" type="text">
<input name="OS" value="Linux" type="hidden"> 
</form>
<p> Quand ton document est imprim�, passe � la page suivante.<?php include ("../../suivant.inc.php"); ?> </p>
</div>
<?php include ("../../pied.inc.php"); ?> </div>
</body>
</html>
