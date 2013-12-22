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
      <?php include ("./top.inc.php");?>
      <div id="texte">
        <fieldset class="info">
          <legend>Des disques souples et des disques durs</legend>
          <p>Il y a quelques années encore, on ne disposait que de disquettes pour transporter des informations d'un ordinateur à un autre. Ces disquettes étaient assez sensibles à la poussière et très fragiles. Leur capacité était très faible (un peu plus de 1 Mo). </p>
          <p><img class="imagedroite" src="images/disket.jpg" alt="Disquette 3&quot;1/2 disséquée" height="225" width="300">Le support magnétique lui-même (très fragile) était enfermé dans une enveloppe en plastique ou en carton. Ce support était souple; il était possible de le plier si on le sortait de son enveloppe plastique rigide (à ne pas faire!!).</p>
          
          <p>Une disquette souple est constituée d'une <strong>fine lamelle ronde en plastique</strong> sur laquelle on a déposé un <strong>support magnétisable</strong>.</p>
          <p>Ce disque est protégé par un <strong>boîtier rigide</strong> en plastique ou en carton. La dimension de la disquette est de 3"½ -il faut lire " 3 pouces et demi " ou 5"1/4.</p>
        </fieldset>
        
    <fieldset class="info">
      <legend>Disque dur "disséqué"</legend>
        <p><img style="width: 507px; height: 297px;" alt="Disque dur" class="imagedroite" src="images/hd.jpg">Un disque dur est constitué d'un ou <strong>plusieurs disques métalliques rigides</strong> sur lesquels on a déposé un support magnétisable.</p>
        <p>Les disques métalliques sont logés dans un boîtier dont ils ne sortent jamais. Le disque dur est mis en place <strong>définitivement</strong> dans l'ordinateur.</p>
    </fieldset>
        
        <p class="attention encadre">L'illustration ci-contre présente un lecteur de disque dur démonté.<br>
          En pratique, on ne démonte jamais un tel lecteur. La moindre poussière introduite, écrasée par la tête de lecture-écriture, pourrait y provoquer des dégâts.</p>
        
    <fieldset class="info">
      <legend>Fonctionnement du disque dur</legend>
        <p>On y distingue deux disques métalliques superposés et la tête de <strong>lecture-écriture</strong> qui se déplace grâce à son bras mobile. Celle-ci " vole " à une très faible distance des disques. Lors d'un choc sur la console, la tête de lecture-écriture peut entrer en contact avec le disque. Ce contact peut l'endommager.</p>
    </fieldset>
        <form class="qcu" action="">
          Le disque dur d'un ordinateur devrait être démonté, ouvert et dépoussiéré à intervalles réguliers, idéalement:<br />
          <input class="qcm" type="radio">chaque mois<br />
          <p class="faux">FAUX!<br />Le boîtier du disque dur ne doit JAMAIS être ouvert, sous peine d'y introduire<br />des poussières microscopiques qui pourraient y provoquer des dégâts.</p>
          <input class="qcm" type="radio">chaque année<br />
          <p class="faux">FAUX!<br />Le boîtier du disque dur ne doit JAMAIS être ouvert, sous peine d'y introduire<br />des poussières microscopiques qui pourraient y provoquer des dégâts.</p>
          <input class="qcm" type="radio">jamais<br />
          <p class="vrai">C'est la bonne réponse.<br />Un disque dur ne doit jamais ouvert.</p>
        </form>
        
        <form method="post" class="qcu" action="">
          Il faut éviter de déplacer ou de bousculer un ordinateur en marche parce que:<br />
          <input class="qcm" type="radio">La tête de lecture-écriture du disque dur pourrait heurter un plateau du disque dur et  l'endommager<br />
          <p class="vrai">Effectivement.<br />Un léger contact entre la tête de lecture-écriture et un plateau du disque dur peut l'endommager et le rendre inutilisable.</p>
          <input class="qcm" type="radio">La tête de lecture-écriture pourrait voler au-dessus d'un plateau du disque dur<br />
          <p class="faux">Non.<br />La tête de lecture-écriture DOIT voler à très faible distance du plateau du disque dur sur lequel elle travaille.</p>
          <input class="qcm" type="radio">C'est tout à fait faux: il n'y a aucun inconvénient à bousculer un ordinateur en marche<br />
          <p class="faux">FAUX!<br />Si tu crois cela, il faut ABSOLUMENT apprendre à être plus soigneux.<br />Bousculer un ordinateur peut provoquer une panne fatale.</p>
        </form>
        
        <div class="interro">
          <p>Dans un ordinateur dont on a ouvert la console, peux-tu repérer le disque dur et ses connexions à l'unité centrale ?</p>
        </div>
        <form action="" class="qcu">
        <img src="images/alim.jpg" alt="alimentation électrique du disque dur" align="right" height="100" style="margin: 0 1em" width="150">Deux connexions relient le disque dur au reste de l'ordinateur: un câble
          d'alimentation électrique à 4 fils (voir l'illustration ci-contre) et <u>un autre</u> câble plat qui sert au
          transfert des données. Ce deuxième câble compte:<br>
        <input class="qcm" type="radio">10 fils<br />
          <p class="faux">Non.<br />As-tu bien repéré le bon câble?</p>
          <input class="qcm" type="radio">20 fils<br />
          <p class="faux">Non.<br />Recompte.</p>
          <input class="qcm" type="radio">40 fils<br />
          <p class="vrai">Exact.<br />Ce câble compte 40 fils.</p>
        </form>
        <p>
          Quand tu as repéré le support magnétique dans la disquette et la localisation du disque dur dans la console,
          passe à la page suivante.<?php include ("../../suivant.inc.php"); ?>
        </p>
      </div>
      <?php include ("../../pied.inc.php"); ?>
    </div>
  </body>
</html>
