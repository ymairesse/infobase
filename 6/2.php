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
<h2>Qu'est-ce qu'un programme d'ordinateur?</h2>
<h3><img style="width: 300px; height: 155px; float: right;" title="microprocesseur" src="images/pentium.jpg" alt="Microprocesseur">Que
peut faire un ordinateur?</h3>
<div class="info">
<p>Un ordinateur est une machine dotée d'un <strong>microprocesseur</strong> capable d'exécuter <strong>très rapidement</strong> des instructions <strong>très simples</strong>.</p>
<p>Exemple (très simplifié) de programme d'ordinateur:</p>
<div class="encadre"> 1. Attendre la frappe d'un nombre au clavier et le déposer dans la case mémoire n°10<br>
2. Attendre la frappe d'un nombre au clavier et le déposer dans la case mémoire n°11<br>
3. Additionner les contenus des cases n°10 et n°11 et déposer le résultat dans la case n°12<br>
4. Ecrire le contenu de la case n°12 à l'écran.... </div>
<p>En fait, un programme d'ordinateur ne peut pas être écrit en français. Il doit être écrit dans le langage très simple que "&nbsp;comprend&nbsp;" l'ordinateur. Dans ce langage, chaque instruction est codée sous la forme d'un nombre.</p>
<p>Pour que le programme d'ordinateur puisse être exécuté par le processeur, il doit être <strong>chargé dans la mémoire centrale</strong>.</p>
</div>
<h3>Fonctionnement de l'ordinateur</h3>
<div class="info">
<p>L'animation ci-dessous présente un schéma de fonctionnement de l'ordinateur.</p>
<ul>
  <li>Les programmes sont stockés sur le disque dur.</li>
  <li>Pour être exécuté, un programme doit être envoyé dans la mémoire vive (RAM).</li>
  <li>Le processeur (CPU) lit et exécute les instructions trouvées dans la mémoire vive.</li>
  <li>Le processeur peut également déposer des informations dans la mémoire vive: les résultats de ses calculs, par exemple.</li>
  <li>Lorsque le traitement est terminé, on peut envoyer les résultats obtenus sur le disque dur.</li>
</ul>
</div>
<ul id="slider1">
	<li><img src="images/ramcpu/hdcpu0.jpg" alt="RAM CPU HD"></li>
	<li><img src="images/ramcpu/hdcpu1.jpg" alt="RAM CPU HD"></li>
	<li><img src="images/ramcpu/hdcpu2.jpg" alt="RAM CPU HD"></li>
	<li><img src="images/ramcpu/hdcpu3.jpg" alt="RAM CPU HD"></li>
	<li><img src="images/ramcpu/hdcpu4.jpg" alt="RAM CPU HD"></li>
	<li><img src="images/ramcpu/hdcpu5.jpg" alt="RAM CPU HD"></li>
	<li><img src="images/ramcpu/hdcpu6.jpg" alt="RAM CPU HD"></li>
	<li><img src="images/ramcpu/hdcpu7.jpg" alt="RAM CPU HD"></li>
</ul>

<form action="" class="qcu"> Lorsque l'on exécute un programme d'ordinateur<br>
  <input class="qcm" type="radio">Tout se passe dans le disque dur<br>
  <p class="faux">Réponse fausse.<br>
Le disque dur ne sert qu'à stocker les programmes en attendant qu'on les exécute.</p>
  <input class="qcm" type="radio">Tout se passe dans la mémoire vive<br>
  <p class="faux">Réponse fausse.<br>
La mémoire vive ne peut que retenir des informations.<br>
Elle ne peut exécuter des instructions.</p>
  <input class="qcm" type="radio">Tout se passe au niveau du processeur<br>
  <p class="faux">Réponse pas tout à fait correcte.<br>
Le processeur est responsable de l'exécution, mais tout seul, il ne peut rien faire.</p>
  <input class="qcm" type="radio">Tout se passe en coopération entre la mémoire vive et le processeur<br>
  <p class="vrai">Réponse correcte.</p>
</form>

<form action="" class="qcu"> Le processeur exécute les instructions qu'il trouve<br>
  <input class="qcm" type="radio">Sur le disque dur<br>
  <p class="faux">Réponse fausse.<br>
Il n'y a pas de connexion directe entre le processeur et le disque dur.</p>
  <input class="qcm" type="radio">Dans la mémoire RAM<br>
  <p class="vrai">Réponse correcte.<br>
Ces instructions doivent donc d'abord être transférées depuis le disque dur.</p>
  <input class="qcm" type="radio">Dans sa mémoire interne<br>
  <p class="faux">Réponse fausse.<br>
Le processeur dispose souvent d'un peu de mémoire interne (appelée "mémoire cache"), mais les programmes à exécuter sont dans une autre partie de l'ordinateur.</p>
</form>

<form action="" class="qcu"> A la fin de l'exécution d'un programme<br>
  <input class="qcm" type="radio">Le programme est à nouveau écrit sur le disque dur.<br>
  <p class="faux">Réponse fausse.<br>
