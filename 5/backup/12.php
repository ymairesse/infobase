<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Le clavier de l'ordinateur</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php");?>
    <div id="texte">
      <h2>Le pavé numérique</h2>
	<div class="info">
      <p>Le pavé numérique est l'ensemble de touches situé à droite du clavier et qui porte les chiffres et les opérateurs arithmétiques.<br>
      On l'appelle "&nbsp;pavé&nbsp;" à cause de sa forme carrée.</p>
    </div>
	<div class="travail">
        <form action="">
          <ul>
            <li><img src="images/pave.jpg" alt="Pavé numérique" class="imagedroite" height="192" width="150">Par un clic de souris, amène le curseur de texte dans la ligne ci-dessous.</li>
          </ul>
          <div style="text-align: center;">
            <input size="52" style="padding: 5px; background-color: rgb(255, 255, 0); color: rgb(0, 0, 255); font-family: 'Courier New',Courier,mono;" type="text">
          </div>
        </form>
        <ul>
          <li>En utilisant le pavé numérique et le clavier alphanumérique, écris le calcul suivant:<br>
          "&nbsp;2 + 2 = 1 + 3&nbsp;"</li>
        </ul>
      </div>
      <div class="info">
        <p>Le pavé numérique ne fonctionne que si le témoin lumineux <strong>&lt;Num Lock&gt;</strong> est allumé.&nbsp;</p>
        <p>Quand le témoin n'est pas allumé, le pavé numérique se comporte comme un ensemble de touches de mouvement du curseur (regarde les indications sur les touches).</p>
        <p><img style="width: 32px; height: 32px;" src="images/numlock2.png" alt="Num Lock" class="imagegauche">Pour désactiver le pavé numérique, il faut frapper la touche <span class="clavier">Num Lock</span>.</p>
        <p>Il n'est pas très utile de désactiver le pavé numérique.</p>
      </div>
      <form class="travail" action="">
        De quel groupe fait partie la touche Num Lock?<br>
        <input name="bt" onclick="alert('Non!\nLes touches de fonctions figurent toutes en haut du clavier alphanumérique.')" type="radio"> Les touches de fonctions<br>
        <input name="bt" onclick="alert('Exact.\nQuelle autre touche fait encore partie de ce groupe?')" type="radio"> Les touches rémanentes<br>
        <input name="bt" onclick="alert('Faux.\nLe pavé numérique est formé des touches portant des chiffres, à droite du clavier.')" type="radio"> Le pavé numérique<br>
        <input name="bt" onclick="alert('Faux.\nLes touches de mouvement du curseur sont les touches fléchées et les touches PgUp, PgDn, Home, End')" type="radio"> Les touches de mouvement
      </form>
      <p>Quand tu as fini, passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div><?php include ("../../pied.inc.php");?>
  </div>
</body>
</html>
