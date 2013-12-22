<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head><meta
 id="_moz_prolog" content=""> <meta name="generator"
 content="HTML Tidy for Windows (vers 1st July 2004), see www.w3.org"> <meta
 http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> <link
 rel="stylesheet" type="text/css" href="../../info.css" media="screen">
<link rel="stylesheet" type="text/css" href="../../print.css"
 media="print"> <title>Organisation des fichiers sur les disques</title></head>
<body> <div id="conteneur"><?php include ("./top.inc.php");
      ?> <div
 id="texte"> <h2> Les fichiers compressés .zip </h2> <div
 class="info"><p> Bien que de moins en moins crucial, grâce aux disques
durs de grande capacité et à l'augmentation de la vitesse de
transmission des informations sur l'Internet, le problème de la taille
des fichiers reste d'actualité.</p><p> Pour réduire le "poids" des
fichiers, il est possible de leur imposer une "compression". Le
processus permet souvent de réduire la taille des fichiers de manière
spectaculaire </p> </div><h3>Le principe </h3> <div class="info"><p>
Les algorithmes qui permettent de réduire la taille des fichiers sont
souvent complexes. Il n'est pas question d'envisager de les expliquer
ici. Contentons-nous de montrer comment il serait possible de comprimer
un fichier contenant un texte ou une image.</p><p> <strong>Cas d'un
texte</strong>: un texte est formé d'un certain nombre de mots.
Prenons, par exemple, la phrase </p> <p style="text-align: center;">
"une petite faute ou une toute petite faute est une faute" </p> <p
 class="questions"> Bien! Ca commence fort, comme exemple. Il contient
lui-même une faute! Il faut dire "une petite faute ou une toute petite
faute sont des fautes". </p> <p class="reponses"> Remarque
extrêmement pertinente, cher élève. Je propose donc que vous trouviez
un meilleur exemple qui remplacera illico ce fragment de phrase
boiteux, dès que vous me l'aurez proposé. </p> <p> La phrase donnée
en exemple contient 56 caractères, y compris les "&nbsp;espaces&nbsp;".
Il est cependant possible de compresser un peu le fichier correspondant
en repérant les différents mots et en composant un
"&nbsp;dictionnaire&nbsp;". On y trouve les mots&nbsp;: </p> <table
 style="text-align: center;" border="1" width="240"> <tbody> <tr> <td
 bgcolor="#ffffcc"> 1 </td> <td> une </td> <td> 3 caractères </td>
</tr> <tr> <td bgcolor="#ffffcc"> 2 </td> <td bgcolor="#99ccff">
"espace" </td> <td bgcolor="#99ccff"> 1 caractère </td> </tr> <tr>
<td bgcolor="#ffffcc"> 3 </td> <td> petite </td> <td> 6 caractères </td>
</tr> <tr> <td bgcolor="#ffffcc"> 4 </td> <td> faute </td> <td> 5
caractères </td> </tr> <tr> <td bgcolor="#ffffcc"> 5 </td> <td>
ou </td> <td> 2 caractères </td> </tr> <tr> <td bgcolor="#ffffcc">
6 </td> <td> toute </td> <td> 5 caractères </td> </tr> <tr> <td
 bgcolor="#ffffcc"> 7 </td> <td> est </td> <td> 3 caractères </td>
</tr> </tbody> </table> <p> soit 25 caractères + 7 codes associés à
chacun des mots = <strong>32 signes</strong>. </p> <p> Il suffit
donc d'enregistrer ce dictionnaire et les codes correspondants aux
différents mots qu'il contient. Ensuite, il faut enregistrer les mots
sous forme de suites de codes: </p> <table style="text-align: center;"
 border="1"> <tbody> <tr> <td bgcolor="#ffffcc" width="20"> <div
 style="text-align: center;"> 1 </div> </td> <td bgcolor="#99ccff"
 width="20"> <div style="text-align: center;"> 2 </div> </td> <td
 bgcolor="#ffffcc" width="20"> <div style="text-align: center;"> 3 </div>
