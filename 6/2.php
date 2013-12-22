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
<p>Un ordinateur est une machine dot�e d'un <strong>microprocesseur</strong> capable d'ex�cuter <strong>tr�s rapidement</strong> des instructions <strong>tr�s simples</strong>.</p>
<p>Exemple (tr�s simplifi�) de programme d'ordinateur:</p>
<div class="encadre"> 1. Attendre la frappe d'un nombre au clavier et le d�poser dans la case m�moire n�10<br>
2. Attendre la frappe d'un nombre au clavier et le d�poser dans la case m�moire n�11<br>
3. Additionner les contenus des cases n�10 et n�11 et d�poser le r�sultat dans la case n�12<br>
4. Ecrire le contenu de la case n�12 � l'�cran.... </div>
<p>En fait, un programme d'ordinateur ne peut pas �tre �crit en fran�ais. Il doit �tre �crit dans le langage tr�s simple que "&nbsp;comprend&nbsp;" l'ordinateur. Dans ce langage, chaque instruction est cod�e sous la forme d'un nombre.</p>
<p>Pour que le programme d'ordinateur puisse �tre ex�cut� par le processeur, il doit �tre <strong>charg� dans la m�moire centrale</strong>.</p>
</div>
<h3>Fonctionnement de l'ordinateur</h3>
<div class="info">
<p>L'animation ci-dessous pr�sente un sch�ma de fonctionnement de l'ordinateur.</p>
<ul>
  <li>Les programmes sont stock�s sur le disque dur.</li>
  <li>Pour �tre ex�cut�, un programme doit �tre envoy� dans la m�moire vive (RAM).</li>
  <li>Le processeur (CPU) lit et ex�cute les instructions trouv�es dans la m�moire vive.</li>
  <li>Le processeur peut �galement d�poser des informations dans la m�moire vive: les r�sultats de ses calculs, par exemple.</li>
  <li>Lorsque le traitement est termin�, on peut envoyer les r�sultats obtenus sur le disque dur.</li>
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

<form action="" class="qcu"> Lorsque l'on ex�cute un programme d'ordinateur<br>
  <input class="qcm" type="radio">Tout se passe dans le disque dur<br>
  <p class="faux">R�ponse fausse.<br>
Le disque dur ne sert qu'� stocker les programmes en attendant qu'on les ex�cute.</p>
  <input class="qcm" type="radio">Tout se passe dans la m�moire vive<br>
  <p class="faux">R�ponse fausse.<br>
La m�moire vive ne peut que retenir des informations.<br>
Elle ne peut ex�cuter des instructions.</p>
  <input class="qcm" type="radio">Tout se passe au niveau du processeur<br>
  <p class="faux">R�ponse pas tout � fait correcte.<br>
Le processeur est responsable de l'ex�cution, mais tout seul, il ne peut rien faire.</p>
  <input class="qcm" type="radio">Tout se passe en coop�ration entre la m�moire vive et le processeur<br>
  <p class="vrai">R�ponse correcte.</p>
</form>

<form action="" class="qcu"> Le processeur ex�cute les instructions qu'il trouve<br>
  <input class="qcm" type="radio">Sur le disque dur<br>
  <p class="faux">R�ponse fausse.<br>
Il n'y a pas de connexion directe entre le processeur et le disque dur.</p>
  <input class="qcm" type="radio">Dans la m�moire RAM<br>
  <p class="vrai">R�ponse correcte.<br>
Ces instructions doivent donc d'abord �tre transf�r�es depuis le disque dur.</p>
  <input class="qcm" type="radio">Dans sa m�moire interne<br>
  <p class="faux">R�ponse fausse.<br>
Le processeur dispose souvent d'un peu de m�moire interne (appel�e "m�moire cache"), mais les programmes � ex�cuter sont dans une autre partie de l'ordinateur.</p>
</form>

<form action="" class="qcu"> A la fin de l'ex�cution d'un programme<br>
  <input class="qcm" type="radio">Le programme est � nouveau �crit sur le disque dur.<br>
  <p class="faux">R�ponse fausse.<br>
Le programme n'a jamais quitt� le disque dur. On en a pris une copie qui a �t� transf�r�e en m�moire.<br>
Il n'est donc pas n�cessaire de recopier le programme sur le disque dur.</p>
  <input class="qcm" type="radio">Les r�sultats des op�rations sont �crits sur le disque dur<br>
  <p class="vrai">R�ponse correcte.<br>
