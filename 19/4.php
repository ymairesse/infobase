<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta id="_moz_prolog" content="">
  <meta id="_moz_prolog" content="">
  <meta http-equiv="Content-Type"
 content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css"
 media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css"
 media="print">
  <title>Organisation des fichiers sur les disques</title>
  <style type="text/css">
.pair {background-color:#FFFFCC;}
  </style>
</head>
<body>
<div id="conteneur"><?php include ("./top.inc.php");
?>
<div id="texte">
<h2>Les noms des fichiers</h2>
<p class="info" width="100%">Les concepteurs du système
d'exploitation décident d'un certain nombre de conventions
à propos des noms de fichiers. </p>
<p>Habituellement, les noms de fichiers sont constitués de deux
parties</p>
<ul>
  <li>un <strong>nom principal</strong></li>
  <li>une <strong>extension</strong></li>
</ul>
<p>Exemple: </p>
<table
 style="width: 50%; text-align: left; margin-left: auto; margin-right: auto;"
 border="0">
  <tbody>
    <tr>
      <td bgcolor="#ccccff">
      <div align="right"><b>INTERRO</b></div>
      </td>
      <td width="5"><b>.</b></td>
      <td bgcolor="#ff9999"><b>TXT</b></td>
    </tr>
    <tr>
      <td bgcolor="#ccccff">
      <div align="right">nom principal</div>
      </td>
      <td width="5"><strong>.</strong></td>
      <td bgcolor="#ff9999">extension</td>
    </tr>
  </tbody>
</table>
<p>Le nom principal est séparé de l'extension par un
point.</p>
<table
 style="width: 90%; text-align: left; margin-left: auto; margin-right: auto;"
 border="0" cellspacing="5">
  <tbody>
    <tr align="center">
      <td class="pair" style="width: 29%;"> Le nom principal </td>
      <td width="41%"> sert généralement
à indiquer </td>
      <td class="pair" width="30%">le contenu du fichier</td>
    </tr>
    <tr align="center">
      <td class="pair" width="29%"> l'extension </td>
      <td width="41%"> sert généralement
à indiquer </td>
      <td class="pair" width="30%"> le type de fichier</td>
    </tr>
  </tbody>
</table>
<h3>Conventions pour le nom principal.</h3>
<p class="info">Le nom principal désigne le contenu du fichier
pour les utilisateurs humains. Il s'agit d'une bonne habitude à
prendre, même si rien n'empêche de donner des noms
fantaisistes aux fichiers.</p>
<p>Sous Windows 9x, ME, NT, XP et 2000</p>
<ul>
  <li><strong> la longueur des noms de fichiers</strong> peut aller
jusqu'à 256 caractères. En général, on
préfèrera des noms plus courts;</li>
  <li><strong>certains caractères sont interdits</strong>: <b>\
/ : * ? " &lt; &gt; | .</b></li>
</ul>
<h3>Conventions pour l'extension</h3>
<p class="info">L'extension est généralement
formée d'une série de 0 à 3 caractères. On
utilise rarement plus de 4 caractères.</p>
<p>L'extension indique habituellement le type de fichier auquel on a
affaire.</p>
<table
 style="width: 80%; text-align: left; margin-left: auto; margin-right: auto;"
 border="0">
  <tbody>
    <tr>
      <td style="text-align: center;" width="100">extension</td>
      <td style="text-align: center;">signification</td>
    </tr>
    <tr class="pair">
      <td style="text-align: center;" width="100">DOC</td>
      <td>fichier contenant un document de "texte" de Word</td>
    </tr>
    <tr>
      <td style="text-align: center;" width="100">TXT</td>
      <td>fichier "<strong>t</strong>e<strong>xt</strong>e" pur du
bloc-note de Windows</td>
    </tr>
    <tr class="pair">
      <td style="text-align: center;">BMP</td>
      <td>fichier de dessins "<strong>B</strong>it<strong>m</strong>a<strong>p</strong>"
de Paint </td>
    </tr>
    <tr>
      <td style="text-align: center;">WAV</td>
      <td>fichier de sons de Windows</td>
    </tr>
    <tr class="pair">
      <td style="text-align: center;">MP3</td>
      <td>fichier contenant de la musique haute fidélité
(téléchargeable sur le web)</td>
    </tr>
    <tr>
      <td style="text-align: center;">EXE</td>
      <td>fichier contenant un programme <b><strong>exé</strong></b>cutable</td>
    </tr>
    <tr class="pair">
      <td style="text-align: center;"> HTM </td>
      <td>fichier contenant un "hypertexte" (<strong>h</strong>ypertex<strong>t</strong>
      <strong>m</strong>arkup <strong>l</strong>anguage)</td>
    </tr>
    <tr>
      <td style="text-align: center;"> HTML </td>
      <td>fichier contenant un "hypertexte" (<strong>h</strong>ypertex<strong>t</strong>
      <strong>m</strong>arkup <strong>l</strong>anguage): remarquer
l'extension formée de quatre caractères</td>
    </tr>
    <tr class="pair">
      <td style="text-align: center;"> PHP3 </td>
      <td>fichier contenant une page web codée dans le langage
PHP dans la version 3 (on peut aussi utiliser l'extension PHP)</td>
    </tr>
    <tr>
      <td style="text-align: center;">...</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
<p class="questions">Mais s'il me prend l'envie soudaine de donner une
extension WAV à un fichier contenant du texte ou l'extension DOC
à un fichier contenant de la musique? Quelqu'un peut m'en
empêcher?</p>
<p class="reponses"> Non, absolument personne. Cependant, il deviendra
vite difficile de savoir à quoi correspondent ces fichiers! Du
texte? De la musique? Une image? Il vaut donc mieux s'en tenir aux
règles générales.</p>
<div class="travail">
<form> Le nom principal d'un fichier indique de préférence<br>
  <input name="radiobutton" value="radiobutton"
 onclick="alert('Le type de fichier est indiqué par une autre partie du nom du fichier. Laquelle?')"
 type="radio"> Le type de fichier<br>
  <input name="radiobutton" value="radiobutton"
 onclick="alert('Bien sûr, mais il n\'y a aucune obligation.\nUn fichier appelé \'géographie\' peut contenir\nton dernier devoir de français.')"
 type="radio"> Le contenu du fichier<br>
  <input name="radiobutton" value="radiobutton"
 onclick="alert('La taille du fichier ne fait pas partie de son nom!!')"
 type="radio"> La taille du fichier </form>
</div>
<div class="travail">
<form name="form1" method="post" action=""> Le nom d'un fichier est
constitué&nbsp;:<br>
  <input name="radiobutton" value="radiobutton"
 onclick="alert('Réponse fausse.\nIl faut revoir la signification de chacune des parties\ndu nom d\'un fichier.')"
 type="radio"> d'une extension suivie d'un nom principal et d'un point<br>
  <input name="radiobutton" value="radiobutton"
 onclick="alert('Réponse fausse.\nIl faut revoir l\'ordre dans lequel sont indiquées\nchacune des parties du nom d\'un fichier.')"
 type="radio"> d'un nom principal suivi d'une extension et d'un point<br>
  <input name="radiobutton" value="radiobutton"
 onclick="alert('Réponse correcte. C\'est parfait.')" type="radio">d'un
nom principal suivi d'un point et d'une extension </form>
</div>
<div class="travail">
<form>Lors de l'enregistrement d'un document écrit avec
OpenOffice.org Writer, je donne l'extension " BMP ". Ce
fichier<br>
  <input name="radiobutton" value="radiobutton"
 onclick="alert('Non. OpenOffice reste capable de lire ce fichier\nsi on lui précise bien qu\'il s\'agit d\'un document OpenOffice..')"
 type="radio"> Devient illisible avec OpenOffice.org Writer <br>
  <input name="radiobutton" value="radiobutton"
 onclick="alert('Juste!\nA l\'ouverture d\'un document, OpenOffice affiche généralement les fichiers\ndont l\'extension est .odt. Ce fichier BMP ne figurera donc pas dans la liste.\nIl sera donc plus difficile à trouver.')"
 type="radio"> Reste lisible mais devient difficile à retrouver<br>
  <input name="radiobutton" value="radiobutton"
 onclick="alert('Ce n\'est pas si évident.\nA l\'ouverture d\'un document, OpenOffice affiche généralement uniquement les fichiers\ndont l\'extension est .odt. Ce fichier BMP ne figurera donc pas dans la liste.\nIl sera donc plus difficile à trouver.')"
 type="radio"> Ne pose aucun problème particulier
</form>
</div>
<p>Quand tu as répondu aux questions et bien compris les
réponses, passe à la page suivante.</p>
<?php include ("../../suivant.inc.php");
?></div>
<?php include ("../../pied.inc.php");
?>
</div>
</body>
</html>
