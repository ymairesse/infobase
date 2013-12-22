<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type"
 content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css"  media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css"  media="print">
  <script language="JavaScript">
function WindowPrint () {
window.print ();
alert('Vérifie que la page est correctement imprimée avant de poursuivre la leçon.');
history.go(-1);
}</script>
  <title>Les outils du système d'exploitation</title>
</head>
<body>
<?php foreach ($_POST as $key=>$value)
	$$key = stripslashes($value);
?>
<div id="conteneur">
<div id="texte">
<h2>Le système d'exploitation: synthèse</h2>
<p>Dans un ordinateur, on trouve deux programmes de base qui sont <?php echo "<strong>$r1</strong>"; ?> qui peut être comparé à <?php echo "<strong>$r2</strong>"; ?> et <?php echo "<strong>$r3</strong>"; ?> qui peut être comparé à <?php echo "<strong>$r4</strong>"; ?> .</p>
<p>En fait, le rôle du <?php echo "<strong>$r5</strong>"; ?> est d'organiser le travail de l'ordinateur.</p>
<p>Il s'occupe, entre autres, d'organiser</p>
<p><?php echo "<strong>$r6</strong>"; ?> et d'organiser </p>
<p><?php echo "<strong>$r7</strong>"; ?> </p>
<p>Le système d'exploitation d'un ordinateur est encore appelé <strong>OS</strong> (Operating System).</p>
<br>
<p><label>Nom</label><?php echo "<strong>$nom</strong>"; ?>
<br>
<label>Prénom</label><?php echo "<strong>$prenom</strong>"; ?>
<br>
<label>Classe</label><?php echo "<strong>$classe</strong>"; ?>
</p>
<p class="invisible" style="text-align: center;">Cliquer <img style="text-align: center;" src="../../images/printr3c.gif" onclick="WindowPrint()"
 class="pointer" title="Cliquer pour imprimer" height="32" width="32"> pour imprimer</p>
</div>
<?php include ("../../pied.inc.php"); ?>
</div>
</body>
</html>
