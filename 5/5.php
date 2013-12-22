<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title> Exploration et maîtrise du clavier de l'ordinateur </title>
  <link rel="timesheet" type="application/smil+xml" href="4/timesheet.smil">
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
				<header id="slide01">	<img src="4/img0.jpg" alt="img">	</header>
				<div id="slide02">		<img src="4/img1.jpg" alt="img">	</div>
				<div id="slide03">		<img src="4/img2.jpg" alt="img">	</div>
				<div id="slide04">		<img src="4/img3.jpg" alt="img">	</div>
				<div id="slide05">		<img src="4/img4.jpg" alt="img">	</div>
				<div id="slide06">		<img src="4/img5.jpg" alt="img">	</div>
				<div id="slide07">		<img src="4/img6.jpg" alt="img">	</div>
				<div id="slide08">		<img src="4/img7.jpg" alt="img">	</div>
				<div id="slide09">		<img src="4/img8.jpg" alt="img">	</div>
				<footer id="slide10">		<img src="4/img9.jpg" alt="img">	</footer>

			</div>
			<!-- id="slideshow" -->
			
			<audio id="talk" preload>
				<source type="audio/mp3" src="4/01.mp3" />
				<source type="audio/ogg" src="4/01.ogg" />
			</audio>
			
			<!-- id="timeController" -->
			<nav id="timeController" class="smil-timeController">
				  
				<!-- Table of Contents -->
				<div class="smil-toc" style="display: none;">
					<ul class="smil-tocList">
						<li><a href="#slide01"> Partie 3 : les touches d'effacement </a></li>
						<li><a href="#slide02"> Il existe deux touches d'effacement </a></li>
						<li><a href="#slide03"> Localisation des touches d'effacement </a></li>
						<li><a href="#slide04"> Rôles des touches d'effacement </a></li>
						<li><a href="#slide05"> Rôles général  </a></li>
						<li><a href="#slide06"> Rôles dans un texte </a></li>
						<li><a href="#slide07"> Supprimer un caractère suivant le curseur de texte: Delete </a></li>
						<li><a href="#slide08"> Supprimer un caractère précédent le curseur de texte: Retour arrière </a></li>
						<li><a href="#slide09"> Synthèse: rôle général </a></li>
						<li><a href="#slide10"> Synthèse: rôle dans un texte </a></li>
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
	<p>Quand tu as bien noté et compris toutes les informations, passe à la page suivante pour une application.<?php include ("../../suivant.inc.php");?></p>

  </div>
		<!-- id="texte" -->

	<!-- id="conteneur" -->
		<?php include ("../../pied.inc.php"); ?> 
	</div>
 

</body>
</html>
