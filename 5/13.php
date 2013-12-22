<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title> Exploration et maîtrise du clavier de l'ordinateur </title>
  <link rel="timesheet" type="application/smil+xml" href="11/timesheet.smil">
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
				<header id="slide01">	<img src="11/img0.jpg" alt="img">	</header>
				<div id="slide02">		<img src="11/img1.jpg" alt="img">	</div>
				<div id="slide03">		<img src="11/img2.jpg" alt="img">	</div>
				<div id="slide04">		<img src="11/img3.jpg" alt="img">	</div>
				<div id="slide05">		<img src="11/img4.jpg" alt="img">	</div>
				<div id="slide06">		<img src="11/img5.jpg" alt="img">	</div>
				<div id="slide07">		<img src="11/img6.jpg" alt="img">	</div>
				<div id="slide08">		<img src="11/img7.jpg" alt="img">	</div>
				<div id="slide09">		<img src="11/img8.jpg" alt="img">	</div>
				<div id="slide10">		<img src="11/img9.jpg" alt="img">	</div>
				<div id="slide11">		<img src="11/img10.jpg" alt="img">	</div>
				<div id="slide12">		<img src="11/img11.jpg" alt="img">	</div>
				<div id="slide13">		<img src="11/img12.jpg" alt="img">	</div>
				<footer id="slide14">		<img src="11/img13.jpg" alt="img">	</footer>

			</div>
			<!-- id="slideshow" -->
			
			<audio id="talk" preload>
				<source type="audio/mp3" src="11/01.mp3" />
				<source type="audio/ogg" src="11/01.ogg" />
			</audio>
			
			<!-- id="timeController" -->
			<nav id="timeController" class="smil-timeController">
				  
				<!-- Table of Contents -->
				<div class="smil-toc" style="display: none;">
					<ul class="smil-tocList">
						<li><a href="#slide01"> Partie 5 : les touches de mouvement avec Maj et Ctrl </a></li>
						<li><a href="#slide02"> Plan du clavier </a></li>
						<li><a href="#slide03"> Ctrl + Flèche droite </a></li>
						<li><a href="#slide04"> Ctrl + Flèche gauche </a></li>
						<li><a href="#slide05"> Ctrl + Flèche bas </a></li>
						<li><a href="#slide06"> Ctrl + Flèche haut </a></li>
						<li><a href="#slide07"> Ctrl + Home / End </a></li>
						<li><a href="#slide08"> Maj + Flèche droite </a></li>
						<li><a href="#slide09"> Maj + Flèche gauche </a></li>
						<li><a href="#slide10"> Maj + Home / End </a></li>
						<li><a href="#slide11"> Ctrl + Maj + Flèche droite </a></li>
						<li><a href="#slide12"> Ctrl + Maj + Flèche gauche </a></li>
						<li><a href="#slide13"> Ctrl + Maj + Flèche Haut / Bas </a></li>
						<li><a href="#slide14"> Synthèse </a></li>
					</ul>
				</div>
				
				<!-- Table of Contents -->
				
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
	<p>Quand tu as bien noté et compris toutes les informations, passe à la page suivante pour quelques questions.<?php include ("../../suivant.inc.php");?></p>

  </div>
		<!-- id="texte" -->

	<!-- id="conteneur" -->
		<?php include ("../../pied.inc.php"); ?> 
	</div>
 

</body>
</html>
