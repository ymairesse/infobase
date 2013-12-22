<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="fr-be">
<head>
  
  <meta http-equiv="Content-Type"
 content="text/html; charset=ISO-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css"
 media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css"
 media="print">
  <title>La s�curit� informatique</title>
  <meta content="Yves Mairesse" name="author">
  <meta content="Virus, vers, spywares, hoaxes,..." name="description">
</head>
<body>
<div id="conteneur">
<?php include ("./top.inc.php") ?>
<div id="texte">
<h2>Le "&nbsp;phishing&nbsp;" (ou hame�onnage) </h2>
<div class="info">
<p>Le " phishing " est une technique par
laquelle des malfaiteurs tentent d'entra�ner un client d'une banque
vers un site web qui ressemble tr�s fort � celui de sa banque.</p>
<p>Ils persuadent la personne
de fournir son num�ro de carte de cr�dit et le mot de passe qui y est
associ�.</p>
<p>Ce qui leur permet ensuite tr�s facilement de faire des achats ou de
retirer de l'argent sur le compte en banque de leur victime.</p>
</div>
<h3>Exemple de "&nbsp;phishing&nbsp;" </h3>
<div class="info">
<p>Le " phishing " ne cible g�n�ralement pas les
clients connus d'une banque. Les malfaiteurs envoient des courriers
�lectroniques tous azimuts, en utilisant les m�mes techniques que les
spammeurs.</p>
<p>Parmi les personnes qui re�oivent le courrier �lectronique,
certaines sont r�ellement clientes de la banque cible.</p>
<p>Dans l'exemple ci-dessous, les victimes sont averties de la mise en
service d'un nouveau syst�me de s�curit� et sont invit�es � mettre leur
compte � jour pour pouvoir en profiter.</p>
<p align="center"><img src="images/phishing.png" border="1" height="447"
 width="638"></p>
<p>Lorsque la victime clique sur le bouton "&nbsp;Continue&nbsp;", au
bas du message qu'elle a re�u, elle aboutit sur un site web qui
ressemble tr�s fort au site web de la banque. </p>
<p align="center"><img src="images/phishing2.png" border="1"
 height="469" width="698"></p>
<p>Elle est invit�e � y fournir des informations relatives � sa carte
de cr�dit.</p>
<p class="attention">Le probl�me est qu'il ne s'agit pas du site web de
la banque, mais d'une copie conforme. Si le client fournit les
informations demand�es, celles-ci sont alors transmises aux malfaiteurs.</p>
<p>Dans le cas pr�sent� ci-dessus, certains indices
montrent clairement aux internautes avis�s qu'il s'agit d'une
supercherie&nbsp;:</p>
<ul>
  <li>L'adresse URL de la banque ne figure pas dans la barre
d'adresse&nbsp;; � la place, on y trouve une adresse IP <img
 src="images/http.png" alt="http" align="middle" height="27" width="108">
dont on v�rifiera ais�ment qu'elle ne correspond pas � la banque.</li>
  <li>La connexion vers la banque n'est pas s�curis�e&nbsp;: le
protocole utilis� est simplement http et non https, comme il se devrait
dans la communication de donn�es confidentielles � une banque.</li>
</ul>
<p align="center"><img src="images/https1.png" height="92" width="448"></p>
<p>On ne trouve pas le <img src="images/cadenas.png" height="18"
 width="16"> symbole de la connexion s�curis�e dans le navigateur:</p>
<ul>
  <ul>
    <li>Internet Explorer: <img src="images/https2.png" align="middle"
 height="77" width="234"></li>
    <li>Firefox&nbsp;: <img src="images/https3.png" align="middle"
 height="73" width="255"></li>
  </ul>
  <li>Dans certains cas, les pirates cachent l'adresse de destination �
l'aide d'un petit programme qui superpose un rectangle o� figure la
vraie adresse de la banque.<br>
La technique est d'ailleurs parfois imparfaite, comme sur l'exemple
ci-dessous ou le "&nbsp;cache&nbsp;" appara�t bien (l'adresse URL est
un peu d�cal�e vers le bas)&nbsp;:</li>
</ul>
<p><img src="images/phishing3.png" height="58" width="758"></p>
<p>D'autres exemples sont inventori�s � la page <a
 href="http://www.antiphishing.org/phishing_archive.html"
 target="_blank">http://www.antiphishing.org/phishing_archive.html</a>.</p>
