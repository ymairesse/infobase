<?php //anti-moz ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type"
 content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css"
 media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css"
 media="print">
  <script language="JavaScript" type="text/javascript">
function WindowPrint () {
window.print ();
alert('V�rifie que la page est correctement imprim�e avant de poursuivre la le�on.');
history.go(-1);
}
  </script><?php foreach ($_POST as $key=>$value)
	$$key = stripslashes(htmlentities($value));
?>
  <title>Les outils du syst�me d'exploitation</title>
</head>
<body>
<div id="conteneur">
<div id="texte">
<h2> El�ments des fen�tres</h2>
<?php
if ($OS == "Linux")
	{
	echo "<div style=\"text-align: center;\"><img style=\"width: 559px; height: 84px;\" ";
	echo "alt=\"Fen�tre Linux\" src=\"images/toplinux.png\"></div>\n";
	}
	else
	{
	echo "<div style=\"text-align: center;\"><img style=\"width: 490px; height: 117px;\" ";
	echo "alt=\"Haut de la fen�tre\" src=\"images/top.png\"></div>\n";
	}
?>
<p><?php echo "<strong>$r1</strong>"; ?> Barre
de titre: elle contient le titre de la fen�tre; sa couleur change
selon que la fen�tre est active ou inactive</p>
<p><?php echo "<strong>$r2</strong>"; ?> Case de r�duction: c'est 
un carr� marqu� d'un trait horizontal dans le bas de la case</p>
<p><?php echo "<strong>$r3</strong>"; ?> Case d'agrandissement ou de restauration: elle contient 
un rectangle de taille variable</p>
<p><?php echo "<strong>$r4</strong>"; ?> Case du menu fen�tre: elle contient l'icone du programme en r�duction.</p>
<p><?php echo "<strong>$r5</strong>"; ?> Case de fermeture: c'est un carr� contenant une croix</p>
<label>Nom</label><?php echo "<strong>$nom</strong>"; ?> <br>
<span class="label">Pr�nom</span><?php echo "<strong>$prenom</strong>" ?><br>
<span class="label">Classe</span><?php echo "<strong>$classe</strong>"; ?><br>
<p style="text-align: center;" class="invisible">Cliquer 
<img src="../../images/printr3c.gif" onclick="WindowPrint()" class="pointer"
 title="Cliquer pour imprimer" height="32" width="32"> pour imprimer</p>
</div>
<?php include ("../../pied.inc.php"); ?> </div>
</body>
</html>
