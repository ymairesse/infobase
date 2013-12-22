<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head><meta
 id="_moz_prolog" content=""> <meta http-equiv="Content-Type"
 content="text/html; charset=iso-8859-1"> <link rel="stylesheet"
 type="text/css" href="../../info.css" media="screen"> <link
 rel="stylesheet" type="text/css" href="../../print.css" media="print">
<title>Organisation des fichiers sur les disques</title><script
 language="javascript" type="text/javascript">
function montrecache (bloc)
{
var obj = document.getElementById(bloc);
if (obj.style.display == "none")
	obj.style.display = "block"
	else
	obj.style.display = "none";
}
  </script></head>
<body><div id="conteneur"><?php include ("./top.inc.php");
?>
<div id="texte"><h2>Les types de fichiers et les extensions</h2>
<div class="info"><p>L'extension indique à quel type de
fichier on a affaire. Elle donne donc des informations sur la façon
d'utiliser le fichier en question : quel type
d'informations contient-il, avec quel logiciel peut-on l'ouvrir, est-ce
un programme exécutable,...</p></div>
<h3>S'assurer que l'extension est visible sous Windows</h3>
<div class="info"><p>Le système d'exploitation "&nbsp;sait&nbsp;"
comment il doit traiter certains fichiers en considérant leur
extension.</p><p>Ainsi, pour Windows un fichier qui porte l'extension:</p>
<p><span class="label">.exe</span> est toujours un fichier
exécutable, un logiciel </p>
<p><span class="label">.doc</span> est toujours un texte lisible par un
logiciel comme Word, par exemple </p>
<p><span class="label">.sxc</span> est toujours un classeur pour
OpenOffice.org Calc </p>
<p><span class="label">...</span> ... </p>
<p>Ces extensions, et d'autres encore, sont donc "&nbsp;connues&nbsp;"
du système d'exploitation et, peut-être, de l'utilisateur
(s'il a suivi ce cours avec attention).</p>
<p>Dans la configuration de base de Windows, les extensions
"&nbsp;connues&nbsp;" n'apparaissent pas dans l'explorateur du <strong>Poste
de travail</strong>. Ce fait est extrêmement ennuyeux car <a
 href="javascript:montrecache('explication');">il permet à
certains virus de passer inaperçus</a>.</p>
<div id="explication" title="Clique pour cacher cette explication"
 style="border: 2px solid blue; padding: 10px; position: absolute; left: 250px; width: 60%; display: none; cursor: pointer; background-color: rgb(255, 255, 204);"
 onclick="javascript:montrecache('explication');"><p class="info">Un
virus est toujours un fichier exécutable. Il
est donc éventuellement reconnaissable à l'extension du
fichier qui le contient&nbsp;: .exe, .com, .pif, .vbs,... <br>
Certains virus se cachent dans des fichiers qui présentent une
double extension. </p>
<p>Exemple&nbsp;: SpiceGirls.jpg.exe </p>
<p>Lorsque Windows rencontre ce fichier, il estime que
"&nbsp;.exe&nbsp;" est une extension connue et ne la montre pas. Le nom
du fichier qui apparaît est alors "&nbsp;SpiceGirls.jpg&nbsp;",
c'est-à-dire tout ce qui reste lorsque l'on a enlevé
l'extension.</p>
<p class="questions">SpiceGirls.jpg ? Vous m'alléchez,
là... C'est une photo de laquelle&nbsp;? </p>
<p class="reponses">D'aucune, et c'est bien là le piège.
Il ne s'agit pas d'un fichier "&nbsp;.jpg&nbsp;" (d'une image, donc),
mais d'un "&nbsp;.exe&nbsp;". Il suffit de tenter de l'ouvrir pour que
le virus s'active.</p>
<p class="attention">Si les extension avaient été rendues
visibles, on aurait pu voir que le fichier n'était pas
honnête et cachait un exécutable.</p>
</div><p>Tu vas remédier à ce problème, si c'est
nécessaire sur ton poste de travail.</p></div><div class="travail">
<ul> <li><img src="images/masquer1.png" class="imagedroite"
 height="116" width="213">Ouvre le <strong>Poste de travail</strong></li>
<li>Dans le menu <strong>Outils</strong>, sélectionne la
commande <strong>Options des dossiers...</strong></li> <li>Choisis
l'onglet <strong>Affichage</strong></li>
</ul></div>
<p style="text-align: center;"><img src="images/masquer0.png"
 height="125" width="289"></p><p>La boîte de dialogue suivante permet
de configurer la
façon dont les informations sont présentées dans
l'explorateur du <strong>Poste de travail</strong>.</p>
<p style="text-align: center;"><img src="images/masquer2.png"
 height="469" width="461"></p><div class="travail"><ul><li>Parmi les
paramètres, décoche la case <strong>Cacher
les extensions des fichiers dont le type est connu</strong></li><li>Clique
sur le bouton <strong>OK</strong>.</li></ul>
</div><p>Toutes les extensions doivent maintenant apparaître.</p>
<h3>Les principales extensions et leur signification</h3>
<div class="info"><p>En parcourant l'explorateur du <strong>Poste de
Travail</strong>,
on observe que de nombreux fichiers présentent une icone
similaire à celle du logiciel qui permet de les traiter.</p><p
 style="text-align: center;"><img src="images/extension.png"
 height="179" width="350"></p>
<table border="1" cellpadding="5" width="100%"><tbody><tr> <td
 valign="top" width="15%"> <h4><strong>Extension</strong></h4> </td> <td
 valign="top" width="85%"> <h4><b>Application correspondante</b></h4> </td>
</tr> <tr> <td valign="top" width="15%"><strong>.BAK</strong> </td> <td
 valign="top" width="85%"><strong>Un fichier Backup</strong><b> </b>:
ancienne version d'un fichier sauvegardé sous une
autre extension. Les fichiers .bak peuvent souvent être
effacés. </td> </tr> <tr> <td valign="top" width="15%"><strong>.BMP</strong>
</td> <td valign="top" width="85%"><strong>Un fichier bitmap</strong>
:
une image point par point, souvent conçu avec le logiciel Paint. </td>
</tr> <tr> <td valign="top" width="15%"><strong>.COM</strong> </td> <td
 valign="top" width="85%"><strong>Un fichier compilé </strong>:
un programme qui peut être exécuté par
l'ordinateur. Ce type de fichier ne devrait jamais être
effacé. </td> </tr> <tr> <td valign="top" width="15%"><strong>.DLL</strong>
</td> <td valign="top" width="85%"><strong>Dynamic Link Library</strong>
: ce sont des fragments de programmes qui sont chargés en
mémoire au moment où un logiciel en a besoin. <p>Ces fichiers sont
très importants. Il ne faut
généralement pas les effacer. </p> </td> </tr> <tr> <td
 valign="top" width="15%"><strong>.DOC</strong> </td> <td valign="top"
 width="85%">Un fichier de traitement de textes,
souvent traité par Microsoft <a href="../../tdt/1/index.php"
 target="_blank">Word</a>. </td> </tr> <tr> <td valign="top"
 width="15%"><strong>.EXE</strong> </td> <td valign="top" width="85%"><strong>Un
fichier exécutable </strong>: une application. Ce sont les programmes
de
l'ordinateur.<br>
Ces fichiers ne doivent généralement pas être
effacés. </td> </tr> <tr> <td valign="top" width="15%"><strong>.GIF</strong>
</td> <td valign="top" width="85%"><strong>Graphic interchange format</strong>
: un format d'image point par point souvent utilisé dans les
pages Web. </td> </tr> <tr> <td valign="top" width="15%"><strong>.HTM&nbsp;
<br>.HTML&nbsp;<br>
.PHP </strong> </td> <td valign="top" width="85%"><strong>HyperText
Markup&nbsp;
Language</strong> : un fichier de page Web qui contient les code HTML. </td>
</tr> <tr> <td valign="top" width="15%"><strong>.JPG&nbsp; <br>
.JPEG</strong> </td> <td valign="top" width="85%"><strong>Joint
Photographic Experts
Group</strong> : un fichier d'image en format compressé souvent
utilisé dans les pages Web. </td> </tr> <tr> <td valign="top"><strong>.MP3
</strong> </td> <td valign="top"><strong>Fichier audio MP3</strong> :
fichier
contenant un morceau de musique compressé de type MP3. Format
devenu classique pour le téléchargement de musique,
légal ou non, sur Internet. </td> </tr> <tr> <td valign="top"
 width="15%"><strong>.PDF</strong> </td> <td valign="top" width="85%"><strong>Page
Definition File </strong>:
ce type de fichier peut être lu par le logiciel Acrobat Reader.
Pour pouvoir le lire, il faut donc que le logiciel <a
 href="http://www.adobe.com/" target="_blank">Acrobat Reader</a> soit
installé sur l'ordinateur. </td> </tr> <tr> <td valign="top"
 width="15%"><strong>.SYS</strong> </td> <td valign="top" width="85%"><strong>Fichier
système</strong><b> </b>: un fichier qui contient un programme, le
plus souvent un
pilote pour gérer un périphérique.<br>
Ce type de fichier ne doit généralement jamais être
supprimé. </td> </tr> <tr> <td valign="top">.<strong>SXW</strong> </td>
<td valign="top">Un fichier de traitement de textes Writer d'<a
 href="http://fr.openoffice.org/" target="_blank">OpenOffice.org</a>,
version libre et gratuite du logiciel StarOffice. </td> </tr> <tr> <td
 valign="top">.<strong>SXC</strong> </td> <td valign="top">Un fichier
produit par le tableur Calc d'<a href="http://fr.openoffice.org/"
 target="_blank">OpenOffice.org</a>. </td> </tr> <tr> <td
 valign="top" width="15%"><strong>.TMP</strong> </td> <td valign="top"
 width="85%"><strong>Fichier temporaire</strong><b> </b>: ces fichier
sont produit sous Windows et par certaines
applications pour enregistrer des informations temporaires relative
à l'application ou au fichier en cours d'édition.<br>
Ce type de fichier peut généralement être
supprimé sans aucun problème afin de libérer de
l'espace sur le disque. </td> </tr> <tr> <td valign="top"
 width="15%"><strong>.TXT</strong> </td> <td valign="top" width="85%"><strong>Fichier
texte </strong>: un
fichier qui ne contient que des caractères encodés
à la norme ASCII, c'est-à-dire sans aucune mise en forme. </td> </tr>
<tr> <td valign="top" width="15%"><strong>.XLS</strong> </td> <td
 valign="top" width="85%"><strong>Excel Sheet</strong><b> </b>:
un fichier produit pour le tableur <a href="../../tableur/1/index.php"
 target="_blank">Excel</a> de Microsoft. </td> </tr> <tr> <td
 valign="top" width="15%"><strong>.ZIP</strong> </td> <td valign="top"
 width="85%"><strong>Zipped file</strong><b> </b>:
un fichier zippé, un fichier compressé. Voir plus loin
dans cette leçon.</td></tr></tbody></table></div><fieldset
 style="margin-top: 1em;" class="attention encadre"><legend>Important</legend>Tu
dois être capable d'indiquer la
nature de n'importe quel fichier portant l'une des extensions
présentées dans le tableau ci-dessus. Il n'est pas
nécessaire de retenir la signification de l'appellation
exprimée en anglais.</fieldset><p class="info">Une liste assez complète
des extensions de fichiers
avec leur signification peut être trouvée <a
 href="http://fr.wikipedia.org/wiki/Liste_d%27extensions_de_fichiers"
 target="_blank">ICI</a>.</p>
<p>Quand tu es capable d'indiquer la nature des fichiers dont les
extensions sont indiquées sur cette page, passe à la page
suivante.<?php include ("../../suivant.inc.php");
	?> </p>
</div><?php include ("../../pied.inc.php");
?>
</div></body></html>