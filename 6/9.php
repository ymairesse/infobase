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
<h2>Le code source et le logiciel compil�</h2>
<div class="info"><p><strong>Un ordinateur</strong> ne peut pas comprendre autre chose que le code binaire form� de "0" et de "1".<br>
<strong>Un humain</strong> peut difficilement lire ou r�diger un programme d'ordinateur �crit sous forme de "0" et de "1".<br>
Comment un humain peut-il, malgr� tout, se faire comprendre des ordinateurs?</p>
<p>La solution au probl�me est expliqu�e dans l'animation ci-dessous. �tudie-la attentivement, �tape par �tape.</p>
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
<p>Les trois id�es � retenir sont:</p>
	<ul>
		<li>la notion de "Code Source"</li>
		<li>la notion de "Code Binaire"</li>
		<li>la notion de compilation</li>
	</ul>
<p>D�taillons cela ci-dessous.</p>
<h3>Les ordinateurs traduisent le Code Source</h3>
<h4>Le binaire: l'objectif<br></h4>
<p>Un programme d'ordinateur se pr�sente comme sur l'illustration ci-dessous&nbsp;: </p>
<p style="text-align: center;"> <code>00110110 11010101 10100011 00111001&nbsp;10011000 10101100<br>
00100101 01011010 01110110 11011010&nbsp;10110111 10101101</code></p>
<p>Il est beaucoup trop difficile de programmer en "0" et en "1". Aujourd'hui, tous les programmeurs travaillent dans des langages beaucoup plus proches d'une langue humaine mais d�j� assez proche du langage d'une machine.</p>
<div class="encadre">
	Ce sont les <strong>langages d'ordinateurs</strong>.<br>Il existe une multitude de langages d'ordinateurs, � mi-chemin entre le langage humain et le langage binaire: Fortran, C, Basic, Pascal, LOGO, PHP,...
</div>
<p>Le texte �crit dans un de ces langages est appel� "Code Source". Il ne peut pas encore �tre compris directement par un ordinateur.</p>
<p>Mais, on a appris aux ordinateurs � traduire ces langages en code binaire.</p>
<h4>Le code source et sa traduction.</h4>
<div class="encadre attention">Le <strong>code source</strong> est un texte r�dig� dans un langage assez compr�hensible pour les humains et qui doit �tre traduit en <strong>code&nbsp; binaire</strong> pour �tre compris par les ordinateurs.<br>
La traduction du code source en code binaire est appel�e <strong>compilation</strong>*.
</div>
<p><img class="imagedroite" style="width: 512px; height: 165px;" alt="Compilation" src="images/compilation.jpg">Le code binaire peut ensuite �tre transmis � d'autres ordinateurs qui pourront l'ex�cuter.</p>
<p>La compilation ne doit �tre faite qu'<strong>une seule fois</strong>, tant que le code source n'est pas modifi�.</p>
<p>Si des am�liorations au programme sont n�cessaires, on modifie le code source et on recommence la compilation.<br>
On obtient alors une nouvelle version en code binaire.</p>
<p class="micro">* Pour simplifier, on ne parlera pas ici de l'interpr�tation qui est une autre fa�on de traduire.</p>
</div>
<h3>Questions de r�vision</h3>
	<form class="qcu" action="">Un ordinateur comprend mieux<br>
		<input class="qcm" type="radio">Des instructions en anglais<br>
		<p class="faux">Non.<br>Les ordinateurs sont actuellement encore incapables de comprendre une langue humaine</p>
		<input class="qcm" type="radio">Des instructions en langage binaire (0 et 1)<br>
		<p class="vrai">R�ponse correcte.<br>Exact. C'est d'ailleurs le seul langage qu'un ordinateur puisse comprendre.</p>
		<input class="qcm" type="radio">Des instructions exprim�es en langage d'ordinateur (Fortran, LOGO,...)<br>

		<p class="faux">R�ponse fausse.<br>Ces langages d'ordinateurs sont des interm�diaires vers le langage binaire</p>
		<input class="qcm" type="radio">Quand on lui parle doucement<br>
		<p class="faux">Parler doucement est une bonne id�e. Mais cela n'aide pas un ordinateur � comprendre.</p>
	</form>
	<form class="qcu" action="">Lorsque l'on r�dige un programme pour un ordinateur, on utilise<br>
		<input class="qcm" type="radio">Un langage d'ordinateur comme C, Basic, PHP,...<br>
		<p class="vrai">Correct.<br>Les programmeurs utilisent des langages d'ordinateurs qui sont � mi-chemin entre une langue humaine et des notations math�matiques.<br>
