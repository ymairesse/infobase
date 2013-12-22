<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta name="generator" content="HTML Tidy for Linux/x86 (vers 6 November 2007), see www.w3.org">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Introduction à l'Internet</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>L'URL d'une page Web</h2>
      <form class="travail" action="">
        L'adresse URL d'un document est<br>
        <input name="radiobutton" onclick="alert('Correct, puisqu\'au nom de l\'ordinateur, on ajoute\nle chemin pour trouver le fichier,\n ainsi que le non du document.')" type="radio"> plus détaillée qu'une adresse DNS<br>
        <input name="radiobutton" onclick="alert('Non! Réfléchis. L\'adresse DNS de ton ordinateur suffit-elle\npour indiquer le nom d\'un document qui y est enregistré?\nIl faut donner plus de détails.')" type="radio"> moins détaillée qu'une adresse DNS<br>
        <input name="radiobutton" value="radiobutton" onclick="alert('Faux.\nL\'adresse DNS n\'est qu\'une partie de l\'URL.\nL\'URL contient plus d\'informations que l\'adresse DNS.')" type="radio"> son adresse DNS
      </form>
      <form class="travail" action="">
        Une adresse URL est formée de<br>
        <input name="radiobutton" onclick="alert('Cette réponse n\'est pas correcte.')" type="radio">une partie<br>
        <input name="radiobutton" onclick="alert('Cette réponse n\'est pas correcte.')" type="radio">deux parties<br>
        <input name="radiobutton" onclick="alert('Tout à fait correct.')" type="radio"> trois parties<br>
        <input name="radiobutton" onclick="alert('Non.\nNe confonds-tu pas avec une adresse IP?')" type="radio"> quatre parties
      </form>
      <p>Quand tu as répondu aux questions et bien compris les réponses, passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div><?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
