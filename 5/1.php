<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title> Exploration et maîtrise du clavier de l'ordinateur </title>
  <link rel="timesheet" type="application/smil+xml" href="1/timesheet.smil">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen,print">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">

  <link rel="stylesheet" type="text/css" href="../../js/timeSheet/style/timecontroller/style.css">
  <link rel="stylesheet" type="text/css" href="../../js/timeSheet/style/layout.css">
  <link rel="stylesheet" type="text/css" href="../../js/timeSheet/style/transitions.css">
  <!--
  <link rel="alternate stylesheet" type="text/css" title="handheld" href="style/handheld.css">
  -->
  <!--[if lt IE 9]>
    <script type="text/javascript" src="../3rd-part/html5.js"></script>
    <script type="text/javascript" src="../3rd-part/mediaelement.js"></script>
    <style type="text/css">
      p#transitionSelector { display: none; }
    </style>
  <![endif]-->
  <script type="text/javascript" src="../../js/timeSheet/timesheets.js"></script>
  <script type="text/javascript" src="../../js/timeSheet/timesheets-controls.js"></script>
  <script type="text/javascript" src="../../js/timeSheet/timesheets-navigation.js"></script>
  
  <script type="text/javascript" src="../../js/jquery.js"></script>
  
</head>
<body>
	<div id="conteneur">
		<?php require ("./top.inc.php");  ?>
		<div id="texte"  class="crossfade">


			<!-- id="slideshow" -->
			<div id="slideshow" style="position: relative; height:600px">
				<header id="slide01">	<img src="1/img0.jpg" alt="img">	</header>
				<div id="slide02">		<img src="1/img1.jpg" alt="img">	</div>
				<div id="slide03">		<img src="1/img2.jpg" alt="img">	</div>
				<div id="slide04">		<img src="1/img3.jpg" alt="img">	</div>
				<div id="slide05">		<img src="1/img4.jpg" alt="img">	</div>
				<div id="slide06">		<img src="1/img5.jpg" alt="img">	</div>
				<div id="slide07">		<img src="1/img6.jpg" alt="img">	</div>
				<div id="slide08">		<img src="1/img7.jpg" alt="img">	</div>
				<div id="slide09">		<img src="1/img8.jpg" alt="img">	</div>
				<footer id="slide10">		<img src="1/img9.jpg" alt="img">	</footer>

			</div>
			<!-- id="slideshow" -->
			
			<audio id="talk" preload>
				<source type="audio/mp3" src="1/01.mp3" />
				<source type="audio/ogg" src="1/01.ogg" />
			</audio>
			
			<!-- id="timeController" -->
			<nav id="timeController" class="smil-timeController">
				  
				<!-- Table of Contents -->
				<div class="smil-toc" style="display: none;">
					<ul class="smil-tocList">
						<li><a href="#slide01"> Partie 1 : géographie du clavier </a></li>
						<li><a href="#slide02"> Le clavier français de France </a></li>
						<li><a href="#slide03"> Le clavier francophone de Suisse </a></li>
						<li><a href="#slide04"> Le clavier francophone du Canada </a></li>
						<li><a href="#slide05"> Le clavier francophone de Belgique </a></li>
						<li><a href="#slide06"> Les différentes zones du clavier </a></li>
						<li><a href="#slide07"> Le clavier alphanumérique </a></li>
						<li><a href="#slide08"> Le pavé numérique </a></li>
						<li><a href="#slide09"> Les touches de mouvement du curseur </a></li>
						<li><a href="#slide10"> Les touches de fonction </a></li>
					</ul>
				</div>
				<!-- Table of Contentes -->
				
				<!-- timeline + control buttons -->
				<div class="smil-controlBar">
					<div class="smil-left">
						<button class="smil-first"><span>|«</span></button>
						<button class="smil-prev"><span>«</span></button>
						<button class="smil-play"><span>▶||</span></button>
						<button class="smil-next"><span>»</span></button>
						<button class="smil-last"><span>»|</span></button>
					</div>
				  
					<div class="smil-timeline">
						<div class="smil-timeSlider"></div>
						<div class="smil-timeSegments"></div>
						<div class="smil-timeCursor"></div>
					</div>
				  
					<div class="smil-right smil-currentTime">00:00</div>
				  
				</div>  
				<!-- smil-controlBar -->
			</nav>
			<!-- id="timeController" -->
	<p>Les questions qui suivent se rapportent au schéma ci-dessous</p>
	<p style="text-align:center"><img src="images/zoneclav.png" alt="Les zones du clavier" height="197" width="500"></p>
	<fieldset class="qcu">
	<form action="javascript:void(0)">Comment s'appelle la zone du clavier <span style="background-color: red; color:white">en couleur rouge</span> sur l'illustration?<br>
		<input class="qcm" name="qcm1" type="radio">Le clavier alphanumérique<br>
		<p class="vrai">Réponse correcte</p>
		<input class="qcm" name="qcm1" type="radio">Les touches de fonction<br>
		<p class="faux">Réponse fausse.<br>Les touches de fonctions sont placées ailleurs.</p>
		<input class="qcm" name="qcm1" type="radio">Le pavé numérique<br>
		<p class="faux">Réponse fausse</p>
		<input class="qcm" name="qcm1" type="radio">Les touches de mouvement du curseur<br>
		<p class="faux">Réponse fausse</p>
	</form>
	</fieldset>
	
	<fieldset class="qcu">
	<form action="javascript:void(0)">Comment s'appelle la zone du clavier <span style="background-color: blue; color:white">en couleur bleue</span> sur l'illustration?<br>
		<input class="qcm" name="qcm1" type="radio">Le clavier alphanumérique<br>
		<p class="faux">Réponse incorrecte.</p>
		<input class="qcm" name="qcm1" type="radio">Les touches de fonction<br>
		<p class="faux">Réponse fausse</p>
		<input class="qcm" name="qcm1" type="radio">Le pavé numérique<br>
		<p class="vrai">Réponse exacte</p>
		<input class="qcm" name="qcm1" type="radio">Les touches de mouvement du curseur<br>
		<p class="faux">Réponse fausse</p>
	</form> 
	</fieldset>
	
	<fieldset class="qcu">
	<form action="javascript:void(0)">Comment s'appelle la zone du clavier <span style="background-color: fuchsia; color:white">en couleur rose</span> sur l'illustration?<br>
		<input class="qcm" name="qcm1" type="radio">Le clavier alphanumérique<br>
		<p class="faux">Réponse incorrecte</p>
		<input class="qcm" name="qcm1" type="radio">Les touches de fonction<br>
		<p class="vrai">Réponse correcte</p>
		<input class="qcm" name="qcm1" type="radio">Le pavé numérique<br>
		<p class="faux">Réponse incorrecte</p>
		<input class="qcm" name="qcm1" type="radio">Les touches de mouvement du curseur<br>
		<p class="faux">Réponse fausse</p>
	</form> 
	</fieldset>
	
	<fieldset class="qcu">
	<form action="javascript:void(0)" >Comment s'appelle la zone du clavier <span style="background-color: green; color:white">en couleur verte</span> sur l'illustration?<br>
		<input class="qcm" name="qcm1" type="radio">Le clavier alphanumérique<br>
		<p class="faux">Réponse incorrecte</p>
		<input class="qcm" name="qcm1" type="radio">Les touches de fonctions<br>
		<p class="faux">Réponse fausse</p>
		<input class="qcm" name="qcm1" type="radio">Le pavé numérique<br>
		<p class="faux">Réponse fausse</p>
		<input class="qcm" name="qcm1" type="radio">Les touches de mouvement du curseur<br>
		<p class="vrai">Réponse exacte</p>
	</form>
	</fieldset>
	
	<fieldset class="qcu">
	  <form action="javascript:void(0)" >
	  Pour quelle raison dit-on que le clavier français de France et le clavier francophone de Belgique sont des claviers AZERTY<br>
	  <input class="qcm" name="qcm1" type="radio">Parce qu'ils ont été conçus par Mr Alfred Zerty<br><p class="faux">Mr Alfred Zerty n'a sans doute jamais existé</p>
	  <input class="qcm" name="qcm1" type="radio">C'est le nom de la fabrique de claviers située près de la frontière franco-belge<br><p class="faux">Personne n'a jamais vu de fabrique à cette enseigne dans la région indiquée</p>
	  <input class="qcm" name="qcm1" type="radio">Parce que les premières touches du clavier alphanumérique sont disposées dans l'ordre A Z E R T Y<br><p class="vrai">Réponse correcte</p>
	  <input class="qcm" name="qcm1" type="radio">Ce sont les premières lettres de l'alphabet polonais, pays où a été inventé le clavier d'ordinateur<br><p class="faux">Aïe, aïe, il va falloir revoir la séquence du haut de la page</p>
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