</td> <td bgcolor="#99ccff" width="20"> <div
 style="text-align: center;"> 2 </div> </td> <td bgcolor="#ffffcc"
 width="20"> <div style="text-align: center;"> 4 </div> </td> <td
 bgcolor="#99ccff" width="20"> <div style="text-align: center;"> 2 </div>
</td> <td bgcolor="#ffffcc" width="20"> <div
 style="text-align: center;"> 5 </div> </td> <td bgcolor="#99ccff"
 width="20"> <div style="text-align: center;"> 2 </div> </td> <td
 bgcolor="#ffffcc" width="20"> <div style="text-align: center;"> 1 </div>
</td> <td bgcolor="#99ccff" width="20"> <div
 style="text-align: center;"> 2 </div> </td> <td bgcolor="#ffffcc"
 width="20"> <div style="text-align: center;"> 6 </div> </td> <td
 bgcolor="#99ccff" width="20"> <div style="text-align: center;"> 2 </div>
</td> <td bgcolor="#ffffcc" width="20"> 3 </td> <td bgcolor="#99ccff"
 width="20"> 2 </td> <td bgcolor="#ffffcc" width="20"> <div
 style="text-align: center;"> 4 </div> </td> <td bgcolor="#99ccff"
 width="20"> <div style="text-align: center;"> 2 </div> </td> <td
 bgcolor="#ffffcc" width="20"> <div style="text-align: center;"> 7 </div>
</td> <td bgcolor="#99ccff" width="20"> <div
 style="text-align: center;"> 2 </div> </td> <td bgcolor="#ffffcc"
 width="20"> <div style="text-align: center;"> 1 </div> </td> <td
 bgcolor="#99ccff" width="20"> <div style="text-align: center;"> 2 </div>
</td> <td bgcolor="#ffffcc" width="20"> <div
 style="text-align: center;"> 4 </div> </td> </tr> </tbody> </table>
<p> soit <strong>21 signes</strong>. </p> <p> Cela nous mène donc à
un total de 53 signes à enregistrer au lieu de 56. </p><p
 class="questions"> Ouaah! Quel gain phénoménal! </p> <p
 class="reponses"> Moquez-vous, jeune homme! L'avantage du codage est
bien sûr minime, dans l'exemple proposé. Cependant, sur des textes plus
longs et contenant plus de mots répétés, le gain deviendra appréciable.<br>
L'exemple ne vise qu'à montrer qu'il est possible de compresser. </p> <p
 class="parecrit"> Petit exercice&nbsp;: en utilisant la méthode
décrite ci-dessus, indique comment l'on pourrait compresser la phrase
suivante&nbsp;: "&nbsp;taratata tata taratata taratata taratata&nbsp;"
(à chanter sur l'air du "&nbsp;toreador&nbsp;" extrait de Carmen de
Bizet). </p> <p> Dans les méthodes réelles de compression, ce ne sont
pas des mots qui figurent dans les dictionnaires, mais des motifs de
caractères répétés. </p></div><form class="travail" action=""> Lorsque
l'on compresse un document "texte",<br> <input name="bt"
 onclick="alert('Non.\nLe \&quot;dictionnaire\&quot; contient, au maximum, le même nombre de mots que le texte.')"
 type="radio"> Le "&nbsp;dictionnaire&nbsp;" doit être plus gros que le
texte original<br> <input name="bt"
 onclick="alert('Oui.\nLorsque certains mots interviennent plusieurs fois, ils ne figurent qu\'une seule fois dans le \&quot;dictionnaire\&quot;. Celui-ci est donc moins gros que le texte original.')"
 type="radio"> Le "&nbsp;dictionnaire&nbsp;" doit être moins gros que
