<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta  http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
	<link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
	<link rel="stylesheet" type="text/css" href="../../print.css" media="print"> 
	<title>Les outils du système d'exploitation</title>
</head>
<body>
<div id="conteneur">
<?php include ("./top.inc.php"); ?>
<div id="texte">
<h2>Le système d'exploitation</h2>
<div class="info"> 
<p>A l'aide du BIOS, l'ordinateur n'est capable de réaliser que des opérations très élémentaires sur les périphériques. Utiliser un ordinateur que ne serait muni que du BIOS serait très difficile. </p>
<p> En effet, le BIOS manque d'une capacité importante: il est <strong>incapable d'organiser le travail</strong> de l'ordinateur. </p>
<p> Exemples: </p>
<table style="margin: auto; width: 80%;"  border="1" cellpadding="3" cellspacing="1" width="100%"> 
	<tbody> 
	<tr bgcolor="#ffff99" valign="top"> 
		<td style="text-align: center;" width="50%"> Le BIOS peut </td> 
		<td style="text-align: center;" width="50%"> Le BIOS ne peut pas </td> 
	</tr>
	<tr valign="top"> 
		<td width="50%"> 
			<ul> 
				<li>écrire sur une piste et un secteur d'un disque </li> 
			</ul> 
		</td> 
		<td width="50%"> 
			<ul> 
				<li>retenir o&ugrave; se trouvent les informations quand elles ont été écrites </li> 
			</ul> 
		</td> 
	</tr> 
	<tr valign="top"> 
		<td width="50%"> 
			<ul>
				<li>déposer des informations dans la mémoire centrale </li> 
			</ul> 
		</td> 
		<td width="50%"> 
			<ul>
				<li>retenir si une case mémoire a déjà re&ccedil;u des informations ou est encore libre </li> 
			</ul> 
		</td> 
	</tr> 
	</tbody>
</table>
<p><img class="imagegauche" style="width: 300px; height: 199px;"  alt="Choeur" src="images/choeur.jpg">
<img class="imagedroite" style="width: 250px; height: 166px;" alt="Chef d'orchestre (http://upload.wikimedia.org/wikipedia/commons/c/c6/Maazel_08.jpg)" src="images/Maazel.jpg"> Chaque fonction du BIOS est un peu comme un chanteur dans un choeur ou un musicien dans un orchestre.</p>
<p>Le BIOS est alors comparable à un orchestre. Mais sans chef, cet orchestre ne pourra jamais produire une musique harmonieuse.</p> 
<p> L'ordinateur doit donc être muni d'un programme qui est capable d'organiser le travail&nbsp;; ce programme INDISPENSABLE est appelé <strong>Système d'exploitation</strong>. </p>
<p> Le système d'exploitation s'occupe </p> 
	<ul> 
		<li> d'organiser l'enregistrement des informations sur le disque&nbsp;; </li> 
		<li>d'organiser la mémoire en indiquant quel programme utilise quelle portion de mémoire&nbsp;; </li> 
		<li>...</li>
	</ul>
</div>
<div class="info">
	<p>Le <strong>système d'exploitation</strong> est donc un peu comme un chef d'orchestre dans l'ordinateur. </p>
</div>
<div class="travail">
<form action="">
	<p>Dans l'ordinateur, on peut comparer le BIOS à</p>
	<input name="bt" onclick="alert('Non.\nLe BIOS est capable d\'exécuter des instructions, mais il faut quelqu\'un pour organiser son travail.')" type="radio"> Un chef d'orchestre<br> 
	<input name="bt" onclick="alert('Effectivement.\nLe BIOS ressemble à un ensemble de musiciens qui attendent qu\'on les dirige.')" type="radio"> Un orchestre<br> 
	<input name="bt" onclick="alert('Non.\nLe BIOS est le composant électronique capable d\'exécuter la partition.')" type="radio"> Une partition<br>
</form>
<form action="">
	<p>Dans l'ordinateur, on peut comparer le système d'exploitation à</p>
	<input name="bt" onclick="alert('Non.\nL\'orchestre exécute les ordres du chef mais n\'est pas capable de s\'organiser seul. Il est représenté par le BIOS\nIl a donc besoin du système d\'exploitation.')" type="radio"> Un orchestre<br> 
	<input name="bt" onclick="alert('Exact.\nLe chef d\'orchestre organise le jeu des musiciens.\nDe même, le système d\'exploitation organise le travail du BIOS.')"  type="radio"> Un chef d'orchestre<br> 
	<input name="bt" onclick="alert('Non.\nLa partition peut éventuellement être comparée aux instructions contenues dans le BIOS et qu\'il est capable d\'exécuter.')" type="radio"> Une partition 
</form>
</div>
<p> Quand tu es capable de comparer les programmes de l'ordinateur à un orchestre (qui est l'orchestre, qui est le chef, à quoi sert le chef&nbsp;?), passe à la page suivante. <?php include ("../../suivant.inc.php");?></p>
</div>
<?php include ("../../pied.inc.php"); ?> 
</div>
</body>
</html>
