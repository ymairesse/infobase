<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">

<title>Les programmes d'ordinateur</title>
</head>
<body>
<div id="conteneur">
<?php 
require ("./top.inc.php");
require ("../../dewplayer.inc.php");
?>
<div id="texte">
<h2>Le code source et le logiciel compilé</h2>
<div class="info"><p><strong>Un ordinateur</strong> ne peut pas comprendre autre chose que le code binaire formé de "0" et de "1".<br>
<strong>Un humain</strong> peut difficilement lire ou rédiger un programme d'ordinateur écrit sous forme de "0" et de "1".<br>
Comment un humain peut-il, malgré tout, se faire comprendre des ordinateurs?</p>
<p>La solution au problème est expliquée dans l'animation ci-dessous. Étudie-la attentivement, étape par étape.</p>
</div>
<ul id="slider1">
	<li><img src="images/compil/compil0.jpg" alt="compil"></li>
	<li><img src="images/compil/compil1.jpg" alt="compil"></li>
	<li><img src="images/compil/compil2.jpg" alt="compil"></li>
	<li><img src="images/compil/compil3.jpg" alt="compil"></li>
	<li><img src="images/compil/compil4.jpg" alt="compil"></li>
	<li><img src="images/compil/compil5.jpg" alt="compil"></li>
	<li><img src="images/compil/compil6.jpg" alt="compil"></li>
	<li><img src="images/compil/compil7.jpg" alt="compil"></li>
	<li><img src="images/compil/compil8.jpg" alt="compil"></li>
	<li><img src="images/compil/compil9.jpg" alt="compil"></li>
	<li><img src="images/compil/compil10.jpg" alt="compil"></li>
	<li><img src="images/compil/compil11.jpg" alt="compil"></li>
	<li><img src="images/compil/compil12.jpg" alt="compil"></li>
	<li><img src="images/compil/compil13.jpg" alt="compil"></li>
</ul>
<div class="info">
<p>Les trois idées à retenir sont:</p>
	<ul>
		<li>la notion de "Code Source"</li>
		<li>la notion de "Code Binaire"</li>
		<li>la notion de compilation</li>
	</ul>
<p>Détaillons cela ci-dessous.</p>
<h3>Les ordinateurs traduisent le Code Source</h3>
<h4>Le binaire: l'objectif<br></h4>
<p>Un programme d'ordinateur se présente comme sur l'illustration ci-dessous&nbsp;: </p>
<p style="text-align: center;"> <code>00110110 11010101 10100011 00111001&nbsp;10011000 10101100<br>
00100101 01011010 01110110 11011010&nbsp;10110111 10101101</code></p>
<p>Il est beaucoup trop difficile de programmer en "0" et en "1". Aujourd'hui, tous les programmeurs travaillent dans des langages beaucoup plus proches d'une langue humaine mais déjà assez proche du langage d'une machine.</p>
<div class="encadre">
	Ce sont les <strong>langages d'ordinateurs</strong>.<br>Il existe une multitude de langages d'ordinateurs, à mi-chemin entre le langage humain et le langage binaire: Fortran, C, Basic, Pascal, LOGO, PHP,...
</div>
<p>Le texte écrit dans un de ces langages est appelé "Code Source". Il ne peut pas encore être compris directement par un ordinateur.</p>
<p>Mais, on a appris aux ordinateurs à traduire ces langages en code binaire.</p>
<h4>Le code source et sa traduction.</h4>
<div class="encadre attention">Le <strong>code source</strong> est un texte rédigé dans un langage assez compréhensible pour les humains et qui doit être traduit en <strong>code&nbsp; binaire</strong> pour être compris par les ordinateurs.<br>
La traduction du code source en code binaire est appelée <strong>compilation</strong>*.
</div>
<p><img class="imagedroite" style="width: 512px; height: 165px;" alt="Compilation" src="images/compilation.jpg">Le code binaire peut ensuite être transmis à d'autres ordinateurs qui pourront l'exécuter.</p>
<p>La compilation ne doit être faite qu'<strong>une seule fois</strong>, tant que le code source n'est pas modifié.</p>
<p>Si des améliorations au programme sont nécessaires, on modifie le code source et on recommence la compilation.<br>
On obtient alors une nouvelle version en code binaire.</p>
<p class="micro">* Pour simplifier, on ne parlera pas ici de l'interprétation qui est une autre façon de traduire.</p>
</div>
<h3>Questions de révision</h3>
	<form class="qcu" action="">Un ordinateur comprend mieux<br>
		<input class="qcm" type="radio">Des instructions en anglais<br>
		<p class="faux">Non.<br>Les ordinateurs sont actuellement encore incapables de comprendre une langue humaine</p>
		<input class="qcm" type="radio">Des instructions en langage binaire (0 et 1)<br>
		<p class="vrai">Réponse correcte.<br>Exact. C'est d'ailleurs le seul langage qu'un ordinateur puisse comprendre.</p>
		<input class="qcm" type="radio">Des instructions exprimées en langage d'ordinateur (Fortran, LOGO,...)<br>

		<p class="faux">Réponse fausse.<br>Ces langages d'ordinateurs sont des intermédiaires vers le langage binaire</p>
		<input class="qcm" type="radio">Quand on lui parle doucement<br>
		<p class="faux">Parler doucement est une bonne idée. Mais cela n'aide pas un ordinateur à comprendre.</p>
	</form>
	<form class="qcu" action="">Lorsque l'on rédige un programme pour un ordinateur, on utilise<br>
		<input class="qcm" type="radio">Un langage d'ordinateur comme C, Basic, PHP,...<br>
		<p class="vrai">Correct.<br>Les programmeurs utilisent des langages d'ordinateurs qui sont à mi-chemin entre une langue humaine et des notations mathématiques.<br>