le texte original<br> <input name="bt"
 onclick="alert('Non.\nLe \&quot;dictionnaire\&quot; a le même poids que le document original si aucun mot ne figure deux fois.')"
 type="radio"> Le "&nbsp;dictionnaire&nbsp;" a toujours le même "poids"
que le texte original<br> <input name="bt"
 onclick="alert('Je crois qu\'il faut absolument relire la théorie ci-dessus. On y évoque un \&quot;dictionnaire\&quot;.')"
 type="radio"> Un dictionnaire? Quel dictionnaire? </form> <div
 class="info"> <p><strong><img src="images/smileybig.png" align="right"
 border="1" height="144" hspace="10" vspace="10" width="144">Cas d'un
dessin point par point</strong>&nbsp;: dans un dessin point par point
(BMP, par exemple), chaque pixel de l'image est codé par un nombre.</p><p>
Par exemple, pour l'image <img src="images/smiley.png" height="15"
 width="15"> de taille 16 pixels x 16 pixels, agrandie ci-contre: </p>
<ul><li>noir = 0; </li><li>blanc = 16; </li><li>orange = 8; </li><li>...
</li></ul> <p> On pourrait donc enregistrer l'image sous forme d'un
tableau de 16x16 = 256 nombres&nbsp;: </p> <table
 style="text-align: left; margin-left: auto; margin-right: auto;"
 border="1" width="360"> <tbody> <tr> <td height="15" width="15"> <div
 style="text-align: center;"> 16 </div> </td> <td height="15"
 width="15"> <div style="text-align: center;"> 16 </div> </td> <td
 height="15" width="15"> <div style="text-align: center;"> 16 </div> </td>
<td height="15" width="15"> <div style="text-align: center;"> 16 </div>
</td> <td height="15" width="15"> <div style="text-align: center;">
16 </div> </td> <td bgcolor="#000000" height="15" width="15"> <div
 style="text-align: center;"> <font color="#ffffff">0</font> </div> </td>
<td bgcolor="#000000" height="15" width="15"> <div
 style="text-align: center;"> <font color="#ffffff">0</font> </div> </td>
<td bgcolor="#000000" height="15" width="15"> <div
 style="text-align: center;"> <font color="#ffffff">0</font> </div> </td>
<td bgcolor="#000000" height="15" width="15"> <div
 style="text-align: center;"> <font color="#ffffff">0</font> </div> </td>
<td bgcolor="#000000" height="15" width="15"> <div
 style="text-align: center;"> <font color="#ffffff">0</font> </div> </td>
<td bgcolor="#000000" height="15" width="15"> <div
 style="text-align: center;"> <font color="#ffffff">0</font> </div> </td>
<td height="15" width="15"> <div style="text-align: center;"> 16 </div>
</td> <td height="15" width="15"> <div style="text-align: center;">
16 </div> </td> <td height="15" width="15"> <div
 style="text-align: center;"> 16 </div> </td> <td height="15"
 width="15"> <div style="text-align: center;"> 16 </div> </td> <td
 height="15" width="15"> <div style="text-align: center;"> 16 </div> </td>
</tr> <tr> <td height="15" width="15"> <div
 style="text-align: center;"> 16 </div> </td> <td height="15"
 width="15"> <div style="text-align: center;"> 16 </div> </td> <td
 height="15" width="15"> <div style="text-align: center;"> 16 </div> </td>
<td bgcolor="#000000" height="15" width="15"> <div
 style="text-align: center;"> <font color="#ffffff">0</font> </div> </td>
<td bgcolor="#000000" height="15" width="15"> <div
 style="text-align: center;"> <font color="#ffffff">0</font> </div> </td>
<td bgcolor="#ffcc66" height="15" width="15"> <div
 style="text-align: center;"> 8 </div> </td> <td bgcolor="#ffcc66"
 height="15" width="15"> <div style="text-align: center;"> 8 </div> </td>
