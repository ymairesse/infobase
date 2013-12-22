<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title> Comment les moteurs de recherche cherchent </title>
  <link rel="timesheet" type="application/smil+xml" href="2/timesheet.smil">
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
		<?php require ("./top.inc.php"); ?>
		<div id="texte" class="crossfade">
		<h2> Se faire aider pour trouver les informations sur l'Internet</h2>
		<h3>Où est le bibliothécaire?</h3>
		
		<div class="info"><p>La recherche d'informations sur l'Internet pose au moins trois problèmes:</p>
		<ol><li>La quantité d'informations disponibles est colossale</li><li>On ne sait pas sur quel site aller pour trouver une information intéressante</li>
		  <li>N'importe qui peut venir déposer des informations sur l'Internet; même des informations fausses</li>
		</ol>
		<p>Dans une bibliothèque classique, on peut faire appel au bibliothécaire.</p>
		<p>Mais personne n'est chargé du rôle de bibliothécaire sur l'Internet.</p>
		</div>
		<div class="attention" style="border: 1px solid black; padding: 1em 1em 1em 5em;">
			<p>Un moteur de recherche est formé d'une batterie d'ordinateurs muni de programmes et capable de trouver des informations parmi un grand nombre de documents de différents types.</p>
		</div>
		<div class="info">
			<p>Un certain nombre de sites web proposent un moteur de recherche. Parmi les moteurs de recherche les plus connus</p>
			<p>
				<a href="http://www.ask.com/"><img style="border: 0px solid ; width: 132px; height: 80px;" alt="Ask" src="images/ask.png"></a>
				<a href="http://www.yahoo.com/"><img style="border: 0px solid ; width: 182px; height: 70px;" alt="Yahoo" src="images/yahoo.png"></a>
				<a href="http://www.google.com"><img style="border: 0px solid ; width: 150px; height: 75px;" alt="Google" src="images/google.png"></a>
				<a href="http://www.qwant.com//"><img style="border: 0px solid ; width: 200px; height: 68px;" alt="Qwant" src="images/qwant.png"></a>
				<a href="http://bing.com/"><img style="border: 0px solid ; width: 150px; height: 80px;" alt="Bing" src="images/bing.png"></a> ...
			</p>
		</div>
			<!-- id="slideshow" -->
			<div id="slideshow" style="position: relative; height:600px">
				<header id="slide01">	<img src="2/img0.jpg" alt="img">	</header>
				<div id="slide02">		<img src="2/img1.jpg" alt="img">	</div>
				<div id="slide03">		<img src="2/img2.jpg" alt="img">	</div>
				<div id="slide04">		<img src="2/img3.jpg" alt="img">	</div>
				<div id="slide05">		<img src="2/img4.jpg" alt="img">	</div>
				<div id="slide06">		<img src="2/img5.jpg" alt="img">	</div>
				<div id="slide07">		<img src="2/img6.jpg" alt="img">	</div>
				<div id="slide08">		<img src="2/img7.jpg" alt="img">	</div>
				<footer id="slide09">		<img src="2/img8.jpg" alt="img">	</footer>
			</div>
			<!-- id="slideshow" -->
			
			<audio id="talk" preload>
				<source type="audio/mp3" src="2/01.mp3" />
				<source type="audio/ogg" src="2/01.ogg" />
			</audio>
			
			<!-- id="timeController" -->
			<nav id="timeController" class="smil-timeController">
				  
				<!-- Table of Contents -->
				<div class="smil-toc" style="display: none;">
					<ul class="smil-tocList">
						<li><a href="#slide01"> Comment fonctionnent les moteurs de recherche </a></li>
						<li><a href="#slide02"> J'ai une question </a></li>
						<li><a href="#slide03"> Pour trouver, les moteurs de recherche </a></li>
						<li><a href="#slide04"> Comment les moteurs de recherche savent-ils? </a></li>
						<li><a href="#slide05"> Mission Impossible pour les moteurs de rechercher </a></li>
						<li><a href="#slide06"> Que font les spiders </a></li>
						<li><a href="#slide07"> Les spiders et les serveurs d'index </a></li>
						<li><a href="#slide08"> Indexation des données </a></li>
						<li><a href="#slide09"> On attend les clients </a></li>
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
<div class="info">
	<p>Une vidéo (en anglais, mais des sous-titres sont possibles en français) qui explique le fonctionnement du moteur de recherche Google: <a href="http://youtu.be/BNHR6IQJGZs">http://youtu.be/BNHR6IQJGZs</a></p>
	<p>Une vidéo qui explique de manière très synthétique le fonctionnement des moteurs de recherche et des requêtes: <a target="_blank" href="http://youtu.be/gYZgbB6UFkU">http://youtu.be/gYZgbB6UFkU</a> (Auteur: <a href="http://fenetresur.wordpress.com/2013/10/31/comprendre-le-fonctionnement-dun-moteur-de-recherche-en-1min30-video/">Claire Cassaigne</a>)</p>
</div>
<p>Quand tu te sens prêt(e) à répondre à des questions sur le contenu de cette page, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?> </p>
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
