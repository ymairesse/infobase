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
<h2>Fonctionnement des moteurs de recherche: synth�se</h2>
<div class="info">
<h3>Les web crawlers ou spiders</h3>
<img src="images/spider.gif" class="imagedroite" style="width: 180px; height: 302px;" alt="spider">
<p>Comme leur nom l'indique, les <strong>web crawlers</strong> passent leur temps � explorer l'internet (textuellement "faire du crawl sur le web"). Ils parcourent tous les documents qu'ils trouvent en suivant les liens hypertextes.</p>
<p>On pourrait aussi parler de "<strong>spiders</strong>" (araign�es, en anglais) qui parcourent continuellement la toile (le <strong>W</strong>orld <strong>W</strong>ide<strong>W</strong>eb).</p>
<p>En "lisant" les pages web, les <strong>spiders</strong> rep�rent les liens hypertextes et sautent ensuite vers les pages li�es. Qu'ils lisent en rep�rant les liens hypertextes, et ainsi de suite...</p>
<h4>Remarques:</h4>
<ul>
  <li>Les pages qui sont fr�quemment modifi�es -les pages des journaux quotidiens, par exemple- sont parcourues plus r�guli�rement que d'autres.</li>
  <li>Les pages qui ne sont li�es � aucune autre page ne sont jamais visit�es (pourquoi?)</li>
</ul>
</div>
<p class="questions">Ouaaah, trop fort! Vous voulez dire que les robots sont parmi nous? Et que ceux-l� passent toutes leurs journ�es � surfer sur le web?</p>
<p class="reponses">Toutes leurs journ�es et toutes leurs nuits aussi. Mais ce ne sont que de simples ordinateurs munis de programmes qui leur permettent de r�cup�rer tout ce qu'ils trouvent sur le web.</p>
<div class="info">
  
<h3>Les serveurs d'index</h3>
<p><img class="imagedroite" style="width: 214px; height: 260px;" alt="index" src="images/index.jpg"> Les pages "lues" par les spiders sont envoy�es vers une autre s�rie d'ordinateurs: les serveurs d'index. Leur r�le est de tenir � jour un <strong>index</strong> des informations lues par les spiders.</p>
<p>Cet index se pr�sente comme l'index d'un livre: � chaque mot, on fait correspondre la page o� ce mot se trouve. Mais en beaucoup plus gros. Il constitue une gigantesque banque de donn�es dans laquelle il sera possible de chercher tr�s rapidement des informations.</p>
</div>

<h3>Synth�se</h3>
<form action="" class="travail">Dans le vocabulaire de l'Internet, un spider est<br>
  <input class="qcm" name="qcm1" type="radio">Une araign�e qui parcourt le web<br>
  <p class="faux">Non.<br>"Araign�e" se traduit bien par "spider", en anglais. Mais aucune araign�e n'est sur Internet.</p>
  <input class="qcm" name="qcm1" type="radio">Un robot<br>
  <p class="vrai">Exact<br>Il s'agit d'un robot -un ordinateur, en fait- qui parcourt continuellement la toile mondiale.</p>
  <input class="qcm" name="qcm1" type="radio">Un serveur d'indexation<br>
  <p class="faux">R�ponse fausse.<br>Tu sembles confondre les r�les des serveurs. Relis ce qui est marqu� plus haut</p>
  <input class="qcm" name="qcm1" type="radio">Un moteur de recherche<br>
  <p class="faux">Mauvaise r�ponse.<br>Les soci�t�s qui proposent des moteurs de recherche disposent d'ordinateurs appel�s "spiders". Pour que faire?</p>
</form>
<form action="" class="travail">L'index d'un livre est<br>
  <input class="qcm" name="qcm2" type="radio">La table des mati�res avec les titres des chapitres<br>
  <p class="faux">Non.<br>La table des mati�res ne doit pas �tre confondue avec l'index. Ils sont compl�mentaires.</p>
  <input class="qcm" name="qcm2" type="radio">Une liste des principaux mots utilis�s avec les num�ros de page o� ils peuvent �tre trouv�s<br>
  <p class="vrai">Exact<br>L'index d'un livre se trouve g�n�ralement � la fin du livre.</p>
  <input class="qcm" name="qcm2" type="radio">Un marque-page, un signet<br>
  <p class="faux">R�ponse fausse.<br>Il n'y a pas de rapport entre un index et un signet.</p>
