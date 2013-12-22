<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>  
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script type="text/javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function (){
        $(".qcm").click(function(){
            $(this).next().next().show(300);
        })
    })
  </script>
<title>Les programmes d'ordinateur</title>
</head>
<body>
<div id="conteneur"><?php include ("./top.inc.php"); ?>
<div id="texte">
<h2>Où trouver des logiciels?</h2>
<div class="info">
<p><img src="images/softBox.png" class="imagedroite" style="width: 249px; height: 257px;" alt="Software">Lorsque l'on a besoin d'un logiciel pour réaliser une tâche précise, on a souvent le choix entre plusieurs sources pour se procurer le programme.</p>
<p>Nous évoquerons la solution <strong>payante</strong>, la solution <strong>gratuite</strong> et la solution <strong>"libre"</strong> (et -souvent- gratuite)</p>
<h3>Dans un magasin: la solution payante</h3>
<p>Les magasins spécialisés dans la vente de matériel informatique proposent généralement aussi des logiciels.</p>
<p>Ils sont le plus souvent fournis sur des CD ou des DVD. On ne trouve que la version en code binaire, directement utilisable par l'ordinateur. Le code source est gardé secret.</p>
<div class="encadre attention">On parle de <strong>"logiciel propriétaire"</strong>.</div>
<p>La personne ou la société qui a conçu le logiciel reste propriétaire du logiciel. Le client a le droit de l'utiliser. Mais il ne peut le copier ou l'utiliser sur plusieurs ordinateurs<span class="micro">*</span>.<br>
Le contrat de licence peut éventuellement interdire d'essayer de comprendre comment fonctionne le logiciel.</p>
<p class="micro">* Parfois, la licence prévoit que le logiciel peut être installé sur deux ou trois ordinateurs.</p>
<p class="questions">Dites, vous me prenez pour Greg le Millionnaire? Vous savez combien ça coûte, les logiciels dans les magasins?</p>
<p class="reponses">Effectivement, il faut sortir le portefeuille. Mais il existe d'autres solutions.</p>
<p class="questions">Comment? Vous voulez que je vole des logiciels? Elle est belle, la moralité des profs aujourd'hui...</p>
<p class="reponses">Je n'avais pas envisagé la solution du vol. Voyons comment faire.</p>
<h3>Les logiciels gratuits</h3>
<p>On peut trouver, sur l'Internet, des multitudes de logiciels gratuits pour différents usages.</p>
<p>Certains sont dangereux, certains sont médiocres, certains sont excellents.</p>
<p class="questions">Dangereux? Vous me faites peur. Ils peuvent faire exploser l'ordinateur?</p>
<p class="reponses">Non, les dangers sont différents...</p>
<p>Certains programmes disponibles gratuitement sur Internet peuvent contenir des virus ou des spywares.</p>
<p>Les logiciels gratuits sont, le plus souvent, distribués sous la forme du <strong>code binaire uniquement</strong>. Il est donc très difficile d'étudier le fonctionnement du programme,
pour s'assurer qu'il ne contient pas de virus ou de code malfaisant.</p>

<div class="encadre attention">On parle de <strong>"logiciel freeware"</strong>.<br>
Les logiciels "freeware" sont des logiciels "propriétaires".<br>
</div>
<p><strong>Exemples de logiciels gratuits</strong>:</p>
<ul>
<li><strong>Adobe Reader</strong>: pour lire les fichiers .pdf</li><li><strong>Windows Messenger</strong>: pour chater sur MSN (sous Windows)<br>
</li><li><strong>Irfanview</strong>: pour visualiser des images et faire de petites retouches (sous Windows)</li>
  <li><strong>Skype</strong>: pour téléphoner gratuitement en passant par l'Internet</li>
  <li>...<br>
  </li>
