<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="fr-be">
<head>
  
  <meta http-equiv="Content-Type"
 content="text/html; charset=ISO-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css"
 media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css"
 media="print">
  <title>La sécurité informatique</title>
  <meta content="Yves Mairesse" name="author">
  <meta content="Virus, vers, spywares, hoaxes,..." name="description">
</head>
<body>
<div id="conteneur">
<?php include ("./top.inc.php") ?>
<div id="texte">
<h2>Le "&nbsp;phishing&nbsp;" (ou hameçonnage) </h2>
<div class="info">
<p>Le " phishing " est une technique par
laquelle des malfaiteurs tentent d'entraîner un client d'une banque
vers un site web qui ressemble très fort à celui de sa banque.</p>
<p>Ils persuadent la personne
de fournir son numéro de carte de crédit et le mot de passe qui y est
associé.</p>
<p>Ce qui leur permet ensuite très facilement de faire des achats ou de
retirer de l'argent sur le compte en banque de leur victime.</p>
</div>
<h3>Exemple de "&nbsp;phishing&nbsp;" </h3>
<div class="info">
<p>Le " phishing " ne cible généralement pas les
clients connus d'une banque. Les malfaiteurs envoient des courriers
électroniques tous azimuts, en utilisant les mêmes techniques que les
spammeurs.</p>
<p>Parmi les personnes qui reçoivent le courrier électronique,
certaines sont réellement clientes de la banque cible.</p>
<p>Dans l'exemple ci-dessous, les victimes sont averties de la mise en
service d'un nouveau système de sécurité et sont invitées à mettre leur
compte à jour pour pouvoir en profiter.</p>
<p align="center"><img src="images/phishing.png" border="1" height="447"
 width="638"></p>
<p>Lorsque la victime clique sur le bouton "&nbsp;Continue&nbsp;", au
bas du message qu'elle a reçu, elle aboutit sur un site web qui
ressemble très fort au site web de la banque. </p>
<p align="center"><img src="images/phishing2.png" border="1"
 height="469" width="698"></p>
<p>Elle est invitée à y fournir des informations relatives à sa carte
de crédit.</p>
<p class="attention">Le problème est qu'il ne s'agit pas du site web de
la banque, mais d'une copie conforme. Si le client fournit les
informations demandées, celles-ci sont alors transmises aux malfaiteurs.</p>
<p>Dans le cas présenté ci-dessus, certains indices
montrent clairement aux internautes avisés qu'il s'agit d'une
supercherie&nbsp;:</p>
<ul>
  <li>L'adresse URL de la banque ne figure pas dans la barre
d'adresse&nbsp;; à la place, on y trouve une adresse IP <img
 src="images/http.png" alt="http" align="middle" height="27" width="108">
dont on vérifiera aisément qu'elle ne correspond pas à la banque.</li>
  <li>La connexion vers la banque n'est pas sécurisée&nbsp;: le
protocole utilisé est simplement http et non https, comme il se devrait
dans la communication de données confidentielles à une banque.</li>
</ul>
<p align="center"><img src="images/https1.png" height="92" width="448"></p>
<p>On ne trouve pas le <img src="images/cadenas.png" height="18"
 width="16"> symbole de la connexion sécurisée dans le navigateur:</p>
<ul>
  <ul>
    <li>Internet Explorer: <img src="images/https2.png" align="middle"
 height="77" width="234"></li>
    <li>Firefox&nbsp;: <img src="images/https3.png" align="middle"
 height="73" width="255"></li>
  </ul>
  <li>Dans certains cas, les pirates cachent l'adresse de destination à
l'aide d'un petit programme qui superpose un rectangle où figure la
vraie adresse de la banque.<br>
La technique est d'ailleurs parfois imparfaite, comme sur l'exemple
ci-dessous ou le "&nbsp;cache&nbsp;" apparaît bien (l'adresse URL est
un peu décalée vers le bas)&nbsp;:</li>
</ul>
<p><img src="images/phishing3.png" height="58" width="758"></p>
<p>D'autres exemples sont inventoriés à la page <a
 href="http://www.antiphishing.org/phishing_archive.html"
 target="_blank">http://www.antiphishing.org/phishing_archive.html</a>.</p>