Si on le souhaite, on peut enregistrer le travail effectu�: on a �crit un texte, r�alis� un dessin,...</p>
  <input class="qcm" type="radio">Un nouveau programme est �crit sur le disque dur<br>
  <p class="faux">R�ponse fausse.<br>
La r�alisation d'une recette de cuisine ne change pas la recette.<br>
L'ex�cution d'un programme ne change pas le programme.</p>
</form>

<h3><a name="LOGO"></a>A quoi ressemble un programme d'ordinateur</h3>
<div class="info">
<p><?php dewplay("2.mp3");?>G�n�ralement, les programmes d'ordinateur sont souvent �labor�s par des informaticiens. Leur travail consiste donc � exprimer dans le langage d'ordinateur la suite des ordres n�cessaires pour r�aliser une certaine action.</p>
<p class="questions">Mais dites, si j'ai bien retenu les le�ons pr�c�dentes... Les ordinateurs ne comprennent que des 0 et des 1.<br>
Les informaticiens arrivent donc � parler en 0 et en 1 � leurs ordinateurs? Ce sont des mutants?</p>
<p class="reponses"><img class="imagedroite" src="images/kturtle.png" style="width: 464px; height: 315px;" alt="Langage logo">En fait, les informaticiens trichent souvent un peu. Ils utilisent des  programmes qui traduisent en 0 et en 1 des instructions donn�es dans un langage interm�diaire, qui n'est ni leur langue maternelle, ni des 0 et des 1.</p>
<p>Dans l'illustration ci-contre, un exemple de programme r�dig� en langage LOGO. C'est un langage tr�s simple, souvent utilis� pour apprendre � programmer, en cours de technologie, par exemple.</p>
<ul>
  <li>Les instructions figurent dans la partie gauche de la fen�tre. Celles-ci permettent de diriger une "tortue" qui dessine � l'�cran.</li>
  <li>Dans la partie droite, on voit le trait obtenu apr�s ex�cution des instructions.</li>
</ul>
<p>Le langage LOGO ressemble encore tr�s fort � une langue humaine. C'est un langage informatique tr�s simple. D'autres langages informatiques sont moins simples (<a href="http://fr.wikipedia.org/wiki/C%2B%2B#.C2.AB_Hello.2C_world_.C2.BB" target="_blank">Python</a>, <a href="http://fr.wikipedia.org/wiki/C%2B%2B#.C2.AB_Hello.2C_world_.C2.BB" target="_blank">C++</a>, <a href="http://fr.wikipedia.org/wiki/Perl_%28langage%29#Exemples_de_code" target="_blank">Perl</a>,...)</p>
<p>Les programmes d'ordinateur peuvent ensuite �tre enregistr�s sur des disquettes ou des CD-ROMs. Ils sont alors distribu�s aux personnes qui les utiliseront.</p>
</div>
<p class="questions">Distribu�s? Vous voulez dire quoi par l�? C'est distribution gratuite?</p>
<p class="reponses">Tout d�pend des cas. Certains logiciels sont disponibles dans le commerce. D'autres sont con�us "sur mesure" par des soci�t�s (des banques, des commerces,...) qui r�mun�rent les
programmeurs. D'autres encore sont disponibles gratuitement. Nous enreparlerons plus tard.</p>

<form action="" class="qcu"> Dans l'illustration ci-dessus, les informations qui figurent dans le cadre gauche de l'interface LOGO<br>
  <input class="qcm" type="radio">Forment un programme<br>
  <p class="vrai">Exact.<br>Il s'agit d'une liste d'instructions � ex�cuter dans un ordre bien d�fini</p>
  <input class="qcm" type="radio">Ne forment pas un programme<br>
  <p class="faux">R�ponse fausse.<br>Qu'est-ce qu'un programme?</p>
  <input class="qcm" type="radio">Il est impossible de r�pondre � cette question<br>
  <p class="faux">R�ponse fausse.<br>Il est possible de r�pondre � la question</p>
</form>

<p>Quand tu as r�pondu � la question et bien compris la r�ponse, passe � la page suivante.<?php include ("../../suivant.inc.php");?></p>
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
