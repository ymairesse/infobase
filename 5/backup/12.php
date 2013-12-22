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
      <h2>Le pav� num�rique</h2>
	<div class="info">
      <p>Le pav� num�rique est l'ensemble de touches situ� � droite du clavier et qui porte les chiffres et les op�rateurs arithm�tiques.<br>
      On l'appelle "&nbsp;pav�&nbsp;" � cause de sa forme carr�e.</p>
    </div>
	<div class="travail">
        <form action="">
          <ul>
            <li><img src="images/pave.jpg" alt="Pav� num�rique" class="imagedroite" height="192" width="150">Par un clic de souris, am�ne le curseur de texte dans la ligne ci-dessous.</li>
          </ul>
          <div style="text-align: center;">
            <input size="52" style="padding: 5px; background-color: rgb(255, 255, 0); color: rgb(0, 0, 255); font-family: 'Courier New',Courier,mono;" type="text">
          </div>
        </form>
        <ul>
          <li>En utilisant le pav� num�rique et le clavier alphanum�rique, �cris le calcul suivant:<br>
          "&nbsp;2 + 2 = 1 + 3&nbsp;"</li>
        </ul>
      </div>
      <div class="info">
        <p>Le pav� num�rique ne fonctionne que si le t�moin lumineux <strong>&lt;Num Lock&gt;</strong> est allum�.&nbsp;</p>
        <p>Quand le t�moin n'est pas allum�, le pav� num�rique se comporte comme un ensemble de touches de mouvement du curseur (regarde les indications sur les touches).</p>
        <p><img style="width: 32px; height: 32px;" src="images/numlock2.png" alt="Num Lock" class="imagegauche">Pour d�sactiver le pav� num�rique, il faut frapper la touche <span class="clavier">Num Lock</span>.</p>
        <p>Il n'est pas tr�s utile de d�sactiver le pav� num�rique.</p>
      </div>
      <form class="travail" action="">
        De quel groupe fait partie la touche Num Lock?<br>
        <input name="bt" onclick="alert('Non!\nLes touches de fonctions figurent toutes en haut du clavier alphanum�rique.')" type="radio"> Les touches de fonctions<br>
        <input name="bt" onclick="alert('Exact.\nQuelle autre touche fait encore partie de ce groupe?')" type="radio"> Les touches r�manentes<br>
        <input name="bt" onclick="alert('Faux.\nLe pav� num�rique est form� des touches portant des chiffres, � droite du clavier.')" type="radio"> Le pav� num�rique<br>
        <input name="bt" onclick="alert('Faux.\nLes touches de mouvement du curseur sont les touches fl�ch�es et les touches PgUp, PgDn, Home, End')" type="radio"> Les touches de mouvement
      </form>
      <p>Quand tu as fini, passe � la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div><?php include ("../../pied.inc.php");?>
  </div>
</body>
</html>
