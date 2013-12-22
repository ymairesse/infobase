<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
	<link  rel="stylesheet" type="text/css" href="../../info.css" media="screen">
	<link rel="stylesheet" type="text/css" href="../../print.css" media="print"> 
	<title>Organisation des fichiers sur les disques</title>
</head>
<body>
<div id="conteneur"><?php include ("./top.inc.php");?>
<div id="texte">
	<h2>Un catalogue des fichiers sur le disque</h2>
<div class="info">
	<p>Le disque dur d'un ordinateur peut supporter des milliers de fichiers. L'ordinateur doit pouvoir retrouver chacun d'eux très rapidement. Pour ce faire, il a besoin d'un système d'organisation efficace de ces fichiers.</p>
	<p>Imagine que tu viennes d'enregistrer quelques dizaines de documents sur le disque dur de ton ordinateur.</p>
	<img class="imagedroite" style="width: 284px; height: 167px;" src="images/ouvrir.jpg" alt="Ouvrir">
	<p>Chacun de ces fichiers doit pouvoir être rappelé et remis en mémoire de l'ordinateur quand on le veut. Il faut donc que le système d'exploitation dispose d'une méthode lui permettant de retrouver les fichiers très rapidement.</p>
	<p>Il existe plusieurs façons, pour les systèmes d'exploitations, de gérer l'accès aux fichiers. Parmi ces façons de procéder, celui qui utilise un "catalogue" des fichiers sur le disque avec leur emplacement. Il s'agit du système FAT. C'est lui que nous allons présenter ici.</p>
	<p>Nous n'évoquerons pas les autres systèmes plus évolués: NTFS, ext2, ext3,...</p>
</div>
<p><img style="width: 256px; height: 170px; clear: both;" src="images/enregistrer.jpg" alt="Enregistrer" class="imagedroite"></p>
<div class="attention encadre">Dans le système FAT, il existe une sorte de catalogue des fichiers présents sur le disque.</div>
<p>Lorsque l'on veut retrouver un certain fichier, le système d'exploitation consulte le catalogue et retrouve presque instantanément les données sur le disque.</p>
<p>L'illustration ci-dessous représente le catalogue du disque de la <a href="1.php">page 1</a>. Un endroit du disque (représenté ici sur le bord) est réservé pour un catalogue des fichiers enregistrés.</p>

<div class="attention encadre">Dans ce catalogue, le système d'exploitation indique le numéro de la piste et du secteur où se trouve chaque fichier.</div>

<div style="text-align: center;">
	<img src="images/fat.gif" alt="FAT" height="321" width="550"> 
</div>
<div class="attention encadre">
	Ce catalogue est appelé <strong>FAT</strong>, acronyme de "<strong>F</strong>ile <strong>A</strong>llocation <strong>T</strong>able" ("table d'allocation des fichiers").
</div>

<p>L'utilisateur de l'ordinateur n'a normalement pas à se préoccuper de la gestion de la FAT: c'est le travail du système d'exploitation.</p>
<p>Pour chaque fichier, les renseignements les plus importants indiqués dans la FAT sont:</p>
<ul> 
	<li>le nom du fichier</li> 
	<li>la piste et le secteur où le fichier commence</li>
</ul>
<p>La FAT contient encore d'autres informations dont nous ne parlerons pas ici.</p>

<p> Pour la question suivante, revois éventuellement les notions développées dans la leçon 6: <a href="../6/5.php" target="_blank">[1]</a> et <a href="../6/8.php" target="_blank">[2]</a>. </p>

<form class="travail"> 
	Sur un clef USB, tu as enregistré douze documents. Combien y aura-t-il de références dans la FAT?<br> 
	<input name="radiobutton" value="0" onclick="alert('Ce n\'est pas possible. Comment désigner chacun des douze fichiers, dans ce cas?')" type="radio"> Une seule<br> 
	<input name="radiobutton" value="0" onclick="alert('Bien sûr, puisqu\'il faut que chaque fichier soit désigné.')" type="radio"> Douze <br> 
	<input name="radiobutton" value="0" onclick="alert('Non! Il n\'y a pas de raison que le système d\'exploitation\nutilise plus de ressources que nécessaire.\nPour douze fichiers, il y aura donc combien de références?')" type="radio"> Autant qu'on veut 
</form>

<div class="info">
	<p>Sur une clef USB, la FAT n'est pas forcément mise à jour à chaque modification d'un fichier. Cette mise à jour peut être reportée, pour gagner du temps, jusqu'au moment où l'on éteint l'ordinateur ou au moment où la clef est "éjectée" volontairement.</p>
	<p>Il ne faut jamais retirer une clef USB sans prendre la précaution de l'éjecter par la commande appropriée du système d'exploitation.</p>
</div>

<form class="travail"> 
	Après y avoir copié des fichiers, on retire une clef USB brutalement d'un ordinateur. La FAT n'a pas été mise à jour. Que risque-t-on?<br> 
	<input name="radiobutton" value="radiobutton" onclick="alert('Effectivement! Le système d\'exploitation ne peut plus savoir\noù se trouvent les fichiers.\nIls sont perdus.')" type="radio">Certains fichiers ne seront plus lisibles<br>
	<input name="radiobutton" value="radiobutton" onclick="alert('Non! Comment le système d\'exploitation pourrait-il encore retrouver l\'emplacement des fichiers sur la clef USB?')" type="radio">On peut toujours l'utiliser normalement 
</form>
<p>Quand tu as répondu aux questions et bien compris les réponses, passe à la page suivante.</p>
<?php 
	include ("../../suivant.inc.php");?>
</div>
<?php include ("../../pied.inc.php");?>
</div>
</body>
</html>
