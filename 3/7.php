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
      <h2>Principe du CD-ROM</h2>
      <div class="info"><p>Le principe du CD-ROM est différent de celui du disque dur.</p>
      <p><img style="width: 200px; height: 212px;" alt="Piste en spirale" src="images/cd-spiral.gif" class="imagegauche">Rappelons que sur un disque magnétique (disque dur ou disquette), les pistes sont <strong>concentriques</strong>, comme les couloirs d'une piste d'athlétisme.</p>
      <p>Dans le cas du CD-ROM, les informations ne sont pas stockées de manière magnétique. Le <strong>CD est gravé</strong>. Lors de sa fabrication, on y réalise une série de trous suivant une piste tracée <strong>en spirale</strong>.</p>
      <p>La structure d'un CD-ROM est tout à fait semblable à celle d'un CD audio: 12 cm de diamètre et 1,2 mm d'épaisseur.</p>
      <p style="clear:both"><img style="width: 404px; height: 181px;" class="imagedroite" alt="Structure d'un CD-ROM" src="images/cdcoupe.gif">Le CD est fabriqué en matière plastique. Celle-ci est recouverte d'une fine pellicule d'aluminium sur l'une des faces (voilà pourquoi le CD est brillant). Cette feuille d'aluminium supporte les informations déposées sur le CD.</p>
      <p>La piste enregistrée est constitutée d'une série d'alvéoles d'une largeur de 0,5&nbsp;millième de millimètre, d'une profondeur de 0,83&nbsp;millième de millimètre et espacées de&nbsp;1,6 millième de millimètre.</p>
	  <p>Sur l'illustration ci-dessous, on a représenté un petit morceau de CD sur lequel la piste enregistrée apparaît sur quatre tours. Les alvéoles sont parfaitement visibles.</p>
      <p><img style="width: 477px; height: 123px;" alt="Les alvéoles dans un CD-ROM" src="images/gravure.gif" class="imagegauche">Comme les alvéoles sont très petites, on pourra en graver beaucoup, sur un CD. La capacité des disques CD est très grande: jusqu'à <strong>783 Mo</strong>.</p>
      <p>Dans un ordinateur dont on a ouvert la console, repère le lecteur de CD-ROM et ses connexions à l'unité centrale.</p>
    </div>
      <form action="" class="travail" style="clear:both">
        Une différence entre un disque dur et un CD est que:<br />
        <input class="qcm" type="radio">sur un CD, les informations sont gravées et sur un disque dur, les informations sont codées sous forme de zones magnétisées ou non magnétisées<br />
        <p class="vrai">Tout à fait exact.</p>
        <input class="qcm" type="radio"> sur un disque dur, les informations sont gravées et sur un CD, les informations sont codées sous forme de zones magnétisées ou non magnétisées<br />
        <p class="faux">C'est faux.<br />Je te conseille de relire ce qui précède dans la page.</p>
        <input class="qcm" type="radio">il n'y a pas de différence entre un CD et un disque dur<br />
        <p class="faux">Réponse fausse<br />Relis plus attentivement les informations de cette page et de la page précédente</p>
      </form>
      <form action="" class="travail">
        Une différence entre un disque dur et un CD est que:<br />
        <input class="qcm" type="radio">sur un CD, les pistes sont disposées de manière concentrique alors que sur un disque dur, les pistes sont disposées en spirale<br />
        <p class="faux">Faux.<br />Je pense que tu devrais revoir les informations données sur cette page.</p>
        <input class="qcm" type="radio">sur un disque dur, les pistes sont disposées de manière concentrique alors que sur un CD, les pistes sont disposées en spirale<br />
        <p class="vrai">Exact!</p>
        <input class="qcm" type="radio">il n'y a pas de différence de ce point de vue: dans les deux cas, les pistes sont disposées en spirale<br />
        <p class="faux">Faux.<br />Je pense que tu devrais revoir les informationsdonnées sur cette page.</p>
      </form>
      <form action="" class="travail">
        Un CD-ROM peut supporter un maximum de<br />
        <input class="qcm" type="radio">720 Ko<br />
        <p class="faux">Faux.<br />Ne confonds-tu pas avec la disquette 2DD?</p>
        <input class="qcm" type="radio">780 Mo<br />
        <p class="vrai">Exact.<br />La capacité d'un CD-ROM est bien approximativement 780 Mo.</p>
        <input class="qcm" type="radio">250 Go<br />
        <p class="faux">Faux.<br />Ne confonds-tu pas avec un disque dur?</p>
      </form>
      <p>Quand tu as répondu aux questions et bien compris les réponses, passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div>
    <?php include ("../../pied.inc.php");?>
  </div>
</body>
</html>
