<?php //anti-moz ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><link
 rel="stylesheet" type="text/css" href="../../info.css" media="screen"><link
 rel="stylesheet" type="text/css" href="../../print.css" media="print"><title>La
sécurité informatique</title></head>
<body><div id="conteneur">
<?php include ("./top.inc.php"); ?>
<div id="texte"><div
 style="background-color: rgb(255, 255, 204);" class="encartdroit"><img
 class="imagedroite" style="width: 200px; height: 207px;"
 alt="Carte de crédit volée" src="images/volcartecredit.jpg"><h4>Flash
Info</h4>
<p>La banque
de Mr Dupont lui réclame la somme 2450 Eur pour des achats de matériel
électroménager effectués avec sa carte de crédit, le mois passé, en
Espagne. </p>
<p>Mr Dupont n'a jamais mis les pieds en Espagne. </p>
<p>Qui a utilisé
sa carte de crédit ?</p>
</div><h2>Reconnaître les
fichiers exécutables sous Windows </h2>
<div class="info"><p> Puisque les virus arrivent
toujours
"&nbsp;empaquetés&nbsp;" dans des fichiers exécutables,
il est
important d'être capable de reconnaître un tel fichier.
Quelles en sont
donc les caractéristiques&nbsp;?</p><p> Un fichier
exécutable contient des instructions
que
l'ordinateur est capable de comprendre et d'exécuter. Un fichier
exécutable contient donc un programme d'ordinateur.</p><p>
Afin qu'ils soient reconnaissables aisément, les
noms des
fichiers exécutables sont souvent pourvus d'une extension
caractéristiques. Le
tableau ci-dessous reprend les extensions les plus courantes des
fichiers exécutables sous Windows. Les autres systèmes
d'exploitation
(Linux, MacOS,...) sont moins sensibles aux virus courants car ils
fonctionnent différemment. </p></div>
<table
 style="padding-top: 0pt; padding-bottom: 0pt; width: 80%; margin-left: 10%; clear: both;"
 border="1"> <tbody> <tr> <td>&nbsp; </td> <td
 style="text-align: center;">
Le fichier contient un programme </td> </tr> <tr> <td width="50">
.exe </td> <td> écrit en langage
machine, directement
interprétable par
l'ordinateur </td> </tr> <tr> <td width="50">
.com </td> <td> écrit en langage machine, directement
interprétable par
l'ordinateur </td> </tr> <tr> <td width="50">
.vbs </td> <td> écrit en langage Visual Basic et
exécutable
sous Windows </td> </tr> <tr> <td width="50">
.doc </td> <td> destiné au logiciel de traitement de
textes Word. Il
peut
contenir des programmes (des "&nbsp;macros&nbsp;") exécutables
par Word </td> </tr> <tr> <td width="50">
.xls </td> <td> destiné au tableur Excel. Il peut
contenir des
programmes
(des "&nbsp;macros&nbsp;") exécutables par Excel </td> </tr>
<tr> <td> .bat </td> <td> destiné à
l'interpréteur de commandes </td> </tr> <tr> <td>
.cmd </td> <td> destiné à l'interpréteur de commandes </td>
</tr> <tr> <td> .scr </td> <td>
destiné à réaliser un écran de
veille </td> </tr> <tr> <td> .pif </td>
<td> destiné à d'anciennes versions de Windows et
contenant des
informations nécessaires à l'exécution de
certaines programmes et/ou
des instructions exécutables sous Windows </td> </tr> </tbody>
</table><p class="questions"> Dites, vous êtes sûr
de votre
liste&nbsp;? Parce
que mon petit cousin, il a pris un virus dans un fichier .jpg. </p>
<p class="reponses"> Probablement a-t-il
été&nbsp;victime d'un virus masqué.</p><p class="questions">Je
connaissais les vengeurs masqués mais pas les virus masqués...</p><p
 class="reponses">Il s'agit de virus qui se font
passer&nbsp;pour des
fichiers honnêtes, avec la complicité de Windows. </p>
<div class="info"><p> Le fichier .jpg dont il est
question ci-dessus
était
certainement muni d'une double extension, dont l'une n'était pas
visible. Dans la configuration de base de Windows, les extensions
"&nbsp;connues&nbsp;" comme .exe, .com ou .scr n'apparaissent
pas dans
l'explorateur du <strong>Poste de travail</strong>. Ce
fait est
extrêmement ennuyeux car il permet à certains virus de
passer
inaperçus.</p><p> Exemple&nbsp;: SpiceGirls.jpg.exe </p>
<p> Lorsque Windows rencontre ce fichier, il estime que
"&nbsp;.exe&nbsp;" est une extension connue et ne la montre
pas. Le nom
du fichier qui apparaît est alors "&nbsp;SpiceGirls.jpg&nbsp;",
c'est-à-dire tout ce qui reste lorsque l'on a enlevé
l'extension. </p></div><p class="questions">
SpiceGirls.jpg ? Vous m'alléchez,
là... C'est une
photo de laquelle&nbsp;? </p>
<p class="reponses"> D'aucune, et c'est bien là le piège.
Il ne s'agit
pas d'un fichier "&nbsp;.jpg&nbsp;" (d'une image, donc), mais
d'un
"&nbsp;.exe&nbsp;". Il suffit de tenter de l'ouvrir pour que le
virus
s'active. </p>
<p class="attention"> Si les extensions avaient été
rendues visibles,
on aurait pu voir que le fichier n'était pas honnête et
cachait un
exécutable. </p>
<div class="travail">Si tu travailles sous Windows, tu
peux remédier à ce
problème sur ton poste de travail.<br>Si tu travailles sur un Mac
ou un poste Linux, le problème ne se pose pas et tu <a href="#suite">peux
passer à la suite</a>.<br>
<ul> <li>Ouvre le <strong>Poste de travail</strong>
</li> <li> <img src="images/masquer1.png" class="imagedroite"
 height="116" width="213"></li><li>Dans le menu <strong>Outils</strong>,
