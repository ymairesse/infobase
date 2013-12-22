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
 id="texte"> <h2> Les fichiers compress�s .zip </h2> <div
 class="info"><p> Bien que de moins en moins crucial, gr�ce aux disques
durs de grande capacit� et � l'augmentation de la vitesse de
transmission des informations sur l'Internet, le probl�me de la taille
des fichiers reste d'actualit�.</p><p> Pour r�duire le "poids" des
fichiers, il est possible de leur imposer une "compression". Le
processus permet souvent de r�duire la taille des fichiers de mani�re
spectaculaire </p> </div><h3>Le principe </h3> <div class="info"><p>
Les algorithmes qui permettent de r�duire la taille des fichiers sont
souvent complexes. Il n'est pas question d'envisager de les expliquer
ici. Contentons-nous de montrer comment il serait possible de comprimer
un fichier contenant un texte ou une image.</p><p> <strong>Cas d'un
texte</strong>: un texte est form� d'un certain nombre de mots.
Prenons, par exemple, la phrase </p> <p style="text-align: center;">
"une petite faute ou une toute petite faute est une faute" </p> <p
 class="questions"> Bien! Ca commence fort, comme exemple. Il contient
lui-m�me une faute! Il faut dire "une petite faute ou une toute petite
faute sont des fautes". </p> <p class="reponses"> Remarque
extr�mement pertinente, cher �l�ve. Je propose donc que vous trouviez
un meilleur exemple qui remplacera illico ce fragment de phrase
boiteux, d�s que vous me l'aurez propos�. </p> <p> La phrase donn�e
en exemple contient 56 caract�res, y compris les "&nbsp;espaces&nbsp;".
Il est cependant possible de compresser un peu le fichier correspondant
en rep�rant les diff�rents mots et en composant un
"&nbsp;dictionnaire&nbsp;". On y trouve les mots&nbsp;: </p> <table
 style="text-align: center;" border="1" width="240"> <tbody> <tr> <td
 bgcolor="#ffffcc"> 1 </td> <td> une </td> <td> 3 caract�res </td>
</tr> <tr> <td bgcolor="#ffffcc"> 2 </td> <td bgcolor="#99ccff">
"espace" </td> <td bgcolor="#99ccff"> 1 caract�re </td> </tr> <tr>
<td bgcolor="#ffffcc"> 3 </td> <td> petite </td> <td> 6 caract�res </td>
</tr> <tr> <td bgcolor="#ffffcc"> 4 </td> <td> faute </td> <td> 5
caract�res </td> </tr> <tr> <td bgcolor="#ffffcc"> 5 </td> <td>
ou </td> <td> 2 caract�res </td> </tr> <tr> <td bgcolor="#ffffcc">
6 </td> <td> toute </td> <td> 5 caract�res </td> </tr> <tr> <td
 bgcolor="#ffffcc"> 7 </td> <td> est </td> <td> 3 caract�res </td>
</tr> </tbody> </table> <p> soit 25 caract�res + 7 codes associ�s �
chacun des mots = <strong>32 signes</strong>. </p> <p> Il suffit
donc d'enregistrer ce dictionnaire et les codes correspondants aux
diff�rents mots qu'il contient. Ensuite, il faut enregistrer les mots
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
<p> soit <strong>21 signes</strong>. </p> <p> Cela nous m�ne donc �
un total de 53 signes � enregistrer au lieu de 56. </p><p
 class="questions"> Ouaah! Quel gain ph�nom�nal! </p> <p
 class="reponses"> Moquez-vous, jeune homme! L'avantage du codage est
bien s�r minime, dans l'exemple propos�. Cependant, sur des textes plus
longs et contenant plus de mots r�p�t�s, le gain deviendra appr�ciable.<br>
L'exemple ne vise qu'� montrer qu'il est possible de compresser. </p> <p
 class="parecrit"> Petit exercice&nbsp;: en utilisant la m�thode