</form>
<form action="" class="travail">Dans le premier paragraphe ci-dessus, on lit "<em>les spiders rep�rent les liens hypertextes</em>". Qu'est-ce qu'un lien hypertexte?<br>
  <input class="qcm" name="qcm3" type="radio">Un texte ou une image cliquable qui renvoie vers une autre page ou un autre site<br>
  <p class="vrai">Correct.<br>Les liens hypertextes sont la base du web. On parle encore d'hyperliens.</p>
  <input class="qcm" name="qcm3" type="radio">Un r�sum� du contenu d'une page web.<br>
  <p class="faux">Ce n'est pas correct</p>
  <input class="qcm" name="qcm3" type="radio">Un lien direct vers un moteur de recherche<br>
  <p class="faux">R�ponse fausse.<br>Un
lien vers un moteur de recherche est un lien hypertexte, mais tous les
liens hypertextes ne donnent pas acc�s � un moteur de recherche.</p>
</form>
<form action="" class="travail">Monsieur Dupont, sp�cialiste de la physique des particules, vient de mettre en ligne un site web extr�mement int�ressant sur ses derni�res recherches.<br>Imm�diatement, il se rend sur les principaux moteurs de recherche pour v�rifier que son site est r�pertori�. Mais aucune trace de son travail. Pourquoi?<br>
<input class="qcm" name="qcm4" type="radio">Parce que ce travail n'est pas du tout int�ressant.<br>
<p class="faux">On n'en sait rien.<br>Peut-�tre a-t-il publi� une th�orie aussi r�volutionnaire que celle d'Einstein. Ce n'est pas la bonne r�ponse.<br>Et m�me des th�ories sans int�r�t, ou fausses, pourraient �tre r�f�renc�es par les moteurs de recherche.</p>
<input class="qcm" name="qcm4" type="radio">Parce que les moteurs de recherche n'ont pas encore eu la possibilit� de visiter son site.<br>
<p class="vrai">Exact.<br>Il faus souvent plusieurs jours pour que les
moteurs de recherche visitent un nouveau site. Et encore, il faut, au
moins, une condition suppl�mentaire. Laquelle?</p>
<input class="qcm" name="qcm4" type="radio">Parce qu'un site personnel n'est jamais r�f�renc� par les moteurs de recherche.<br>
<p class="faux">R�ponse fausse.<br>Tous les sites peuvent figurer dans la banque de donn�es des moteurs de recherche.</p>
</form>
<form action="" class="travail">Trois mois plus tard, monsieur Dupont n'a pas quitt� son �cran et ne voit toujours pas son site appara�tre sur les moteurs de recherche. Quelle pourrait �tre la cause du probl�me?<br>
<input class="qcm" name="qcm5" type="radio">Parce que ce travail n'est pas du tout int�ressant et les moteurs de recherche l'ont rejet�.<br>
<p class="faux">On n'en sait rien; et les moteurs de recherche non plus.<br>Ils ne sont pas capables de juger si une th�orie est int�ressante ou compl�tement fausse.<br>
Ce n'est pas leur probl�me.</p>
<input class="qcm" name="qcm5" type="radio">Parce que les moteurs de recherche n'ont pas encore eu le temps de visiter son site.<br>
<p class="faux">R�ponse fausse<br>� partir du moment o� un moteur de recherche dispose d'un lien vers le site, il pourra le visiter.<br>
Cela peut prendre quelques jours, tout au plus.</p>
<input class="qcm" name="qcm5" type="radio">Parce qu'il n'existe aucun lien hypertexte vers son site, nulle part sur le web.<br>
<p class="vrai">R�ponse sans doute correcte.<br> Si le site n'est pas
connu et que personne n'a encore jug� bon de faire un lien quelque
part, les moteurs de recherche ne peuvent pas trouver le site et
l'indexer.</p>
</form>
<form action="" class="travail">Finalement, "Eureka", les moteurs de recherche r�f�rencent le site web de monsieur Dupont.<br>Cela prouve que:<br>
<input class="qcm" name="qcm6" type="radio">Son travail �tait vraiment int�ressant: un grand progr�s pour la science.<br>
<p class="faux">On n'en sait rien.<br>Les moteurs de recherche ne jugent pas de la qualit� d'un travail scientifique.</p>
<input class="qcm" name="qcm6" type="radio">Les moteurs de recherche ont trouv� un lien, quelque part, vers son site.<br>
<p class="vrai">Exact.<br>Sans lien hypertexte vers son site web, il aurait toujours pu attendre encore des mois sans r�sultat.</p>
<input class="qcm" name="qcm6" type="radio">La patience est toujours r�compens�e.<br>
<p class="faux">R�ponse fausse.<br>Ici, la patience ne suffit pas. Il faut au moins une autre condition.</p>
</form>
<p>Quand tu as r�pondu aux questions et bien compris les r�ponses, passe � la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
</div>
<?php include ("../../pied.inc.php"); ?> 
</div>
</body>
</html>
