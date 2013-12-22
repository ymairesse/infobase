<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta name="generator" content="HTML Tidy for Windows (vers 1st July 2004), see www.w3.org">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
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
  <title>Les périphériques de stockage</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>Unités de stockage externes</h2>
    <div class="info">
      <p>Les <strong>disques durs internes</strong> actuels ont couramment des capacités comprises entre 1 To (soit 1000 Go) et 3 To (chiffres de 2013). Cette capacité ne fait qu'augmenter.</p>
      <p>Il existe encore d'autres types d'unités de stockage. Parmi ceux-ci, les plus utilisés sont certainement <strong>les disques durs externes</strong> et <strong>les clefs USB</strong>.</p>
      <h3>Les clefs USB</h3>
      <p><img src="images/usb.jpg" alt="Clef USB (échelle: 60%)" align="right" height="180" class="imagegauche" width="240">Les clefs USB se connectent directement sur une prise particulière de l'ordinateur.</p>
      <p>Elles s'utilisent comme des lecteurs de disques externes. Leur capacité varie généralement entre 16Go et 64Go (chiffres de 2013).</p>
      <p>Les clefs USB <strong>n'utilisent pas</strong> un système magnétique. Elles contiennent une puce qui peut retenir les informations même sans alimentation électrique, comme les cartes mémoire des appareils photos.</p>
      <p>Elles sont généralement moins rapides que les disques durs internes.</p>
	  <div class="important encadre" style="clear:both">
	  <h4>Supplément d'information [pas à retenir]</h4>
	  <p><strong>USB</strong> est un <a class="bulle" href="javascript:void(0)">acronyme<span>Un acronyme est une abréviation qui s'utilise comme un mot du dictionnaire.</span></a> dont l'origine est l'expression "Universal Serial Bus".</p>
	  <ul>
	  <li>En informatique, les "bus" sont des voies de communication. Revois <a href="http://info.sio2.be/infobase/2/1.php">la leçon 2</a> à ce sujet.</li>
	  <li>"Serial" signifie que les données sont transmises en série, les unes derrière les autres, dans le "bus".</li>
	  </ul>
	  <p><strong>Une clef USB</strong> est donc un périphérique qui communique avec l'unité centrale en recevant ou en envoyant des informations en série.</p>
	  </div>
	  <h3><img src="images/diskExterne.jpg" class="imagedroite" alt="Disque externe">Les disques externes</h3>
      <p>Leur capacité est la même que les disques durs internes. Ce sont les mêmes disques dans un boîtier munis d'une connexion USB.</p>
      <p>Un disque dur externe est généralement un peu plus lent qu'un disque interne. Le principe de fonctionnement est exactement le même que celui des disques durs internes.</p>
      <p>Les disques externes sont souvent connectés à l'unité centrale par un câble USB.</p>
	</div>
      <p class="attention">Pour répondre aux questions suivantes, tu peux éventuellement revoir le contenu de la <a href="../2/12.php" target="_blank">page 12 du chapitre 2</a>.</p>
      <form action="" class="travail">Pour stocker beaucoup de fichiers de gros volume, il vaut mieux utiliser<br />
        <input class="qcm" type="radio">Un disque dur interne<br />
        <p class="faux">Incorrect.<br >Relis les caractéristiques des disques durs externes, en haut de la page</p>
        <input class="qcm" type="radio">Un disque dur externe<br />
        <p class="faux">Incorrect.<br >Relis les caractéristiques des disques durs externes, en haut de la page</p>
        <input class="qcm" type="radio">Un disque dur (interne ou externe)<br />
        <p class="vrai">Effectivement.<br />Qu'il soit interne ou externe ne fait pas de différence pour la capacité.</p>
        <input class="qcm" type="radio">Une clef USB<br />
        <p class="faux">Non.<br />La clef USB n'offre généralement pas la même capacité qu'un disque dur.</p>
        <input class="qcm" type="radio">Une disquette 3"1/2<br />
        <p class="faux">C'est une très mauvaise réponse. La disquette a une très petite capacité.</p>
      </form>
      <form action="" class="travail">
        Que signifie la notation 2000 Go relative à la capacité d'un disque dur?<br />
        <input class="qcm" type="radio">que ce disque dur peut supporter approximativement 2.000.000 octets<br />
        <p class="faux">Faux.<br />Tu dois revoir la signification du symbole 'G' dans la notation 2000 Go.<br />Tu confonds avec le symbole 'k'.</p>
        <input class="qcm" type="radio">que ce disque dur peut supporter approximativement 2000 millions d'octets<br />
        <p class="faux">Faux.<br />Tu dois revoir la signification du symbole 'G' dans la notation 2000 Go.<br />Tu confonds avec le symbole 'M'</p>
        <input class="qcm" type="radio">que ce disque dur peut supporter approximativement 2000 milliards d'octets<br />
        <p class="vrai">Exact.<br />2000 Go sont bien 2.000.000.000.000 d'octets<br />ou, plus exactement, 2000 x 1024 x 1024 x 1024 soit 2.147.483.648.000 octets.</p>
      </form>
      <form action="" class="travail">Dans l'ordre, du plus petit au plus grand, il faut placer<br />
      <input class="qcm" type="radio">720&nbsp;Ko - 100&nbsp;Mo - 60 Go<br />
        <p class="vrai">Exact.<br />720.000 octets - 100.000.000 octets - 60.000.000.000 octets.</p>
        <input class="qcm" type="radio">720&nbsp;Ko - 60 Go - 100&nbsp;Mo<br />
        <p class="faux">Faux.<br />Tu dois revoir la signification des symboles 'k', 'M' et 'G'.</p>
        <input class="qcm" type="radio">60 Go - 100&nbsp;Mo - 720&nbsp;Ko<br />
        <p class="faux">Faux.<br />Tu dois revoir la signification des symboles 'k', 'M' et 'G'.</p>
      </form>
      <form action="" class="travail">
        Pour transporter un fichier de 3&nbsp;Mo de l'école jusqu'à ton domicile, le moyen le plus simple et le plus s&ucirc;r est d'utiliser:<br>
        <input class="qcm" type="radio">Le disque dur interne de ton ordinateur<br />
        <p class="faux">Non.<br />Cela t'obligerait à démonter le disque et à le sortir de la console.</p>
        <input class="qcm" type="radio">Un disque dur externe<br />
        <p class="faux">C'est possible de transporter un petit fichier sur un disque dur externe, mais ce n'est pas le meilleur moyen.<br />Cherche une meilleure réponse.</p>
        <input class="qcm" type="radio">Une clef USB<br />
        <p class="vrai">Correct.<br />C'est la meilleure réponse.</p>
      </form>
      <form action="" class="travail">
      Dans l'ordre de la plus petite à la plus grande capacité de stockage, il faut citer<br />
      <input class="qcm" type="radio">clef USB < disque dur interne < disque dur externe<br />
        <p class="faux">Non.<br />Il faudra relire les informations sur les différents types de disques durs</p>
        <input class="qcm" type="radio">clef USB < disque dur externe < disque dur interne<br />
        <p class="faux">Non.<br />Il faudra relire les informations sur les différents types de disques durs</p>
      <input class="qcm" type="radio">disque dur < clef USB<br />
        <p class="faux">Non.<br />Il faudra relire les informations sur les clefs USB</p>
        <input class="qcm" type="radio">clef USB < disque dur<br />
        <p class="vrai">Correct.<br />Les clefs USB ont généralement une capacité inférieure à celle des disques durs.</p>
      </form>
	  <form action="" class="travail">
	  Combien de types de stockage externes différents sont évoqués sur cette page?<br />
	  <input class="qcm" type="radio">Un seul<br />
	  <p class="faux">Non.<br />Repasse les titres en revue.</p>
	  <input class="qcm" type="radio">Deux<br />
	  <p class="vrai">Exact: les clefs USB et les disques externes</p>
	  <input class="qcm" type="radio">Trois<br />
	  <p class="faux">Non.<br />Repasse les titres en reuve.</p>
	  </form>
      <p>Quand tu as bien en tête les valeurs approximatives des capacités des différents supports magnétiques présentés et que tu as répondu aux questions, passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div>
    <?php include ("../../pied.inc.php");?>
  </div>
</body>
</html>
