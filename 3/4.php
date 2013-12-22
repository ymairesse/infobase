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
    <title>Les p�riph�riques de stockage</title>
  </head>
  <body>
    <div id="conteneur">
      <?php include ("./top.inc.php");?>
      <div id="texte">
        <fieldset class="info">
          <legend>Des disques souples et des disques durs</legend>
          <p>Il y a quelques ann�es encore, on ne disposait que de disquettes pour transporter des informations d'un ordinateur � un autre. Ces disquettes �taient assez sensibles � la poussi�re et tr�s fragiles. Leur capacit� �tait tr�s faible (un peu plus de 1 Mo). </p>
          <p><img class="imagedroite" src="images/disket.jpg" alt="Disquette 3&quot;1/2 diss�qu�e" height="225" width="300">Le support magn�tique lui-m�me (tr�s fragile) �tait enferm� dans une enveloppe en plastique ou en carton. Ce support �tait souple; il �tait possible de le plier si on le sortait de son enveloppe plastique rigide (� ne pas faire!!).</p>
          
          <p>Une disquette souple est constitu�e d'une <strong>fine lamelle ronde en plastique</strong> sur laquelle on a d�pos� un <strong>support magn�tisable</strong>.</p>
          <p>Ce disque est prot�g� par un <strong>bo�tier rigide</strong> en plastique ou en carton. La dimension de la disquette est de 3"� -il faut lire "�3 pouces et demi�" ou 5"1/4.</p>
        </fieldset>
        
    <fieldset class="info">
      <legend>Disque dur "diss�qu�"</legend>
        <p><img style="width: 507px; height: 297px;" alt="Disque dur" class="imagedroite" src="images/hd.jpg">Un disque dur est constitu� d'un ou <strong>plusieurs disques m�talliques rigides</strong> sur lesquels on a d�pos� un support magn�tisable.</p>
        <p>Les disques m�talliques sont log�s dans un bo�tier dont ils ne sortent jamais. Le disque dur est mis en place <strong>d�finitivement</strong> dans l'ordinateur.</p>
    </fieldset>
        
        <p class="attention encadre">L'illustration ci-contre pr�sente un lecteur de disque dur d�mont�.<br>
          En pratique, on ne d�monte jamais un tel lecteur. La moindre poussi�re introduite, �cras�e par la t�te de lecture-�criture, pourrait y provoquer des d�g�ts.</p>
        
    <fieldset class="info">
      <legend>Fonctionnement du disque dur</legend>
        <p>On y distingue deux disques m�talliques superpos�s et la t�te de <strong>lecture-�criture</strong> qui se d�place gr�ce � son bras mobile. Celle-ci "�vole�" � une tr�s faible distance des disques. Lors d'un choc sur la console, la t�te de lecture-�criture peut entrer en contact avec le disque. Ce contact peut l'endommager.</p>
    </fieldset>
        <form class="qcu" action="">
          Le disque dur d'un ordinateur devrait �tre d�mont�, ouvert et d�poussi�r� � intervalles r�guliers, id�alement:<br />
          <input class="qcm" type="radio">chaque mois<br />
          <p class="faux">FAUX!<br />Le bo�tier du disque dur ne doit JAMAIS �tre ouvert, sous peine d'y introduire<br />des poussi�res microscopiques qui pourraient y provoquer des d�g�ts.</p>
          <input class="qcm" type="radio">chaque ann�e<br />
          <p class="faux">FAUX!<br />Le bo�tier du disque dur ne doit JAMAIS �tre ouvert, sous peine d'y introduire<br />des poussi�res microscopiques qui pourraient y provoquer des d�g�ts.</p>
          <input class="qcm" type="radio">jamais<br />
          <p class="vrai">C'est la bonne r�ponse.<br />Un disque dur ne doit jamais ouvert.</p>
        </form>
        
        <form method="post" class="qcu" action="">
          Il faut �viter de d�placer ou de bousculer un ordinateur en marche parce que:<br />
          <input class="qcm" type="radio">La t�te de lecture-�criture du disque dur pourrait heurter un plateau du disque dur et  l'endommager<br />
          <p class="vrai">Effectivement.<br />Un l�ger contact entre la t�te de lecture-�criture et un plateau du disque dur peut l'endommager et le rendre inutilisable.</p>
          <input class="qcm" type="radio">La t�te de lecture-�criture pourrait voler au-dessus d'un plateau du disque dur<br />
          <p class="faux">Non.<br />La t�te de lecture-�criture DOIT voler � tr�s faible distance du plateau du disque dur sur lequel elle travaille.</p>
          <input class="qcm" type="radio">C'est tout � fait faux: il n'y a aucun inconv�nient � bousculer un ordinateur en marche<br />
          <p class="faux">FAUX!<br />Si tu crois cela, il faut ABSOLUMENT apprendre � �tre plus soigneux.<br />Bousculer un ordinateur peut provoquer une panne fatale.</p>
        </form>
        
        <div class="interro">
          <p>Dans un ordinateur dont on a ouvert la console, peux-tu rep�rer le disque dur et ses connexions � l'unit� centrale�?</p>
        </div>
        <form action="" class="qcu">
        <img src="images/alim.jpg" alt="alimentation �lectrique du disque dur" align="right" height="100" style="margin: 0 1em" width="150">Deux connexions relient le disque dur au reste de l'ordinateur: un c�ble
          d'alimentation �lectrique � 4 fils (voir l'illustration ci-contre) et <u>un autre</u> c�ble plat qui sert au
          transfert des donn�es. Ce deuxi�me c�ble compte:<br>
        <input class="qcm" type="radio">10 fils<br />
          <p class="faux">Non.<br />As-tu bien rep�r� le bon c�ble?</p>
          <input class="qcm" type="radio">20 fils<br />
          <p class="faux">Non.<br />Recompte.</p>
          <input class="qcm" type="radio">40 fils<br />
          <p class="vrai">Exact.<br />Ce c�ble compte 40 fils.</p>
        </form>
        <p>
          Quand tu as rep�r� le support magn�tique dans la disquette et la localisation du disque dur dans la console,
          passe � la page suivante.<?php include ("../../suivant.inc.php"); ?>
        </p>
      </div>
      <?php include ("../../pied.inc.php"); ?>
    </div>
  </body>
</html>
