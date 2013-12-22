<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title> Voyage au cœur de l'unité centrale </title>
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
		<?php require ("./top.inc.php");  ?>
		<div id="texte"  class="crossfade">
			<fieldset class="travail">
			  <legend>Apprendre à compter comme un super-ordinateur</legend>
			<p>Regarde et écoute très attentivement le diaporama ci-dessous.</p>
			<p>Tu y apprendras à compter comme un super-ordinateur</p>
			</fieldset>
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
				<div id="slide09">		<img src="2/img8.jpg" alt="img">	</div>
				<div id="slide10">		<img src="2/img9.jpg" alt="img">	</div>
				<div id="slide11">		<img src="2/img10.jpg" alt="img">	</div>
				<div id="slide12">		<img src="2/img11.jpg" alt="img">	</div>
				<div id="slide13">		<img src="2/img12.jpg" alt="img">	</div>
				<div id="slide14">		<img src="2/img13.jpg" alt="img">	</div>
				<div id="slide15">		<img src="2/img14.jpg" alt="img">	</div>
				<div id="slide16">		<img src="2/img15.jpg" alt="img">	</div>
				<div id="slide17">		<img src="2/img16.jpg" alt="img">	</div>
				<footer id="slide18">		<img src="2/img17.jpg" alt="img">	</footer>

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
						<li><a href="#slide01"> Apprendre à compter comme un super-ordinateur </a></li>
						<li><a href="#slide02"> Rappel de l'école primaire </a></li>
						<li><a href="#slide03"> Le report dans l'addition </a></li>
						<li><a href="#slide04"> Le système binaire </a></li>
						<li><a href="#slide05"> Addition simple en binaire </a></li>
						<li><a href="#slide06"> Compter plus haut que 1 </a></li>
						<li><a href="#slide07"> Le report dans l'addition en binaire </a></li>
						<li><a href="#slide08"> Addition simple à deux chiffres en binaire </a></li>
						<li><a href="#slide09"> Addition avec deux reports en binaire </a></li>
						<li><a href="#slide10"> C'est bête, un ordinateur </a></li>
						<li><a href="#slide11"> Notion d'octet </a></li>
						<li><a href="#slide12"> À retenir </a></li>
						<li><a href="#slide13"> Un grand (?) nombre dans un octet </a></li>
						<li><a href="#slide14"> Un plus grand nombre dans deux octets </a></li>
						<li><a href="#slide15"> Un bit = un interrupteur </a></li>
						<li><a href="#slide16"> Un transistor </a></li>
						<li><a href="#slide17"> Une barrette de mémoire </a></li>
						<li><a href="#slide18"> Synthèse </a></li>
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
	<fieldset class="info">
	  <legend>Première salve de questions</legend>
	  <p>Réponds aux questions ci-dessous. Retourne écouter et voir la séquence correspondante ci-dessus quand c'est nécessaire.</p>
	</fieldset>		
  <fieldset class="qcu">
      <form action="javascript:void(0)">
        <p>Un bit de la mémoire centrale correspond à:</p>
        <input class="qcm" type="radio">La valeur 0 ou la valeur 1<br>
        <p class="vrai">Exact.<br />Un bit d'information correspond à une valeur 0 ou une valeur 1.</p>
        <input class="qcm" type="radio"> Un ensemble de 0 et de 1 (éventuellement plusieurs dizaines)<br />
        <p class="faux">Non.<br />Un bit ne peut recevoir qu'une seule valeur.</p>
        <input class="qcm" type="radio">Une valeur comprise entre 0 et 9<br />
        <p class="faux">Non.<br />La mémoire centrale ne peut retenir que des 0 et de 1.</p>
      </form>
  </fieldset>
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
	   <fieldset class="qcu">
      <form action="javascript:void(0)">
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
	   </fieldset>
	  
	  <fieldset class="qcu">
	  <form action="javascript:void(0)">
		Combien représente, en décimal, le nombre 1 exprimé en binaire?<br>
		<input class="qcm" name="qcm1" type="radio">1<br><p class="vrai">Réponse correcte.<br>Un chocolat en binaire est aussi un chocolat en décimal</p>
		<input class="qcm" name="qcm1" type="radio">9<br><p class="faux">Réponse incorrecte.<br>1 est simplement le plus grand chiffre existant en binaire.</p>
		<input class="qcm" name="qcm1" type="radio">0<br><p class="faux">Certainement pas.<br>Si j'ai 1 chocolat en binaire, je n'en ai pas moins en décimal.</p>
		<input class="qcm" name="qcm1" type="radio">C'est impossible de le calculer<br><p class="faux">Si, c'est possible.</p>
	  </form>
	  </fieldset>
	  
	  <fieldset class="qcu">
		<form action="javascript:void(0)" >
		  Dans l'animation, il est indiqué que 1+1=10 (binaire); que 10+1=11 (binaire); et finalement que 11+1=100 (binaire).<br />
		  Quelle est la valeur de 100b dans le système décimal?<br>
		  <input class="qcm" name="qcm1" type="radio">100<br><p class="faux">Réponse incorrecte.<br>La valeur correspondante dans le système décimal est bien inférieure.</p>
		  <input class="qcm" name="qcm1" type="radio">2<br><p class="faux">Réponse fausse.<br>Souviens-toi que 1+1 = deux (que ce soit en binaire ou en décimal) même si "deux", en binaire, s'écrit 10.<br>Ceci est une piste de réflexion</p>
		  <input class="qcm" name="qcm1" type="radio">3<br><p class="faux">Incorrect.<br>Réalise mentalement les différentes additions notées dans la question.</p>
		  <input class="qcm" name="qcm1" type="radio">4<br><p class="vrai">Bravo, tu sais compter comme un super-ordinateur.<br>1+1=10 (deux)<br>10+1=11 (trois)<br>11+1=100 (quatre) </p>
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
