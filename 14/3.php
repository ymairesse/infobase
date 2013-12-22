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
	<p>Le disque dur d'un ordinateur peut supporter des milliers de fichiers. L'ordinateur doit pouvoir retrouver chacun d'eux tr�s rapidement. Pour ce faire, il a besoin d'un syst�me d'organisation efficace de ces fichiers.</p>
	<p>Imagine que tu viennes d'enregistrer quelques dizaines de documents sur le disque dur de ton ordinateur.</p>
	<img class="imagedroite" style="width: 284px; height: 167px;" src="images/ouvrir.jpg" alt="Ouvrir">
	<p>Chacun de ces fichiers doit pouvoir �tre rappel� et remis en m�moire de l'ordinateur quand on le veut. Il faut donc que le syst�me d'exploitation dispose d'une m�thode lui permettant de retrouver les fichiers tr�s rapidement.</p>
	<p>Il existe plusieurs fa�ons, pour les syst�mes d'exploitations, de g�rer l'acc�s aux fichiers. Parmi ces fa�ons de proc�der, celui qui utilise un "catalogue" des fichiers sur le disque avec leur emplacement. Il s'agit du syst�me FAT. C'est lui que nous allons pr�senter ici.</p>
	<p>Nous n'�voquerons pas les autres syst�mes plus �volu�s: NTFS, ext2, ext3,...</p>
</div>
<p><img style="width: 256px; height: 170px; clear: both;" src="images/enregistrer.jpg" alt="Enregistrer" class="imagedroite"></p>
<div class="attention encadre">Dans le syst�me FAT, il existe une sorte de catalogue des fichiers pr�sents sur le disque.</div>
<p>Lorsque l'on veut retrouver un certain fichier, le syst�me d'exploitation consulte le catalogue et retrouve presque instantan�ment les donn�es sur le disque.</p>
<p>L'illustration ci-dessous repr�sente le catalogue du disque de la <a href="1.php">page 1</a>. Un endroit du disque (repr�sent� ici sur le bord) est r�serv� pour un catalogue des fichiers enregistr�s.</p>

<div class="attention encadre">Dans ce catalogue, le syst�me d'exploitation indique le num�ro de la piste et du secteur o� se trouve chaque fichier.</div>

<div style="text-align: center;">
	<img src="images/fat.gif" alt="FAT" height="321" width="550"> 
</div>
<div class="attention encadre">
	Ce catalogue est appel� <strong>FAT</strong>, acronyme de "<strong>F</strong>ile <strong>A</strong>llocation <strong>T</strong>able" ("table d'allocation des fichiers").
</div>

<p>L'utilisateur de l'ordinateur n'a normalement pas � se pr�occuper de la gestion de la FAT: c'est le travail du syst�me d'exploitation.</p>
<p>Pour chaque fichier, les renseignements les plus importants indiqu�s dans la FAT sont:</p>
<ul> 
	<li>le nom du fichier</li> 
	<li>la piste et le secteur o� le fichier commence</li>
</ul>
<p>La FAT contient encore d'autres informations dont nous ne parlerons pas ici.</p>

<p> Pour la question suivante, revois �ventuellement les notions d�velopp�es dans la le�on 6: <a href="../6/5.php" target="_blank">[1]</a> et <a href="../6/8.php" target="_blank">[2]</a>. </p>

<form class="travail"> 
	Sur un clef USB, tu as enregistr� douze documents. Combien y aura-t-il de r�f�rences dans la FAT?<br> 
	<input name="radiobutton" value="0" onclick="alert('Ce n\'est pas possible. Comment d�signer chacun des douze fichiers, dans ce cas?')" type="radio"> Une seule<br> 
	<input name="radiobutton" value="0" onclick="alert('Bien s�r, puisqu\'il faut que chaque fichier soit d�sign�.')" type="radio"> Douze <br> 
	<input name="radiobutton" value="0" onclick="alert('Non! Il n\'y a pas de raison que le syst�me d\'exploitation\nutilise plus de ressources que n�cessaire.\nPour douze fichiers, il y aura donc combien de r�f�rences?')" type="radio"> Autant qu'on veut 
</form>

<div class="info">
	<p>Sur une clef USB, la FAT n'est pas forc�ment mise � jour � chaque modification d'un fichier. Cette mise � jour peut �tre report�e, pour gagner du temps, jusqu'au moment o� l'on �teint l'ordinateur ou au moment o� la clef est "�ject�e" volontairement.</p>
	<p>Il ne faut jamais retirer une clef USB sans prendre la pr�caution de l'�jecter par la commande appropri�e du syst�me d'exploitation.</p>
</div>

<form class="travail"> 
	Apr�s y avoir copi� des fichiers, on retire une clef USB brutalement d'un ordinateur. La FAT n'a pas �t� mise � jour. Que risque-t-on?<br> 
	<input name="radiobutton" value="radiobutton" onclick="alert('Effectivement! Le syst�me d\'exploitation ne peut plus savoir\no� se trouvent les fichiers.\nIls sont perdus.')" type="radio">Certains fichiers ne seront plus lisibles<br>
	<input name="radiobutton" value="radiobutton" onclick="alert('Non! Comment le syst�me d\'exploitation pourrait-il encore retrouver l\'emplacement des fichiers sur la clef USB?')" type="radio">On peut toujours l'utiliser normalement 
</form>
<p>Quand tu as r�pondu aux questions et bien compris les r�ponses, passe � la page suivante.</p>
<?php 
	include ("../../suivant.inc.php");?>
</div>
<?php include ("../../pied.inc.php");?>
</div>
</body>
</html>
