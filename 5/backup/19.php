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
    <?php include ("./top.inc.php");
    ?>
    <div id="texte">
      <h2>Les touches Esc, Alt et CTRL: synthèse</h2>
      <div class="info">
      <p>En-dessous de chacune des questions suivantes, indique ta réponse personnelle. Si tu fais une faute, efface ton erreur et corrige la faute.</p>
      <p>Le nombre de lignes dans chaque cadre est suffisant pour répondre.</p>
      <p><strong>Attention! Si tu quittes cette page, tout ce que tu aurais déjà écrit pourait disparaître!</strong><br>
      Pour consulter la page précédente, clique sur le bouton ci-dessous. Ensuite, pour revenir à cette page, ferme la fenêtre que tu auras consultée.</p>
      <form name="form0" action="">
        <div style="text-align:center">
          <input value="Consulter les autres pages" name="B1" onclick="open('index.php', 'newwindow', 'Height=300,Width=640, location=no, scrollbars=yes, directories=yes')" type="button">
        </div>
      </form>
      </div>
      <div class="travail">
      <form name="form1" method="post" action="print4.php">
        1. On dit que les touches <span class="clavier">Alt</span> et <span class="clavier">Control</span> s'utilisent comme des touches de majuscules. Qu'est ce que cela veut dire?<br>
        <textarea name="r1" cols="60" rows="2" id="r1">
</textarea>
        <hr>
        2. Est-ce que la touche <span class="clavier">Esc</span> s'utilise comme une touche de majuscules&nbsp;? Pourquoi&nbsp;?<br>
        <textarea name="r2" cols="60" rows="2" id="r2">
</textarea>
        <p>Quand tu as fini, écris ton nom et ton prénom dans le cadre ci-dessous. Ensuite, envoie cette page à l'impression.</p>
        <label>Nom&nbsp;:</label><input name="nom" id="nom" size="30" type="text"><br>
        <label>Prénom&nbsp;:</label><input name="prenom" id="prenom" size="30" type="text"><br>
        <label>Nom&nbsp;:</label><input name="classe" id="classe" size="4" maxlength="4" type="text"><br>
        <p style="text-align:center"><input name="Submit" value="Préparer l'impression" type="submit"></p>
      </form>
      </div>
      <p>Quand tu as imprimé le document et que tu l'a remis à ton professeur, passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div>
    <?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
