<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Le clavier de l'ordinateur</title>
</head>
<body>
    <?php include ("./top.inc.php");?>
    <div id="texte">
	<h2>Test</h2>
	<p>Les questions qui suivent se rapportent au schéma ci-dessous</p>
	<p style="text-align:center"><img src="images/zoneclav.png" alt="Les zones du clavier" border="0" height="197" width="500"></p>
	<form action="" class="qcu">Comment s'appelle la zone du clavier <span style="background-color: red; color:white">en couleur rouge</span> sur l'illustration?<br>
		<input class="qcm" name="qcm1" type="radio">Le clavier alphanumérique<br>
		<p class="faux">Réponse incorrecte</p>
		<input class="qcm" name="qcm1" type="radio">Les touches de fonction<br>
		<p class="vrai">Réponse exacte</p>
		<input class="qcm" name="qcm1" type="radio">Le pavé numérique<br>
		<p class="faux">Réponse fausse</p>
		<input class="qcm" name="qcm1" type="radio">Les touches de mouvement du curseur<br>
		<p class="faux">Réponse fausse</p>
	</form> 
	
	<form action="" class="qcu">Comment s'appelle la zone du clavier <span style="background-color: blue; color:white">en couleur bleue</span> sur l'illustration?<br>
		<input class="qcm" name="qcm1" type="radio">Le clavier alphanumérique<br>
		<p class="vrai">Réponse exacte</p>
		<input class="qcm" name="qcm1" type="radio">Les touches de fonction<br>
		<p class="faux">Réponse fausse</p>
		<input class="qcm" name="qcm1" type="radio">Le pavé numérique<br>
		<p class="faux">Réponse fausse</p>
		<input class="qcm" name="qcm1" type="radio">Les touches de mouvement du curseur<br>
		<p class="faux">Réponse fausse</p>
	</form> 
	
	<form action="" class="qcu">Comment s'appelle la zone du clavier <span style="background-color: fuchsia; color:white">en couleur rose</span> sur l'illustration?<br>
		<input class="qcm" name="qcm1" type="radio">Le clavier alphanumérique<br>
		<p class="faux">Réponse incorrecte</p>
		<input class="qcm" name="qcm1" type="radio">Les touches de fonction<br>
		<p class="faux">Réponse fausse</p>
		<input class="qcm" name="qcm1" type="radio">Le pavé numérique<br>
		<p class="vrai">Réponse correcte</p>
		<input class="qcm" name="qcm1" type="radio">Les touches de mouvement du curseur<br>
		<p class="faux">Réponse fausse</p>
	</form> 
	
	<form action="" class="qcu">Comment s'appelle la zone du clavier <span style="background-color: green; color:white">en couleur verte</span> sur l'illustration?<br>
		<input class="qcm" name="qcm1" type="radio">Le clavier alphanumérique<br>
		<p class="faux">Réponse incorrecte</p>
		<input class="qcm" name="qcm1" type="radio">Les touches de fonction<br>
		<p class="faux">Réponse fausse</p>
		<input class="qcm" name="qcm1" type="radio">Le pavé numérique<br>
		<p class="faux">Réponse fausse</p>
		<input class="qcm" name="qcm1" type="radio">Les touches de mouvement du curseur<br>
		<p class="vrai">Réponse exacte</p>
	</form> 


      <p>Quand tu as trouvé toutes les réponses exactes, passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div>
    <?php include ("../../pied.inc.php");?>

</body>
<script type="text/javascript">
	$(document).ready(function(){
		$(".qcm").click(function(){
			$(this).next().next().show(300);
		})

	$(".qcm").attr("checked",false);
	})
</script>
</html>