<p class="attention">Il ne faut donc, en aucun cas, donner suite � des
courriers �lectroniques cens�s provenir d'une banque ou de tout autre
organisme qui vous demande de donner votre num�ro de carte de cr�dit ou
toute autre information confidentielle dans une simple connexion �
l'Internet.</p>
</div>
<form action="" class="travail"> Le "&nbsp;phishing&nbsp;" est<br>
  <input name="bt"
 onclick="alert('Non.\nLe \&quot;phishing\&quot; utilise le spamming, mais la technique va plus loin.')"
 type="radio"> Une sorte de spamming<br>
  <input name="bt"
 onclick="alert('Exact.\nEn g�n�ral, des malfaiteurs utilisent cette technique pour conna�tre les num�ros de carte de cr�dit et les mots de passe associ�s.')"
 type="radio"> Une technique pour faire d�voiler des informations
bancaires condidentielles<br>
  <input name="bt"
 onclick="alert('Faux.\nLe \&quot;phishing\&quot; n\'a aucun lien avec les virus.')"
 type="radio"> L'envoi volontaire de virus vers une adresse de courrier
�lectronique<br>
  <input name="bt"
 onclick="alert('Non.\nLe \&quot;phishing\&quot; n\'a aucun lien avec les spywares.')"
 type="radio"> L'envoi volontaire de spywares vers une adresse
�lectronique
</form>
<form action="" class="travail"> Dans le cadre du
"&nbsp;phishing&nbsp;",
l'internaute est renvoy� vers une adresse web. L'adresse qui appara�t
dans son navigateur est<br>
  <input name="bt"
 onclick="alert('Non.\nDans certains cas, l\'adresse qui appara�t est tout � fait authentique.')"
 type="radio"> Toujours fausse<br>
  <input name="bt"
 onclick="alert('Faux.\nDans certains cas, les pirates utilisent des techniques qui permettent de cacher la vraie adresse web de la page vers laquelle ils renvoient leur victime')"
 type="radio"> Toujours exacte<br>
  <input name="bt"
 onclick="alert('R�ponse correcte.\nDans certains cas, l\'adresse qui appara�t dans le navigateur n\'est pas camoufl�e. Dans d\'autres cas, elle l\'est. Il n\'y a pas de r�gle.')"
 type="radio"> Parfois fausse, parfois exacte
</form>
<form action="" class="travail"> Lorsque l'on communique des
informations
sensibles avec un organisme quelconque, il faut toujours v�rifier que
le protocole d'�change utilis� est bien<br>
  <input name="bt"
 onclick="alert('Non.\nLe protocole http n\'est absolument pas s�curis�. Toutes les informations envoy�es sont directement lisibles par qui peut voir passer les paquets sur l\'Internet.')"
 type="radio"> http<br>
  <input name="bt"
 onclick="alert('Faux.\nLe protocole ftp n\'est pas du tout destin� aux transactions s�curis�es.')"
 type="radio"> ftp<br>
  <input name="bt"
 onclick="alert('Exact.\nLe protocole https permet des transactions s�curis�es.')"
 type="radio"> https
</form>
<form action="" class="travail"> On reconna�t l'utilisation du
protocole
https � un symbole pr�sent� dans le navigateur<br>
  <input name="bt" onclick="alert('R�ponse fausse.')" type="radio"> Une
cl�<br>
  <input name="bt" onclick="alert('R�ponse fausse.')" type="radio"> Un
verrou<br>
  <input name="bt" onclick="alert('R�ponse fausse.')" type="radio"> Un
trombone<br>
  <input name="bt"
 onclick="alert('Exact.\nLe symbole du cadenas appara�t, au moins, dans la barre d\'�tat, au bas de la fen�tre du  navigateur.')"
 type="radio"> Un cadenas
</form>
<form action="" class="travail"> On peut �tre s�r que le protocole
d'�change utilis� sur le web est https si<br>
  <input name="bt"
 onclick="alert('Cette condition est insuffisante, malheureusement.\nLes pirates de l\'Internet sont capables de cacher la vraie adresse de la page visit�e et le protocole utilis�.')"
 type="radio"> Le nom du protocole https pr�c�de l'adresse URL de la
page web visit�e<br>
  <input name="bt"
 onclick="alert('Juste.\nLe cadenas dans la barre d\'�tat est effectivement une garantie.')"
 type="radio"> Un cadenas appara�t dans la barre d'�tat du navigateur<br>
  <input name="bt"
 onclick="alert('Non.\nIl n\'existe d\'ailleurs aucun logo officiel qui appara�trait immanquablement dans une page web s�curis�e.')"
 type="radio"> Le logo https appara�t dans la page web visit�e
</form>
<p>Quand tu as r�pondu � toutes les questions et bien compris les
r�ponses, passe � la page suivante.<?php include ("../../psuivante.inc.php"); ?>
</p>
</div>
<?php include ("../../pied.inc.php"); include ("../../stat.inc.php"); ?>
</div>
</body>
</html>
