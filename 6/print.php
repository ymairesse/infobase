<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta name="generator" content="HTML Tidy for Linux/x86 (vers 6 November 2007), see www.w3.org">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script language="JavaScript" type="text/javascript">
function WindowPrint () {
  window.print ();
  alert('Vérifie que la page est correctement imprimée avant de poursuivre la leçon.');
  history.go(-1);
  }
  </script>

  <title>Les programmes d'ordinateur</title>
</head>
<body>
<?php
foreach ($_POST as $key=>$value)
	$$key = nl2br(stripslashes(htmlentities($value)));
?>
    <div id="texte">
      <h2>Notion de programme</h2>
	  <?php 
	  echo "<p>$recette</p>\n";
      echo "<p>$courses</p>\n";
	  ?>
      <p><label>Nom&nbsp;:</label>
	  <?php echo $nom; ?>&nbsp;</p>
      <p><label>Prénom&nbsp;:</label>
	  <?php echo $prenom; ?>&nbsp;</p>
      <p><label>Classe&nbsp;:</label>
	  <?php echo $classe; ?>&nbsp;</p>
      <div style="text-align: center;" class="invisible">
	  <img onclick="WindowPrint()" style="width: 32px; height: 32px; cursor: pointer;" alt="Imprimer" src="../../images/printr3c.gif">
	  </div>
    </div>
</body>
</html>
