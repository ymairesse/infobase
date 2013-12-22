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
      <h2>Le pav� num�rique&nbsp;: synth�se</h2>
      <form class="travail" action="">
        Pour d�sactiver le pav� num�rique, je dois frapper la touche<br>
        <input name="bt" onclick="alert('R�ponse fausse.\nLa touche Home provoque un d�placement du curseur de texte')" type="radio">Home<br>
        <input name="bt" onclick="alert('R�ponse exacte.\nSi le pav� num�rique est actif, la touche Num Lock le d�sactive.')" type="radio">Num Lock<br>
        <input name="bt" onclick="alert('R�ponse fausse.\nCette touche sert � bloquer le clavier en majuscules.')" type="radio">Caps Lock<br>
        <input name="bt" onclick="alert('R�ponse fausse.\nCette touche n\'est d\'ailleurs pas �voqu�e dans cette le�on.')" type="radio">Scroll Lock
      </form>
      <div class="info">
      <p>En-dessous de chacune des questions suivantes, indique ta r�ponse personnelle. Si tu fais une faute, efface ton erreur et corrige la faute.<br>
      Le nombre de lignes dans chaque cadre est suffisant pour r�pondre.</p>
      <p><strong>Attention&nbsp;! Si tu quittes cette page, tout ce que tu aurais d�j� �crit pourait dispara�tre&nbsp;!</strong><br>
      Pour consulter la page pr�c�dente, clique sur le bouton ci-dessous. Ensuite, pour revenir � cette page, ferme la fen�tre que tu auras consult�e.</p>
      <p style="text-align:center"><input value="Consulter les autres pages" name="B1" onclick="open('index.php', 'newwindow', 'Height=300,Width=640, location=no, scrollbars=yes, directories=yes')" type="button"></p>
      </div>
      <div class="travail">
      <form action="print3.php" method="post" name="form1">
        <ol>
        <li><strong>Quand le pav� num�rique est DESACTIVE:</strong> Quel est le r�le de la touche qui porte le chiffre 7?<br>
        <textarea name="r1" cols="60" rows="2" id="r1">
</textarea></li>
        <li>
        Quel est le r�le de la touche qui porte le chiffre 9?<br>
        <textarea name="r2" cols="60" rows="2" id="r2">
</textarea>
        </li>
        <li>Quel est le r�le de la touche qui porte le chiffre 3?<br>
        <textarea name="r3" cols="60" rows="2" id="r3">
</textarea>
        </li>
        <li>Quel est le r�le de la touche qui porte le chiffre 1?<br>
        <textarea name="r4" cols="60" rows="2" id="r4">
</textarea>
        </li>
        <li>Quel est le r�le des touches qui portent des fl�ches?<br>
        <textarea name="r5" cols="60" rows="2" id="r5">
</textarea></li>
        <p class="supplement">Quand tu as fini, �cris ton nom et ton pr�nom dans le cadre ci-dessous. Ensuite, envoie cette page � l'impression.</p>
        <label>Nom&nbsp;:</label> <input name="nom" id="nom" size="30" type="text"><br>
        <label>Pr�nom&nbsp;:</label> <input name="prenom" id="prenom" size="30" type="text"><br>
        <label>Classe&nbsp;:</label> <input name="classe" id="classe" size="4" maxlength="4" type="text"><br>
        <p style="text-align:center"><input name="Submit" value="Pr�parer l'impression" type="submit"></p>
      </form>
      </div>
      <p>Quand tu as imprim� le document et que tu l'as remis au professeur, passe � la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div>
    <?php include ("../../pied.inc.php");?>
  </div>
</body>
</html>
