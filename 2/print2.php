<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script language="JavaScript" type="text/javascript">
function WindowPrint () {
window.print ();
alert('Vérifie que la page est correctement imprimée avant de retourner à la leçon.');
history.go(-1);
}
  </script>
  <title>L'unité centrale de l'ordinateur</title>
</head>
<body>
<div id="conteneur">
<?php
  $imbecile = $_POST['imbecile'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $classe = $_POST['classe'];
?>
<div id="texte">
<h2> Le microprocesseur </h2>
On peut dire que l'ordinateur est un idiot qui va très vite parce que&nbsp;:<br>
<?php echo stripslashes(nl2br($imbecile)); ?><br>
<span class="label">Nom:</span><?php echo stripslashes($nom); ?><br>
<span class="label">Prénom:</span><?php echo stripslashes($prenom); ?><br>
<span class="label">Classe:</span><?php echo stripslashes($classe); ?><br>
<p class="invisible" style="text-align: center;"> <img src="../../images/printr3c.gif" onclick="WindowPrint()" style="cursor: pointer;" title="Cliquer pour imprimer" height="32" width="32"> </p>
</div>

</div>
</body>
</html>
