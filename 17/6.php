<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head><meta
 id="_moz_prolog" content="">  <meta
 id="_moz_prolog" content=""> <meta name="generator"
 content="HTML Tidy for Windows (vers 1st July 2004), see www.w3.org"> <meta
 id="_moz_prolog" content=""> <meta http-equiv="Content-Type"
 content="text/html; charset=iso-8859-1"> <link rel="stylesheet"
 type="text/css" href="../../info.css" media="screen"> <link
 rel="stylesheet" type="text/css" href="../../print.css" media="print">
<title>La sécurité informatique</title></head>
<body><div id="conteneur">
<?php include ("./top.inc.php");?>
<div id="texte">
<div
 style="background-color: rgb(255, 255, 204);" class="encartdroit">
<h4><img class="imagedroite" style="width: 145px; height: 200px;"
 alt="Contrats" src="images/smith.png">Flash Info</h4>
<p>La " Société Smith &amp;
Smith " s'apprêtait à signer un contrat important avec le gouvernement
Syldave. En dernière minute, Mr Smith apprend que le contrat lui
échappe. Un contrat quasi identique a finalement été signé avec la
Société " Brol &amp; Co " de Bordurie. </p>
<p>Comment cette société
a-t-elle pu prendre connaissance des termes du contrat et le copier ?</p>
</div><h2>Quelle différence entre un ver et un virus&nbsp;? </h2>
<div class="info"><p><img src="images/ver.png" class="imagedroite"
 height="212" width="230">Dans les pages précédentes, il a été
