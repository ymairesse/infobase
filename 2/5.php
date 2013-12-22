<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title> Voyage au cœur de l'unité centrale </title>
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen,print">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  
  <script type="text/javascript" src="../../js/jquery.js"></script>
  
</head>
<body>
	<div id="conteneur">
		<?php require ("./top.inc.php");  ?>
  <div id="texte">
		<fieldset class="info">
	  <legend>Deuxième salve de questions</legend>
	  <p>Réponds aux questions ci-dessous. Retourne écouter et voir la séquence correspondante ci-dessus quand c'est nécessaire.</p>
	</fieldset>	
	<fieldset class="qcu">
	 <form action="">
        Une "case" de la mémoire d'un ordinateur contient une certaine valeur. J'y dépose une autre valeur. Que devient l'ancienne valeur?<br>
        <input class="qcm" type="radio" name="qcm4">Elle reste dans cette case et est retenue aussi bien que la nouvelle valeur.<br />
        <p class="faux">Réponse fausse.<br />Une &quot;case&quot; de la mémoire ne peut contenir qu'une seule valeur à la fois.<br>Pour quelle raison liée à l'électricité?</p>
        <input class="qcm" type="radio" name="qcm4">L'ancienne valeur est définitivement perdue.<br />
        <p class="vrai">Réponse correcte.<br />La nouvelle valeur &quot;écrase&quot; l'ancienne valeur. Certains circuits qui conduisaient le courant ne le conduisent plus et inversement.</p>
        <input class="qcm" type="radio" name="qcm4">L'ancienne valeur peut être rappelée quand on le veut.<br />
        <p class="faux">Réponse fausse.<br />L'ancienne valeur est remplacée par la nouvelle.</p>
        <input class="qcm" type="radio" name="qcm4">On ne peut pas changer la valeur contenue dans une case de le mémoire.<br />
        <p class="faux">Réponse fausse.<br />Heureusement, on peut changer cette valeur.</p>
      </form>
	 </fieldset>
      
	  <fieldset class="qcu">
	  <form action="">
        La mémoire de mon ordinateur contient des données extrêmement importantes. L'ordinateur est éteint brutalement. Que deviennent les données?<br>
        <input class="qcm" type="radio" name="qcm4">Elles restent dans la mémoire jusqu'au moment où le courant revient.<br />
        <p class="faux">Réponse fausse.<br />Pour que les données restent dans la mémoire, il est nécessaire que l'ordinateur reste allumé.</p>
        <input class="qcm" type="radio" name="qcm4">Les données disparaissent de la mémoire mais il suffit de rallumer l'ordinateur pour les faire revenir.<br />
        <p class="faux">Réponse fausse.<br />Rallumer l'ordinateur ne fait pas revenir le contenu de la mémoire centrale.</p>
        <input class="qcm" type="radio" name="qcm4">Les données disparaissent définitivement de la mémoire.<br />
        <p class="vrai">Réponse correcte.<br />Il n'existe aucun moyen de retrouver les données qui étaient dans la mémoire.</p>
      </form>
	  </fieldset>
	  
	  <fieldset class="qcu">
		<form action="" >
<img src="images/transistor.png" alt="transistor" class="imagedroite">Comment s'appelle le composant électronique présenté sur l'image ci-contre?<br>
<input class="qcm" name="qcm1" type="radio">Un disque dur<br><p class="faux">Réponse fausse.<br>Il faudra revoir la première séquence de cette leçon.</p>
<input class="qcm" name="qcm1" type="radio">Un résistor<br><p class="faux">Réponse fausse.</p>
<input class="qcm" name="qcm1" type="radio">Un processeur<br><p class="faux">Réponse incorrecte.<br>As-tu repéré la forme et l'apparence d'un processeur dans la première séquence?</p>
<input class="qcm" name="qcm1" type="radio">Un transistor<br><p class="vrai">Réponse correcte.<br>Te souviens-tu du rôle joué par les transistors dans l'ordinateur?</p>
</form>
</fieldset>
	  <fieldset class="qcu">
      <form action="">
        Un transistor est<br>
        <input class="qcm" type="radio" name="qcm4">Une sorte d'interrupteur électronique qui permet d'ouvrir ou de fermer un circuit électrique<br />
        <p class="vrai">Réponse correcte</p>
        <input class="qcm" type="radio" name="qcm4">Un courant électrique<br />
        <p class="faux">Faux.<br />Le transistor peut être parcouru par un courant, mais il n'est pas un courant</p>
        <input class="qcm" type="radio" name="qcm4">La mémoire centrale de l'ordinateur<br />
        <p class="faux">Réponse fausse.<br />La mémoire de l'ordinateur contient un grand nombre de transistors.</p>
        <input class="qcm" type="radio" name="qcm4">Le microprocesseur<br />
        <p class="faux">Réponse fausse.</p>
      </form>
	  </fieldset>

	<fieldset class="qcu">
      <form action="">
        Un élément de mémoire contenant la valeur 0 ou 1 est formé de<br>
        <input class="qcm" type="radio" name="qcm4">Un seul transistor<br />
        <p class="vrai">Réponse exacte.<br />Quand le courant passe dans le &quot;transistor&quot;, l'élément de mémoire correspond à la valeur 1, sinon, c'est la valeur 0.</p>
        <input class="qcm" type="radio" name="qcm4">Deux transistors<br />
        <p class="faux">Réponse fausse</p>
        <input class="qcm" type="radio" name="qcm4">Huit transistors<br />
        <p class="faux">Faux.<br />Pour représenter 1 bit, 8 transistors ne sont pas nécessaires.</p>
        <input class="qcm" type="radio" name="qcm4">128 transistors<br />
        <p class="faux">Réponse fausse.<br />Il ne faut pas tant de circuits pour représenter un seul bit.</p>
      </form>
	</fieldset>

	  <fieldset class="qcu">
      <form action="">
        La mémoire d'un ordinateur est de 4 <em>Giga-octets</em> (valeur classique en 2013), elle contient donc&nbsp;:<br>
        <input class="qcm" type="radio" name="qcm4"> 4 transistors<br />
        <p class="faux">Non.<br />C'est beaucoup plus que cela.</p>
        <input class="qcm" type="radio" name="qcm4"> 4 millions de transistors<br />
        <p class="faux">Réponse fausse.<br />Ne te tromperais-tu pas sur la signification du préfixe "Giga"?</p>
        <input class="qcm" type="radio" name="qcm4"> 4 milliards de transistors<br />
        <p class="faux">Réponse inexacte.<br />N'oublie pas qu'un octet est formé de 8 bits. Et chaque bit demande un transistor.</p>
        <input class="qcm" type="radio" name="qcm4">32 milliards de transistors<br />
        <p class="vrai">Réponse exacte. Il faut 8 transistors par octet. 8 x 4 milliards = 32 milliards</p>
      </form>
	  </fieldset>
	
<p>Quand tu as répondu à toutes les questions et bien compris les réponses, passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>
	  </div>
		<!-- id="texte" -->

	<!-- id="conteneur" -->
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
