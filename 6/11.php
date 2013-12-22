<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script type="text/javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript">
	$(document).ready(function (){
	$(".qcm").click(function(){
	$(this).next().next().show(300);
	})
	})
	  </script>
  <title>Les programmes d'ordinateur</title>
</head>
<body>
<div id="conteneur"><?php include ("./top.inc.php"); ?>
<div id="texte">
<h2>Le logiciel libre et le fondant au chocolat<br>
</h2>
<div class="info">
<p><img src="images/gateau.jpg" class="imagedroite" style="width: 390px; height: 213px;" alt="G�teau au chocolat"></p>
<p>
</p>
<h3>Comment d�guster un g�teau au chocolat&nbsp;?</h3>
<p class="questions">Je ne suis pas contre un g�teau, mais c'est un cours d'informatique, ici. Pas un cours de cuisine...</p>
<p class="reponses">Nous ferons le lien entre le g�teau au chocolat et
l'informatique dans quelques instants. Pour l'instant, bon app�tit.</p>
<h4>Premier acte: j'ach�te du g�teau</h4>
<p>Je me rends dans un magasin, j'ach�te un g�teau au chocolat que je le d�guste avec mes amis.</p>
<p>Si nous trouvons que le g�teau est d�licieux et que nous voulons en manger un deuxi�me, il faudra retourner au magasin.</p>
<p>Le fabricant n'indique pas la <strong>recette</strong> sur l'emballage... Impossible de refaire le m�me g�teau moi-m�me.</p>
<div class="encadre attention">Le g�teau vendu sous cette forme correspond au <strong>logiciel propri�taire</strong>.<br>
Le code source (la recette) n'est pas publique.</div>
<h4><img style="width: 226px; height: 223px; margin-right: 2em;" src="images/cuisinier.png" class="imagedroite" alt="cuisinier"></h4>
<h4>Deuxi�me acte: la recette est libre et gratuite</h4>
<p>Une autre marque indique la recette pr�cise</strong> sur l'emballage des g�teaux.</p>
<p>S'ils me plaisent, je pourrai:</p>
<ul>
	<li style="margin-left: 2em;">aller en racheter, si je ne sais pas cuisiner ou si je n'ai pas le temps;</li>
	<li style="margin-left: 2em;">les fabriquer moi-m�me, si je suis capable de reproduire la recette; </li>
	<li style="margin-left: 2em;">les faire fabriquer par un cuisinier professionnel que j'engage.</li>
</ul>
<p>Si je fais appel � un bon cuisinier, il va sans doute am�liorer la recette et j'aurai un g�teau encore meilleur.</p>
<div class="encadre attention">Le g�teau vendu sous cette forme correspond au <strong>logiciel libre</strong>.<br>
On a acc�s au code source (la recette), on peut �tudier la recette, l'am�liorer, la modifier puis distribuer (donner ou vendre) les g�teaux r�alis�s.
</div>
<p class="questions">Vous oubliez les lois �l�mentaires du march�: la concurrence va s'emparer de la recette et ce magasin ne va plus vendre grand chose. C'est la faillite assur�e, votre id�e.</p>
<p class="reponses">Il est vrai qu'il manque encore une r�gle importante. Voyons-la maintenant.</p>
<h4>Troisi�me acte: tout le monde est gagnant<img src="images/freeSoft.png" style="width: 249px; height: 257px;" class="imagedroite" alt="Logiciel libre"></h4>
<div style="padding: 0pt; margin-bottom: 1em;" class="encadre">
<ol>
	<li>Toute personne qui utilise la recette originale doit indiquer l'auteur de la recette originale sur les emballages de ses g�teaux.</li>
	<li>Si la recette est am�lior�e, la nouvelle recette doit �tre indiqu�e et disponible pour tout le monde.</li>
</ol>
</div>
&nbsp;Pourquoi est-il int�ressant de publier les recettes selon cette m�thode?
<ul><li>Pour <strong>le fabricant</strong>
	<ul>
		<li>Il pourra disposer de toutes les recettes am�lior�es (les am�liorations des logiciels) et pourra donc, sans payer des chercheurs, produire lui aussi de meilleurs g�teaux au chocolat (de meilleurs logiciels); </li>
		<li> plusieurs recettes diff�rentes (plusieurs variantes du logiciel), toutes tr�s bonnes, pourraient voir le jour; on pourrait donc plus facilement en faire pour tous les go�ts (pour tous les besoins). </li>
	</ul>
	</li>
	<li>Pour <strong>les amateurs de g�teau au chocolat</strong> (les utilisateurs des logiciels)
	<ul>
		<li> la qualit� moyenne des g�teaux au chocolat (la qualit� des logiciels) se trouvera vite augment�e; </li>
	</ul>
	</li>
	<li>Pour <strong>les cuisiniers</strong> (les programmeurs)
		<ul>
			<li> les meilleurs cuisiniers (les meilleurs programmeurs) seront vite rep�r�s gr�ce aux recettes (aux programmes) qu'ils imaginent � partir de la recette de base (� partir du code source); un cuisinier (un programmeur) qui a fait ses preuves serait mieux pay�. </li>
		</ul>
	</li>
</ul>
<div style="margin-bottom: 1em;" class="encadre attention">Dans le cas d'un logiciel libre:<br>
<ul>
	<li>je puis le t�l�charger, l'installer et l'utiliser</li>
	<li>je puis r�aliser ou faire r�aliser des am�liorations</li>
	<li>si quelqu'un l'am�liore, le concepteur re�oit les am�liorations et peut les proposer � ses clients.</li>
</ul>
</div>
</div>
<div class="qcu">
<form action="">Un logiciel libre est toujours gratuit<br>
  <input class="qcm" type="radio">C'est vrai<br>
  <p class="faux">R�ponse fausse<br>
Il y a moyen de l'obtenir gratuitement. Mais si je souhaite des am�liorations ou une aide, je devrai payer le travail. Ce ne sera donc plus gratuit.</p>
  <input class="qcm" type="radio">C'est faux<br>
  <p class="vrai">R�ponse correcte.<br>Si je souhaite des am�liorations ou si je veux me faire aider pour l'utilisation, je devrai payer.</p>
</form>
</div>
<div class="qcu">
<form action="">Un logiciel libre est toujours payant<br>
  <input class="qcm" type="radio">C'est vrai<br>
  <p class="faux">R�ponse fausse<br>
Il y a moyen de l'obtenir gratuitement. Mais alors on doit trouver de l'aide sur le web ou r�aliser les modifications souhait�es soi-m�me.<br>
Si l'on ne souhaite pas de modifications ni d'aide payante, c'est gratuit.</p>
  <input class="qcm" type="radio">C'est faux<br>
  <p class="vrai">R�ponse correcte.<br>Si je souhaite des am�liorations ou si je veux me faire aider pour l'utilisation, je devrai payer.<br>Sinon, il est gratuit.</p>
</form>
</div>
<p>Quand tu as r�pondu aux questions et bien compris les r�ponses, passe � la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
</div>
<?php include ("../../pied.inc.php"); ?> 
</div>
</body>
</html>
