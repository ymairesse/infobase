<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>L'unité centrale et les périphériques</title>
</head>
<body>
  <div id="conteneur">
    <?php 
		require ("./top.inc.php");
		require ("../../dewplayer.inc.php");
	?>
   <div id="texte">
		<fieldset class="info">
		  <legend>Notion de périphérique</legend>
		<p><?php dewplay("4.mp3");?> Dans la station de jeux, tous les accessoires sont disposés "autour" de la console. C'est la même disposition que celle d'un boulevard périphérique autour d'une ville.</p>
		<p>Examine quelques instants le schéma ci-desous. Remarque les flèches et leur sens. As-tu une idée pour justifier leur orientation?</p>
		</fieldset>
      <fieldset class="travail">
		<legend>Repérer les différenes zones</legend>
        <ul>
          <li>Déplace la souris sur la zone des périphériques sur le schéma ci-dessous. Attends quelques instants l'apparition de la confirmation que tu as bien désigné la zone des périphériques.</li>
        </ul>
        <p class="supplement" style="text-align: center;"><img src="images/gamestation2.gif" name="Hifi" usemap="#hifimap" alt=
        "Chaîne Hi-fi" id="Hifi" border="0" height="411" width="411"></p>
      </fieldset>
		
      <p class="questions">Ca me rappelle la fois où j'ai passé deux heures dans un embouteillage sur le périphérique de Paris.</p>
      <p class="reponses">C'est exactement cela&nbsp;: le périphérique (parisien) fait le tour de la ville.</p>
<form action="" class="qcu">
 Dans un système informatique, un périphérique est :<br />
<input class="qcm" name="qcm1" type="radio">
Un appareil qu'il faut disposer sur un boulevard.<br />
<p class="faux">Non.
Aucun rapport avec les boulevards périphériques</p>
<input class="qcm" name="qcm1" type="radio">
Un des appareils reliés à l'unité centrale.<br />
<p class="vrai">Réponse correcte</p>
<input class="qcm" name="qcm1" type="radio">
 L'unité centrale de l'ordinateur.<br />
<p class="faux">Réponse fausse.
L'ordinateur est constitué de l'unité centrale ET de ses périphériques.</p>
<input class="qcm" name="qcm1" type="radio"> Une manette vibrante. 
<br />
<p class="faux">Non.<br>
Une manette vibrante est un périphérique, mais tous les périphériques ne sont pas des manettes vibrantes.<br>
L'unité centrale de jeux compte d'ailleurs d'autres périphériques que les manettes vibrantes.</p>
</form>
      <p>Quand tu as bien visualisé la notion de périphérique, passe aux informations de la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
    </div>
    <?php include ("../../pied.inc.php"); ?>
	<script type="text/javascript">
	$(document).ready(function(){

	$(".qcm").click(function(){
	$(this).next().next().fadeIn(1000);
	})
	$(".qcm").attr("checked",false);
	
})
  </script>

  </div>
  <map name="HifiMap" id="HifiMap">
      <area shape="circle" coords="198,201,71" href="#" alt="Centre nerveux" title="Centre nerveux">
      <area shape="circle" coords="206,207,204" href="#" alt="Zone périphérique" title="Zone périphérique">
    </map>
</body>
</html>
