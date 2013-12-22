<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta id="_moz_prolog" content="">
  <meta name="generator"
 content="HTML Tidy for Windows (vers 1st July 2004), see www.w3.org">
  <title>Les contr&ocirc;les des bo&icirc;tes de dialogue</title>
  <meta http-equiv="Content-Type"
 content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css"
 media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css"
 media="print">
  <script language="JavaScript" type="text/javascript">
function WindowPrint () {
window.print ();
alert('Vérifie que la page est correctement imprimée avant de poursuivre la leçon.');
history.go(-1);
}
  </script>
</head>
<body>
<div id="conteneur"><?php include ("./top.inc.php"); ?><?php $S1 = $_POST['S1'];
          $S2 = $_POST['S2'];
          $S3 = $_POST['S3'];
          $S4 = $_POST['S4'];
          $S5 = $_POST['S5'];
          $S6 = $_POST['S6'];
          $S7 = $_POST['S7'];
          $nom = $_POST['nom'];
          $prenom = $_POST['prenom'];
          $classe = $_POST['classe'];
          ?>
<div id="texte">
<h2> Synth&egrave;se </h2>
<div class="travail">
<p> Comment peut-on reconna&icirc;tre un bouton de commande par
d&eacute;faut dans une bo&icirc;te de dialogue? </p>
<?php echo stripslashes(nl2br($S1)) ;?> </div>
<div class="travail">
<p> Comment actionne-t-on un bouton par d&eacute;faut sans toucher
&agrave; la souris? </p>
<?php echo stripslashes(nl2br($S2)) ;?> </div>
<div class="travail">
<p> Comment se pr&eacute;sentent un bouton d'option et une case
&agrave; cocher? </p>
<?php echo stripslashes(nl2br($S3)); ?> </div>
<div class="travail">
<p> Quelle diff&eacute;rence essentielle dans leur comportement existe
entre une case &agrave; cocher et un bouton d'option? </p>
<?php echo stripslashes(nl2br($S4)); ?> </div>
<div class="travail">
<p> Quelles sont les diff&eacute;rentes mani&egrave;res d'utiliser les
barres de d&eacute;filement? </p>
<?php echo stripslashes(nl2br($S5)); ?> </div>
<div class="travail">
<p> Comment fait-on pour se d&eacute;placer d'un contr&ocirc;le
&agrave; un autre sans utiliser la souris? </p>
<?php echo stripslashes(nl2br($S6)); ?> </div>
<div class="travail"> Dans le menu "Fichier", s&eacute;lectionne la
commande "Imprimer". Observe la bo&icirc;te de dialogue qui
appara&icirc;t et indique les noms de 4 contr&ocirc;les que l'on peut y
voir.<br>
<?php echo stripslashes(nl2br($S7)); ?> </div>
<p> Indique tes r&eacute;f&eacute;rences ci-dessous puis envoie
&agrave; l'impression. </p>
<span class="label">Nom:&nbsp;</span><?php echo stripslashes($nom); ?><br>
<span class="label">Pr&eacute;nom:&nbsp;</span><?php echo stripslashes($prenom); ?><br>
<span class="label">Classe:&nbsp;</span><?php echo stripslashes($classe); ?><br>
<div class="invisible" style="text-align: center;"> <img
 style="cursor: pointer;" src="../../images/printr3c.gif"
 alt="Cliquer pour imprimer" onclick="WindowPrint()" height="32"
 width="32"> </div>
</div>
<?php include ("../../pied.inc.php"); ?> </div>
</body>
</html>