Il faut encore ensuite faire traduire les textes r�dig�s vers le langage binaire</p>
		<input class="qcm" type="radio">Le langage binaire (0 et 1), obligatoirement<br>
		<p class="vrai">R�ponse correcte.<br>Exact. C'est d'ailleurs le seul langage qu'un ordinateur puisse comprendre.</p>
		<input class="qcm" type="radio">De pr�f�rence l'anglais<br>
		<p class="faux">R�ponse fausse.<br>Ces langages d'ordinateurs sont des interm�diaires vers le langage binaire</p>
		<input class="qcm" type="radio">Le chinois, car beaucoup d'ordinateurs sont fabriqu�s en Chine<br>
		<p class="faux">R�ponse fausse<br>Les ordinateurs ne comprennent pas plus le chinois qu'une autre langue humaine.</p>
	</form>
	<form class="qcu" action="">Si l'on veut pouvoir modifier ais�ment un programme, il vaut mieux disposer de la version<br>
		<input class="qcm" type="radio">En langage binaire<br>
		<p class="faux">R�ponse fausse<br>Le texte du programme en 0 et en 1 est quasiment incompr�hensible pour un �tre humain. On ne peut pas travailler avec ce texte pour modifier un programme.</p>
		<input class="qcm" type="radio">Le code source, en langage d'ordinateur<br>
		<p class="vrai">R�ponse correcte.<br>Le code source est compr�hensible � des humains (comp�tents). Il est donc possible de le modifier.</p>
		<input class="qcm" type="radio">Le texte du programme r�dig� en anglais ou en fran�ais<br>
		<p class="faux">R�ponse fausse.<br>Il n'existe aucune version utilisable r�dig�e en langue humaine</p>
		<input class="qcm" type="radio">La question n'a pas de sens: c'est impossible de modifier un programme<br>
		<p class="faux">R�ponse fausse<br>Un programme peut toujours �tre revu pour �tre am�lior� ou pour supprimer des erreurs (des bugs)</p>
	</form>
	<form class="qcu" action="">La compilation, c'est<br>
		<input class="qcm" type="radio">La traduction du texte du programme binaire vers un langage d'ordinateur<br>
		<p class="faux">R�ponse fausse<br>On ne traduit (quasiment) jamais un programme en binaire vers un langage d'ordinateur.</p>
		<input class="qcm" type="radio">La traduction du programme r�dig� en anglais vers le fran�ais<br>
		<p class="faux">R�ponse fausse.<br>Les instructions r�dig�es en langues humaines sont inutilisables pour les ordinateurs.</p>
		<input class="qcm" type="radio">L'ajout, bout � bout, de diff�rents programmes<br>

		<p class="faux">R�ponse fausse.<br>Il faut vraiment revoir les informations donn�es plus haut.</p>
		<input class="qcm" type="radio">La traduction en langage binaire du texte du programme r�dig� en langage d'ordinateur<br>
		<p class="vrai">R�ponse exacte<br>Le programme r�dig� en langage d'ordinateur est traduit en langage binaire durant la compilation.</p>
	</form>
	<form class="qcu" action="">La compilation d'un programme doit se faire<br>
		<input class="qcm" type="radio">Avant chaque utilisation du programme<br>
		<p class="faux">R�ponse fausse<br>Il faut revoir les informations donn�es plus haut</p>
		<input class="qcm" type="radio">R�guli�rement, pendant le fonctionnement du programme<br>
		<p class="faux">R�ponse fausse.<br>Cela causerait des modifications du programme durant son fonctionnement.</p>
		<input class="qcm" type="radio">A chaque modification du code source<br>
		<p class="vrai">R�ponse exacte.<br>Si l'on veut profiter des am�liorations d'un programme, il doit �tre re-compil� apr�s chaque modification du code source.</p>
		<input class="qcm" type="radio">Jamais<br>
		<p class="faux">R�ponse fausse<br>Un programme non compil� n'est pas utilisable par un ordinateur.</p>
	</form>
	<form class="qcu" action="">Si je veux diffuser un programme, mais que je ne souhaite pas que les utilisateurs sachent comment il fonctionne<br>
		<input class="qcm" type="radio">Je dois distribuer le code binaire uniquement<br>
		<p class="vrai">R�ponse exacte<br>Avec le code binaire, ceux qui re�oivent mon programme pourront le faire fonctionner mais pourront tr�s difficilement comprendre comment il fonctionne (sauf s'ils lisent le binaire). Ce qui est extr�mement complexe.</p>
		<input class="qcm" type="radio">Le code source uniquement<br>
		<p class="faux">R�ponse fausse.<br>Si je distribue le code source, un informaticien qui conna�t le langage d'ordinateur utilis� pourra lire ce code et tenter de comprendre comment il fonctionne.</p>
		<input class="qcm" type="radio">Il n'y a aucun moyen d'emp�cher les utilisateurs de comprendre comment le programme fonctionne<br>
		<p class="faux">R�ponse fausse.<br>Il y a moyen de rendre l'�tude du fonctionnement du programme tr�s difficile ou presque impossible si l'on ne distribue que le code source.<br>
		Mais quelqu'un qui dispose de beaucoup de connaissances en informatique pourra peut-�tre comprendre le fonctionnement du code binaire.</p>
	</form>
	<form class="qcu" action="">Si je veux diffuser un programme et que je souhaite que les utilisateurs puissent l'am�liorer:<br>
		<input class="qcm" type="radio">Je dois distribuer le code binaire uniquement<br>
		<p class="faux">R�ponse fausse<br>Avec le code binaire, ceux qui re�oivent mon programme pourront tr�s difficilement l'�tudier et le modifier.<br>
Il y a donc une meilleure r�ponse encore � cette question. Laquelle?</p>
		<input class="qcm" type="radio">Je dois diffuser le code source du programme<br>
		<p class="vrai">R�ponse correcte.<br>Le code source est assez proche du langage humain. Si un utilisateur modifie le code source, il pourra recompiler le programme avec ses am�liorations.</p>
		<input class="qcm" type="radio">Il n'y a aucun moyen de permettre aux utilisateurs d'am�liorer un programme, m�me s'ils sont tr�s cal�s.<br>
		<p class="faux">R�ponse fausse.<br>Il existe une version du programme que des humains peuvent assez ais�ment modifier et am�liorer. Laquelle?</p>
	</form>
	<form class="qcu" action="">Si un malfaiteur veut diffuser un programme malfaisant (un virus,...) pour faire un maximum de d�g�ts et rendre difficile le travail des �diteurs d'antivirus<br>
		<input class="qcm" type="radio">Il doit distribuer le code binaire uniquement<br>
		<p class="vrai">R�ponse correcte<br>Avec le code binaire seulement, les concepteurs d'antivirus auront souvent de la peine � �tudier le fonctionnement du programme malfaisant et � trouver un rem�de.</p>
		<input class="qcm" type="radio">Il doit distribuer le code source uniquement<br>
		<p class="faux">R�ponse fausse.<br>Le code source est assez simple � �tudier pour comprendre le fonctionnement du virus. Et il faudrait encore que les utilisateurs compilent le programme pour pouvoir l'utiliser...<br>Personne ne sera sans doute assez fou pour le faire.</p>
	</form>
<p>Quand tu as r�pondu � toutes les questions et bien compris les r�ponses, passe � la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
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