Le programme n'a jamais quitté le disque dur. On en a pris une copie qui a été transférée en mémoire.<br>
Il n'est donc pas nécessaire de recopier le programme sur le disque dur.</p>
  <input class="qcm" type="radio">Les résultats des opérations sont écrits sur le disque dur<br>
  <p class="vrai">Réponse correcte.<br>
Si on le souhaite, on peut enregistrer le travail effectué: on a écrit un texte, réalisé un dessin,...</p>
  <input class="qcm" type="radio">Un nouveau programme est écrit sur le disque dur<br>
  <p class="faux">Réponse fausse.<br>
La réalisation d'une recette de cuisine ne change pas la recette.<br>
L'exécution d'un programme ne change pas le programme.</p>
</form>

<h3><a name="LOGO"></a>A quoi ressemble un programme d'ordinateur</h3>
<div class="info">
<p><?php dewplay("2.mp3");?>Généralement, les programmes d'ordinateur sont souvent élaborés par des informaticiens. Leur travail consiste donc à exprimer dans le langage d'ordinateur la suite des ordres nécessaires pour réaliser une certaine action.</p>
<p class="questions">Mais dites, si j'ai bien retenu les leçons précédentes... Les ordinateurs ne comprennent que des 0 et des 1.<br>
Les informaticiens arrivent donc à parler en 0 et en 1 à leurs ordinateurs? Ce sont des mutants?</p>
<p class="reponses"><img class="imagedroite" src="images/kturtle.png" style="width: 464px; height: 315px;" alt="Langage logo">En fait, les informaticiens trichent souvent un peu. Ils utilisent des  programmes qui traduisent en 0 et en 1 des instructions données dans un langage intermédiaire, qui n'est ni leur langue maternelle, ni des 0 et des 1.</p>
<p>Dans l'illustration ci-contre, un exemple de programme rédigé en langage LOGO. C'est un langage très simple, souvent utilisé pour apprendre à programmer, en cours de technologie, par exemple.</p>
<ul>
  <li>Les instructions figurent dans la partie gauche de la fenêtre. Celles-ci permettent de diriger une "tortue" qui dessine à l'écran.</li>
  <li>Dans la partie droite, on voit le trait obtenu après exécution des instructions.</li>
</ul>
<p>Le langage LOGO ressemble encore très fort à une langue humaine. C'est un langage informatique très simple. D'autres langages informatiques sont moins simples (<a href="http://fr.wikipedia.org/wiki/C%2B%2B#.C2.AB_Hello.2C_world_.C2.BB" target="_blank">Python</a>, <a href="http://fr.wikipedia.org/wiki/C%2B%2B#.C2.AB_Hello.2C_world_.C2.BB" target="_blank">C++</a>, <a href="http://fr.wikipedia.org/wiki/Perl_%28langage%29#Exemples_de_code" target="_blank">Perl</a>,...)</p>
<p>Les programmes d'ordinateur peuvent ensuite être enregistrés sur des disquettes ou des CD-ROMs. Ils sont alors distribués aux personnes qui les utiliseront.</p>
</div>
<p class="questions">Distribués? Vous voulez dire quoi par là? C'est distribution gratuite?</p>
<p class="reponses">Tout dépend des cas. Certains logiciels sont disponibles dans le commerce. D'autres sont conçus "sur mesure" par des sociétés (des banques, des commerces,...) qui rémunèrent les
programmeurs. D'autres encore sont disponibles gratuitement. Nous enreparlerons plus tard.</p>

<form action="" class="qcu"> Dans l'illustration ci-dessus, les informations qui figurent dans le cadre gauche de l'interface LOGO<br>
  <input class="qcm" type="radio">Forment un programme<br>
  <p class="vrai">Exact.<br>Il s'agit d'une liste d'instructions à exécuter dans un ordre bien défini</p>
  <input class="qcm" type="radio">Ne forment pas un programme<br>
  <p class="faux">Réponse fausse.<br>Qu'est-ce qu'un programme?</p>
  <input class="qcm" type="radio">Il est impossible de répondre à cette question<br>
  <p class="faux">Réponse fausse.<br>Il est possible de répondre à la question</p>
</form>

<p>Quand tu as répondu à la question et bien compris la réponse, passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>
</div>
<?php include ("../../pied.inc.php");?> </div>
  <script type="text/javascript" src="../../js/anythingSlider/js/jquery.easing.1.2.js"></script>
  <script type="text/javascript" src="../../js/anythingSlider/js/jquery.anythingslider.js"></script>
  <link rel="stylesheet" type="text/css" href="../../js/anythingSlider/css/anythingslider.css">
	<script type="text/javascript">
		$(document).ready(function() {
			$('#slider1').anythingSlider({
				startStopped    : true,
				width           : 800,
				height			: 640,
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
        $(".qcm").click(function(){
            $(this).next().next().show(300);
        })
    })
  </script>
</body></html>
