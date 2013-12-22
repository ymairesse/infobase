<?php //anit-moz ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
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
	  <h2>Stockage magnétique</h2>
	  <p><img src="images/ilots.png" width="300px" class="imagedroite">Actuellement, les périphériques de stockage les plus courants utilisent les propriétés magnétiques de certains matériaux pour "retenir" les informations.</p>
	  <p>Tout se passe comme si, dans le <a class="bulle" href="javascript:void(0)">matériaux<span>le matériaux: la matière dont est fait le disque</span></a>, on disposait une série de petits aimants orientés:</p>
	  <ul>
	  <li>Pôle <strong>Nord</strong> vers le haut, pôle <strong>Sud</strong> vers le bas ou</li>
	  <li>Pôle <strong>Sud</strong> vers le haut et pôle <strong>Nord</strong> vers le bas</li>
	  </ul>
	  <p>Les disques durs sont des périphériques d'Entrée/Sortie qui permettent de stocker des informations très longtemps. Si l'on éteint l'ordinateur: même sans électricité, le magnétisme se conserve.</p>
      <h2>Un disque d'ordinateur est semblable à une cassette audio ou vidéo</h2>
      <div class="info"><p>Dans tous les cas, il s'agit d'un <strong>support magnétique</strong> tout à fait comparable à une bande magnétique d'une cassette audio ou vidéo&nbsp;; il se présente ici sous la forme d'un disque.</p>
      <p style="text-align: center;"><img style="width: 227px; height: 138px;" alt="cassette vidéo" src="images/videotape.gif"><b>=</b> <img style="width: 147px; height: 149px;" alt="Disquette" src="images/diskette.jpg"></p>
        On peut :
        <ul>
          <li>y <strong>écrire</strong> des informations</li>
          <li>y <strong>lire</strong> des informations.</li>
        </ul>
      <p><img class="imagedroite" style="width: 200px; height: 196px;" alt="Pas d'aimant svp" src="images/nomagnet.png">Comme une cassette audio ou vidéo, on peut y écrire autant de fois qu'on le veut, mais si on enregistre sur des informations qui y étaient présentes, celles-ci disparaissent !</p>
      <p>Les informations sont stockées par magnétisation du support: disque, disquette ou bande magnétisable de cassette. Si l'on passe un aimant suffisamment puissant sur un support magnétique, l'information qui y est stockée risque de dispara&icirc;tre.</p>
      <h3>Expérience</h3>
      <ul>
        <li>Procure-toi une cassette audio <strong>à laquelle tu ne tiens pas</strong>. Ecoute quelques secondes du début de la bande enregistrée.</li>
        <li>Sors ensuite la cassette du lecteur et approche-la d'un aimant très puissant.</li>
        <li>Finalement, réécoute le début de la bande enregistrée.</li>
        <li>Conclus.</li>
      </ul>
	  <div class="attention"><p>A ton avis, pourquoi est-il toujours recommandé de <strong>ne pas déposer une carte bancaire</strong> sur l'appareil qui permet désactiver les antivols, dans les magasins?</p></div>
      </div>
      <form action="" class="travail">
        Du point de vue magnétique, la différence entre une cassette vidéo et une disquette, est que:<br>
        <input class="qcm" type="radio">Une cassette vidéo peut être effacée cependant qu'une disquette ne le peut pas<br />
        <p class="faux">Non.<br />Une cassette vidéo peut parfaitement être effacée.</p>
        <input class="qcm" type="radio">Une disquette peut être effacée cependant qu'une cassette vidéo ne le peut pas<br />
        <p class="faux">Faux.<br />Une disquette peut être effacée.</p>
        <input class="qcm" type="radio">Il n'y a pas de différence entre une cassette vidéo et une disquette, de ce point de vue<br />
        <p class="vrai">Tout à fait exact.<br />Il n'y a pas de différence entre les deux supports, du point de vue magnétique.</p>
      </form>
	  <form action="" class="travail">
	  Si l'on coupe le courant d'un ordinateur, que devient la magnétisation du disque dur?<br />
	  <input class="qcm" type="radio">Elle disparaît définitivement et tout le contenu du disque dur est perdu<br />
	  <p class="faux">Réponse fausse<br />La magnétisation du matériaux reste, même sans alimentation électrique.</p>
	  <input class="qcm" type="radio">Elle reste et toutes les informations sont conservées jusqu'au moment où l'on remet le courant<br />
	  <p class="vrai">Réponse correcte.<br />Même sans alimentation électrique, la magnétisation du support est conservée.</p>
	  <input class="qcm" type="radio">Elle se conserve pendant un maximum de quelques heures. Il ne faut pas oublier de remettre le courant.<br />
	  <p class="faux">Réponse fausse.<br />Le temps qui passe n'a pas d'influence.</p>
	  </form>
      <p>Quand tu as retenu les caractéristiques principales des supports magnétiques, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
    </div><?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
