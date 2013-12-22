<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title> Comment les moteurs de recherche cherchent </title>
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
		<?php require ("./top.inc.php"); ?>
		<div id="texte" class="crossfade">
		  <h2> Fonctionnement des moteurs de recherche: les requêtes</h2>
		  <div class="info">
		  <p>Lorsque l'on effectue une requête sur un moteur de recherche, celui-ci interroge la banque de données (les serveurs d'index) dont il dispose pour répondre à la question posée.</p>
		  <fieldset class="attention"><legend>Définition</legend>
		  Une <strong>requête</strong> sur un moteur de recherche est une question posée à la base de données du moteur de recherche.
		  </fieldset>
		  
		  <p>L'animation ci-dessous illustre les différentes phases du processus:</p>
		  <ol>
			  <li>Un internaute envoie une <strong>requête</strong> sur un moteur de recherche</li>
			  <li>Les systèmes informatiques du moteur de recherche interrogent la banque de données des serveurs d'index</li>
			  <li>Les serveurs d'index renvoient une série de résultats pour la requête qui a été transmise</li>
			  <li>Le serveur web du moteur de recherche retourne les résultats à l'internaute</li>
		  </ol>
		  </div>
		  <!-- id="slideshow" -->
					  <div id="slideshow" style="position: relative; height:600px">
						  <header id="slide01">	<img src="4/img0.jpg" alt="img">	</header>
						  <div id="slide02">	<img src="4/img1.jpg" alt="img">	</div>
						  <div id="slide03">	<img src="4/img2.jpg" alt="img">	</div>
						  <div id="slide04">	<img src="4/img3.jpg" alt="img">	</div>
						  <div id="slide05">	<img src="4/img4.jpg" alt="img">	</div>
						  <div id="slide06">	<img src="4/img5.jpg" alt="img">	</div>
						  <div id="slide07">	<img src="4/img6.jpg" alt="img">	</div>
						  <div id="slide08">	<img src="4/img7.jpg" alt="img">	</div>
						  <div id="slide09">	<img src="4/img8.jpg" alt="img">	</div>
						  <div id="slide10">	<img src="4/img9.jpg" alt="img">	</div>
						  <div id="slide11">	<img src="4/img10.jpg" alt="img">	</div>
						  <div id="slide12">	<img src="4/img11.jpg" alt="img">	</div>
						  <footer id="slide13">	<img src="4/img12.jpg" alt="img">	</footer>
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
								  <li><a href="#slide01"> Comment fonctionne une requête sur un moteur de recherche </a></li>
								  <li><a href="#slide02"> J'ai une question </a></li>
								  <li><a href="#slide03"> Trouver les mots-clés </a></li>
								  <li><a href="#slide04"> La page d'accueil du moteur de recherche </a></li>
								  <li><a href="#slide05"> Les serveurs d'index </a></li>
								  <li><a href="#slide06"> Les moteurs de recherche et la langue naturelle </a></li>
								  <li><a href="#slide07"> Suppression des mots inutiles </a></li>
								  <li><a href="#slide08"> Restent les mots-clés </a></li>
								  <li><a href="#slide09"> Recherche des mots-clés dans la base de données </a></li>
								  <li><a href="#slide10"> Les résultats sur une page web </a></li>
								  <li><a href="#slide11"> L'utilisateur prend connaissance des résultats </a></li>
								  <li><a href="#slide12"> L'utilisateur analyse les résultats </a></li>
								  <li><a href="#slide13"> Synthèse </a></li>
							  </ul>
						  </div>
						  <!-- Table of Contentes -->
						  
						  <!-- timeline + control buttons -->
						  <div class="smil-controlBar">
							  <div class="smil-left">
								  <button class="smil-first"><span>|«</span></button>
								  <button class="smil-prev"><span>«</span></button>
								  <button class="smil-play"><span>?||</span></button>
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
		  
	  
		  <fieldset class="qcu">
			<form action="javascript:void(0)" >
			Quand on interroge un moteur de recherche, il vaut toujours mieux<br>
			<input class="qcm" name="qcm1" type="radio">Écrire en français parfaitement correct, avec des phrases bien construites<br><p class="faux">Incorrect.<br>Aucun moteur de recherche ne comprend le français</p>
			<input class="qcm" name="qcm1" type="radio">Écrire en anglais parfaitement correct, avec des phrases bien construites. Sinon, éventuellement, en français<br><p class="faux">Réponse incorrecte.<br>Aucun moteur de recherche ne comprend le langage courant, ni français, ni anglais, ni dans aucune autre langue humaine</p>
			<input class="qcm" name="qcm1" type="radio">Utiliser quelques mots bien choisis en rapport avec la question que l'on se pose<br><p class="vrai">Bonne réponse<br>Ces mots sont encore appelés mots-clés</p>
			<input class="qcm" name="qcm1" type="radio">Aucune des autres réponses n'est correcte; on lui parle comme on veut.<br><p class="faux">Réponse incorrecte.<br>Il existe des règles à appliquer pour utiliser efficacement un moteur de recherche.</p>
			</form>
		  </fieldset>

		  <fieldset class="qcu">
			<form action="javascript:void(0)" >
			Sur l'une des diapositives ci-dessus (<a href="http://info.sio2.be/infobase/13/4.php#slide07">http://info.sio2.be/infobase/13/4.php#slide07</a>) on parle de "langue naturelle".<br />
			Qu'est-ce qu'une langue naturelle?<br>
			<input class="qcm" name="qcm1" type="radio">Une langue naturelle est une langue parlée par des humains, comme le français, l'allemand ou le chinois<br><p class="vrai">Correct</p>
			<input class="qcm" name="qcm1" type="radio">C'est une langue qui est parlée par tous les êtres vivants<br><p class="faux">Faux.<br>Tous les êtres vivants ne parlent pas :o)</p>
			<input class="qcm" name="qcm1" type="radio">C'est une langue spéciale inventée pour dialoguer avec les moteurs de recherche<br><p class="faux">Réponse fausse.<br>Il n'existe pas de langue particulière destinée aux moteurs de recherche</p>
			<input class="qcm" name="qcm1" type="radio">C'est une langue spéciale formée de mots simples, sans mots liens, sans articles,...<br><p class="faux">Réponse fausse.<br>Cette réponse correspondrait plutôt à la définition d'une série de mots-clés. <br>Mais ce n'est donc pas une langue "spéciale"</p>
			</form>
		  </fieldset>
		  
		  
		  
		  <p>Quand tu peux citer les étapes du traitement d'une requête par un moteur de recherche, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
	</div>

	
	
		<!-- id="texte" -->

	<!-- id="conteneur" -->
<?php include ("../../pied.inc.php"); ?> </div>

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