d�crite ci-dessus, indique comment l'on pourrait compresser la phrase
suivante&nbsp;: "&nbsp;taratata tata taratata taratata taratata&nbsp;"
(� chanter sur l'air du "&nbsp;toreador&nbsp;" extrait de Carmen de
Bizet). </p> <p> Dans les m�thodes r�elles de compression, ce ne sont
pas des mots qui figurent dans les dictionnaires, mais des motifs de
caract�res r�p�t�s. </p></div><form class="travail" action=""> Lorsque
l'on compresse un document "texte",<br> <input name="bt"
 onclick="alert('Non.\nLe \&quot;dictionnaire\&quot; contient, au maximum, le m�me nombre de mots que le texte.')"
 type="radio"> Le "&nbsp;dictionnaire&nbsp;" doit �tre plus gros que le
texte original<br> <input name="bt"
 onclick="alert('Oui.\nLorsque certains mots interviennent plusieurs fois, ils ne figurent qu\'une seule fois dans le \&quot;dictionnaire\&quot;. Celui-ci est donc moins gros que le texte original.')"
 type="radio"> Le "&nbsp;dictionnaire&nbsp;" doit �tre moins gros que
le texte original<br> <input name="bt"
 onclick="alert('Non.\nLe \&quot;dictionnaire\&quot; a le m�me poids que le document original si aucun mot ne figure deux fois.')"
 type="radio"> Le "&nbsp;dictionnaire&nbsp;" a toujours le m�me "poids"
que le texte original<br> <input name="bt"
 onclick="alert('Je crois qu\'il faut absolument relire la th�orie ci-dessus. On y �voque un \&quot;dictionnaire\&quot;.')"
 type="radio"> Un dictionnaire? Quel dictionnaire? </form> <div
 class="info"> <p><strong><img src="images/smileybig.png" align="right"
 border="1" height="144" hspace="10" vspace="10" width="144">Cas d'un
dessin point par point</strong>&nbsp;: dans un dessin point par point
(BMP, par exemple), chaque pixel de l'image est cod� par un nombre.</p><p>
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
</table> <p> Pour la portion de l'image pr�sent�e ci-dessus, il
faudrait donc enregistrer 4x16&nbsp;=&nbsp;64 nombres. </p> <p> Mais
il serait aussi possible d'enregistrer les m�mes informations sous la
forme de couples </p> <p style="text-align: center;"> (couleur:nombre
de pixels). </p> <p> Ce qui, pour les quatre lignes illustr�es,
donnerait l'ensemble de couples suivants </p> <p> 16:5; 0:6; 16:5<br>
16:3; 0:2; 8:6; 0:2; 16:3<br> 16:2; 0:1; 8:10; 0:1; 16:2<br> 16:1; 0:1;
8:12; 0:1; 16:1 </p> <p> Soit seulement 36 nombres. Le fichier
enregistr� serait donc presque deux fois plus petit. L'inconv�nient est
qu'il faut d�coder les informations et reconstruire l'image au moment
de relire le fichier. </p></div><form class="travail" action="">
Lorsque l'on traite une image compress�e,<br> <input name="bt"
 onclick="alert('Juste.\nLe fichier compress� est moins \&quot;lourd\&quot;, mais l\'ordinateur doit recomposer l\'image. Ce qui lui prend du temps de travail.')"
 type="radio"> on gagne sur le "&nbsp;poids&nbsp;" du fichier, mais on
perd en temps de traitement de l'image<br> <input name="bt"
 onclick="alert('R�ponse fausse.\nQuel est le but de la compression?')"
 type="radio"> on perd sur le "&nbsp;poids&nbsp;" du fichier, mais on
gagne en temps de traitement de l'image<br> <input name="bt"
 onclick="alert('Faux.\nL\'image compress�e doit encore �tre trait�e par l\'ordinateur pour �tre visible.')"
 type="radio"> on gagne sur le "&nbsp;poids&nbsp;" du fichier, et on
gagne en temps de traitement de l'image<br> <input name="bt"
 onclick="alert('Non.\nIl y a un gain � compresser les fichiers images. Lequel?')"
 type="radio"> on perd sur le "&nbsp;poids&nbsp;" du fichier, et on
perd en temps de traitement de l'image<br> </form> <p> Quand tu as
r�pondu aux questions et bien compris les r�ponses, passe � la page
suivante.<?php include ("../../suivant.inc.php");
          ?> </p> </div><?php include ("../../pied.inc.php");
      ?>
</div> </body></html>