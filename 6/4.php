<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
  <title>Les programmes d'ordinateur</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>Le r�le de la m�moire de l'ordinateur: synth�se</h2>
      <form class="qcu" action="">
        Combien de logiciels peut-on charger, au maximum, dans la m�moire de l'ordinateur&nbsp;?<br />
		<input class="qcm" type="radio">Un seul, le syst�me d'exploitation<br />
		<p class="faux">Non.<br />Le syst�me d'exploitation n'est que le premier des logiciels charg�s en m�moire.</p>
		<input class="qcm" type="radio">Trois logiciels<br />
		<p class="faux">R�ponse fausse.<br />Pourquoi trois logiciels?</p>
		<input class="qcm" type="radio">Quatre logiciels<br />
		<p class="faux">R�ponse fausse.<br />L'exemple de la page pr�c�dente montre bien quatre logiciels dans la m�moire, mais ce n'est qu'un exemple.</p>
		<input class="qcm" type="radio">�a d�pend<br />
		<p class="vrai">Bonne r�ponse.<br />Effectivement, le nombre de logiciels que l'on peut charger en m�moire de l'ordinateur d�pend, entre autres, de la taille de cette m�moire.</p>
      </form>
      <form class="qcu" action="">
        Quels �l�ments prennent le plus de place, dans la m�moire de l'ordinateur&nbsp;?<br />
		<input class="qcm" type="radio">Les programmes<br />
		<p class="faux">Non. Pas oblligatoirement.<br />Tout d�pend de la taille des donn�es par rapport � la taille des programmes.</p>
		<input class="qcm" type="radio">Les donn�es<br />
		<p class="faux">Non. Pas forc�ment.<br />Tout d�pend de la taille des donn�es par rapport � la taille des programmes.</p>
		<input class="qcm" type="radio">Il est impossible de r�pondre � cette question<br />
		<p class="vrai">Effectivement.<br />Tout d�pend de la taille des donn�es � traiter et de la taille des programmes utilis�s.<br />Il n'est donc pas possible de r�pondre � cette question.</p>
      </form>
      <form class="qcu" action="">
        A la page pr�c�dente, tu as lu que lorsqu'un programme d'ordinateur est ex�cut� par le processeur, il doit se trouver:<br />
		<input class="qcm" type="radio">Sur le disque dur<br />
		<p class="faux">Faux. Le processeur ne peut pas directement acc�der au contenu du disque dur.</p>
		<input class="qcm" type="radio">Sur l'�cran<br />
		<p class="faux">L'�cran n'est qu'un p�riph�rique de sortie. Les programmes n'y figurent jamais.<br />Ta r�ponse est fausse.</p>
		<input class="qcm" type="radio">Dans la m�moire centrale<br />
		<p class="vrai">Tout � fait correct. Les programmes et les donn�es doivent se trouver dans la m�moire centrale.</p>
      </form>
      
	  <fieldset class="qcu"><form action="" >
Dans quel sens circulent les informations entre le processeur et la m�moire centrale?<br>
<input class="qcm" name="qcm1" type="radio">Du processeur vers la m�moire centrale uniquement<br><p class="faux">R�ponse fausse.<br>Il serait int�ressant de revoir les informations � ce sujet.</p>
<input class="qcm" name="qcm1" type="radio">De la m�moire centrale vers le processeur uniquement<br><p class="faux">R�ponse fausse.<br>Il serait int�ressant de revoir les informations � ce sujet.</p>
<input class="qcm" name="qcm1" type="radio">De la m�moire centrale vers le processeur et du processeur vers la m�moire centrale<br><p class="vrai">Exact.<br>Le processeur re�oit des informations provenant de la m�moire centrale et peut y envoyer des informations.</p>
<input class="qcm" name="qcm1" type="radio">Aucune information n'est �chang�e entre la m�moire centrale et le processeur<br><p class="faux">R�ponse fausse</p>
</form>
</fieldset>
      
      <div class="info">
        <p>Des <strong>donn�es et des r�sultats</strong> peuvent �tre copi�s dans la m�moire centrale pour y �tre retenus et utilis�s plus tard</p>
        <p>La m�moire centrale d'un ordinateur contient des informations de deux sortes:</p>
        <ol>
          <li><b>les instructions</b> des programmes ex�cut�s</li>
          <li><b>les donn�es et r�sultats</b> calcul�s par ces programmes.</li>
        </ol>
      </div>
      <p>Quand tu as r�pondu aux questions et bien compris les r�ponses, passe � la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
    </div>
	<?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
