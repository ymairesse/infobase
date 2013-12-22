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
      <h2>Principe du CD-ROM</h2>
      <div class="info"><p>Le principe du CD-ROM est diff�rent de celui du disque dur.</p>
      <p><img style="width: 200px; height: 212px;" alt="Piste en spirale" src="images/cd-spiral.gif" class="imagegauche">Rappelons que sur un disque magn�tique (disque dur ou disquette), les pistes sont <strong>concentriques</strong>, comme les couloirs d'une piste d'athl�tisme.</p>
      <p>Dans le cas du CD-ROM, les informations ne sont pas stock�es de mani�re magn�tique. Le <strong>CD est grav�</strong>. Lors de sa fabrication, on y r�alise une s�rie de trous suivant une piste trac�e <strong>en spirale</strong>.</p>
      <p>La structure d'un CD-ROM est tout � fait semblable � celle d'un CD audio: 12 cm de diam�tre et 1,2 mm d'�paisseur.</p>
      <p style="clear:both"><img style="width: 404px; height: 181px;" class="imagedroite" alt="Structure d'un CD-ROM" src="images/cdcoupe.gif">Le CD est fabriqu� en mati�re plastique. Celle-ci est recouverte d'une fine pellicule d'aluminium sur l'une des faces (voil� pourquoi le CD est brillant). Cette feuille d'aluminium supporte les informations d�pos�es sur le CD.</p>
      <p>La piste enregistr�e est constitut�e d'une s�rie d'alv�oles d'une largeur de 0,5&nbsp;milli�me de millim�tre, d'une profondeur de 0,83&nbsp;milli�me de millim�tre et espac�es de&nbsp;1,6 milli�me de millim�tre.</p>
	  <p>Sur l'illustration ci-dessous, on a repr�sent� un petit morceau de CD sur lequel la piste enregistr�e appara�t sur quatre tours. Les alv�oles sont parfaitement visibles.</p>
      <p><img style="width: 477px; height: 123px;" alt="Les alv�oles dans un CD-ROM" src="images/gravure.gif" class="imagegauche">Comme les alv�oles sont tr�s petites, on pourra en graver beaucoup, sur un CD. La capacit� des disques CD est tr�s grande: jusqu'� <strong>783 Mo</strong>.</p>
      <p>Dans un ordinateur dont on a ouvert la console, rep�re le lecteur de CD-ROM et ses connexions � l'unit� centrale.</p>
    </div>
      <form action="" class="travail" style="clear:both">
        Une diff�rence entre un disque dur et un CD est que:<br />
        <input class="qcm" type="radio">sur un CD, les informations sont grav�es et sur un disque dur, les informations sont cod�es sous forme de zones magn�tis�es ou non magn�tis�es<br />
        <p class="vrai">Tout � fait exact.</p>
        <input class="qcm" type="radio"> sur un disque dur, les informations sont grav�es et sur un CD, les informations sont cod�es sous forme de zones magn�tis�es ou non magn�tis�es<br />
        <p class="faux">C'est faux.<br />Je te conseille de relire ce qui pr�c�de dans la page.</p>
        <input class="qcm" type="radio">il n'y a pas de diff�rence entre un CD et un disque dur<br />
        <p class="faux">R�ponse fausse<br />Relis plus attentivement les informations de cette page et de la page pr�c�dente</p>
      </form>
      <form action="" class="travail">
        Une diff�rence entre un disque dur et un CD est que:<br />
        <input class="qcm" type="radio">sur un CD, les pistes sont dispos�es de mani�re concentrique alors que sur un disque dur, les pistes sont dispos�es en spirale<br />
        <p class="faux">Faux.<br />Je pense que tu devrais revoir les informations donn�es sur cette page.</p>
        <input class="qcm" type="radio">sur un disque dur, les pistes sont dispos�es de mani�re concentrique alors que sur un CD, les pistes sont dispos�es en spirale<br />
        <p class="vrai">Exact!</p>
        <input class="qcm" type="radio">il n'y a pas de diff�rence de ce point de vue: dans les deux cas, les pistes sont dispos�es en spirale<br />
        <p class="faux">Faux.<br />Je pense que tu devrais revoir les informationsdonn�es sur cette page.</p>
      </form>
      <form action="" class="travail">
        Un CD-ROM peut supporter un maximum de<br />
        <input class="qcm" type="radio">720 Ko<br />
        <p class="faux">Faux.<br />Ne confonds-tu pas avec la disquette 2DD?</p>
        <input class="qcm" type="radio">780 Mo<br />
        <p class="vrai">Exact.<br />La capacit� d'un CD-ROM est bien approximativement 780 Mo.</p>
        <input class="qcm" type="radio">250 Go<br />
        <p class="faux">Faux.<br />Ne confonds-tu pas avec un disque dur?</p>
      </form>
      <p>Quand tu as r�pondu aux questions et bien compris les r�ponses, passe � la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div>
    <?php include ("../../pied.inc.php");?>
  </div>
</body>
</html>
