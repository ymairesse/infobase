<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script type="text/javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function (){
        $(".qcm").click(function(){
            $(this).next().next().show(300);
        })
    })
  </script>
  <title>Voyage au cœur de l'unité centrale</title>
</head>
<body>
  <div id="conteneur">
    <?php 
	require ("./top.inc.php");
	require ("../../dewplayer.inc.php");
	?>
    <div id="texte">
      <h2>La mémoire centrale stocke du binaire</h2>
      <div class="info">
        <p><?php dewplay ("6.mp3"); ?>La mémoire centrale de l'ordinateur est conçue pour y déposer des informations que le processeur ne peut pas retenir.</p>
        <p>La mémoire centrale est organisée en cases dans lesquelles on peut déposer des informations. Les informations sont très simples : il ne peut s'agir que de signes 0 et 1. Chaque case élémentaire capable de mémoriser 0 ou 1 est appelée <strong>un bit</strong> (abréviation de <strong>binary digit</strong>).</p>
        <p>Le cadre ci-dessous représente une petite partie de la mémoire centrale d'un ordinateur à un moment donné.</p>
       
      </div>
      <form action="javascript:void(0)" class="travail">
        <p>Un bit de la mémoire centrale correspond à:</p>
        <input class="qcm" type="radio">La valeur 0 ou la valeur 1<br>
        <p class="vrai">Exact.<br />Un bit d'information correspond à une valeur 0 ou une valeur 1.</p>
        <input class="qcm" type="radio"> Un ensemble de 0 et de 1 (éventuellement plusieurs dizaines)<br />
        <p class="faux">Non.<br />Un bit ne peut recevoir qu'une seule valeur.</p>
        <input class="qcm" type="radio">Une valeur comprise entre 0 et 9<br />
        <p class="faux">Non.<br />La mémoire centrale ne peut retenir que des 0 et de 1.</p>
      </form>
	   <div class="encadre" style="text-align: center;">
          <code>1 0 1 0 1 0 1 0 0 1 0 0 1 1 1 1 1 0 0 0 1 0 0 0 1 0 1 1 0 0 0 1<br>
          0 0 1 0 0 0 0 0 0 1 1 1 0 0 1 1 1 0 0 1 1 0 1 1 1 0 0 0 0 1 1 0<br>
          1 1 1 0 1 0 1 1 0 1 1 0 1 0 0 1 0 1 1 0 1 1 1 0 1 1 1 0 1 1 0 0<br>
          1 0 1 1 1 0 1 1 1 0 0 1 0 0 1 1 0 1 0 1 0 1 0 0 0 1 0 1 1 1 0 1<br>
          1 0 0 1 1 0 1 1 1 1 1 1 0 1 1 1 1 0 0 1 0 0 0 0 0 1 1 1 1 1 0 0<br>
          1 0 1 1 0 0 0 1 0 1 0 0 1 1 1 1 1 1 1 1 0 0 1 0 1 0 1 1 1 1 1 0<br>
          1 0 0 1 1 1 1 0 0 1 1 0 1 1 0 0 1 1 0 0 1 1 0 1 1 0 0 0 0 0 0 1<br>
          1 0 1 1 0 1 0 0 0 0 0 1 1 0 1 0 1 1 0 1 0 1 0 0 1 0 1 0 0 0 0 1<br>
          0 0 1 1 0 1 1 1 1 1 1 1 0 1 0 0 1 0 1 0 0 1 0 0 0 1 0 0 1 1 1 1</code>
        </div>
	   
      <form class="travail" action="javascript:void(0)">
        Combien de bits sont présentés sur l'illustration ci-dessus?<br>
        <input class="qcm" type="radio">Un seul bit<br />
        <p class="faux">Non.<br />L'illustration présente plus qu'un bit.</p>
        <input class="qcm" type="radio">Deux bits<br />
        <p class="faux">Faux.<br />L'illustration présente des bits qui peuvent chacun avoir la valeur 0 ou 1.<br />Peux-tu dire combien?</p>
        <input class="qcm" type="radio">Plus de 280 bits<br />
        <p class="vrai">Exact.<br />Si l'on compte bien, il y a 9 rangées de 32 bits. <br />Soit 288 bits.</p>
        <input class="qcm" type="radio">On ne peut pas le dire<br />
        <p class="faux">Réponse fausse.<br />On peut le dire.</p> 
      </form>
	        <form action="javascript:void(0)" class="travail">
        <p>Un bit de la mémoire centrale correspond à:</p>
        <input class="qcm" type="radio">La valeur 0 ou la valeur 1<br>
        <p class="vrai">Exact.<br />Un bit d'information correspond à une valeur 0 ou une valeur 1.</p>
        <input class="qcm" type="radio"> Un ensemble de 0 et de 1 (éventuellement plusieurs dizaines)<br />
        <p class="faux">Non.<br />Un bit ne peut recevoir qu'une seule valeur.</p>
        <input class="qcm" type="radio">Une valeur comprise entre 0 et 9<br />
        <p class="faux">Non.<br />La mémoire centrale ne peut retenir que des 0 et de 1.</p>
      </form>
	   <div class="encadre" style="text-align: center;">
          <code>1 0 1 0 1 0 1 0 0 1 0 0 1 1 1 1 1 0 0 0 1 0 0 0 1 0 1 1 0 0 0 1<br>
          0 0 1 0 0 0 0 0 0 1 1 1 0 0 1 1 1 0 0 1 1 0 1 1 1 0 0 0 0 1 1 0<br>
          1 1 1 0 1 0 1 1 0 1 1 0 1 0 0 1 0 1 1 0 1 1 1 0 1 1 1 0 1 1 0 0<br>
          1 0 1 1 1 0 1 1 1 0 0 1 0 0 1 1 0 1 0 1 0 1 0 0 0 1 0 1 1 1 0 1<br>
          1 0 0 1 1 0 1 1 1 1 1 1 0 1 1 1 1 0 0 1 0 0 0 0 0 1 1 1 1 1 0 0<br>
          1 0 1 1 0 0 0 1 0 1 0 0 1 1 1 1 1 1 1 1 0 0 1 0 1 0 1 1 1 1 1 0<br>
          1 0 0 1 1 1 1 0 0 1 1 0 1 1 0 0 1 1 0 0 1 1 0 1 1 0 0 0 0 0 0 1<br>
          1 0 1 1 0 1 0 0 0 0 0 1 1 0 1 0 1 1 0 1 0 1 0 0 1 0 1 0 0 0 0 1<br>
          0 0 1 1 0 1 1 1 1 1 1 1 0 1 0 0 1 0 1 0 0 1 0 0 0 1 0 0 1 1 1 1</code>
        </div>
	   
      <form class="travail" action="javascript:void(0)">
        Combien de bits sont présentés sur l'illustration ci-dessus?<br>
        <input class="qcm" type="radio">Un seul bit<br />
        <p class="faux">Non.<br />L'illustration présente plus qu'un bit.</p>
        <input class="qcm" type="radio">Deux bits<br />
        <p class="faux">Faux.<br />L'illustration présente des bits qui peuvent chacun avoir la valeur 0 ou 1.<br />Peux-tu dire combien?</p>
        <input class="qcm" type="radio">Plus de 280 bits<br />
        <p class="vrai">Exact.<br />Si l'on compte bien, il y a 9 rangées de 32 bits. <br />Soit 288 bits.</p>
        <input class="qcm" type="radio">On ne peut pas le dire<br />
        <p class="faux">Réponse fausse.<br />On peut le dire.</p> 
      </form>
	  
      <p>Quand tu as répondu aux questions et bien compris les réponses, passe à la page suivante du chapitre.<?php include ("../../suivant.inc.php"); ?></p>
    </div>
	<?php include ("../../pied.inc.php");?>
  </div>
</body>
</html>
