<?php //anti-moz ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head><meta
 http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> <link
 rel="stylesheet" type="text/css" href="../../info.css" media="screen">
<link rel="stylesheet" type="text/css" href="../../print.css"
 media="print"><style type="text/css">
h3.clic {cursor: pointer;}
</style><script type="text/javascript" src="../../js/jquery.js"></script><script
 type="text/javascript">
$(document).ready(function (){
$(".qcm").click(function(){
$(this).next().show(300);
});

$("#windoze").hide();
$("#linux").hide();

});
</script><script type="text/javascript">
function montrer (bloc)
{
var leBloc = document.getElementById(bloc);
if (leBloc.style.display=="none")
leBloc.style.display = "block"
else
leBloc.style.display = "none";
}
</script><title>Organisation des fichiers sur les disques</title>
<style type="text/css">
#ligne {border-bottom: 1px solid black}
</style></head><body><div id="conteneur">
<?php include ("./top.inc.php"); ?><div id="texte"><h2>Structure du
navigateur de
fichiers</h2>
<div class="info"><p>Le navigateur de fichiers
permet d'explorer l'ensemble des fichiers disponibles sur le
poste de travail.</p></div><h3 class="clic"
 onclick="javascript:montrer('windoze')">Tu utilises Windows
(clique
ici)</h3><div id="windoze"><div class="info"><p>Plusieurs ic�nes
diff�rentes
caract�risent les �l�ments disponibles. Il est
important de reconna�tre:</p><table border="0" cellpadding="0"
 cellspacing="3" width="100%"> <tbody>
<tr> <td id="ligne"><img src="images/disket.png" height="19"
 width="238"></td> <td id="ligne">qui
permet d'acc�der � un lecteur de
disquettes</td> </tr> <tr> <td id="ligne"><img src="images/hd.png"
 height="15" width="241"></td>
<td id="ligne">qui permet d'acc�der � un disque dur
de l'ordinateur</td> </tr> <tr> <td id="ligne"><img
 src="images/cd.png" height="18" width="233"></td>
<td id="ligne">qui permet d'acc�der � un lecteur de
CD-ROM</td> </tr> <tr> <td id="ligne"><img src="images/res.png"
 height="18" width="231"></td>
<td id="ligne">qui permet d'acc�der � un "lecteur
r�seau", c'est-�-dire � une portion de disque dur
d'un autre ordinateur sur un r�seau.</td> </tr> </tbody>
</table><p>Pour plus de facilit�, il est possible de voir
simultan�ment les lecteurs et le d�tail de leur contenu.</p></div>
<div class="travail"><ul><li>Dans le menu <strong>Affichage</strong>,
s�lectionne la
commande <strong>Volet d'exploration</strong>, puis
l'option <strong>Dossiers</strong>.</li></ul>
</div><p style="text-align: center;"><img src="images/dossiers.png"
 height="258" width="298"></p><div class="info"><p>La fen�tre du <strong>Poste
de travail</strong>
se compose de deux volets&nbsp;:</p><ol><li>le
volet d'exploration</li><li>le volet de d�tails des fichiers</li></ol><p><img
 src="images/explo.png" height="438" width="671"></p></div>
<div class="travail"><p>Explore quelques instants
chacun des deux
volets par quelques
clics
de souris.</p>
</div></div><h3 onclick="javascript:montrer('linux')" class="clic">Tu
utilises Linux (clique ici)</h3><div id="linux">
<div class="info"><p>La
fen�tre du Navigateur de fichiers est divis�e en deux parties, comme
illustr� ci-dessous.</p>
<div style="text-align: center;"><img src="images/navfichiers2.jpg"
 style="width: 502px; height: 345px;" alt="Navigateur de fichiers"></div><div
 class="travail"><ul><li>Si la
partie gauche <strong>[1]</strong>
manque, frappe la touche <span class="clavier">F9</span>
au clavier.</li><li>Si la partie gauche <strong>[1]</strong>
montre autre chose que l'<strong>Arborescence</strong>,
clique sur le nom de la rubrique pr�sent�e et s�lectionne
l'arborescence des fichiers.</li><li>Ouvre l'arborescence
de ton <strong>Dossier personnel</strong> puis
l'arborescence <strong>Documents</strong> (comme sur
l'illustration) en cliquant sur le triangle � gauche de chacun des
noeuds.</li><li>Explore quelques instants chacun des deux
volets par quelques
clics
de souris.</li><li>Dans le menu <strong>Affichage</strong>,
cherche comment pr�senter les �l�ments du volet de droite <strong>[2]</strong>
avec des ic�nes plut�t qu'une simple liste.</li></ul>
</div><form class="travail" action=" " name="form1"> Comment
peut-on, <span style="text-decoration: underline;">uniquement avec le
clavier</span>, faire un zoom <span style="text-decoration: underline;">avant</span>
sur
le
volet des fichiers [2]? <p class="qcm">1. <span class="clavier">Ctrl</span>
+ <span class="clavier">+</span></p> <p class="vrai">R�ponse correcte</p>
<p class="qcm">2. <span class="clavier">Ctrl</span> + <span
 class="clavier">-</span></p> <p class="faux">R�ponse
fausse</p> <p class="qcm">3. <span class="clavier">Ctrl</span>
+ <span class="clavier">F4</span></p> <p class="faux">R�ponse fausse</p>
<p class="qcm">4. Ce n'est pas possible.</p> <p class="faux">Si, c'est
possible</p>
</form></div></div><div style="text-align: center;" id="linux"></div><p>Quand
tu as explor� les deux volets, passe � la page
suivante.<?php include ("../../suivant.inc.php"); ?> </p>
</div><?php include ("../../pied.inc.php"); ?></div></body></html>