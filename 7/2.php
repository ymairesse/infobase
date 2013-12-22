<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta  http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
	<link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
	<link rel="stylesheet" type="text/css" href="../../print.css" media="print"> 
	<title>Les outils du syst�me d'exploitation</title>
</head>
<body>
<div id="conteneur">
<?php include ("./top.inc.php"); ?>
<div id="texte">
<h2>Le syst�me d'exploitation</h2>
<div class="info"> 
<p>A l'aide du BIOS, l'ordinateur n'est capable de r�aliser que des op�rations tr�s �l�mentaires sur les p�riph�riques. Utiliser un ordinateur que ne serait muni que du BIOS serait tr�s difficile. </p>
<p> En effet, le BIOS manque d'une capacit� importante: il est <strong>incapable d'organiser le travail</strong> de l'ordinateur. </p>
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
				<li>�crire sur une piste et un secteur d'un disque </li> 
			</ul> 
		</td> 
		<td width="50%"> 
			<ul> 
				<li>retenir o&ugrave; se trouvent les informations quand elles ont �t� �crites </li> 
			</ul> 
		</td> 
	</tr> 
	<tr valign="top"> 
		<td width="50%"> 
			<ul>
				<li>d�poser des informations dans la m�moire centrale </li> 
			</ul> 
		</td> 
		<td width="50%"> 
			<ul>
				<li>retenir si une case m�moire a d�j� re&ccedil;u des informations ou est encore libre </li> 
			</ul> 
		</td> 
	</tr> 
	</tbody>
</table>
<p><img class="imagegauche" style="width: 300px; height: 199px;"  alt="Choeur" src="images/choeur.jpg">
<img class="imagedroite" style="width: 250px; height: 166px;" alt="Chef d'orchestre (http://upload.wikimedia.org/wikipedia/commons/c/c6/Maazel_08.jpg)" src="images/Maazel.jpg"> Chaque fonction du BIOS est un peu comme un chanteur dans un choeur ou un musicien dans un orchestre.</p>
<p>Le BIOS est alors comparable � un orchestre. Mais sans chef, cet orchestre ne pourra jamais produire une musique harmonieuse.</p> 
<p> L'ordinateur doit donc �tre muni d'un programme qui est capable d'organiser le travail&nbsp;; ce programme INDISPENSABLE est appel� <strong>Syst�me d'exploitation</strong>. </p>
<p> Le syst�me d'exploitation s'occupe </p> 
	<ul> 
		<li> d'organiser l'enregistrement des informations sur le disque&nbsp;; </li> 
		<li>d'organiser la m�moire en indiquant quel programme utilise quelle portion de m�moire&nbsp;; </li> 
		<li>...</li>
	</ul>
</div>
<div class="info">
	<p>Le <strong>syst�me d'exploitation</strong> est donc un peu comme un chef d'orchestre dans l'ordinateur. </p>
</div>
<div class="travail">
<form action="">
	<p>Dans l'ordinateur, on peut comparer le BIOS �</p>
	<input name="bt" onclick="alert('Non.\nLe BIOS est capable d\'ex�cuter des instructions, mais il faut quelqu\'un pour organiser son travail.')" type="radio"> Un chef d'orchestre<br> 
	<input name="bt" onclick="alert('Effectivement.\nLe BIOS ressemble � un ensemble de musiciens qui attendent qu\'on les dirige.')" type="radio"> Un orchestre<br> 
	<input name="bt" onclick="alert('Non.\nLe BIOS est le composant �lectronique capable d\'ex�cuter la partition.')" type="radio"> Une partition<br>
</form>
<form action="">
	<p>Dans l'ordinateur, on peut comparer le syst�me d'exploitation �</p>
	<input name="bt" onclick="alert('Non.\nL\'orchestre ex�cute les ordres du chef mais n\'est pas capable de s\'organiser seul. Il est repr�sent� par le BIOS\nIl a donc besoin du syst�me d\'exploitation.')" type="radio"> Un orchestre<br> 
	<input name="bt" onclick="alert('Exact.\nLe chef d\'orchestre organise le jeu des musiciens.\nDe m�me, le syst�me d\'exploitation organise le travail du BIOS.')"  type="radio"> Un chef d'orchestre<br> 
	<input name="bt" onclick="alert('Non.\nLa partition peut �ventuellement �tre compar�e aux instructions contenues dans le BIOS et qu\'il est capable d\'ex�cuter.')" type="radio"> Une partition 
</form>
</div>
<p> Quand tu es capable de comparer les programmes de l'ordinateur � un orchestre (qui est l'orchestre, qui est le chef, � quoi sert le chef&nbsp;?), passe � la page suivante. <?php include ("../../suivant.inc.php");?></p>
</div>
<?php include ("../../pied.inc.php"); ?> 
</div>
</body>
</html>
