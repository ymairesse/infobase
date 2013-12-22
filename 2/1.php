<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title> Voyage au cœur de l'unité centrale </title>
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
			<h2>Voyage au cœur de l'unité centrale</h2>
			<fieldset class="travail">
			  <legend>Description de l'unité centrale</legend>
			<p>Regarde et écoute très attentivement le diaporama ci-dessous.</p>
            <p style="font-weight:bolder">Si le diaporama ne fonctionne pas, pense à utiliser un navigateur moderne comme Firefox. Peu de chances pour qu'il fonctionne sous Internet Explorer < 9.</p>
			<p>De nombreuses informations y sont fournies qui te permettront de répondre aux questions qui suivent.</p>
			</fieldset>
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
				<div id="slide10">		<img src="1/img9.jpg" alt="img">	</div>
				<div id="slide11">		<img src="1/img10.jpg" alt="img">	</div>
				<div id="slide12">		<img src="1/img11.jpg" alt="img">	</div>
				<div id="slide13">		<img src="1/img12.jpg" alt="img">	</div>
				<div id="slide14">		<img src="1/img13.jpg" alt="img">	</div>
				<div id="slide15">		<img src="1/img14.jpg" alt="img">	</div>
				<div id="slide16">		<img src="1/img15.jpg" alt="img">	</div>
				<div id="slide17">		<img src="1/img16.jpg" alt="img">	</div>
				<div id="slide18">		<img src="1/img17.jpg" alt="img">	</div>
				<footer id="slide19">		<img src="1/img18.jpg" alt="img">	</footer>

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
						<li><a href="#slide01"> Voyage au coeur de l'unité centrale </a></li>
						<li><a href="#slide02"> Rappel: les périphériques </a></li>
						<li><a href="#slide03"> Notion d'unité centrale </a></li>
						<li><a href="#slide04"> Dissection de l'unité centrale </a></li>
						<li><a href="#slide05"> La carte mère </a></li>
						<li><a href="#slide06"> Le processeur </a></li>
						<li><a href="#slide07"> La mémoire centrale </a></li>
						<li><a href="#slide08"> Le disque dur </a></li>
						<li><a href="#slide09"> L'alimentation électrique </a></li>
						<li><a href="#slide10"> Le ventilateur du processeur </a></li>
						<li><a href="#slide11"> Le radiateur du processeur </a></li>
						<li><a href="#slide12"> Le processeur côté face </a></li>
						<li><a href="#slide13"> Le processeur côté pile </a></li>
						<li><a href="#slide14"> La mémoire centrale </a></li>
						<li><a href="#slide15"> Le disque dur </a></li>
						<li><a href="#slide16"> Disque dur et disquette souple </a></li>
						<li><a href="#slide17"> Fonctionement du disque dur </a></li>
						<li><a href="#slide18"> L'alimentation électrique </a></li>
						<li><a href="#slide19"> Schéma muet </a></li>
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
			<form action="" class="travail">
Sur la dernière image du diaporama ci-dessus, le processeur est indiqué au numéro:<br>
<input class="qcm" name="qcm1" type="radio">1<br><p class="faux">Faux</p>
<input class="qcm" name="qcm1" type="radio">2<br><p class="vrai">Exact</p>
<input class="qcm" name="qcm1" type="radio">3<br><p class="faux">Faux</p>
<input class="qcm" name="qcm1" type="radio">4<br><p class="faux">Faux</p>
</form>
			
<fieldset class="travail"><form action="" >
Sur la derni&egrave;re image du diaporama ci-dessus, la m&eacute;moire centrale est indiqu&eacute;e au num&eacute;ro:<br>
<input class="qcm" name="qcm1" type="radio">1<br><p class="faux">Non</p>
<input class="qcm" name="qcm1" type="radio">2<br><p class="faux">Non</p>
<input class="qcm" name="qcm1" type="radio">3<br><p class="vrai">Correct</p>
<input class="qcm" name="qcm1" type="radio">5<br><p class="faux">Faux</p>
</form>
</fieldset>

<fieldset class="travail"><form action="" >
Sur la derni&egrave;re image du diaporama ci-dessus, le disque dur est indiqu&eacute; au num&eacute;ro:<br>
<input class="qcm" name="qcm1" type="radio">5<br><p class="vrai">Correct</p>
<input class="qcm" name="qcm1" type="radio">4<br><p class="faux">Non</p>
<input class="qcm" name="qcm1" type="radio">3<br><p class="faux">Non</p>
<input class="qcm" name="qcm1" type="radio">2<br><p class="faux">Faux</p>
</form>
</fieldset>

<fieldset class="travail"><form action="" >
Sur la derni&egrave;re image du diaporama ci-dessus, la carte m&egrave;re est indiqu&eacute;e au num&eacute;ro:<br>
<input class="qcm" name="qcm1" type="radio">5<br><p class="faux">Faux</p>
<input class="qcm" name="qcm1" type="radio">1<br><p class="vrai">Correct</p>
<input class="qcm" name="qcm1" type="radio">2<br><p class="faux">Non</p>
<input class="qcm" name="qcm1" type="radio">3<br><p class="faux">Faux</p>
</form>
</fieldset>

<p>Quand tu es capable de citer de mémoire les éléments essentiels de l'unité centrale et de les repérer dans l'ordinateur, passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>
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
