<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>L'unité centrale et les périphériques</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php");
    require ("../../dewplayer.inc.php");
    ?>
    <div id="texte">
      
      <fieldset class="info">
        <legend>Les périphériques informatiques</legend>
        <p><?php dewplay("5.mp3");?> Dans un système informatique, les périphériques sont tous les appareils qui sont reliés à l'unité centrale. Ils peuvent lui fournir des informations ou en recevoir.</p>
      <p>Il existe trois grandes sortes de périphériques :</p>
      <ol>
        <li><strong>les périphériques d'entrée</strong> : ils permettent à l'utilisateur de fournir des informations à l'unité centrale ;</li>
        <li><strong>les périphériques de sortie</strong> : ils permettent à l'utilisateur de recevoir des informations venant de l'unité centrale ;</li>
        <li>de plus, certains périphériques sont capables de recevoir des informations venant de l'unité centrale mais aussi de lui envoyer des informations ; on parle alors de <strong>périphériques d'entrée/sortie</strong>.</li>
      </ol>
      </fieldset>
<form action="" class="qcu">
Lorsqu'une information provenant de l'unité centrale est envoyée vers un périphérique, elle arrive à :<br />
<input class="qcm" name="qcm1" type="radio">
 un périphérique d'entrée<br />
<p class="faux">C'est faux, malheureusement.
L'information quitte l'unité centrale; il s'agit donc d'un périphérique de sortie.</p>
<input class="qcm" name="qcm1" type="radio">
 un périphérique de sortie <br />
<p class="vrai">Tu as tout à fait raison.
L'information quitte l'unité centrale et rejoint un périphérique de sortie.</p>
</form>

<form action="" class="qcu">
Lorsqu'une information venant du " monde extérieur " est transmise vers l'unité centrale de l'ordinateur, elle est captée par :<br />
<input class="qcm" name="qcm1" type="radio">
 un périphérique d'entrée<br />
<p class="vrai">Réponse correcte.
Tout ce qui entre dans l'unité centrale passe par une unité d'entrée.</p>
<input class="qcm" name="qcm1" type="radio">
 un périphérique de sortie <br />
<p class="faux">Malheureusement, ce n'est pas exact.
Un périphérique de sortie fait... sortir les informations
vers le monde extérieur.</p>
</form>

      <p>Quand tu as répondu correctement aux questions et bien compris les réponses, passe à l'exercice de la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div><?php include ("../../pied.inc.php"); ?>
    	<script type="text/javascript">
	$(document).ready(function(){

	$(".qcm").click(function(){
	$(this).next().next().fadeIn(1000);
	})
	$(".qcm").attr("checked",false);
	
})
  </script>
  </div>
</body>
</html>
