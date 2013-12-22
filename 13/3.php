<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script type="text/javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function (){
        $(".qcm").click(function(){
            $(this).next().next().show(300);
        })
        $(".qcm").attr("checked",false);
    })
  </script>
  <title>La recherche sur l'Internet</title>
</head><body>
<div id="conteneur">
<?php require ("./top.inc.php");?>
<div id="texte">
<h2>Fonctionnement des moteurs de recherche: synthèse</h2>
<div class="info">
<h3>Les web crawlers ou spiders</h3>
<img src="images/spider.gif" class="imagedroite" style="width: 180px; height: 302px;" alt="spider">
<p>Comme leur nom l'indique, les <strong>web crawlers</strong> passent leur temps à explorer l'internet (textuellement "faire du crawl sur le web"). Ils parcourent tous les documents qu'ils trouvent en suivant les liens hypertextes.</p>
<p>On pourrait aussi parler de "<strong>spiders</strong>" (araignées, en anglais) qui parcourent continuellement la toile (le <strong>W</strong>orld <strong>W</strong>ide<strong>W</strong>eb).</p>
<p>En "lisant" les pages web, les <strong>spiders</strong> repèrent les liens hypertextes et sautent ensuite vers les pages liées. Qu'ils lisent en repérant les liens hypertextes, et ainsi de suite...</p>
<h4>Remarques:</h4>
<ul>
  <li>Les pages qui sont fréquemment modifiées -les pages des journaux quotidiens, par exemple- sont parcourues plus régulièrement que d'autres.</li>
  <li>Les pages qui ne sont liées à aucune autre page ne sont jamais visitées (pourquoi?)</li>
</ul>
</div>
<p class="questions">Ouaaah, trop fort! Vous voulez dire que les robots sont parmi nous? Et que ceux-là passent toutes leurs journées à surfer sur le web?</p>
<p class="reponses">Toutes leurs journées et toutes leurs nuits aussi. Mais ce ne sont que de simples ordinateurs munis de programmes qui leur permettent de récupérer tout ce qu'ils trouvent sur le web.</p>
<div class="info">
  
<h3>Les serveurs d'index</h3>
<p><img class="imagedroite" style="width: 214px; height: 260px;" alt="index" src="images/index.jpg"> Les pages "lues" par les spiders sont envoyées vers une autre série d'ordinateurs: les serveurs d'index. Leur rôle est de tenir à jour un <strong>index</strong> des informations lues par les spiders.</p>
<p>Cet index se présente comme l'index d'un livre: à chaque mot, on fait correspondre la page où ce mot se trouve. Mais en beaucoup plus gros. Il constitue une gigantesque banque de données dans laquelle il sera possible de chercher très rapidement des informations.</p>
</div>

<h3>Synthèse</h3>
<form action="" class="travail">Dans le vocabulaire de l'Internet, un spider est<br>
  <input class="qcm" name="qcm1" type="radio">Une araignée qui parcourt le web<br>
  <p class="faux">Non.<br>"Araignée" se traduit bien par "spider", en anglais. Mais aucune araignée n'est sur Internet.</p>
  <input class="qcm" name="qcm1" type="radio">Un robot<br>
  <p class="vrai">Exact<br>Il s'agit d'un robot -un ordinateur, en fait- qui parcourt continuellement la toile mondiale.</p>
  <input class="qcm" name="qcm1" type="radio">Un serveur d'indexation<br>
  <p class="faux">Réponse fausse.<br>Tu sembles confondre les rôles des serveurs. Relis ce qui est marqué plus haut</p>
  <input class="qcm" name="qcm1" type="radio">Un moteur de recherche<br>
  <p class="faux">Mauvaise réponse.<br>Les sociétés qui proposent des moteurs de recherche disposent d'ordinateurs appelés "spiders". Pour que faire?</p>
</form>
<form action="" class="travail">L'index d'un livre est<br>
  <input class="qcm" name="qcm2" type="radio">La table des matières avec les titres des chapitres<br>
  <p class="faux">Non.<br>La table des matières ne doit pas être confondue avec l'index. Ils sont complémentaires.</p>
  <input class="qcm" name="qcm2" type="radio">Une liste des principaux mots utilisés avec les numéros de page où ils peuvent être trouvés<br>
  <p class="vrai">Exact<br>L'index d'un livre se trouve généralement à la fin du livre.</p>
  <input class="qcm" name="qcm2" type="radio">Un marque-page, un signet<br>
  <p class="faux">Réponse fausse.<br>Il n'y a pas de rapport entre un index et un signet.</p>
