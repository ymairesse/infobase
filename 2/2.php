<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <style type="text/css">
  .click {cursor:pointer;}
  #faux {background-color: red; display: none;}
  #vrai {background-color: green: display: none;}
  </style>
  <script type="text/javascript" src="../../js/jquery.js"></script>

  <title> Voyage au cœur de l'unité centrale </title>
</head>

<body>
<div id="conteneur">
    <?php require ("./top.inc.php"); ?>
    <div id="texte">
        <fieldset class="info">
            <legend>Où se cache le processeur</legend>
            <p><img src="1/ramEtProco2.jpg" alt="ramEtProco" width="450" class="imagedroite">Sur la photo ci-contre, on devnie le processeur en 1. Il est solidement fixé sur la carte mère et surmonté du radiateur et du ventilateur.</p>
            <p>La carte mère est parfaitement visible. On voit différentes pièces électroniques qui y sont connectées.</p>
        
            <p>Le processeur est le <strong>cerveau de l'ordinateur</strong>. C'est un composant extrêmement miniaturisé mais extrêmement puissant.</p>
            <p>Vu sa toute petite taille, on l'appelle encore <strong>microprocesseur</strong>.</p>
        </fieldset>
        
        
        
        <fieldset class="travail"><form action="javascript:void(0)">
Quelle est la nature de l'&eacute;l&eacute;ment num&eacute;ro 4 de la photo?<br>
<input class="qcm" name="qcm1" type="radio">Le disque dur<br><p class="faux">R&eacute;ponse fausse</p>
<input class="qcm" name="qcm1" type="radio">Le processeur<br><p class="faux">R&eacute;ponse fausse</p>
<input class="qcm" name="qcm1" type="radio">Le radiateur<br><p class="faux">R&eacute;ponse fausse</p>
<input class="qcm" name="qcm1" type="radio">La m&eacute;moire centrale<br><p class="vrai">Exact</p>
</form>
</fieldset>
        
<fieldset class="travail"><form action="javascript:void(0)">
Toujours sur la photo ci-dessus que seraient les &eacute;l&eacute;ments 1 et 2?<br>
<input class="qcm" name="qcm1" type="radio">1. le radiateur et 2. le ventilateur<br><p class="vrai">R&eacute;ponse correcte. Le radiateur plac&eacute; sur le processeur en extrait la chaleur.</p>
<input class="qcm" name="qcm1" type="radio">La carte m&egrave;re<br><p class="faux">La carte m&egrave;re est visible (en rouge), mais ce n'est pas elle qui est num&eacute;rot&eacute;e 1,2.</p>
<input class="qcm" name="qcm1" type="radio">1. le ventilateur et 2. le radiateur<br><p class="faux">R&eacute;ponse inexacte</p>
<input class="qcm" name="qcm1" type="radio">La m&eacute;moire centrale<br><p class="faux">Faux</p>
</form>
</fieldset>

<fieldset class="travail"><form action="javascript:void(0)">
Dans l'unit&eacute; centrale, quel est le r&ocirc;le du radiateur?<br>
<input class="qcm" name="qcm1" type="radio">Refroidir le processeur<br><p class="vrai">R&eacute;ponse correcte</p>
<input class="qcm" name="qcm1" type="radio">R&eacute;chauffer le processeur<br><p class="faux">R&eacute;ponse fausse! Le processeur est lui-m&ecirc;me tr&egrave;s chaud.</p>
<input class="qcm" name="qcm1" type="radio">Refroidir l'alimentation &eacute;lectrique<br><p class="faux">R&eacute;ponse fausse. L'alimentation &eacute;lectrique dispose g&eacute;n&eacute;ralement de son ventilateur, pour se refroidir.</p>
<input class="qcm" name="qcm1" type="radio">Donner de l'air aux composants de l'unit&eacute; centrale<br><p class="faux">R&eacute;ponse fausse</p>
</form>
</fieldset>
        
<fieldset class="travail"><form action="javascript:void(0)">
Dans l'unit&eacute; centrale, le disque dur est<br>
<input class="qcm" name="qcm1" type="radio">D&eacute;pos&eacute; sur la carte m&egrave;re<br><p class="faux">R&eacute;ponse fausse</p>
<input class="qcm" name="qcm1" type="radio">Reli&eacute; directement &agrave; la m&eacute;moire centrale<br><p class="faux">R&eacute;ponse fausse. Le disque dur n'est pas connect&eacute; directement &agrave; la m&eacute;moire centrale.</p>
<input class="qcm" name="qcm1" type="radio">fix&eacute; s&eacute;par&eacute;ment dans le bo&icirc;tier<br><p class="vrai">R&eacute;ponse correcte</p>
<input class="qcm" name="qcm1" type="radio">dispos&eacute; hors de l'unit&eacute; centrale<br><p class="faux">R&eacute;ponse incorrecte. On peut ajouter un disque dur externe, mais il y a toujours un disque dur dans l'unit&eacute; centrale.</p>
</form>
</fieldset>      
        
<p>Quand tu as répondu à toutes les questions et bien compris les réponses, passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>        
    </div>
<?php include ("../../pied.inc.php"); ?> 
</div>
<script type="text/javascript">
	$(document).ready(function(){

	$(".qcm").click(function(){
	$(this).next().next().fadeIn(1000);
	})
	$(".qcm").attr("checked",false);
	
  })
</script>
</body>
</html>