<p class="attention">Il ne faut donc, en aucun cas, donner suite à des
courriers électroniques censés provenir d'une banque ou de tout autre
organisme qui vous demande de donner votre numéro de carte de crédit ou
toute autre information confidentielle dans une simple connexion à
l'Internet.</p>
</div>
<form action="" class="travail"> Le "&nbsp;phishing&nbsp;" est<br>
  <input name="bt"
 onclick="alert('Non.\nLe \&quot;phishing\&quot; utilise le spamming, mais la technique va plus loin.')"
 type="radio"> Une sorte de spamming<br>
  <input name="bt"
 onclick="alert('Exact.\nEn général, des malfaiteurs utilisent cette technique pour connaître les numéros de carte de crédit et les mots de passe associés.')"
 type="radio"> Une technique pour faire dévoiler des informations
bancaires condidentielles<br>
  <input name="bt"
 onclick="alert('Faux.\nLe \&quot;phishing\&quot; n\'a aucun lien avec les virus.')"
 type="radio"> L'envoi volontaire de virus vers une adresse de courrier
électronique<br>
  <input name="bt"
 onclick="alert('Non.\nLe \&quot;phishing\&quot; n\'a aucun lien avec les spywares.')"
 type="radio"> L'envoi volontaire de spywares vers une adresse
électronique
</form>
<form action="" class="travail"> Dans le cadre du
"&nbsp;phishing&nbsp;",
l'internaute est renvoyé vers une adresse web. L'adresse qui apparaît
dans son navigateur est<br>
  <input name="bt"
 onclick="alert('Non.\nDans certains cas, l\'adresse qui apparaît est tout à fait authentique.')"
 type="radio"> Toujours fausse<br>
  <input name="bt"
 onclick="alert('Faux.\nDans certains cas, les pirates utilisent des techniques qui permettent de cacher la vraie adresse web de la page vers laquelle ils renvoient leur victime')"
 type="radio"> Toujours exacte<br>
  <input name="bt"
 onclick="alert('Réponse correcte.\nDans certains cas, l\'adresse qui apparaît dans le navigateur n\'est pas camouflée. Dans d\'autres cas, elle l\'est. Il n\'y a pas de règle.')"
 type="radio"> Parfois fausse, parfois exacte
</form>
<form action="" class="travail"> Lorsque l'on communique des
informations
sensibles avec un organisme quelconque, il faut toujours vérifier que
le protocole d'échange utilisé est bien<br>
  <input name="bt"
 onclick="alert('Non.\nLe protocole http n\'est absolument pas sécurisé. Toutes les informations envoyées sont directement lisibles par qui peut voir passer les paquets sur l\'Internet.')"
 type="radio"> http<br>
  <input name="bt"
 onclick="alert('Faux.\nLe protocole ftp n\'est pas du tout destiné aux transactions sécurisées.')"
 type="radio"> ftp<br>
  <input name="bt"
 onclick="alert('Exact.\nLe protocole https permet des transactions sécurisées.')"
 type="radio"> https
</form>
<form action="" class="travail"> On reconnaît l'utilisation du
protocole
https à un symbole présenté dans le navigateur<br>
  <input name="bt" onclick="alert('Réponse fausse.')" type="radio"> Une
clé<br>
  <input name="bt" onclick="alert('Réponse fausse.')" type="radio"> Un
verrou<br>
  <input name="bt" onclick="alert('Réponse fausse.')" type="radio"> Un
trombone<br>
  <input name="bt"
 onclick="alert('Exact.\nLe symbole du cadenas apparaît, au moins, dans la barre d\'état, au bas de la fenêtre du  navigateur.')"
 type="radio"> Un cadenas
</form>
<form action="" class="travail"> On peut être sûr que le protocole
d'échange utilisé sur le web est https si<br>
  <input name="bt"
 onclick="alert('Cette condition est insuffisante, malheureusement.\nLes pirates de l\'Internet sont capables de cacher la vraie adresse de la page visitée et le protocole utilisé.')"
 type="radio"> Le nom du protocole https précède l'adresse URL de la
page web visitée<br>
  <input name="bt"
 onclick="alert('Juste.\nLe cadenas dans la barre d\'état est effectivement une garantie.')"
 type="radio"> Un cadenas apparaît dans la barre d'état du navigateur<br>
  <input name="bt"
 onclick="alert('Non.\nIl n\'existe d\'ailleurs aucun logo officiel qui apparaîtrait immanquablement dans une page web sécurisée.')"
 type="radio"> Le logo https apparaît dans la page web visitée
</form>
<p>Quand tu as répondu à toutes les questions et bien compris les
réponses, passe à la page suivante.<?php include ("../../psuivante.inc.php"); ?>
</p>
</div>
<?php include ("../../pied.inc.php"); include ("../../stat.inc.php"); ?>
</div>
</body>
</html>
