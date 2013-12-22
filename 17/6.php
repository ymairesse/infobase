<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head><meta
 id="_moz_prolog" content="">  <meta
 id="_moz_prolog" content=""> <meta name="generator"
 content="HTML Tidy for Windows (vers 1st July 2004), see www.w3.org"> <meta
 id="_moz_prolog" content=""> <meta http-equiv="Content-Type"
 content="text/html; charset=iso-8859-1"> <link rel="stylesheet"
 type="text/css" href="../../info.css" media="screen"> <link
 rel="stylesheet" type="text/css" href="../../print.css" media="print">
<title>La s�curit� informatique</title></head>
<body><div id="conteneur">
<?php include ("./top.inc.php");?>
<div id="texte">
<div
 style="background-color: rgb(255, 255, 204);" class="encartdroit">
<h4><img class="imagedroite" style="width: 145px; height: 200px;"
 alt="Contrats" src="images/smith.png">Flash Info</h4>
<p>La " Soci�t� Smith &amp;
Smith " s'appr�tait � signer un contrat important avec le gouvernement
Syldave. En derni�re minute, Mr Smith apprend que le contrat lui
�chappe. Un contrat quasi identique a finalement �t� sign� avec la
Soci�t� " Brol &amp; Co " de Bordurie. </p>
<p>Comment cette soci�t�
a-t-elle pu prendre connaissance des termes du contrat et le copier ?</p>
</div><h2>Quelle diff�rence entre un ver et un virus&nbsp;? </h2>
<div class="info"><p><img src="images/ver.png" class="imagedroite"
 height="212" width="230">Dans les pages pr�c�dentes, il a �t�
