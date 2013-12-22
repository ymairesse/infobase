<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head><meta
 id="_moz_prolog" content=""> <meta id="_moz_prolog" content=""> <meta
 http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> <link
 rel="stylesheet" type="text/css" href="../../info.css" media="screen">
<link rel="stylesheet" type="text/css" href="../../print.css"
 media="print"> <title>Organisation des fichiers sur les disques</title><style
 type="text/css">
.pair {background-color:#FFFFCC;}
  </style></head>
<body><div id="conteneur"><?php include ("./top.inc.php");
?>
<div id="texte"><h2>Les noms des fichiers</h2>
<div class="info"><p>Les concepteurs du syst�me
d'exploitation d�cident d'un certain nombre de conventions
� propos des noms de fichiers.</p><p>Souvent, les noms de fichiers sont
constitu�s de deux
parties</p>
<ul><li>un <strong>nom principal</strong></li><li>une <strong>extension</strong></li></ul>
<p>Exemple: </p>
<table
 style="width: 50%; text-align: left; margin-left: auto; margin-right: auto;"
 border="0"> <tbody> <tr> <td bgcolor="#ccccff"> <div align="right"><b>INTERRO</b></div>
</td> <td width="5"><b>.</b></td> <td bgcolor="#ff9999"><b>TXT</b></td>
</tr> <tr> <td bgcolor="#ccccff"> <div align="right">nom principal</div>
</td> <td width="5"><strong>.</strong></td> <td bgcolor="#ff9999">extension</td>
</tr> </tbody>
</table><p>Le nom principal est s�par� de l'extension par un
point.</p>
<table
 style="width: 90%; text-align: left; margin-left: auto; margin-right: auto;"
 border="0" cellspacing="5"><tbody><tr align="center"> <td class="pair"
 style="width: 29%;"> Le nom principal </td> <td width="41%"> sert
g�n�ralement
� indiquer </td> <td class="pair" width="30%">le contenu du fichier</td>
</tr> <tr align="center"> <td class="pair" width="29%"> l'extension </td>
<td width="41%"> sert g�n�ralement
� indiquer </td> <td class="pair" width="30%"> le type de fichier</td></tr></tbody></table></div><h3>Conventions
pour le nom principal.</h3>
<div class="info"><p>Le nom principal d�signe le contenu du fichier
pour les utilisateurs humains. Il s'agit d'une bonne habitude �
prendre, m�me si rien n'emp�che de donner des noms
fantaisistes aux fichiers.</p><p>G�n�ralement,</p>
<ul><li><strong> la longueur des noms de fichiers</strong> peut aller
jusqu'� 256 caract�res. En g�n�ral, on
pr�f�rera des noms plus courts;</li><li><strong>certains caract�res
sont interdits</strong>: <b>\
/ : * ? " &lt; &gt; | .</b></li></ul></div><h3>Conventions pour
l'extension</h3>
<div class="info"><p>L'extension est g�n�ralement
form�e d'une s�rie de 0 � 3 caract�res. On
utilise rarement plus de 4 caract�res.</p><p>L'extension indique
habituellement le type de fichier auquel on a
affaire.</p>
<table
 style="width: 80%; text-align: left; margin-left: auto; margin-right: auto;"
 border="0"> <tbody> <tr> <td style="text-align: center;" width="100">extension</td>
<td style="text-align: center;">signification</td> </tr> <tr
 class="pair"> <td style="text-align: center;" width="100">doc</td> <td>fichier
contenant un document de "texte" de Word</td> </tr> <tr> <td
 style="text-align: center;" width="100">txt</td> <td>fichier "<strong>t</strong>e<strong>xt</strong>e"
pur du
bloc-note de Windows</td> </tr> <tr class="pair"> <td
 style="text-align: center;">odt</td> <td>fichier de texte au format
Open Document (OpenOffice.org, Abiword,...) </td> </tr> <tr> <td
 style="text-align: center;">wav</td> <td>fichier de sons</td> </tr> <tr
 class="pair"> <td style="text-align: center;">mp3</td> <td>fichier
contenant de la musique haute fid�lit�
(t�l�chargeable sur le web)</td> </tr> <tr> <td
 style="text-align: center;">exe</td> <td>fichier contenant un
programme <b><strong>ex�</strong></b>cutable sous Windows</td> </tr> <tr
 class="pair"><td style="text-align: center;">jpg</td><td>fichier
contenant une image au format JPG (sans doute une photo)</td></tr><tr> <td
 style="text-align: center;">html </td> <td>fichier contenant un
"hypertexte" (<strong>h</strong>ypertex<strong>t</strong> <strong>m</strong>arkup
<strong>l</strong>anguage): remarquer
l'extension form�e de quatre caract�res</td> </tr> <tr class="pair"> <td
 style="text-align: center;"> php </td> <td>fichier contenant une
page web cod�e dans le langage
PHP</td> </tr> <tr> <td style="text-align: center;">...</td> <td>&nbsp;</td>
</tr> </tbody>
</table></div><p class="questions">Mais s'il me prend l'envie soudaine
de donner une
extension WAV � un fichier contenant du texte ou l'extension jpg
� un fichier contenant de la musique? Quelqu'un peut m'en
emp�cher?</p>
<p class="reponses"> Non, absolument personne. Cependant, il deviendra
vite difficile de savoir � quoi correspondent ces fichiers! Du
texte? De la musique? Une image? Il vaut donc mieux s'en tenir aux
r�gles g�n�rales.</p>
<form class="travail"> Le nom principal d'un fichier indique de
pr�f�rence<br> <input name="radiobutton" value="radiobutton"
 onclick="alert('Le type de fichier est indiqu� par une autre partie du nom du fichier. Laquelle?')"
 type="radio"> Le type de fichier<br> <input name="radiobutton"
 value="radiobutton"
 onclick="alert('Bien s�r, mais il n\'y a aucune obligation.\nUn fichier appel� \'g�ographie\' peut contenir\nton dernier devoir de fran�ais.')"
 type="radio"> Le contenu du fichier<br> <input name="radiobutton"
 value="radiobutton"
 onclick="alert('La taille du fichier ne fait pas partie de son nom!!')"
 type="radio"> La taille du fichier </form>
<form class="travail" name="form1" method="post" action=""> Le nom d'un
fichier est
constitu�&nbsp;:<br> <input name="radiobutton" value="radiobutton"
 onclick="alert('R�ponse fausse.\nIl faut revoir la signification de chacune des parties\ndu nom d\'un fichier.')"
 type="radio"> d'une extension suivie d'un nom principal et d'un point<br>
<input name="radiobutton" value="radiobutton"
 onclick="alert('R�ponse fausse.\nIl faut revoir l\'ordre dans lequel sont indiqu�es\nchacune des parties du nom d\'un fichier.')"
 type="radio"> d'un nom principal suivi d'une extension et d'un point<br>
<input name="radiobutton" value="radiobutton"
 onclick="alert('R�ponse correcte. C\'est parfait.')" type="radio">d'un
nom principal suivi d'un point et d'une extension </form>
<form class="travail"> Lors de l'enregistrement d'un document �crit
avec
OpenOffice.org Writer, je donne l'extension " bmp ". Ce
fichier<br> <input name="radiobutton" value="radiobutton"
 onclick="alert('Non. Word reste capable de lire ce fichier\nsi on lui pr�cise bien qu\'il s\'agit d\'un document Word.')"
 type="radio"> Devient illisible avec OpenOffice.org Writer <br> <input
 name="radiobutton" value="radiobutton"
 onclick="alert('Juste!\nA l\'ouverture d\'un document, Word affiche g�n�ralement les fichiers\ndont l\'extension est DOC. Ce fichier BMP ne figurera donc pas dans la liste.\nIl sera donc plus difficile � trouver.')"
 type="radio"> Reste lisible mais devient difficile � retrouver<br> <input
 name="radiobutton" value="radiobutton"
 onclick="alert('Ce n\'est pas si �vident.\nA l\'ouverture d\'un document, Word affiche g�n�ralement uniquement les fichiers\ndont l\'extension est DOC. Ce fichier BMP ne figurera donc pas dans la liste.\nIl sera donc plus difficile � trouver.')"
 type="radio"> Ne pose aucun probl�me particulier<br>
</form>
<p>Quand tu as r�pondu aux questions et bien compris les
r�ponses, passe � la page suivante.</p>
<?php include ("../../suivant.inc.php");
?></div><?php include ("../../pied.inc.php");
?>
</div></body></html>