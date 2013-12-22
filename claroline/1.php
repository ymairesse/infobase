<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title> Les bases pour l'utilisation de Claroline à l'ISND </title>
  <link rel="timesheet" type="application/smil+xml" href="1/timesheet.smil">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen,print">
  <link rel="stylesheet" type="text/css" href="../..//print.css" media="print">

    
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
</head>
<body>
	<div id="conteneur">
		<?php  require ("./top.inc.php");  ?>
		<div id="texte"  class="crossfade">
			<h2>Création d'un compte et inscription à un cours sur la plate-forme Claroline</h2>
			<div class="info">
				<p>La séquence suivante a pour but d'expliquer la façon de s'inscrire sur la plate-forme Claroline de l'ISND et la façon de rejoindre un cours.</p>
				<p>N'hésite pas à interrompre la piste sonore et à revenir en arrière si tu souhaites ré-entendre les explications.</p>
				<p><strong>Il ne suffit pas d'écouter</strong>, il faut aussi <strong>réaliser les différentes actions qui sont montrées à l'écran.</strong>. Arrête la piste sonore quand c'est nécessaire.</p>
				<p>Attention: la séquence audio animée ne fonctionne pas sous Internet Explorer 8. Préférez un navigateur plus moderne.</p>
			</div>

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
				<div id="slide19">		<img src="1/img18.jpg" alt="img">	</div>
				<div id="slide20">		<img src="1/img19.jpg" alt="img">	</div>
				<div id="slide21">		<img src="1/img20.jpg" alt="img">	</div>
				<footer id="slide22">	<img src="1/img21.jpg" alt="img">	</footer>
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
						<li><a href="#slide01"> Objectifs </a></li>
						<li><a href="#slide02"> Plateforme </a></li>
						<li><a href="#slide03"> Classroom on line </a></li>
						<li><a href="#slide04"> Pour quoi faire </a></li>
						<li><a href="#slide05"> Beaucoup d'écoles </a></li>
						<li><a href="#slide06"> Le site web de l'isnd </a></li>
						<li><a href="#slide07"> Adresse de Claroline </a></li>
						<li><a href="#slide08"> Page d'accueil </a></li>
						<li><a href="#slide09"> Identifiant et mot de passe </a></li>
						<li><a href="#slide10"> Déjà inscrit </a></li>
						<li><a href="#slide11"> S'inscrire </a></li>
						<li><a href="#slide12"> Création du compte </a></li>
						<li><a href="#slide13"> Nom et prénom </a></li>
						<li><a href="#slide14"> Identifiant et mot de passe </a></li>
						<li><a href="#slide15"> Adresse mail </a></li>
						<li><a href="#slide16"> Compte créé </a></li>
						<li><a href="#slide17"> Page d'accueil </a></li>
						<li><a href="#slide18"> Première connexion </a></li>
						<li><a href="#slide19"> S'inscrire à un cours </a></li>
						<li><a href="#slide20"> Catégories </a></li>
						<li><a href="#slide21"> Inscription réussie </a></li>
						<li><a href="#slide22"> Synthèse </a></li>
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
		
		<p> Quand tu es inscrit sur la plate-forme et que tu as rejoint un cours, passe à la page suivante. <?php include ("../../suivant.inc.php"); ?></p>
		</div>
		<!-- id="texte" -->
		<?php include ("../../pied.inc.php"); ?> 
	</div>
	<!-- id="conteneur" -->
</body>
</html>