sélectionne la
commande <strong>Options
des dossiers...</strong> </li> <li>Choisis l'onglet
<strong>Affichage</strong> </li>
</ul><p style="text-align: center;"> <img src="images/masquer0.png"
 height="125" width="289"></p><p class="supplement"> La boîte de
dialogue suivante
permet de
configurer la façon dont
les informations sont présentées dans l'explorateur du <strong>Poste
de travail</strong>.</p>
<p class="supplement" style="text-align: center;"> <img
 src="images/masquer2.png" height="469" width="461"></p><ul><li>Parmi
les paramètres, décoche la case <strong>Cacher
les
extensions des fichiers dont le type est connu</strong> </li>
<li>Clique sur le bouton <span class="menu">OK</span>.</li>
</ul></div><ul></ul><p> Toutes les extensions doivent maintenant
apparaître. </p>
<p class="questions"><a name="suite"></a>Ah&nbsp;! Si mon petit cousin
avait connu
celle-là... </p><form action="" class="travail"><p>Sur
ton ordinateur sous Windows, tu reçois un mail de ton&nbsp;petit
cousin. Il écrit "regarde la pièce jointe, c'est à mourir de rire".<br>
La pièce jointe est un fichier portant l'extension <strong>.exe</strong></p>
<input name="bt"
 onclick="alert('Très mauvaise réponse.\nLes fichiers .exe sont exécutables. Il ne faut JAMAIS ouvrir un tel fichier sans avoir pleine confiance dans l\'expéditeur et lui avoir demandé confirmation.\nDe toute façon, l\'antivirus s\'impose.')"
 type="radio">Super, je sens que je vais bien rigoler: mon
cousin est un comique.<br>
<input name="bt"
 onclick="alert('C\'est une bonne réponse.\nProfites-en pour avertir ton cousin du danger des fichiers exécutables.\nSi c\'est vraiment un bon gag, il te le montrera sur son ordinateur à votre prochaine rencontre.')"
 type="radio">Je détruis immédiatement ce mail et je m'assure
qu'il n'est pas resté dans la corbeille.<br>
<input name="bt"
 onclick="alert('Ce n\'est pas très prudent.\nIl faut toujours se méfier des fichiers exécutables.\nS\'il s\'agit d\'un virus que ton antivirus ne reconnaît pas encore, tu risques d\'en faire les frais.\nProfites-en pour avertir ton cousin du danger des fichiers exécutables.')"
 type="radio">J'enregistre la pièce jointe, je la passe à
l'antivirus puis je regarde le gag annoncé<br>
<input name="bt"
 onclick="alert('Mauvaise réponse.\nIl faut rester calme et prendre le temps d\'avertir ton cousin du danger.')"
 type="radio">J'envoie immédiatement un mail d'insultes à mon
petit cousin: il est fou, lui...
</form><br><form action="" class="travail">Tu
utilises un ordinateur <strong>sous Linux</strong> ou un <strong>Mac</strong>.
Ton petit cousin t'envoie un mail avec un fichier dont l'extension est <strong>.jpg</strong>.
Il écrit: "regarde l'image jointe, c'est à mourir de rire".<br>
<input name="bt"
 onclick="alert('Bonne réponse.\nSous Linux ou sous MacOS, les extensions ne sont pas cachées et le fichier est certainement une image.')"
 type="radio">Aucun souci, je regarde la pièce jointe. Je
vais bien rigoler: mon cousin est un comique.<br>
<input name="bt"
 onclick="alert('Pas du tout.\nLe système d\'exploitation que tu utilises ne cache pas les extensions.\nLe fichier s\'ouvrira avec une application graphique. Si ce n\'est pas une image, il ne s\'ouvrira pas.')"
 type="radio">Malheureux! Il s'agit d'un virus, c'est certain.<br>
<input name="bt"
 onclick="alert('Tout cela n\'est pas nécessaire.\nSi c\'était un virus, on reconnaîtrait l\'extension d\'un fichier exécutable.')"
 type="radio">J'enregistre la pièce jointe, je la passe à
l'antivirus puis je regarde le gag annoncé.
</form><p>Quand tu as répondu aux questions et bien compris toutes les
réponses (même les réponses fausses), passe
à la page
suivante.<?php include ("../../psuivante.inc.php"); ?>
</p></div><?php include ("../../pied.inc.php"); include ("../../stat.inc.php"); ?></div></body></html>