<td bgcolor="#ffcc66" height="15" width="15"> <div
 style="text-align: center;"> 8 </div> </td> <td bgcolor="#ffcc66"
 height="15" width="15"> <div style="text-align: center;"> 8 </div> </td>
<td bgcolor="#ffcc66" height="15" width="15"> <div
 style="text-align: center;"> 8 </div> </td> <td bgcolor="#ffcc66"
 height="15" width="15"> <div style="text-align: center;"> 8 </div> </td>
<td bgcolor="#000000" height="15" width="15"> <div
 style="text-align: center;"> <font color="#ffffff">0</font> </div> </td>
<td bgcolor="#000000" height="15" width="15"> <div
 style="text-align: center;"> <font color="#ffffff">0</font> </div> </td>
<td height="15" width="15"> <div style="text-align: center;"> 16 </div>
</td> <td height="15" width="15"> <div style="text-align: center;">
16 </div> </td> <td height="15" width="15"> <div
 style="text-align: center;"> 16 </div> </td> </tr> <tr> <td
 height="15" width="15"> <div style="text-align: center;"> 16 </div> </td>
<td height="15" width="15"> <div style="text-align: center;"> 16 </div>
</td> <td bgcolor="#000000" height="15" width="15"> <div
 style="text-align: center;"> <font color="#ffffff">0</font> </div> </td>
<td bgcolor="#ffcc66" height="15" width="15"> <div
 style="text-align: center;"> 8 </div> </td> <td bgcolor="#ffcc66"
 height="15" width="15"> <div style="text-align: center;"> 8 </div> </td>
<td bgcolor="#ffcc66" height="15" width="15"> <div
 style="text-align: center;"> 8 </div> </td> <td bgcolor="#ffcc66"
 height="15" width="15"> <div style="text-align: center;"> 8 </div> </td>
<td bgcolor="#ffcc66" height="15" width="15"> <div
 style="text-align: center;"> 8 </div> </td> <td bgcolor="#ffcc66"
 height="15" width="15"> <div style="text-align: center;"> 8 </div> </td>
<td bgcolor="#ffcc66" height="15" width="15"> <div
 style="text-align: center;"> 8 </div> </td> <td bgcolor="#ffcc66"
 height="15" width="15"> <div style="text-align: center;"> 8 </div> </td>
<td bgcolor="#ffcc66" height="15" width="15"> <div
 style="text-align: center;"> 8 </div> </td> <td bgcolor="#ffcc66"
 height="15" width="15"> <div style="text-align: center;"> 8 </div> </td>
<td bgcolor="#000000" height="15" width="15"> <div
 style="text-align: center;"> <font color="#ffffff">0</font> </div> </td>
<td height="15" width="15"> <div style="text-align: center;"> 16 </div>
</td> <td height="15" width="15"> <div style="text-align: center;">
16 </div> </td> </tr> <tr> <td height="15" width="15"> <div
 style="text-align: center;"> 16 </div> </td> <td bgcolor="#000000"
 height="15" width="15"> <div style="text-align: center;"> <font
 color="#ffffff">0</font> </div> </td> <td bgcolor="#ffcc66"
 height="15" width="15"> <div style="text-align: center;"> 8 </div> </td>
<td bgcolor="#ffcc66" height="15" width="15"> <div
 style="text-align: center;"> 8 </div> </td> <td bgcolor="#ffcc66"
 height="15" width="15"> <div style="text-align: center;"> 8 </div> </td>
<td bgcolor="#ffcc66" height="15" width="15"> <div
 style="text-align: center;"> 8 </div> </td> <td bgcolor="#ffcc66"
 height="15" width="15"> <div style="text-align: center;"> 8 </div> </td>
<td bgcolor="#ffcc66" height="15" width="15"> <div
 style="text-align: center;"> 8 </div> </td> <td bgcolor="#ffcc66"
 height="15" width="15"> <div style="text-align: center;"> 8 </div> </td>
