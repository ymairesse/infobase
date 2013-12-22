<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta name="generator" content="HTML Tidy for Linux/x86 (vers 1 September 2005), see www.w3.org">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
<link rel="stylesheet" type="text/css" href="../../print.css" media="print">
<title>Le courrier électronique</title>
</head>
<body>
<div id="conteneur">
<?php include ("./top.inc.php"); ?>
<div id="texte">
<h2> Configuration du compte de courrier &eacute;lectronique (3) </h2>
<div class="info">
<p> Pour pouvoir relever le courrier &eacute;lectronique, il faut encore indiquer qui nous sommes. Le serveur POP peut &eacute;ventuellement recevoir le courrier &eacute;lectronique de tr&egrave;s nombreuses personnes. </p>
<p> Il ne doit, bien s&ucirc;r, nous d&eacute;livrer que notre courrier personnel. Il faut donc encore pr&eacute;ciser le nom du "compte de courrier" qui est le n&ocirc;tre. </p>
</div>
<h3> Le nom d'utilisateur</h3>
<div class="travail">
   <ul>
   <li><img src="images/4.png" class="imagedroite" style="width: 381px; height: 375px;" alt="Nom du compte">Dans la zone <span class="menu">Nom d'utilisateur entrant</span>, indique le nom de ton compte de courrier &eacute;lectronique. </li>
   </ul>
   <p class="supplement"> R&eacute;f&egrave;re-toi aux indications donn&eacute;es par le professeur. Dans le cas des comptes de courrier &eacute;lectronique <strong>@sio2.be</strong>, le nom d'utilisateur est obligatoirement suivi de la mention <strong>%sio2.be</strong>. (ce n'est pas une faute de frappe: c'est bien le signe <strong>%</strong> qui doit &ecirc;tre utilis&eacute;) </p>
   <ul>
    <li>Dans la zone <span class="menu">Nom d'utilisateur sortant</span>, recopie la m&ecirc;me mention que pour le conpte entrant.</li>
    <li>Quand les deux noms d'utilisateurs sont indiqu&eacute;s, clique sur le bouton <span class="menu">Suivant</span>.</li>
   </ul>
</div>

<form action="" class="travail"> Un serveur SMTP sert &agrave;<br>
    <input name="bt" onclick="alert('Réponse correcte.\nLe serveur SMTP sert à envoyer le courrier.')" type="radio">Envoyer le courrier<br>
    <input name="bt" onclick="alert('Réponse fausse.\nLe serveur SMTP ne sert pas à l\'envoi du courrier.')" type="radio">Recevoir le courrier<br>
    <input name="bt" onclick="alert('Réponse fausse.\nLe serveur SMTP a un rôle plus spécifique. Lequel?')" type="radio">Envoyer et recevoir le courrier<br>
    <input name="bt" onclick="alert('Réponse fausse.\nUn serveur SMTP a bien un rôle dans ce cadre.')" type="radio">Rien du tout dans le cadre du courrier &eacute;lectronique
</form>
<p> Quand les serveurs sont correctement indiqu&eacute;, passe &agrave; la page suivante.<?php include ("../../suivant.inc.php");?></p>
</div>
<?php include ("../../pied.inc.php");?>
</div>
</body>
</html>