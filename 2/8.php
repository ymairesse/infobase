<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
  <style type="text/css">
  #tableau td {
        text-align: center;
    }
  </style>
  <title>L'unité centrale de l'ordinateur</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>La mémoire centrale&nbsp;: mesures de capacité</h2>
      <div class="info"><p>La capacité de la mémoire des ordinateurs peut se mesurer en nombre d'octets disponibles. On l'exprime souvent en multiples de l'octet.</p>
      <table style="width: 100%;" border="1" id="tableau">
        <tbody>
          <tr>
            <td><strong>Unité</strong></td>
            <td><strong>Symbole</strong></td>
            <td><strong>Valeur</strong></td>
            <td><strong>Valeur en français</strong></td>
          </tr>
          <tr>
            <td>1 Kilo-octet =<br>
            1 Kilobyte</td>
            <td>(Ko ou KB)<sup>1</sup></td>
            <td>2<sup>10</sup> octets = 1024 octets</td>
            <td>(± 1 millier d'octets)</td>
          </tr>
          <tr>
            <td>1 Méga-octet =<br>
            1 Mégabyte</td>
            <td>(Mo ou MB)<sup>2</sup></td>
            <td>2<sup>20</sup> octets = 1024 Kilo-octets</td>
            <td>=(± 1 million d'octets)</td>
          </tr>
          <tr>
            <td width="25%">1 Giga-octet =<br>
            1 Gigabyte</td>
            <td>(Go ou GB)<sup>3</sup></td>
            <td>2<sup>30</sup> octets = 1024 Méga-octets</td>
            <td>=(± 1 milliard d'octets)</td>
          </tr>
          <tr>
            <td width="25%">1 Téra-octet =<br>
            1 Terabyte</td>
            <td>(To ou TB)<sup>4</sup></td>
            <td>2<sup>40</sup> octets = 1024 Giga-octets</td>
            <td>= (± 1000 milliards d'octets)</td>
          </tr>
          <tr>
            <td width="25%">1 Péta-octet =<br>
            1 Petabyte</td>
            <td>(Po ou PB)<sup>5</sup></td>
            <td>2<sup>50</sup> octets = 1024 Tera-octets</td>
            <td>= (± 1 million de milliards d'octets)</td>
          </tr>
        </tbody>
      </table>

      <p>Il faut prononcer Kilo-octet ou Kilobyte<sup>1</sup>, Méga-octet ou Mégabyte<sup>2</sup>, Giga-octet ou Gigabyte<sup>3</sup>, Téra-octet ou Térabyte<sup>4</sup>, Péta-octet ou Pétabyte<sup>5</sup>.</p>
      </div>
      
      <p class="questions">&nbsp;Combien de Ko dans un mot? Combien de mots dans un Ko?</p>
      <p class="reponses">Amusant, votre jeu de mots. Mais souvenez-vous que Ko se prononce "Kilo-octet", Mo se prononce "Méga-octet" et Go se prononce "Giga-octet".</p>
      
      <fieldset class="info">
        <legend>Retour vers le passé</legend>
      <p><img class="imagedroite" style="width: 280px; height: 206px;" alt="ZX81" src="images/zx81.jpg"> Au début des années 1980, <a href="http://fr.wikipedia.org/wiki/ZX81" target="_blank">de petits ordinateurs vendus au grand public</a> étaient munis d'une mémoire de 1&nbsp;Ko !</p>
      <p>Au milieu des années 80, <a href="http://fr.wikipedia.org/wiki/Commodore_64" target="_blank">un des ordinateurs les plus populaires</a> était doté de 64&nbsp;Ko de mémoire !</p>
      <p>Les ordinateurs du type PC ont au minimum une mémoire de 640 Ko (pour les très anciens de la fin des années 80). La capacité habituelle est de 2048 Mo à 4096 Mo (en 2013).</p>
      <p><span class="micro">Source de l'illustration: <a href="http://fr.wikipedia.org/wiki/ZX81" target="_blank">http://fr.wikipedia.org/wiki/ZX81</a></span></p>
      </fieldset>
      
      <fieldset class="info">
        <legend>Intéressant</legend>
        <p>En octobre 2008, le CERN (<a href="http://public.web.cern.ch/public/Welcome-fr.html" target="_blank">Centre Européen pour la Recherche Nucléaire</a>) démarrait une machine gigantesque destinée à réaliser des expériences sur des particules infimes de la matière: le LHC.</p>
        <p>Le CERN prévoit que la machine produira <a href="http://public.web.cern.ch/Public/fr/LHC/Computing-fr.html" target="_blank">15 millions de Giga-octets</a> de données par an. Si ces données étaient enregistrées sur des CD, il en faudrait une pile de 20 km de hauteur.</p>
      </fieldset>
      
      <form action="javascript:void(0)" class="travail">
        D'après le CERN, quelle quantité de données seront fournies par l'expérience dans le LHC chaque année?<br>
        <input class="qcm" type="radio" name="qcm">15 Méga-octets<br />
        <p class="faux">Réponse fausse.<br />Utilise éventuellement un abaque pour trouver la bonne réponse.</p>
        <input class="qcm" type= "radio" name="qcm">15 Giga-octets<br />
        <p class="faux">Faux.<br />On évoque 15 millions de giga-octets de données et non 15 Giga-octets.</p>
        <input class="qcm" type="radio" name="qcm">15 Téra-octets<br />
        <p class="faux">Faux.<br />15 Téra-octets ne contiennent pas 15 millions de Giga-octets</p>
        <input class="qcm" type="radio" name="qcm">15 Péta-octets<br />
        <p class="vrai">Réponse correcte<br />15 millions de Giga-octets représentent bien 15 mille Téra-octets soit 15 Péta-octets</p>
      </form>
      
      <form action="javascript:void(0)" class="travail">
        On te demande de transcrire à la main tous les nombres issus des expériences du LHC chaque année. Imaginons que tu sois capable d'écrire un nombre chaque seconde. Combien de temps te faudra-t-il pour transcrire 15 000 millions de Giga-octets?<br>
        <input class="qcm" type="radio" name="qcm">20 secondes<br />
        <p class="faux">Réponse fausse</p>
        <input class="qcm" type="radio" name="qcm">20 minutes<br />
        <p class="faux">Réponse fausse</p>
        <input class="qcm" type="radio" name="qcm">20 ans<br />
        <p class="faux">Réponse fausse</p>
        <input class="qcm" type="radio" name="qcm">475 millions d'années<br />
        <p class="vrai">Réponse correcte.<br />Il suffit de diviser 15 000 millions de milliards par le nombre de secondes dans une année (86400 s/jour x 365 jours).</p>
      </form>
      <div class="info">
      <h4>Des KB, des Kb, des kB et des kb</h4>
      <p>Dans les unités de mesures scientifiques, on utilise le préfixe "&nbsp;k&nbsp;" pour représenter des milliers. Par exemple, on écrit "&nbsp;la circonférence terrestre mesure 40.000&nbsp;km&nbsp;".</p>
      <div class="encadre">
        Le préfixe "k" (minuscule) signifie bien qu'il faut multiplier l'unité de mesure par 1000.
      </div>
      <p>En informatique, et pour des raisons techniques que nous n'expliquerons pas ici, un <strong>kilo-octet</strong> est formé de <strong>1024 octets</strong> (et non de 1000).<br> 
      Pour distinguer, on utilisera le préfixe "&nbsp;K&nbsp;" (majuscule, donc) pour représenter cette multiplication de l'unité. On écrit, par exemple: "&nbsp;la mémoire de ce vieil ordinateur a une capacité de 256 Ko&nbsp;".</p>
      <ul>
        <li>k (minuscule) signifie x1000</li>
        <li>K (majuscule) signifie x1024</li>
      </ul>
      <div class="encadre">
        Le préfixe "K" (majuscule) signifie bien qu'il faut multiplier l'unité de mesure par 1024.
      </div>
      <p>D'autre part, il faut bien veiller à ne pas confondre le "bit" et le "byte" (formé de 8 bits). On a donc convenu de deux
      symboles différents pour ces deux unités de capacité de mémoire.</p>
      <ul>
        <li>un bit se représente par la lettre "b" (minuscule, donc)</li>
        <li>un byte se représente par la lettre "B" (majuscule, donc)</li>
      </ul>
      </div>
      
      <form class="travail" action="javascript:void(0)">
        Quelle est la plus grande quantité de mémoire (sois bien attentif à la façon dont les réponses possibles sont écrites)&nbsp;?<br>
        <input name="mem1" class="qcm" type="radio"> 256 KB<br />
        <p class="vrai">Tu as raison.<br />256 KB = 256 x 1024 octets = 262.144 octets, soit 2.097.152 bits.</p>
        <input name="mem1" class="qcm" type="radio"> 256 Kb<br />
        <p class="faux">Certainement pas.<br />Ceci ne fait que 256 x 1024 bits = 262.144 bits.<br />Cette proposition est la plus petite des trois.</p>
        <input name="mem1" class="qcm" type="radio"> 256 kB<br />
        <p class="faux">Non.<br />Ceci ne fait que 256 x 1000 octets = soit 2.048.000 bits.<br />Une autre proposition est supérieure.</p>
      </form>
      
      <form class="travail" action="javascript:void(0)">
        Quelle est la plus grande quantité de mémoire&nbsp;?<br>
        <input name="mem" class="qcm" type="radio"> un octet<br />
        <p class="faux">Réponse fausse</p>
        <input name="mem" class="qcm" type="radio"> un byte<br />
        <p class="faux">Réponse fausse.</p>
        <input name="mem" class="qcm" type="radio"> 8 bits<br />
        <p class="faux">Réponse fausse.</p>
        <input name="mem" class="qcm" type="radio"> Aucune des autres réponses ne convient<br />
        <p class="vrai">Effectivement.<br />Un octet = un byte = 8 bits.</p>
      </form>
      <form action="javascript:void(0)" class="travail">
        Quelle est l'affirmation correcte&nbsp;?<br>
        <input name="affirmation" class="qcm" type="radio"> 1 GB&gt; 1 KB<br />
        <p class="vrai">Exact.<br />1GB = 1 milliard de bytes et 1 KB = mille bytes.</p>
        <input name="affirmation" class="qcm" type="radio"> 1 MB&gt; 1 GB<br />
        <p class="faux">Faux.<br />Revois la signification de chacune des unités citées.</p>
        <input name="affirmation" class="qcm" type="radio"> 1 KB = 1 kB<br />
        <p class="faux">Faux.<br />Il existe une petite différence entre ces notations. Laquelle?</p>
      </form>
      
      <p>Bravo! Tu as fini cette leçon. Merci de m'aider en répondant aux questions de la page
      suivante.<?php include ("../../suivant.inc.php");?></p>
    </div>
    <?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