question, sans
préciser la différence, de "virus" mais aussi de
"vers". Cette deuxième notion, un peu différente de celle
de "virus" n'avait pas été explicitée.</p>
<p>Les vers ("worms", en anglais) constituent une classe d'agents
infectieux un peu différente de la classe des virus. On les confond
souvent. </p>
<p>Contrairement aux virus, les vers n'ont pas
besoin de vecteur (un programme hôte qu'ils infectent) pour se
propager. Ils progressent, de proche en proche, parmi les ordinateurs
qui composent les réseaux informatiques, y compris le réseau Internet. </p>
</div><fieldset><legend
 style="font-weight: bold; background-color: red; color: white;">À
retenir</legend>
<p> En informatique, un " Ver " est un logiciel malveillant qui se
propage dans les réseaux informatiques en profitant de certaines
failles qu'il y trouve.</p>
<p>Une fois entré dans un ordinateur, le "Ver" peut
commencer son travail de destruction et continuer à se propager dans le
réseau.</p>
</fieldset><h3>Lecture: exemples de vers </h3>
<h4> Le ver <strong>Sasser</strong> </h4>
<div class="info"><p> Parti d'un ordinateur distant, il se connecte à
votre
ordinateur comme s'il était un " ordre " normal. Celui-ci est
d'ailleurs reconnu et son traitement commence. Mais, l'ordre est mal
formé et contient " trop " d'informations par rapport à ce
qui est attendu dans ce cas précis. Le trop-plein d'informations est
stocké dans la mémoire au-delà de la zone prévue.</p>
<p><strong>A
cause d'une erreur de conception</strong> dans le programme qui traite
l'ordre, le "&nbsp;surplus&nbsp;" d'information est alors exécuté comme
un programme "&nbsp;normal&nbsp;". Le ver s'installe alors au sein du
système et tente immédiatement de se propager vers d'autres ordinateurs
qui présentent la même déficience. </p>
</div><h4> Le ver <strong>Netsky</strong>
</h4><div class="info">
<p> Le ver Netsky parvient à entrer dans votre
ordinateur en profitant d'<strong>une imperfection dans certaines
versions du logiciel de courrier électronique Outlook</strong>. Pour
que le ver s'active, il n'est même pas nécessaire que l'utilisateur
ouvre une pièce jointe : le ver est contenu dans le message
lui-même. Le seul fait de cliquer sur le message suffit à activer le
ver.</p>
<p>Dès qu'il est actif, Netsky s'auto-envoie par courrier
électronique. De plus, l'ordinateur infecté pourra servir de
" zombie " qui participera à l'attaque du site web
WindowsUpdate (qui permet de réaliser les mises à jour de sécurité du
système Windows).</p>
<p> Un ordinateur infecté peut expédier
plusieurs dizaines de vers à la minute. On notera généralement un fort
ralentissement de l'ordinateur, trop occupé à envoyer des courriers
électroniques. </p>
</div><p class="questions"> Mais c'est horrible&nbsp;!
Il n'y a donc aucun moyen de se connecter à l'Internet sans se faire
infecter&nbsp;? </p>
<p class="reponses"> Ne soyons pas si
pessimistes. En fait, chaque fois qu'une imperfection du type indiqué
ci-dessus est trouvée, des correctifs sont mis à disposition des
utilisateurs. Il faut donc veiller à s'informer et surtout, à maintenir
son ordinateur connecté à un réseau bien à jour. </p>
<h2>Lecture: buts de
l'action des vers </h2>
<p> Les vers peuvent avoir plusieurs raisons
d'exister. Leurs buts peuvent être similaires à ceux des virus. </p>
<ul> <li>Pur vandalisme gratuit&nbsp;: provoquer la saturation d'un
réseau
sous l'effet exponentiel de sa multiplication. </li> <li>Attaque
ciblée&nbsp;: attente furtive au sein de milliers (millions&nbsp;?)
d'ordinateurs&nbsp;; à une date précise, chaque ver se connecte à un
seul et même serveur provoquant sa mise hors service. </li> <li>Prise
de commande à distance de votre ordinateur. </li> <li>Espionnage des
frappes au clavier, y compris des numéros de cartes de crédit. </li> <li>Ouverture
de portes de l'ordinateur pour faciliter l'accès par d'autres vers ou
virus. </li> <li>Envoi de milliers de courriers électroniques
plublicitaires non sollicités depuis votre ordinateur. </li> <li>Effacement
de fichiers, envoi de vos fichiers (confidentiels) sur l'Internet,... </li>
</ul><form action="" class="travail"> A la différence d'un virus, un
ver<br> <input name="bt"
 onclick="alert('Non.\nLe ver se caractérise précisément par le fait qu\'il n\'a pas besoin de programme cible pour se propager.')"
 type="radio"> Doit obligatoirement disposer d'une programme cible<br> <input
 name="bt"
 onclick="alert('Exact.\nLe ver se caractérise effectivement par le fait qu\'il n\'a pas besoin de programme cible pour se propager.')"
 type="radio"> Ne doit pas disposer d'un programme cible </form>
<form action="" class="travail"> Un ver<br> <input name="bt"
 onclick="alert('Réponse fausse.\nLe ver est dangereux aussi pour l\'ordinateur qu\'il infecte.')"
 type="radio"> N'est absolument pas dangereux pour l'ordinateur qu'il
infecte<br> <input name="bt"
 onclick="alert('Non.\nLe danger est bien plus grand.')" type="radio">Est
dangereux mais seulement pour l'ordinateur qu'il infecte<br> <input
 name="bt"
 onclick="alert('Exact.\nLe ver se propage par l\'intermédiaire des réseaux.\nSi un ordinateur d\'un réseau est infecté, les autres ordinateurs connectés au même réseau sont des cibles privilégiées.')"
 type="radio"> Est dangereux pour tous les ordinateurs qui figurent
dans le même réseau que l'ordinateur infecté </form>
<form action="" class="travail"> Les vers sont transmis<br> <input
 name="bt"
 onclick="alert('Réponse fausse.\nLe courrier électronique n\'est pas le seul vecteur des vers.')"
 type="radio"> Uniquement par courrier électronique<br> <input
 name="bt"
 onclick="alert('Non.\nCeci est le mode de propagation des virus et non des vers.')"
 type="radio"> Uniquement par un logiciel infecté<br> <input name="bt"
 onclick="alert('Non.\nLes messageries instantanées ne sont pas le seul vecteur des vers.')"
 type="radio"> Uniquement par les messageries instantanées comme MSND<br>
<input name="bt"
 onclick="alert('Exact.\nLes vers peuvent se transmettre par différents moyens, mais qui utilisent tous les ressources des réseaux.')"
 type="radio"> Aucune autre réponse ne convient </form>
<form action="" class="travail"> Les effets des vers et des virus sont<br>
<input name="bt"
 onclick="alert('Non.\nLes vers et les virus ont souvent intérêt à rester discrètement à l\'oeuvre dans l\'ordinateur infecté.\nDe cette manière, ils peuvent faire un maximum de dégâts pendant le temps le plus long possible.')"
 type="radio"> Toujours spectaculaires et immédiats<br> <input
 name="bt"
 onclick="alert('Réponse exacte.\nLes vers et les virus ont souvent intérêt à rester discrètement à l\'oeuvre dans l\'ordinateur infecté.\nDe cette manière, ils peuvent faire un maximum de dégâts pendant le temps le plus long possible.')"
 type="radio"> Généralement discrets </form>
<form action="" class="travail"> Les vers se propagent souvent grâce<br>
<input name="bt"
 onclick="alert('Exact.\nLes vers profitent souvent de \&quot;trous de sécurité\&quot; dans des logiciels. Ils profitent des erreurs de concepton des logiciels pour s\'introduire dans les ordinateurs.')"
 type="radio"> A des erreurs de conception dans les logiciels qui sont
utilisés dans les ordinateurs<br> <input name="bt"
 onclick="alert('Non.\nCeci est une caractéristique des virus.')"
 type="radio">A l'infection d'un programme cible </form>
<form action="" class="travail"> Choisis la bonne réponse<br> <input
 name="bt"
 onclick="alert('C\'est vrai, mais cette réponse n\'est pas la meilleure.')"
 type="radio"> Un ver permet à un pirate de prendre le contrôle de mon
ordinateur.<br> <input name="bt"
 onclick="alert('C\'est vrai, mais cette réponse n\'est pas la meilleure.')"
 type="radio"> Un ver permet d'ouvrir des "portes" de mon ordinateur.
Ces portes sont ensuite utilisées par d'autres logiciels malveillants.<br>
<input name="bt"
 onclick="alert('C\'est vrai, mais cette réponse n\'est pas la meilleure.')"
 type="radio"> Un ver dans mon ordinateur peut permettre une attaque
des serveurs de Microsoft.<br> <input name="bt"
 onclick="alert('C\'est vrai, mais cette réponse n\'est pas la meilleure.')"
 type="radio"> Un ver permet d'espionner les frappes au clavier de
l'ordinateur qu'il infecte.<br> <input name="bt"
 onclick="alert('Exact.\nLes vers permettent toutes les actions décrites plus haut.')"
 type="radio"> Toutes les réponses ci-dessus sont correctes. </form>
<p>Quand tu as répondu à toutes les questions et bien compris les
réponses
correctes, passe à la page suivante.<?php include ("../../psuivante.inc.php");
                ?>
</p></div>
<?php include ("../../pied.inc.php");
      include ("../../stat.inc.php");
      ?></div></body></html>