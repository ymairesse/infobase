<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

  <meta http-equiv="Content-Type"
 content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css"
 media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css"
 media="print">
  <title>Organisation des fichiers sur les disques</title>
</head>
<body>
<div id="conteneur"><?php include ("./top.inc.php");
?>
<div id="texte">
<h2>Compresser avec le logiciel IZarc</h2>
<p class="info">Il existe de nombreux logiciels qui permettent la
compression. Parmi eux, le plus connu est probablement <a
 href="http://www.winzip.com/" target="_blank">Winzip</a>. Ce logiciel
est un Shareware; cela signifie que l'on peut l'acqu&eacute;rir
gratuitement et l'utiliser durant une p&eacute;riode limit&eacute;e.
Ensuite, il faut payer pour pouvoir l'utiliser.</p>
<p>Il existe aussi des logiciels gratuits (<a href="../3/2.php"
 target="_blank">Filzip</a>, <a href="http://izarc.free.fr/">Izarc</a>,
...) et des logiciels libres (<a href="http://utilfr42.free.fr/muzip/"
 target="_blank">Muzip</a>, <a href="http://www.7-zip.org/"
 target="_blank">7-zip</a>, ...) qui font le m&ecirc;me travail.</p>
<p class="reponses"> De commun accord avec moi-m&ecirc;me, je
d&eacute;cide que le logiciel Izarc est un bon choix. Nous
l'utiliserons. Les autres logiciels cit&eacute;s fonctionnent sur le
m&ecirc;me principe.</p>
<div class="travail">
<ul>
  <li>S&eacute;lectionne trois fichiers de ton choix dans ton
r&eacute;pertoire personnel (clic sur le nom du premier fichier, touche
CTRL enfonc&eacute;e, clic sur le nom de chacun des suivants).</li>
</ul>
<p>Ces trois fichiers figureront ensemble dans un seul et unique
fichier compress&eacute;.</p>
<ul>
  <li>Clique du bouton droit sur le nom de l'un des fichiers
s&eacute;lectionn&eacute;s.</li>
  <li>Dans le menu contextuel, s&eacute;lectionne la commande <strong>IZarc</strong>.</li>
</ul>
</div>
<p style="text-align: center;"><img src="images/izarc1.png" border="1"
 height="193" width="516"></p>
<p class="questions">Ben... Je ne vois pas la m&ecirc;me chose sur mon
&eacute;cran, moi&nbsp;! C'est quoi, ce "&nbsp;mon
dossier.zip&nbsp;"&nbsp;? </p>
<p class="reponses">C'est bien possible. En fait, le nom du fichier
.zip propos&eacute; est le nom du r&eacute;pertoire dans lequel se
trouvent les fichiers.</p>
<p class="questions">Et donc, ici, les fichiers se trouvent dans le
r&eacute;pertoire "&nbsp;mon dossier&nbsp;"&nbsp;?</p>
<p class="reponses">Tout &agrave; fait exact&nbsp;!</p>
<p>Deux options sont propos&eacute;es&nbsp;:</p>
<ul>
  <li>Ajouter les fichiers s&eacute;lectionn&eacute;s dans un fichier