<td bgcolor="#ffcc66" height="15" width="15"> <div
 style="text-align: center;"> 8 </div> </td> <td bgcolor="#ffcc66"
 height="15" width="15"> <div style="text-align: center;"> 8 </div> </td>
<td bgcolor="#ffcc66" height="15" width="15"> <div
 style="text-align: center;"> 8 </div> </td> <td bgcolor="#ffcc66"
 height="15" width="15"> <div style="text-align: center;"> 8 </div> </td>
<td bgcolor="#ffcc66" height="15" width="15"> <div
 style="text-align: center;"> 8 </div> </td> <td bgcolor="#000000"
 height="15" width="15"> <div style="text-align: center;"> <font
 color="#ffffff">0</font> </div> </td> <td height="15" width="15"> <div
 style="text-align: center;"> 16 </div> </td> </tr> <tr> <td
 colspan="16" height="15"> <div style="text-align: center;"></div> <div
 style="text-align: center;"></div> <div style="text-align: center;"></div>
<div style="text-align: center;"></div> <div
 style="text-align: center;"></div> <div style="text-align: center;"></div>
<div style="text-align: center;"></div> <div
 style="text-align: center;"></div> <div style="text-align: center;"></div>
<div style="text-align: center;"></div> <div
 style="text-align: center;"></div> <div style="text-align: center;"></div>
<div style="text-align: center;"></div> <div
 style="text-align: center;"></div> <div style="text-align: center;"></div>
<div style="text-align: center;"> etc... </div> </td> </tr> </tbody>
</table> <p> Pour la portion de l'image présentée ci-dessus, il
faudrait donc enregistrer 4x16&nbsp;=&nbsp;64 nombres. </p> <p> Mais
il serait aussi possible d'enregistrer les mêmes informations sous la
forme de couples </p> <p style="text-align: center;"> (couleur:nombre
de pixels). </p> <p> Ce qui, pour les quatre lignes illustrées,
donnerait l'ensemble de couples suivants </p> <p> 16:5; 0:6; 16:5<br>
16:3; 0:2; 8:6; 0:2; 16:3<br> 16:2; 0:1; 8:10; 0:1; 16:2<br> 16:1; 0:1;
8:12; 0:1; 16:1 </p> <p> Soit seulement 36 nombres. Le fichier
enregistré serait donc presque deux fois plus petit. L'inconvénient est
qu'il faut décoder les informations et reconstruire l'image au moment
de relire le fichier. </p></div><form class="travail" action="">
Lorsque l'on traite une image compressée,<br> <input name="bt"
 onclick="alert('Juste.\nLe fichier compressé est moins \&quot;lourd\&quot;, mais l\'ordinateur doit recomposer l\'image. Ce qui lui prend du temps de travail.')"
 type="radio"> on gagne sur le "&nbsp;poids&nbsp;" du fichier, mais on
perd en temps de traitement de l'image<br> <input name="bt"
 onclick="alert('Réponse fausse.\nQuel est le but de la compression?')"
 type="radio"> on perd sur le "&nbsp;poids&nbsp;" du fichier, mais on
gagne en temps de traitement de l'image<br> <input name="bt"
 onclick="alert('Faux.\nL\'image compressée doit encore être traitée par l\'ordinateur pour être visible.')"
 type="radio"> on gagne sur le "&nbsp;poids&nbsp;" du fichier, et on
gagne en temps de traitement de l'image<br> <input name="bt"
 onclick="alert('Non.\nIl y a un gain à compresser les fichiers images. Lequel?')"
 type="radio"> on perd sur le "&nbsp;poids&nbsp;" du fichier, et on
perd en temps de traitement de l'image<br> </form> <p> Quand tu as
répondu aux questions et bien compris les réponses, passe à la page
suivante.<?php include ("../../suivant.inc.php");
          ?> </p> </div><?php include ("../../pied.inc.php");
      ?>
</div> </body></html>