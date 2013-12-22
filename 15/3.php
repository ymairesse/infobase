<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
<link rel="stylesheet" type="text/css" href="../../print.css" media="print">
<title>Organisation des fichiers sous Win9x</title>
</head>
<body>
<div id="conteneur">
<?php include ("./top.inc.php"); ?>
<div id="texte">
  <h2>Un catalogue des fichiers permet au syst&egrave;me d'exploitation de s'y retrouver</h2>
  <p><img class="imagedroite" src="images/enregistrer.JPG"  height="113" width="262"></p>
  <div class="info">
    <p>Imagine que tu viennes d'enregistrer quelques dizaines de documents sur le disque dur de ton ordinateur.</p>
    <p>Chacun de ces fichiers doit pouvoir &ecirc;tre rappel&eacute; et remis en m&eacute;moire de l'ordinateur quand on le veut.<img class="imagedroite" src="images/ouvrir.JPG" height="111" width="264"> Il faut donc que le syst&egrave;me d'exploitation dispose d'une m&eacute;thode lui permettant de retrouver les fichiers tr&egrave;s rapidement.</p>
    <p>Il existe une sorte de catalogue des fichiers pr&eacute;sents sur le disque.</p>
    <p> Lorsque l'on veut retrouver un certain fichier, le syst&egrave;me d'exploitation consulte le catalogue et retrouve instantann&eacute;ment les donn&eacute;es sur le disque.</p>
    <p>L'illustration ci-dessous repr&eacute;sente le catalogue du disque de la <a href="1.php">page 1</a>. Un endroit du disque (repr&eacute;sent&eacute; ici sur le bord) est r&eacute;serv&eacute; pour un catalogue des fichiers enregistr&eacute;s.</p>
    <p>Dans ce catalogue, le syst&egrave;me d'exploitation indique le num&eacute;ro de la piste et du secteur o&ugrave; se trouve chaque fichier.</p>
    <p style="text-align:center"><img src="images/fat.gif" height="321" width="550"></p>
    <p>Ce catalogue est appel&eacute; <strong>FAT</strong>, acronyme de "<strong>F</strong>ile <strong>A</strong>llocation <strong>T</strong>able" ("table d'allocation des fichiers"). L'utilisateur de l'ordinateur n'a normalement pas &agrave; se pr&eacute;occuper de la gestion de la FAT: c'est le travail du syst&egrave;me d'exploitation.</p>
  </div>
  <div class="encadre">
    <p>Pour chaque fichier, les renseignements les plus importants indiqu&eacute;s dans la FAT sont:</p>
    <ul>
      <li>le nom du fichier</li>
      <li>la piste et le secteur o&ugrave; le fichier commence</li>
    </ul>
  </div>
  <p class="info">La FAT contient encore d'autres informations dont nous ne parlerons pas ici.</p>
  <form class="travail">
    Le syst&egrave;me d'exploitation de l'ordinateur porte encore un autre nom<br>
    <input name="radiobutton" value="radiobutton" onclick="alert('Tout à fait correct! DOS = Disk Operating System.')" type="radio">
    DOS<br>
    <input name="radiobutton" value="radiobutton" onclick="alert('Le BIOS n\'est pas le système d\'exploitation.\nLe BIOS obéit au système d\'exploitation.')" type="radio">
    BIOS <br>
    <input name="radiobutton" value="radiobutton" onclick="alert('Non! L\'unité centrale exécute les ordres du système d\'exploitation.')" type="radio">
    Unit&eacute; centrale<br>
  </form>
  <p>Pour cette question, revois &eacute;ventuellement les notions d&eacute;velopp&eacute;es au chapitre 6: <a href="../6/5.php" target="_blank">[1]</a> et <a href="../6/8.php" target="_blank">[2]</a>. </p>
  <form class="travail">
    Sur une disquette, tu as enregistr&eacute; douze documents. Combien y aura-t-il de r&eacute;f&eacute;rences dans la FAT? <br>
    <input name="radiobutton" value="radiobutton" onclick="alert('Ce n\'est pas possible. Comment désigner chacun des douze fichiers, dans ce cas?')" type="radio">
    Une seule<br>
    <input name="radiobutton" value="radiobutton" onclick="alert('Bien sûr, puisqu\'il faut que chaque fichier soit désigné.')" type="radio">
    Douze <br>
    <input name="radiobutton" value="radiobutton" onclick="alert('Non! Il n\'y a pas de raison que le système d\'exploitation\nutilise plus de ressources que nécessaire.\nPour douze fichiers, il y aura donc combien de références?')" type="radio">
    Autant qu'on veut<br>
  </form>
  <form class="travail">
    Lors du transport d'une disquette, la "FAT" est endommag&eacute;e par une petite griffe. La "FAT" devient illisible mais le reste de la disquette est intact. Que doit-on faire de cette disquette?<br>
    <input name="radiobutton" value="radiobutton" onclick="alert('Effectivement! Le système d\'exploitation ne peut plus savoir\noù se trouvent les fichiers.\nLa disquette est inutilisable.')" type="radio">
    La mettre &agrave; la poubelle.<br>
    <input name="radiobutton" value="radiobutton" onclick="alert('Non! Comment le système d\'exploitation pourrait-il encore retrouver les informations sur la disquette?')" type="radio">
    On peut l'utiliser normalement
  </form>
  <p>Quand tu as r&eacute;pondu aux questions et bien compris les r&eacute;ponses, passe &agrave; la page suivante.
  <?php include ("../../suivant.inc.php");
?></p>
</div>
<?php include ("../../pied.inc.php"); ?>
</div>
</body>
</html>