</ul>
<p><strong>Il ne faut pas utiliser un logiciel dont on n'est pas sûr.</strong> Si la réputation d'un logiciel est bonne auprès de nombreuses personnes, on peut envisager de l'utiliser.</p>
<p>Il faut toujours télécharger les lgoiciels "freeware" sur le site web officiel ou sur un site de téléchargement de confiance.</p>
<h3>Les logiciels libres (et souvent gratuits)</h3>
<div class="imagedroite micro"><img src="images/freestickers.png" style="width: 350px; height: 177px;" alt="Free Software"><br>
<div style="text-align: right;">
Source de l'illustration:<a target="_blank" href="http://www.openstickers.com/">http://www.openstickers.com/</a></div>
</div>
<p>Les logiciels libres sont toujours disponible avec leur code source.</p>
<div class="encadre attention">On parle de <strong>"logiciel libre"</strong> quand il est possible de:<br>
<ul>
  <li>l'utiliser</li>
  <li>étudier son fonctionnement dans le code source</li>
  <li>le modifier (si l'on est assez qualifié en programmation)</li>
  <li>le distribuer (le donner ou le vendre)</li>
</ul>
</div>
<p>Tous les types de logiciels courants peuvent être trouvés sous forme de logiciels libres. Citons-en quelques-uns</p>
<ul>
	<li>bureautique: <a href="http://fr.openoffice.org/" target="_blank">OpenOffice.org</a> ou <a href="http://www.libreoffice.org/">LibreOffice</a></li>
	<li>retouche photo: <a href="http://www.gimp.org/" target="_blank">Gimp</a></li>
	<li>création de sites web: <a href="http://kompozer.net/">KompoZer</a></li>
	<li>système d'exploitation: Linux (<a href="http://www.ubuntu-fr.org/" target="_blank">Ubuntu</a>, <a href="http://www.fedora-fr.org/" target="_blank">Fedora</a>, <a href="http://www2.mandriva.com/fr/" target="_blank">Mandriva</a>,...)</li>
	<li>....</li>
</ul>
<p>Le site web <a target="_blank" href="http://www.framasoft.org/">Framasoft</a> recense plus de 1500 logiciels libres et gratuits.</p>
</div>
<div class="qcu">
<form  action="">Un logiciel que l'on achète en magasin<br>
	<input class="qcm" type="radio">Est toujours distribué avec le code source<br>
	<p class="faux">Réponse fausse<br>Le code source n'est jamais disponible. Le concepteur souhaite généralement conserver un certain secret "de fabrication".</p>
	<input class="qcm" type="radio">N'est jamais distribué avec le code source<br>
	<p class="vrai">Réponse correcte.<br>L'acheteur acquiert généralement le droit d'utiliser le logiciel sur un seul ordinateur. Il est souvent même interdit de tenter d'étudier le code binaire.</p>
</form>
</div>
<div class="qcu">
<form action="">Un logiciel freeware (gratuit)<br>
	<input class="qcm" type="radio">Est obligatoirement un logiciel libre<br>
	<p class="faux">Réponse fausse<br>Un logiciel gratuit mais qui n'est pas distribué avec le code source n'est pas un logiciel libre.</p>
	<input class="qcm" type="radio">N'est pas forcément un logiciel libre<br>
	<p class="vrai">Réponse correcte.<br>Si le code source n'est pas disponible, il n'est pas possible d'étudier le fonctionnement du logiciel. Il n'est donc pas libre.</p>
</form>
</div>
<div class="qcu">
<form action="">Un logiciel libre<br>
	<input class="qcm" type="radio">Est obligatoirement un logiciel gratuit<br>
	<p class="faux">Réponse fausse<br>Il est tout à fait possible à n'importe qui de vendre la plupart des logiciels libres.<br>Dans certains cas -plutôt rares, l'auteur interdit la vente.</p>
	<input class="qcm" type="radio">Peut être acheté<br>
	<p class="vrai">Réponse correcte.<br>Généralement, rien n'interdit de vendre un logiciel libre téléchargé gratuitement sur l'Internet.<br>Souvent, le vendeur ajoute un manuel d'utilisation ou des services complémentaires (installation, conseils,...).</p>
</form>
</div>
<p class="questions">Bon, dites... Finalement, ils sont gratuits ou pas gratuits, les logiciels libres? "Souvent gratuits", "ils sont gratuits mais on peut le vendre",... je ne comprends pas ce que cela veut dire.</p>
<p class="reponses">Il existe toujours une version téléchargeable gratuitement. Mais certaines sociétés vendent les mêmes logiciels.</p>
<p class="questions">Comprends pas. Il y a des gens qui achètent les logiciels qui peuvent être téléchargés gratuitement? Ils sont fous, ou bien? Et ceux qui les vendent ne doivent pas avoir beaucoup de clients.</p>
<p class="reponses">Je vous propose l'explication autour d'un gâteau au chocolat à la page suivante.</p>
<p>Quand tu as répondu aux questions et bien compris les réponses, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
</div>
<?php include ("../../pied.inc.php"); ?> 
</div>
</body>
</html>