compress&eacute; existant (<strong>Ajouter au fichier d'archive...</strong>)</li>
  <ul>
  </ul>
  <li>Compresser les fichiers s&eacute;lectionn&eacute;s dans un
nouveau fichier compress&eacute; (<strong>Ajouter &agrave;...</strong>).</li>
</ul>
<p class="questions">Bon, et alors, je choisis quoi maintenant&nbsp;?
Ajouter ou ajouter&nbsp;? </p>
<p class="reponses">Tout d&eacute;pend. Etudions les deux
possibilit&eacute;s avant de d&eacute;cider. <br>
Soit, on ajoute &agrave; un fichier .zip d&eacute;j&agrave; existant,
soit on fait un nouveau fichier compress&eacute; .zip. </p>
<h3>Faire un nouveau fichier compress&eacute;</h3>
<div class="travail">
<ul>
  <li>Clique sur l'option <strong>Ajouter &agrave; xxxxxx.zip</strong>.</li>
</ul>
<p class="supplement">Une fen&ecirc;tre appara&icirc;t plus ou moins
bri&egrave;vement, en fonction de la taille du fichier &agrave;
ajouter. Elle indique la progression du processus de compression.</p>
</div>
<p style="text-align: center;"><img src="images/izarc2.png" height="182"
 width="320"></p>
<p>Si les fichiers &agrave; compresser sont de petite taille, il est
possible que ces barres de progression apparaissent tr&egrave;s peu de
temps.</p>
<p>Quand le processus est termin&eacute;, le r&eacute;pertoire actuel
contient le fichier compress&eacute;.</p>
<p style="text-align: center;"><img src="images/izarc5.png" height="139"
 width="331"></p>
<form class="travail" action="">Dans l'illustration ci-dessus, le
fichier compress&eacute; "mon dossier.zip" contient l'ensemble des
fichiers s&eacute;lectionn&eacute;s.<br>
Combien de ko ont &eacute;t&eacute; gagn&eacute;s par la compression?<br>
  <input name="bt"
 onclick="alert('Non.\nLe \&quot;poids\&quot; total des fichiers est de 102 ko. Mais le gain est inférieur.')"
 type="radio">102 ko<br>
  <input name="bt"
 onclick="alert('Faux.\nLe \&quot;poids\&quot; du fichier compressé est 64 ko.\nCombien \&quot;pèsent\&quot; les fichiers non compressés?\nTu peux alors calculer combien a été gagné.')"
 type="radio">64 ko<br>
  <input name="bt"
 onclick="alert('Réponse correcte.\nLes fichiers non compressés \&quot;pèsent\&quot; 14 ko + 20 ko + 7 ko + 6 ko +  55 ko = 102 ko.\nLe fichier compressé \&quot;pèse\&quot; 64 ko.\nLe gain est donc de (102 ko - 64 ko) = 38 ko')"
 type="radio">38 ko<br>
  <input name="bt"
 onclick="alert('Non.\nCela voudrait dire qu\'il n\'y a aucun avantage à compresser les fichiers. Et pourtant, il y a un gain.')"
 type="radio">0 ko </form>
<h3>Ajouter &agrave; un fichier compress&eacute; existant</h3>
<div class="travail">
<ul>
  <li>Dans ton r&eacute;pertoire personnel, s&eacute;lectionne un ou
plusieurs autres fichiers &agrave; ajouter au fichier compress&eacute;
que tu viens de concevoir.</li>
  <li>Clique du bouton droit sur le nom d'un des fichiers
s&eacute;lectionn&eacute;s.</li>
  <li>Clique sur la commande IZarc du menu contextuel</li>
  <li>S&eacute;lectionne la commande <strong>Ajouter au fichier
d'archive...</strong></li>
  <li><strong><img src="images/izarc3.png" class="imagedroite"
 height="326" width="353"></strong>Dans la bo&icirc;te de dialogue qui
appara&icirc;t, clique sur le bouton <img src="images/dossier.png"
 height="20" width="22"> pour indiquer le fichier .zip auquel il faut
ajouter des fichiers.</li>
  <li>Clique sur le bouton <strong>Ajouter</strong>.</li>
</ul>
</div>
<p>La fen&ecirc;tre du logiciel IZarc appara&icirc;t durant un temps
plus ou moins long d&eacute;pendant de la taille des fichiers &agrave;
compresser. La progression du travail de compression est
indiqu&eacute;e en bas de cette fen&ecirc;tre.</p>
<p style="text-align: center;"><img src="images/izarc4.png" height="71"
 width="299"></p>
<p style="clear: both;">Si les fichiers &agrave; ajouter sont de petite
taille, il est possible que ces barres de progression apparaissent
tr&egrave;s peu de temps.</p>
<p class="questions" style="clear: both;">Et vous &ecirc;tes s&ucirc;r
que tout ce qu'on y a mis se trouve bien dans le fichier .zip&nbsp;?
J'avoue avoir du mal &agrave; y croire.</p>
<p class="reponses" style="clear: both;">La meilleure solution est
encore d'aller y voir par vous m&ecirc;me et de d&eacute;compresser le
fichier .zip. </p>
<h3>D&eacute;compresser un fichier compress&eacute;</h3>
<div class="travail">
<p>Le contenu d'un fichier compress&eacute; peut &ecirc;tre tr&egrave;s
facilement r&eacute;cup&eacute;r&eacute;.</p>
<ul>
  <li>Dans l'explorateur du <strong>Poste de travail</strong>,
retrouve le fichier compress&eacute;.</li>
  <li>Double clic sur le nom du fichier.</li>
  <li>La fen&ecirc;tre du logiciel IZarc montre le fichier archive et
les diff&eacute;rents fichiers qui y sont contenus, comme dans
l'illustration <a href="#dessus">ci-dessus</a>.</li>
  <li>Double clic sur le nom du fichier &agrave; ouvrir ou clic sur le
bouton extraire pour simplement d&eacute;compresser le fichier
souhait&eacute;.</li>
</ul>
<p style="text-align: center;" class="supplement"><img
 src="images/izarc7.png" height="220" width="349"></p>
</div>
<p> Quand tu as pu compresser et d&eacute;compresser des fichiers dans
ton r&eacute;pertoire personnel, passe &agrave; la page suivante.<?php include ("../../suivant.inc.php");
?> </p>
</div>
<?php include ("../../pied.inc.php");
?>
</div>
</body>
</html>