question, sans
pr�ciser la diff�rence, de "virus" mais aussi de
"vers". Cette deuxi�me notion, un peu diff�rente de celle
de "virus" n'avait pas �t� explicit�e.</p>
<p>Les vers ("worms", en anglais) constituent une classe d'agents
infectieux un peu diff�rente de la classe des virus. On les confond
souvent. </p>
<p>Contrairement aux virus, les vers n'ont pas
besoin de vecteur (un programme h�te qu'ils infectent) pour se
propager. Ils progressent, de proche en proche, parmi les ordinateurs
qui composent les r�seaux informatiques, y compris le r�seau Internet. </p>
</div><fieldset><legend
 style="font-weight: bold; background-color: red; color: white;">�
retenir</legend>
<p> En informatique, un " Ver " est un logiciel malveillant qui se
propage dans les r�seaux informatiques en profitant de certaines
failles qu'il y trouve.</p>
<p>Une fois entr� dans un ordinateur, le "Ver" peut
commencer son travail de destruction et continuer � se propager dans le
r�seau.</p>
</fieldset><h3>Lecture: exemples de vers </h3>
<h4> Le ver <strong>Sasser</strong> </h4>
<div class="info"><p> Parti d'un ordinateur distant, il se connecte �
votre
ordinateur comme s'il �tait un " ordre " normal. Celui-ci est
d'ailleurs reconnu et son traitement commence. Mais, l'ordre est mal
form� et contient " trop " d'informations par rapport � ce
qui est attendu dans ce cas pr�cis. Le trop-plein d'informations est
stock� dans la m�moire au-del� de la zone pr�vue.</p>
<p><strong>A
cause d'une erreur de conception</strong> dans le programme qui traite
l'ordre, le "&nbsp;surplus&nbsp;" d'information est alors ex�cut� comme
un programme "&nbsp;normal&nbsp;". Le ver s'installe alors au sein du
syst�me et tente imm�diatement de se propager vers d'autres ordinateurs
qui pr�sentent la m�me d�ficience. </p>
</div><h4> Le ver <strong>Netsky</strong>
</h4><div class="info">
<p> Le ver Netsky parvient � entrer dans votre
ordinateur en profitant d'<strong>une imperfection dans certaines
versions du logiciel de courrier �lectronique Outlook</strong>. Pour
que le ver s'active, il n'est m�me pas n�cessaire que l'utilisateur
ouvre une pi�ce jointe : le ver est contenu dans le message
lui-m�me. Le seul fait de cliquer sur le message suffit � activer le
ver.</p>
<p>D�s qu'il est actif, Netsky s'auto-envoie par courrier
�lectronique. De plus, l'ordinateur infect� pourra servir de
" zombie " qui participera � l'attaque du site web
WindowsUpdate (qui permet de r�aliser les mises � jour de s�curit� du
syst�me Windows).</p>
<p> Un ordinateur infect� peut exp�dier
plusieurs dizaines de vers � la minute. On notera g�n�ralement un fort
ralentissement de l'ordinateur, trop occup� � envoyer des courriers
�lectroniques. </p>
</div><p class="questions"> Mais c'est horrible&nbsp;!
Il n'y a donc aucun moyen de se connecter � l'Internet sans se faire
infecter&nbsp;? </p>
<p class="reponses"> Ne soyons pas si
pessimistes. En fait, chaque fois qu'une imperfection du type indiqu�
ci-dessus est trouv�e, des correctifs sont mis � disposition des
utilisateurs. Il faut donc veiller � s'informer et surtout, � maintenir
son ordinateur connect� � un r�seau bien � jour. </p>
<h2>Lecture: buts de
l'action des vers </h2>
<p> Les vers peuvent avoir plusieurs raisons
d'exister. Leurs buts peuvent �tre similaires � ceux des virus. </p>
<ul> <li>Pur vandalisme gratuit&nbsp;: provoquer la saturation d'un
r�seau
sous l'effet exponentiel de sa multiplication. </li> <li>Attaque
cibl�e&nbsp;: attente furtive au sein de milliers (millions&nbsp;?)
d'ordinateurs&nbsp;; � une date pr�cise, chaque ver se connecte � un
seul et m�me serveur provoquant sa mise hors service. </li> <li>Prise
de commande � distance de votre ordinateur. </li> <li>Espionnage des
frappes au clavier, y compris des num�ros de cartes de cr�dit. </li> <li>Ouverture
de portes de l'ordinateur pour faciliter l'acc�s par d'autres vers ou
virus. </li> <li>Envoi de milliers de courriers �lectroniques
plublicitaires non sollicit�s depuis votre ordinateur. </li> <li>Effacement
de fichiers, envoi de vos fichiers (confidentiels) sur l'Internet,... </li>
</ul><form action="" class="travail"> A la diff�rence d'un virus, un
ver<br> <input name="bt"
 onclick="alert('Non.\nLe ver se caract�rise pr�cis�ment par le fait qu\'il n\'a pas besoin de programme cible pour se propager.')"
 type="radio"> Doit obligatoirement disposer d'une programme cible<br> <input
 name="bt"
 onclick="alert('Exact.\nLe ver se caract�rise effectivement par le fait qu\'il n\'a pas besoin de programme cible pour se propager.')"
 type="radio"> Ne doit pas disposer d'un programme cible </form>
<form action="" class="travail"> Un ver<br> <input name="bt"
 onclick="alert('R�ponse fausse.\nLe ver est dangereux aussi pour l\'ordinateur qu\'il infecte.')"
 type="radio"> N'est absolument pas dangereux pour l'ordinateur qu'il
infecte<br> <input name="bt"
 onclick="alert('Non.\nLe danger est bien plus grand.')" type="radio">Est
dangereux mais seulement pour l'ordinateur qu'il infecte<br> <input
 name="bt"
 onclick="alert('Exact.\nLe ver se propage par l\'interm�diaire des r�seaux.\nSi un ordinateur d\'un r�seau est infect�, les autres ordinateurs connect�s au m�me r�seau sont des cibles privil�gi�es.')"
 type="radio"> Est dangereux pour tous les ordinateurs qui figurent
dans le m�me r�seau que l'ordinateur infect� </form>
<form action="" class="travail"> Les vers sont transmis<br> <input
 name="bt"
 onclick="alert('R�ponse fausse.\nLe courrier �lectronique n\'est pas le seul vecteur des vers.')"
 type="radio"> Uniquement par courrier �lectronique<br> <input
 name="bt"
 onclick="alert('Non.\nCeci est le mode de propagation des virus et non des vers.')"
 type="radio"> Uniquement par un logiciel infect�<br> <input name="bt"
 onclick="alert('Non.\nLes messageries instantan�es ne sont pas le seul vecteur des vers.')"
 type="radio"> Uniquement par les messageries instantan�es comme MSND<br>
<input name="bt"
 onclick="alert('Exact.\nLes vers peuvent se transmettre par diff�rents moyens, mais qui utilisent tous les ressources des r�seaux.')"
 type="radio"> Aucune autre r�ponse ne convient </form>
<form action="" class="travail"> Les effets des vers et des virus sont<br>
<input name="bt"
 onclick="alert('Non.\nLes vers et les virus ont souvent int�r�t � rester discr�tement � l\'oeuvre dans l\'ordinateur infect�.\nDe cette mani�re, ils peuvent faire un maximum de d�g�ts pendant le temps le plus long possible.')"
 type="radio"> Toujours spectaculaires et imm�diats<br> <input
 name="bt"
 onclick="alert('R�ponse exacte.\nLes vers et les virus ont souvent int�r�t � rester discr�tement � l\'oeuvre dans l\'ordinateur infect�.\nDe cette mani�re, ils peuvent faire un maximum de d�g�ts pendant le temps le plus long possible.')"
 type="radio"> G�n�ralement discrets </form>
<form action="" class="travail"> Les vers se propagent souvent gr�ce<br>
<input name="bt"
 onclick="alert('Exact.\nLes vers profitent souvent de \&quot;trous de s�curit�\&quot; dans des logiciels. Ils profitent des erreurs de concepton des logiciels pour s\'introduire dans les ordinateurs.')"
 type="radio"> A des erreurs de conception dans les logiciels qui sont
utilis�s dans les ordinateurs<br> <input name="bt"
 onclick="alert('Non.\nCeci est une caract�ristique des virus.')"
 type="radio">A l'infection d'un programme cible </form>
<form action="" class="travail"> Choisis la bonne r�ponse<br> <input
 name="bt"
 onclick="alert('C\'est vrai, mais cette r�ponse n\'est pas la meilleure.')"
 type="radio"> Un ver permet � un pirate de prendre le contr�le de mon
ordinateur.<br> <input name="bt"
 onclick="alert('C\'est vrai, mais cette r�ponse n\'est pas la meilleure.')"
 type="radio"> Un ver permet d'ouvrir des "portes" de mon ordinateur.
Ces portes sont ensuite utilis�es par d'autres logiciels malveillants.<br>
<input name="bt"
 onclick="alert('C\'est vrai, mais cette r�ponse n\'est pas la meilleure.')"
 type="radio"> Un ver dans mon ordinateur peut permettre une attaque
des serveurs de Microsoft.<br> <input name="bt"
 onclick="alert('C\'est vrai, mais cette r�ponse n\'est pas la meilleure.')"
 type="radio"> Un ver permet d'espionner les frappes au clavier de
l'ordinateur qu'il infecte.<br> <input name="bt"
 onclick="alert('Exact.\nLes vers permettent toutes les actions d�crites plus haut.')"
 type="radio"> Toutes les r�ponses ci-dessus sont correctes. </form>
<p>Quand tu as r�pondu � toutes les questions et bien compris les
r�ponses
correctes, passe � la page suivante.<?php include ("../../psuivante.inc.php");
                ?>
</p></div>
<?php include ("../../pied.inc.php");
      include ("../../stat.inc.php");
      ?></div></body></html>