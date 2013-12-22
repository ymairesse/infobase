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
<p><img src="images/gateau.jpg" class="imagedroite" style="width: 390px; height: 213px;" alt="Gâteau au chocolat"></p>
<p>
</p>
<h3>Comment déguster un gâteau au chocolat&nbsp;?</h3>
<p class="questions">Je ne suis pas contre un gâteau, mais c'est un cours d'informatique, ici. Pas un cours de cuisine...</p>
<p class="reponses">Nous ferons le lien entre le gâteau au chocolat et
l'informatique dans quelques instants. Pour l'instant, bon appétit.</p>
<h4>Premier acte: j'achète du gâteau</h4>
<p>Je me rends dans un magasin, j'achète un gâteau au chocolat que je le déguste avec mes amis.</p>
<p>Si nous trouvons que le gâteau est délicieux et que nous voulons en manger un deuxième, il faudra retourner au magasin.</p>
<p>Le fabricant n'indique pas la <strong>recette</strong> sur l'emballage... Impossible de refaire le même gâteau moi-même.</p>
<div class="encadre attention">Le gâteau vendu sous cette forme correspond au <strong>logiciel propriétaire</strong>.<br>
Le code source (la recette) n'est pas publique.</div>
<h4><img style="width: 226px; height: 223px; margin-right: 2em;" src="images/cuisinier.png" class="imagedroite" alt="cuisinier"></h4>
<h4>Deuxième acte: la recette est libre et gratuite</h4>
<p>Une autre marque indique la recette précise</strong> sur l'emballage des gâteaux.</p>
<p>S'ils me plaisent, je pourrai:</p>
<ul>
	<li style="margin-left: 2em;">aller en racheter, si je ne sais pas cuisiner ou si je n'ai pas le temps;</li>
	<li style="margin-left: 2em;">les fabriquer moi-même, si je suis capable de reproduire la recette; </li>
	<li style="margin-left: 2em;">les faire fabriquer par un cuisinier professionnel que j'engage.</li>
</ul>
<p>Si je fais appel à un bon cuisinier, il va sans doute améliorer la recette et j'aurai un gâteau encore meilleur.</p>
<div class="encadre attention">Le gâteau vendu sous cette forme correspond au <strong>logiciel libre</strong>.<br>
On a accès au code source (la recette), on peut étudier la recette, l'améliorer, la modifier puis distribuer (donner ou vendre) les gâteaux réalisés.
</div>
<p class="questions">Vous oubliez les lois élémentaires du marché: la concurrence va s'emparer de la recette et ce magasin ne va plus vendre grand chose. C'est la faillite assurée, votre idée.</p>
<p class="reponses">Il est vrai qu'il manque encore une règle importante. Voyons-la maintenant.</p>
<h4>Troisième acte: tout le monde est gagnant<img src="images/freeSoft.png" style="width: 249px; height: 257px;" class="imagedroite" alt="Logiciel libre"></h4>
<div style="padding: 0pt; margin-bottom: 1em;" class="encadre">
<ol>
	<li>Toute personne qui utilise la recette originale doit indiquer l'auteur de la recette originale sur les emballages de ses gâteaux.</li>
	<li>Si la recette est améliorée, la nouvelle recette doit être indiquée et disponible pour tout le monde.</li>
</ol>
</div>
&nbsp;Pourquoi est-il intéressant de publier les recettes selon cette méthode?
<ul><li>Pour <strong>le fabricant</strong>
	<ul>
		<li>Il pourra disposer de toutes les recettes améliorées (les améliorations des logiciels) et pourra donc, sans payer des chercheurs, produire lui aussi de meilleurs gâteaux au chocolat (de meilleurs logiciels); </li>
		<li> plusieurs recettes différentes (plusieurs variantes du logiciel), toutes très bonnes, pourraient voir le jour; on pourrait donc plus facilement en faire pour tous les goûts (pour tous les besoins). </li>
	</ul>
	</li>
	<li>Pour <strong>les amateurs de gâteau au chocolat</strong> (les utilisateurs des logiciels)
	<ul>
		<li> la qualité moyenne des gâteaux au chocolat (la qualité des logiciels) se trouvera vite augmentée; </li>
	</ul>
	</li>
	<li>Pour <strong>les cuisiniers</strong> (les programmeurs)
		<ul>
			<li> les meilleurs cuisiniers (les meilleurs programmeurs) seront vite repérés grâce aux recettes (aux programmes) qu'ils imaginent à partir de la recette de base (à partir du code source); un cuisinier (un programmeur) qui a fait ses preuves serait mieux payé. </li>
		</ul>
	</li>
</ul>
<div style="margin-bottom: 1em;" class="encadre attention">Dans le cas d'un logiciel libre:<br>
<ul>
	<li>je puis le télécharger, l'installer et l'utiliser</li>
	<li>je puis réaliser ou faire réaliser des améliorations</li>
	<li>si quelqu'un l'améliore, le concepteur reçoit les améliorations et peut les proposer à ses clients.</li>
</ul>
</div>
</div>
<div class="qcu">
<form action="">Un logiciel libre est toujours gratuit<br>
  <input class="qcm" type="radio">C'est vrai<br>
  <p class="faux">Réponse fausse<br>
Il y a moyen de l'obtenir gratuitement. Mais si je souhaite des améliorations ou une aide, je devrai payer le travail. Ce ne sera donc plus gratuit.</p>
  <input class="qcm" type="radio">C'est faux<br>
  <p class="vrai">Réponse correcte.<br>Si je souhaite des améliorations ou si je veux me faire aider pour l'utilisation, je devrai payer.</p>
</form>
</div>
<div class="qcu">
<form action="">Un logiciel libre est toujours payant<br>
  <input class="qcm" type="radio">C'est vrai<br>
  <p class="faux">Réponse fausse<br>
Il y a moyen de l'obtenir gratuitement. Mais alors on doit trouver de l'aide sur le web ou réaliser les modifications souhaitées soi-même.<br>
Si l'on ne souhaite pas de modifications ni d'aide payante, c'est gratuit.</p>
  <input class="qcm" type="radio">C'est faux<br>
  <p class="vrai">Réponse correcte.<br>Si je souhaite des améliorations ou si je veux me faire aider pour l'utilisation, je devrai payer.<br>Sinon, il est gratuit.</p>
</form>
</div>
<p>Quand tu as répondu aux questions et bien compris les réponses, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
</div>
<?php include ("../../pied.inc.php"); ?> 
</div>
</body>
</html>
