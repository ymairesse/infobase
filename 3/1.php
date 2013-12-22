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
  <title>Les p�riph�riques de stockage</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
	  <h2>Stockage magn�tique</h2>
	  <p><img src="images/ilots.png" width="300px" class="imagedroite">Actuellement, les p�riph�riques de stockage les plus courants utilisent les propri�t�s magn�tiques de certains mat�riaux pour "retenir" les informations.</p>
	  <p>Tout se passe comme si, dans le <a class="bulle" href="javascript:void(0)">mat�riaux<span>le mat�riaux: la mati�re dont est fait le disque</span></a>, on disposait une s�rie de petits aimants orient�s:</p>
	  <ul>
	  <li>P�le <strong>Nord</strong> vers le haut, p�le <strong>Sud</strong> vers le bas ou</li>
	  <li>P�le <strong>Sud</strong> vers le haut et p�le <strong>Nord</strong> vers le bas</li>
	  </ul>
	  <p>Les disques durs sont des p�riph�riques d'Entr�e/Sortie qui permettent de stocker des informations tr�s longtemps. Si l'on �teint l'ordinateur: m�me sans �lectricit�, le magn�tisme se conserve.</p>
      <h2>Un disque d'ordinateur est semblable � une cassette audio ou vid�o</h2>
      <div class="info"><p>Dans tous les cas, il s'agit d'un <strong>support magn�tique</strong> tout � fait comparable � une bande magn�tique d'une cassette audio ou vid�o&nbsp;; il se pr�sente ici sous la forme d'un disque.</p>
      <p style="text-align: center;"><img style="width: 227px; height: 138px;" alt="cassette vid�o" src="images/videotape.gif"><b>=</b> <img style="width: 147px; height: 149px;" alt="Disquette" src="images/diskette.jpg"></p>
        On peut :
        <ul>
          <li>y <strong>�crire</strong> des informations</li>
          <li>y <strong>lire</strong> des informations.</li>
        </ul>
      <p><img class="imagedroite" style="width: 200px; height: 196px;" alt="Pas d'aimant svp" src="images/nomagnet.png">Comme une cassette audio ou vid�o, on peut y �crire autant de fois qu'on le veut, mais si on enregistre sur des informations qui y �taient pr�sentes, celles-ci disparaissent !</p>
      <p>Les informations sont stock�es par magn�tisation du support: disque, disquette ou bande magn�tisable de cassette. Si l'on passe un aimant suffisamment puissant sur un support magn�tique, l'information qui y est stock�e risque de dispara&icirc;tre.</p>
      <h3>Exp�rience</h3>
      <ul>
        <li>Procure-toi une cassette audio <strong>� laquelle tu ne tiens pas</strong>. Ecoute quelques secondes du d�but de la bande enregistr�e.</li>
        <li>Sors ensuite la cassette du lecteur et approche-la d'un aimant tr�s puissant.</li>
        <li>Finalement, r��coute le d�but de la bande enregistr�e.</li>
        <li>Conclus.</li>
      </ul>
	  <div class="attention"><p>A ton avis, pourquoi est-il toujours recommand� de <strong>ne pas d�poser une carte bancaire</strong> sur l'appareil qui permet d�sactiver les antivols, dans les magasins?</p></div>
      </div>
      <form action="" class="travail">
        Du point de vue magn�tique, la diff�rence entre une cassette vid�o et une disquette, est que:<br>
        <input class="qcm" type="radio">Une cassette vid�o peut �tre effac�e cependant qu'une disquette ne le peut pas<br />
        <p class="faux">Non.<br />Une cassette vid�o peut parfaitement �tre effac�e.</p>
        <input class="qcm" type="radio">Une disquette peut �tre effac�e cependant qu'une cassette vid�o ne le peut pas<br />
        <p class="faux">Faux.<br />Une disquette peut �tre effac�e.</p>
        <input class="qcm" type="radio">Il n'y a pas de diff�rence entre une cassette vid�o et une disquette, de ce point de vue<br />
        <p class="vrai">Tout � fait exact.<br />Il n'y a pas de diff�rence entre les deux supports, du point de vue magn�tique.</p>
      </form>
	  <form action="" class="travail">
	  Si l'on coupe le courant d'un ordinateur, que devient la magn�tisation du disque dur?<br />
	  <input class="qcm" type="radio">Elle dispara�t d�finitivement et tout le contenu du disque dur est perdu<br />
	  <p class="faux">R�ponse fausse<br />La magn�tisation du mat�riaux reste, m�me sans alimentation �lectrique.</p>
	  <input class="qcm" type="radio">Elle reste et toutes les informations sont conserv�es jusqu'au moment o� l'on remet le courant<br />
	  <p class="vrai">R�ponse correcte.<br />M�me sans alimentation �lectrique, la magn�tisation du support est conserv�e.</p>
	  <input class="qcm" type="radio">Elle se conserve pendant un maximum de quelques heures. Il ne faut pas oublier de remettre le courant.<br />
	  <p class="faux">R�ponse fausse.<br />Le temps qui passe n'a pas d'influence.</p>
	  </form>
      <p>Quand tu as retenu les caract�ristiques principales des supports magn�tiques, passe � la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
    </div><?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