</form>
<form action="" class="travail">Dans le premier paragraphe ci-dessus, on lit "<em>les spiders repèrent les liens hypertextes</em>". Qu'est-ce qu'un lien hypertexte?<br>
  <input class="qcm" name="qcm3" type="radio">Un texte ou une image cliquable qui renvoie vers une autre page ou un autre site<br>
  <p class="vrai">Correct.<br>Les liens hypertextes sont la base du web. On parle encore d'hyperliens.</p>
  <input class="qcm" name="qcm3" type="radio">Un résumé du contenu d'une page web.<br>
  <p class="faux">Ce n'est pas correct</p>
  <input class="qcm" name="qcm3" type="radio">Un lien direct vers un moteur de recherche<br>
  <p class="faux">Réponse fausse.<br>Un
lien vers un moteur de recherche est un lien hypertexte, mais tous les
liens hypertextes ne donnent pas accès à un moteur de recherche.</p>
</form>
<form action="" class="travail">Monsieur Dupont, spécialiste de la physique des particules, vient de mettre en ligne un site web extrêmement intéressant sur ses dernières recherches.<br>Immédiatement, il se rend sur les principaux moteurs de recherche pour vérifier que son site est répertorié. Mais aucune trace de son travail. Pourquoi?<br>
<input class="qcm" name="qcm4" type="radio">Parce que ce travail n'est pas du tout intéressant.<br>
<p class="faux">On n'en sait rien.<br>Peut-être a-t-il publié une théorie aussi révolutionnaire que celle d'Einstein. Ce n'est pas la bonne réponse.<br>Et même des théories sans intérêt, ou fausses, pourraient être référencées par les moteurs de recherche.</p>
<input class="qcm" name="qcm4" type="radio">Parce que les moteurs de recherche n'ont pas encore eu la possibilité de visiter son site.<br>
<p class="vrai">Exact.<br>Il faus souvent plusieurs jours pour que les
moteurs de recherche visitent un nouveau site. Et encore, il faut, au
moins, une condition supplémentaire. Laquelle?</p>
<input class="qcm" name="qcm4" type="radio">Parce qu'un site personnel n'est jamais référencé par les moteurs de recherche.<br>
<p class="faux">Réponse fausse.<br>Tous les sites peuvent figurer dans la banque de données des moteurs de recherche.</p>
</form>
<form action="" class="travail">Trois mois plus tard, monsieur Dupont n'a pas quitté son écran et ne voit toujours pas son site apparaître sur les moteurs de recherche. Quelle pourrait être la cause du problème?<br>
<input class="qcm" name="qcm5" type="radio">Parce que ce travail n'est pas du tout intéressant et les moteurs de recherche l'ont rejeté.<br>
<p class="faux">On n'en sait rien; et les moteurs de recherche non plus.<br>Ils ne sont pas capables de juger si une théorie est intéressante ou complètement fausse.<br>
Ce n'est pas leur problème.</p>
<input class="qcm" name="qcm5" type="radio">Parce que les moteurs de recherche n'ont pas encore eu le temps de visiter son site.<br>
<p class="faux">Réponse fausse<br>À partir du moment où un moteur de recherche dispose d'un lien vers le site, il pourra le visiter.<br>
Cela peut prendre quelques jours, tout au plus.</p>
<input class="qcm" name="qcm5" type="radio">Parce qu'il n'existe aucun lien hypertexte vers son site, nulle part sur le web.<br>
<p class="vrai">Réponse sans doute correcte.<br> Si le site n'est pas
connu et que personne n'a encore jugé bon de faire un lien quelque
part, les moteurs de recherche ne peuvent pas trouver le site et
l'indexer.</p>
</form>
<form action="" class="travail">Finalement, "Eureka", les moteurs de recherche référencent le site web de monsieur Dupont.<br>Cela prouve que:<br>
<input class="qcm" name="qcm6" type="radio">Son travail était vraiment intéressant: un grand progrès pour la science.<br>
<p class="faux">On n'en sait rien.<br>Les moteurs de recherche ne jugent pas de la qualité d'un travail scientifique.</p>
<input class="qcm" name="qcm6" type="radio">Les moteurs de recherche ont trouvé un lien, quelque part, vers son site.<br>
<p class="vrai">Exact.<br>Sans lien hypertexte vers son site web, il aurait toujours pu attendre encore des mois sans résultat.</p>
<input class="qcm" name="qcm6" type="radio">La patience est toujours récompensée.<br>
<p class="faux">Réponse fausse.<br>Ici, la patience ne suffit pas. Il faut au moins une autre condition.</p>
</form>
<p>Quand tu as répondu aux questions et bien compris les réponses, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
</div>
<?php include ("../../pied.inc.php"); ?> 
</div>
</body>
</html>