Il faut encore ensuite faire traduire les textes rédigés vers le langage binaire</p>
		<input class="qcm" type="radio">Le langage binaire (0 et 1), obligatoirement<br>
		<p class="vrai">Réponse correcte.<br>Exact. C'est d'ailleurs le seul langage qu'un ordinateur puisse comprendre.</p>
		<input class="qcm" type="radio">De préférence l'anglais<br>
		<p class="faux">Réponse fausse.<br>Ces langages d'ordinateurs sont des intermédiaires vers le langage binaire</p>
		<input class="qcm" type="radio">Le chinois, car beaucoup d'ordinateurs sont fabriqués en Chine<br>
		<p class="faux">Réponse fausse<br>Les ordinateurs ne comprennent pas plus le chinois qu'une autre langue humaine.</p>
	</form>
	<form class="qcu" action="">Si l'on veut pouvoir modifier aisément un programme, il vaut mieux disposer de la version<br>
		<input class="qcm" type="radio">En langage binaire<br>
		<p class="faux">Réponse fausse<br>Le texte du programme en 0 et en 1 est quasiment incompréhensible pour un être humain. On ne peut pas travailler avec ce texte pour modifier un programme.</p>
		<input class="qcm" type="radio">Le code source, en langage d'ordinateur<br>
		<p class="vrai">Réponse correcte.<br>Le code source est compréhensible à des humains (compétents). Il est donc possible de le modifier.</p>
		<input class="qcm" type="radio">Le texte du programme rédigé en anglais ou en français<br>
		<p class="faux">Réponse fausse.<br>Il n'existe aucune version utilisable rédigée en langue humaine</p>
		<input class="qcm" type="radio">La question n'a pas de sens: c'est impossible de modifier un programme<br>
		<p class="faux">Réponse fausse<br>Un programme peut toujours être revu pour être amélioré ou pour supprimer des erreurs (des bugs)</p>
	</form>
	<form class="qcu" action="">La compilation, c'est<br>
		<input class="qcm" type="radio">La traduction du texte du programme binaire vers un langage d'ordinateur<br>
		<p class="faux">Réponse fausse<br>On ne traduit (quasiment) jamais un programme en binaire vers un langage d'ordinateur.</p>
		<input class="qcm" type="radio">La traduction du programme rédigé en anglais vers le français<br>
		<p class="faux">Réponse fausse.<br>Les instructions rédigées en langues humaines sont inutilisables pour les ordinateurs.</p>
		<input class="qcm" type="radio">L'ajout, bout à bout, de différents programmes<br>

		<p class="faux">Réponse fausse.<br>Il faut vraiment revoir les informations données plus haut.</p>
		<input class="qcm" type="radio">La traduction en langage binaire du texte du programme rédigé en langage d'ordinateur<br>
		<p class="vrai">Réponse exacte<br>Le programme rédigé en langage d'ordinateur est traduit en langage binaire durant la compilation.</p>
	</form>
	<form class="qcu" action="">La compilation d'un programme doit se faire<br>
		<input class="qcm" type="radio">Avant chaque utilisation du programme<br>
		<p class="faux">Réponse fausse<br>Il faut revoir les informations données plus haut</p>
		<input class="qcm" type="radio">Régulièrement, pendant le fonctionnement du programme<br>
		<p class="faux">Réponse fausse.<br>Cela causerait des modifications du programme durant son fonctionnement.</p>
		<input class="qcm" type="radio">A chaque modification du code source<br>
		<p class="vrai">Réponse exacte.<br>Si l'on veut profiter des améliorations d'un programme, il doit être re-compilé après chaque modification du code source.</p>
		<input class="qcm" type="radio">Jamais<br>
		<p class="faux">Réponse fausse<br>Un programme non compilé n'est pas utilisable par un ordinateur.</p>
	</form>
	<form class="qcu" action="">Si je veux diffuser un programme, mais que je ne souhaite pas que les utilisateurs sachent comment il fonctionne<br>
		<input class="qcm" type="radio">Je dois distribuer le code binaire uniquement<br>
		<p class="vrai">Réponse exacte<br>Avec le code binaire, ceux qui reçoivent mon programme pourront le faire fonctionner mais pourront très difficilement comprendre comment il fonctionne (sauf s'ils lisent le binaire). Ce qui est extrêmement complexe.</p>
		<input class="qcm" type="radio">Le code source uniquement<br>
		<p class="faux">Réponse fausse.<br>Si je distribue le code source, un informaticien qui connaît le langage d'ordinateur utilisé pourra lire ce code et tenter de comprendre comment il fonctionne.</p>
		<input class="qcm" type="radio">Il n'y a aucun moyen d'empêcher les utilisateurs de comprendre comment le programme fonctionne<br>
		<p class="faux">Réponse fausse.<br>Il y a moyen de rendre l'étude du fonctionnement du programme très difficile ou presque impossible si l'on ne distribue que le code source.<br>
		Mais quelqu'un qui dispose de beaucoup de connaissances en informatique pourra peut-être comprendre le fonctionnement du code binaire.</p>
	</form>
	<form class="qcu" action="">Si je veux diffuser un programme et que je souhaite que les utilisateurs puissent l'améliorer:<br>
		<input class="qcm" type="radio">Je dois distribuer le code binaire uniquement<br>
		<p class="faux">Réponse fausse<br>Avec le code binaire, ceux qui reçoivent mon programme pourront très difficilement l'étudier et le modifier.<br>
Il y a donc une meilleure réponse encore à cette question. Laquelle?</p>
		<input class="qcm" type="radio">Je dois diffuser le code source du programme<br>
		<p class="vrai">Réponse correcte.<br>Le code source est assez proche du langage humain. Si un utilisateur modifie le code source, il pourra recompiler le programme avec ses améliorations.</p>
		<input class="qcm" type="radio">Il n'y a aucun moyen de permettre aux utilisateurs d'améliorer un programme, même s'ils sont très calés.<br>
		<p class="faux">Réponse fausse.<br>Il existe une version du programme que des humains peuvent assez aisément modifier et améliorer. Laquelle?</p>
	</form>
	<form class="qcu" action="">Si un malfaiteur veut diffuser un programme malfaisant (un virus,...) pour faire un maximum de dégâts et rendre difficile le travail des éditeurs d'antivirus<br>
		<input class="qcm" type="radio">Il doit distribuer le code binaire uniquement<br>
		<p class="vrai">Réponse correcte<br>Avec le code binaire seulement, les concepteurs d'antivirus auront souvent de la peine à étudier le fonctionnement du programme malfaisant et à trouver un remède.</p>
		<input class="qcm" type="radio">Il doit distribuer le code source uniquement<br>
		<p class="faux">Réponse fausse.<br>Le code source est assez simple à étudier pour comprendre le fonctionnement du virus. Et il faudrait encore que les utilisateurs compilent le programme pour pouvoir l'utiliser...<br>Personne ne sera sans doute assez fou pour le faire.</p>
	</form>
<p>Quand tu as répondu à toutes les questions et bien compris les réponses, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
</div>
<?php include ("../../pied.inc.php"); ?> </div>
  <script type="text/javascript" src="../../js/anythingSlider/js/jquery.easing.1.2.js"></script>
  <script type="text/javascript" src="../../js/anythingSlider/js/jquery.anythingslider.js"></script>
  <link rel="stylesheet" type="text/css" href="../../js/anythingSlider/css/anythingslider.css">
	<script type="text/javascript">
		$(document).ready(function() {
			$('#slider1').anythingSlider({
				startStopped    : true,
				width           : 800,
				height			: 565,
				theme           : 'minimalist-round',
				easing: 'swing',
				infiniteSlides : true,
				buildArrows : true,
				buildNavigation : true,
				stopAtEnd : true,
				infiniteSlides: false,
				resizeContents : false
		});
		});
	</script>
  <script type="text/javascript">
    $(document).ready(function (){
		$(".qcm").attr("checked",false);
        $(".qcm").click(function(){
            $(this).next().next().show(300);
        })
    })
  </script>
</body>
</html>
