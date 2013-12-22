<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Les outils du système d'exploitation</title>
</head>
<body>
<div id="conteneur"><?php include ("./top.inc.php"); ?>
<div id="texte">
<h2>Le système d'exploitation dispose d'une interface graphique </h2>
<div class="info">
	<p>Le système d'exploitation est parfois un outil difficile à utiliser. Les instructions que l'on doit donner au système d'exploitation sont encore assez proches du langage de la machine.</p> 
	<p>Exemple d'utilisation de commandes d'un système d'exploitation Microsoft:</p>
	<p><img style="width: 601px; height: 351px;"  alt="Commandes DOS sous Windows" src="images/oswin.png"></p>
	<p>Exemple sous Linux:</p>
	<p><img style="width: 482px; height: 330px;" alt="console sous Linux" src="images/oslinux.jpg"> </p>
</div>
<p class="questions">Ben dites donc, c'est tout écrit en martien?</p>
<p class="reponses">Ce n'est peut-être pas du martien, mais ce n'est pas si facile à comprendre au premier coup d'oeil. Heureusement, on ne doit pas forcément parler ce langage pour utiliser un ordinateur.</p>
<div class="info">
	<p> Pour faciliter l'emploi des ordinateurs, on a imaginé de mettre au point des programmes qui seraient capables de piloter le système d'exploitation.</p>
	<p> Ces programmes sont appelés des <strong>Interfaces graphiques</strong>.</p>
	<p> <strong>Interfaces</strong>&nbsp;: car ils s'interposent entre le système d'exploitation et l'utilisateur </p>
	<p><strong>graphiques</strong> car ils représentent les composants et les fonctions des ordinateurs par des dessins symboliques encore appelés des icônes.</p>
	<p><img style="width: 74px; height: 49px;" alt="Dossier &quot;Mes vidéos&quot;" src="images/dossier.png"> représente un dossier contenant mes vidéos de vacances </p>
	<p><img src="images/cdrom.png" align="middle" height="46" hspace="5"  vspace="5" width="51">représente un lecteur de CD-ROM </p> 
	<p> <img src="images/ooo.png" align="middle" height="50" hspace="5" vspace="5" width="50">représente le logiciel OpenOffice.org </p>
	<p> Plutôt que d'écrire au clavier des commandes complexes, on manipule ces icônes. Pour démarrer un programme, il suffit d'un clic de souris sur une icône. Pour accéder à mes vidéos, un double clic sur le dossier... </p>
	<p> Parmi ces Interfaces graphiques figurent <a href="#" class="bulle">Windows<span>L'exemple de Windows est un peu particulier car l'interface graphique et l'OS ne sont pas clairement distincts dans ce cas.</span></a>, Gnome, KDE,... </p>
</div>
<div class="travail">
	<form  action=""> Une icône, c'est<br>
		<input name="bt" onclick="alert('Ou bien tu le fais exprès, ou bien tu as un gros problème de lecture.\nRelis le texte plus haut.')" type="radio"> une commande du système d'exploitation<br>
		<input name="bt" onclick="alert('OK.\nJe vois que tu sais lire.')" type="radio"> un dessin représentant un élément de l'ordinateur<br> 
		<input name="bt" onclick="alert('Non.\nAucun rapport avec la souris.')" type="radio">un des boutons de la souris 
	</form>

	<form > Le système d'exploitation présente un gros inconvénient pour l'utilisateur de l'ordinateur.<br>
		<input name="bt" onclick="alert('Si! C\'est possible,\nmais les instructions que comprend le système d\'exploitation sont difficiles à comprendre pour un humain.')" type="radio"> il est impossible de communiquer avec le système d'exploitation<br>
		<input name="bt" onclick="alert('Bien sûr.\nLes instructions que comprend le système d\'exploitation sont difficiles à comprendre pour un humain.')" type="radio"> il est difficile de communiquer avec le système d'exploitation car son langage est parfois trop complexe. 
	</form>
	<form> Une interface graphique, c'est<br>
		<input name="BR" onclick="alert('Non.\nTu dois relire les informations données ci-dessus.')" type="radio"> une commande du système d'exploitation<br>
		<input name="BR" onclick="alert('Non.\nL\'interface grphique utilise des dessins symboliques, mais ce n\'est pas un dessin.')" type="radio"> un dessin représentant un élément de l'ordinateur<br>
		<input name="BR" onclick="alert('OK!\nIl est plus facile d\'utiliser les composants de l\'ordinateur quand ils sont représentés par des dessins symboliques.')" type="radio"> un système pour simplifier l'utilisation de l'ordinateur 
	</form>

	<p>Quand tu as répondu aux questions et bien compris les réponses, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?>
</p>
</div>
<?php include ("../../pied.inc.php"); ?> </div>
</body>
</html>
