<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>L'unité centrale et les périphériques</title>
  <style media="all" type="text/css">
.diapo {
  border: 1px solid black;
  margin: 5px;
  padding: 10px;
  text-align: center;
  float: left;
  }
  #portraits ul {
  display: inline;
  list-style-type: none;
  }
  #portraits li {
  clear: right;
  }
  </style>
</head>
<body>
  <div id="conteneur">
    <?php 
	require ("./top.inc.php"); 
    require ("../../dewplayer.inc.php");
	?>
    <div id="texte">
      <h2>Représentation de l'ordinateur</h2>
      <fieldset class="info">
		<legend>Informations</legend>
        <p><?php dewplay("11a.mp3");?> On va te demander de réaliser une représentation schématique de l'ordinateur devant lequel tu te trouves actuellement. Pour cela, tu vas examiner attentivement le matériel avant de dessiner.</p>
		<p>Avec l'autorisation du professeur, tu peux, si c'est nécessaire, te déplacer de ton siège pour voir toutes les faces de l'ordinateur.</p>
		<p>Examine éventuellement un ordinateur voisin du tien.</p>
      </fieldset>

      <h3>Consignes</h3>
      
      <fieldset class="parecrit">
		<legend>Variante 1: dessin réalisé à la main</legend>
		<div style="float:right">
        <?php dewplay("11b.mp3");?>
		</div>
        <ol>
          <li>Sur une page de ton cahier, dessine, sans trop de détails, un ordinateur avec <strong>tous les appareils</strong> qui le composent.</li>
          <li>Indique <strong>les connexions</strong> entre les différents appareils.</li>
          <li>Ajoute <strong>une légende</strong> à ce schéma.</li>
        </ol>
      </fieldset>

	  <fieldset class="info">
		<legend>Variante 2: dessin réalisé à l'aide du logiciel <strong>LibreOffice Draw</strong></legend>
		<p><strong>LibreOffice Draw</strong> est un logiciel libre et gratuit. Il fait partie de la suite <strong>LibreOffice</strong> que l'on peut télécharger sans rien devoir payer et tout à fait légalement sur le site web <a href="http://libreoffice.org" target="_blank">http://libreoffice.org</a>.</p>
		<p>Ton professeur l'a peut-être déjà installé sur l'ordinateur sur lequel tu travailles. En cas de doute, demande-lui.</p>
	  </fieldset>  
	  <fieldset class="travail">
		<legend>Démarrer Draw</legend>
		<p><img src="images/draw.png" class="imagedroite" style="width: 399px;" alt="LibreOffice Draw">Pour démarrer <strong>LibreOffice Draw</strong> sous Ubuntu (interface Unity)</p>
		<ol>
		  <li>Clique sur l'icône du tableau de bord <img src="images/tableauBord.png" alt="TB">, en haut et à gauche de l'écran</li>
		  <li>Dans la ligne de texte qui est apparue en haut de l'écran, écris "<strong>LibreOffice Draw</strong>" ou simplement "<strong>Draw</strong>"</li>
		  <li>Clique sur l'icône de <strong>LibreOffice Draw</strong> qui apparaît</li>
		</ol>
		<p>Si tu travailles sous un autre système d'exploitation (Windows, Mac,...), demande au professeur comment démarrer <strong>LibreOffice Draw</strong></p>
	  </fieldset>
	  
      <fieldset class="travail">
		<legend>Première représentation de l'ordinateur</legend>
         Si tu maîtrises le "copier/coller".<br>
        <ul>
          <li>Ouvre le logiciel <strong>LibreOffice Draw</strong></li>
          <li>Par "copier/coller" envoie les images présentées ci-dessous vers la page de dessin.</li>
          <li>Ajoute <strong>des lignes droites</strong> entre les différents éléments afin de représenter les connexions.</li>
        </ul>
        <div style="text-align: center;">
          <img src="images/ligne.png" style="width: 285px; height: 113px;" alt="Outil Lignes"><br>
          <ul>
            <li>Enregistre régulièrement le dessin dans ton répertoire personnel sous le nom <strong class="nomfichier">peripherique1.odg</strong>.</li>
          </ul>
        </div>
        <p>Il faudra probablement déplacer les images pour les disposer au mieux sur la page.</p>
      </fieldset>
      <p>Sur ton dessin, on trouvera au moins les <strong>cinq premiers éléments</strong> de la série suivante:</p>
      <div id="portraits">
        <ul>
          <li class="diapo">l'unité centrale<br>
          <img src="images/console.png" style="width: 200px; height: 317px;" alt="l'unité centrale"></li>
          <li class="diapo">l'écran<br>
          <img src="images/ecran.png" style="width: 216px; height: 199px;" alt="Écran"></li>
          <li class="diapo">le clavier<br>
          <img src="images/clavier.png" style="width: 297px; height: 133px;" alt="Clavier"></li>
          <li style="clear: both;" class="diapo">la souris<br>
          <img src="images/souris.png" style="width: 64px; height: 64px;" alt="Souris"></li>
          <li class="diapo">l'imprimante<br>
          <img src="images/imprimante.png" style="width: 150px; height: 150px;" alt="Imprimante"></li>
          <li class="diapo">&nbsp;les haut-parleurs<br>
          <img src="images/hpg.png" style="width: 64px; height: 64px;" alt="Haut-parleurs"><img src="images/hpd.png" style=
          "width: 64px; height: 64px;" alt="Haut-parleur"></li>
          <li class="diapo">le scanner<br>
          <img src="images/scanner.png" style="width: 128px; height: 128px;" alt="scanner"></li>
          <li style="clear: both;" class="diapo">le modem<br>
          <img src="images/modem.png" style="width: 128px; height: 128px;" alt="modem"></li>
        </ul>
      </div>
      <p style="clear: both;">Quand ton dessin est terminé, montre ton travail au professeur. Imprime-le si le professeur le demande, puis passe à la page suivante.</p>
      <?php include ("../../suivant.inc.php");?>
    </div>
    <?php include ("../../pied.inc.php");?>
<script type="text/javascript">
	$(document).ready(function(){

	$(".qcm").click(function(){
	$(this).next().show(300);
	})
	
})
  </script>
  </div>
</body>
</html>
