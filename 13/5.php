<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title> Comment les moteurs de recherche cherchent </title>
  <link rel="timesheet" type="application/smil+xml" href="5/timesheet.smil">
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
		<h2> Analyse des résultats d'une recherche</h2>
<!-- id="slideshow" -->
			<div id="slideshow" style="position: relative; height:600px">
				<header id="slide01">	<img src="5/img0.jpg" alt="img">	</header>
				<div id="slide02">		<img src="5/img1.jpg" alt="img">	</div>
				<div id="slide03">		<img src="5/img2.jpg" alt="img">	</div>
				<div id="slide04">		<img src="5/img3.jpg" alt="img">	</div>
				<div id="slide05">		<img src="5/img4.jpg" alt="img">	</div>
				<div id="slide06">		<img src="5/img5.jpg" alt="img">	</div>
				<div id="slide07">		<img src="5/img6.jpg" alt="img">	</div>
				<div id="slide08">		<img src="5/img7.jpg" alt="img">	</div>
				<div id="slide09">		<img src="5/img8.jpg" alt="img">	</div>
				<div id="slide10">		<img src="5/img9.jpg" alt="img">	</div>
				<div id="slide11">		<img src="5/img10.jpg" alt="img">	</div>
				<footer id="slide12">		<img src="5/img11.jpg" alt="img">	</footer>
			</div>
			<!-- id="slideshow" -->
			
			<audio id="talk" preload>
				<source type="audio/mp3" src="5/01.mp3" />
				<source type="audio/ogg" src="5/01.ogg" />
			</audio>
			
			<!-- id="timeController" -->
			<nav id="timeController" class="smil-timeController">
				  
				<!-- Table of Contents -->
				<div class="smil-toc" style="display: none;">
					<ul class="smil-tocList">
						<li><a href="#slide01"> Comment trouver avec les moteurs de recherche </a></li>
						<li><a href="#slide02"> La question initiale </a></li>
						<li><a href="#slide03"> La question en langue naturelle donne de mauvais résultats </a></li>
						<li><a href="#slide04"> Sélection de mots-clés </a></li>
						<li><a href="#slide05"> Quand les résultats ne sont pas bons </a></li>
						<li><a href="#slide06"> Meilleure sélection de mots-clés </a></li>
						<li><a href="#slide07"> Analyse des résultats: les publicités </a></li>
						<li><a href="#slide08"> Les publicités sont parfois sans intérêt </a></li>
						<li><a href="#slide09"> Tous les résultats ne sont pas pertinents </a></li>
						<li><a href="#slide10"> Examiner un résultat de recherche </a></li>
						<li><a href="#slide11"> Quelles sont les meilleures pages? </a></li>
						<li><a href="#slide12"> Synthèse </a></li>
						
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
		
<!--		
<div class="info">
	<p>Lorsque l'on a reçu les résultats d'une requête sur un moteur de recherche, il faut toujours les analyser afin de trouver les meilleurs résultats <strong>pour nous</strong>.</p>
	<p>Ci-dessous, une page typique de résultats renvoyés par le moteur de recherche de Google. La recherche portait sur les endroits où l'on peut <strong>trouver des fleurs à Bruxelles</strong>.</p>
	<p><img src="images/analyseGoogle.jpg" style="width: 788px; height: 602px;" alt="Résultats Google"></p>
	
	<h4>Les publicités</h4>
	<ul>
	  <li>En haut de la page figurent une série de liens publicitaires. Les sites qui y figurent ont payé pour s'y trouver lorsque certains mots-clés sont utilisés.</li>
	  <li>Le plan en haut à droite est également une publicité pour différentes boutiques que l'on peut trouver dans la ville. Les références des boutiques figurent dans les résultats.</li>
	  <li>À droite de la page figure une troisième zone de liens publicitaires payants.</li>
	</ul>
	
	<span class="micro">Curieusement, deux liens publicitaires sont au Canada. La raison en est qu'une recherche juste précédente portait sur des vendeurs de voitures au Québec.</span>
	
	<h4>Les résultats non publicitaires</h4>
	<p>En principe, les autres résultats ne sont pas des publicités payantes. Un exemple de résultat non publicitaire sur cette requête:</p>
	<p><img src="images/analyseGoogle2.png" style="width: 568px; height: 74px;" alt="Résultat Google"></p>
	<ol>
	  <li>Sur la première ligne, en bleu, le <strong>titre de la page</strong> nous donne une bonne indication de son contenu, s'il a été bien rédigé par le responsable du site web.</li>
	  <li>Ensuite vient un <strong>résumé</strong> du contenu de la page. Ce résumé doit toujours être lu attentivement et comparé aux résumés des autres résultats trouvés. Souvent, il permettra de trouver la meilleure page ou le meilleur site.</li>
	  <li>L'<strong>adresse du site</strong> donne aussi une information. Dans l'exemple ci-dessus, il s'agit évidemment du site web officiel de la ville de Bruxelles.<br>
	  L'adresse du site permet souvent de se rendre compte s'il s'agit d'un site d'une institution, d'un site scientifique, d'un site web personnel,...</li>
	</ol>
</div>

<p class="questions">Vous me disiez que les meilleurs résultats arrivent en premier. C'est bien joli, mais je constate que vous voulez me vendre des publicités.</p>
<p class="reponses">Effectivement, il faut mettre une petite nuance. Sauf les publicités, les meilleurs résultats selon le moteur de recherche sont les premiers.</p>
<p class="questions">Alors, j'aimerais bien savoir ce qui fait que ces premiers résultats sont les meilleurs...</p>
<p class="reponses">Je vous propose donc d'examiner certains des critères. Mais tous ne sont pas connus; certains sont tenus secrets par les sites de moteurs de recherches.</p>

<h3>Qualité des résultats de recherche</h3>
<div class="info">
<p>Parmi les critères connus pour la qualité d'une page, selon la plupart des moteurs de recherche:</p>
<ul>
  <li>Le fait que les mots-clés figurent dans le <strong>titre</strong> de la page</li>
  <li>Le fait que les mots-clés apparaissent <strong>plusieurs fois</strong> dans les sous-titres ou même dans le texte de la page</li>
  <li>Le fait que les mots-clés apparaissent assez <strong>près l'un de l'autre</strong> dans la page</li>
  <li>Le fait que les mots clés apparaissent dans les <strong>balises "meta"</strong> de la page</li>
  <li>Un ou plusieurs mots-clés apparaissent <strong>dans l'adresse du site</strong></li>
  <li>Le fait que le <strong>site web soit renommé</strong> (beaucoup d'autres sites web font un lien vers ce site)</li>
  <li>Le <strong>nombre de clics enregistrés sur le lien</strong> lors d'une recherche sur ce moteur (le site est populaire)</li>
  <li>Le temps passé par l'utilisateur sur le site web sélectionné (si l'utilisateur revient très vite sur le moteur de recherche, c'est que le site web ne l'intéressait pas; s'il ne revient pas ou qu'il revient bien plus tard, c'est que le site était intéressant).</li>

  <li>...</li>
</ul>

</div>
		-->
<p class="questions">Conclusion: cela ne veut pas du tout dire que les pages trouvées seront bonnes selon mes critères...</p>
<p class="reponses">C'est tout à fait exact. C'est pourquoi il ne faut pas se contenter de la première page renvoyée par le moteur de recherche, mais qu'il faut poursuivre l'analyse ou changer la requête.</p>
<p>Quand tu as pris conscience qu'il faut analyser les résultats revoyés par un moteur de recherche avant leur utilisation, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
</div>
		
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
