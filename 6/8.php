<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Les programmes d'ordinateur</title>
</head>
<body>
  <div id="conteneur">
    <?php
    require ("./top.inc.php");
    require ("../../dewplayer.inc.php");
    ?>
    <div id="texte">
      <h2>Les bugs: histoire de l'informatique</h2>
    <div class="info"><p><?php dewplay("8.mp3"); ?>Un "&nbsp;bug&nbsp;" est une erreur dans le fonctionnement d'un logiciel. Quelle est l'origine de ce terme&nbsp;?</p>
      <p><img src="images/eniac2.jpg" alt="l'ENIAC" class="imagedroite" align="right" height="270" width="404">En 1945, l'ENIAC était le précurseur des ordinateurs modernes. Il occupait une salle entière pour une puissance bien inférieure à un PC actuel.</p>
      <p>En août 1945, alors qu'ils travaillaient sur cet ordinateur, les opérateurs constatèrent des pannes dans l'un des circuits électriques de la machine. Lorsque l'endroit de la panne a été localisé, on en a détecté la cause&nbsp;: un insecte entré par inadvertance dans la machine y causait des court-circuits.</p>
      <p>A l'aide d'une pince, l'un des opérateurs put retirer l'insecte qui fut collé sur une feuille de papier et exposé.</p>
      <p style="text-align: center; clear: both;"><img src="images/bug.jpg" alt="Le premier bug de l'histoire de l'informatique" height="185" width="499"></p>
      <p>La cause de la panne était un vulgaire insecte, une vermine (en anglais, "&nbsp;<strong>a bug</strong>&nbsp;"). Depuis, l'expression est restée: <strong>une cause de panne dans un ordinateur ou dans un programme est un bug</strong>.</p>
      <p>On emploie encore parfois le mot bug francisé&nbsp;: on parle alors d'un <strong>bogue</strong>.</p>
    </div>
      <p>Quand tu as constaté qu'il n'y a pas de bug dans cette page, passe à la page suivante. <?php include ("../../suivant.inc.php");?></p>
    </div><?php include ("../../pied.inc.php");?>
  </div>
</body>
</html>
