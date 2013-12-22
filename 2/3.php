<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Voyage au cœur de l'unité centrale</title>
</head>
<body>
  <div id="conteneur">
    <?php 
	require ("./top.inc.php"); 
	require ("../../dewplayer.inc.php");
	?>
    <div id="texte">
      <h2>Les capacités (limitées) du microprocesseur</h2>
      <fieldset class="info">
		<legend>L'ordinateur est un idiot qui va très vite</legend>
        <p>Malgré que l'ordinateur semble avoir des capacités extraordinaires, son " cerveau " est cependant capable de peu de choses. Comment cela est-il possible ?</p>
        <p><div class="imagedroite"><?php dewplay("5.mp3"); ?></div>Un processeur n'est capable que de deux choses :</p>
        <ol>
          <li>réaliser des calculs plus ou moins complexes à très grande vitesse ;</li>
          <li>sélectionner et exécuter telle ou telle partie du programme en fonction du résultat d'un test.</li>
        </ol>
        <p>Un processeur n'est donc pas capable de:</p>
        <ul>
          <li>comprendre un texte ;</li>
          <li>décider tout seul d'actions à prendre ;</li>
          <li>...</li>
        </ul>
        <p>Le seul avantage du microprocesseur sur l'être humain est sa vitesse de calcul. Actuellement, les microprocesseurs sont souvent capables d'exécuter plus de 3 milliards d'opérations (simples) par seconde.</p>
        <p>Mais, de toute façon, un microprocesseur (et donc un ordinateur) est incapable d'effectuer le moindre travail si on ne lui fournit pas des listes d'instructions précises dans le seul langage qu'il comprend : le langage machine. De telles listes d'instructions sont appelées des programmes d'ordinateur.</p>

      </fieldset>
	  
      <p>Explique en quelques mots les raisons pour lesquelles on peut dire que l'ordinateur n'est qu'un idiot qui va très vite. Indique ta réponse dans le cadre ci-dessous. Sois attentif à la structure de tes phrases et à l'orthographe.</p>
      <form class="travail" method="post" action="print2.php">
        <p>L'ordinateur est un idiot qui va très vite parce que&nbsp;:</p>
        <p>
        <textarea name="imbecile" cols="60" rows="8"></textarea>
		</p>
		<label>Nom:</label><input name="nom" size="35" type="text"><br>
        <label>Prénom:</label><input name="prenom" id="prenom" size="35" type="text"><br>
        <label>&nbsp;Classe:</label><input name="classe" id="classe" size="5" maxlength="5" type="text"><br>
        <div style="text-align: center;">
          <input name="Submit" value="Préparer l'impression" type="submit">
        </div>
      </form>
      <p>Quand tu as fini, envoie ta réponse à l'impression et remets la page au professeur.</p>
      <p>Quand c'est fait, passe à la page suivante de le leçon.<?php include ("../../suivant.inc.php"); ?></p>
    </div><?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>