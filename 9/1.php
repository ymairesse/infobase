<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Introduction à l'Internet</title>
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
			<h2>Le réseau Arpanet</h2>
			<fieldset class="travail">
			  <legend>Le premier réseau militaire d'ordinateurs</legend>
			<p>Regarde et écoute très attentivement le diaporama ci-dessous.</p>
			<p>De nombreuses informations y sont fournies qui te permettront de répondre aux questions qui suivent.</p>
			<p style="font-weight:bolder">Attention, la séquence ne fonctionne pas sous Internet Explorer 8 et précédents. Veuillez utiliser <a href="http://www.mozilla.org/fr/">un navigateur moins ancien</a>.</p>
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
						<li><a href="#slide01"> La création du premier réseau informatique militaire </a></li>
						<li><a href="#slide02"> Le premier satellite artificiel: Spoutnik </a></li>
						<li><a href="#slide03"> La guerre froide et ses enjeux </a></li>
						<li><a href="#slide04"> Le problème soumis à la DARPA </a></li>
						<li><a href="#slide05"> Comment fonctionne le réseau </a></li>
						<li><a href="#slide06"> Communication entre ordinateurs non-voisins </a></li>
						<li><a href="#slide07"> Utilisation d'un relais </a></li>
						<li><a href="#slide08"> Le relais transmet les informations </a></li>
						<li><a href="#slide09"> L'ordinateur de destination a reçu les informations </a></li>
						<li><a href="#slide10"> L'ordinateur relais est détruit </a></li>
						<li><a href="#slide11"> L'émetteur envoie les informations à un autre relais possible </a></li>
						<li><a href="#slide12"> Le relais transmet vers un autre relais ou la destination </a></li>
						<li><a href="#slide13"> Les informations arrivent aussi à destination </a></li>
						<li><a href="#slide14"> D'autres chemins sont possibles </a></li>
						<li><a href="#slide15"> En passant par le relais D </a></li>
						<li><a href="#slide16"> Puis par le relais E </a></li>
						<li><a href="#slide17"> On arrive aussi à X </a></li>
						<li><a href="#slide18"> Ou par le chemin A B F X </a></li>
						<li><a href="#slide19"> L'Arpanet ou l'ancêtre de l'Internet </a></li>
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

<h3>Synthèse</h3>
  <div class="info">
	<p>Dans un réseau centralisé, un ordinateur "maître" serait connecté à 	tous les sites militaires importants. Il recevrait et enverrait les informations.</p>
	<p>Mais, en cas d'attaque et de destruction de cet ordinateur "maître", tout le système de défense du pays est paralysé.</p>
	<p>Dans le système baptisé <strong>ARPANET</strong> (c'est-à-dire le réseau de la <strong>DARPA</strong>), il n'y a pas d'ordinateur "maître".</p>
	<p>Les paquets d'informations circulent sur le réseau vers leur destination sans connaître à l'avance le chemin à suivre. Si l'un des ordinateurs du réseau se trouve détruit ou inutilisable, les paquets d'informations empruntent un autre chemin.</p>
	<p>Si la communication entre les ordinateurs <strong>A</strong> et <strong>X</strong> est rompue à cause de la destruction de <strong>B</strong>, les informations peuvent continuer à circuler sur le réseau en passant par les ordinateurs <strong>X</strong> ou <strong>Y</strong> (ou d'autres).</p>
	<p>La <strong>DARPA</strong> va utiliser des centaines de chercheurs, scientifiques et militaires pour travailler sur la connexion entre ordinateurs.</p>
  </div>
  
<h3>Un petit bout d'histoire</h3>
  <div class="info">
  <h4>La première connexion de tous les temps</h4>
  <div class="imagedroite micro">
	<img style="width: 261px; height: 350px;" alt="Stanford - Los Angeles" src="images/stanfordUCLA.jpg"><br>Image <a href="wikimapia.org">Wikimapia.org</a>
  </div>
  <p>La première connexion à longue distance entre deux ordinateurs est réalisée par des chercheurs de la DARPA en <strong>1969</strong>. Elle est organisée en Californie, entre un ordinateur placé à l'université de <strong>Los Angeles</strong> (UCLA) et un autre situé à l'Université de <strong>Stanford</strong>.</p>
  <p>Le premier message envoyé sur le réseau devait être le mot <strong>LOGIN</strong>. Une connexion téléphonique était prévue, en plus...</p>
  <ul>
	<li><span style="font-weight: bold;">Los Angeles</span>: nous avons envoyé <strong>L</strong>; avez-vous reçu?</li>
	<li><span style="font-weight: bold;">Stanford</span>: oui, nous avons reçu <strong>L</strong></li>
	<li><span style="font-weight: bold;">Los Angeles</span>: nous avons envoyé <strong>O</strong>; avez-vous reçu?</li>
	<li><span style="font-weight: bold;">Stanford</span>: oui, nous avons reçu <strong>O</strong></li>
	<li><strong>Los Angeles</strong> frappe le <strong>G</strong></li>
	<li><strong>CRRRASSSHHHHH</strong></li>
  </ul>
  <p class="questions">Et on en est resté là, ou bien ils ont fait mieux après?</p>
  <p class="reponses">Heureusement, le système a été nettement amélioré. Jusqu'à organiser un réseau contenant plusieurs dizaines d'ordinateurs.<br>
  Et qui fonctionnait.</p>
  </div>

  <p class="interro" style="clear: both;">A la prochaine page, on te demandera de répondre aux
questions suivantes:</p>
<ol>
  <li>Pourquoi l'armée américaine était-elle motivée à réussir la mise en réseau de ses ordinateurs ?</li>
  <li>Pourquoi ce réseau est-il fragile, au départ?</li>
  <li>Quelle a été la première expérience de chat sur un réseau d'ordinateurs?</li>
  <li>Quel est le système imaginé par la <strong>DARPA</strong> pour résoudre le problème de fragilité du réseau?</li>
</ol>
<p>Quand tu penses pouvoir donner une réponse à chacune de ces questions, passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>
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
