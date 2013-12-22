<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script type="text/javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
	$(".backspaceOnly").keydown(function(event){
		if (event.which == 46) {
			$(this).next().html("La touche 'Delete' n'est pas autorisée");
			return false;
			}
			else $(this).next().html("");
		})
		
	$(".deleteOnly").keydown(function(event){
		if (event.which == 8) {
			$(this).next().html("Le 'retour arrière' n'est pas autorisé");
			return false;
			}
			else $(this).next().html("");
		})
	  }) 
  </script>
  <style type="text/css">
  .avertissement {
	  color: yellow;
	  background-color: red;
	  clear:both;
	  }
  
  </style>
  <title>Le clavier de l'ordinateur</title>
</head>
<body>
  <div id="conteneur">?>
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>Delete et Retour arrière (2)</h2>
      <div class="info">
      <p>La touche marquée <span class="clavier">Delete</span> (<img src="images/del.gif" alt="Delete" align="middle" height="32" width="32">) -prononcer "&nbsp;dilîte&nbsp;"- permet d'effacer le caractère devant lequel se trouve le curseur.</p>
      </div>
      <div class="travail">
        <ul>
          <li>Déplace le curseur à l'emplacement du "&nbsp;t&nbsp;" du mot incorrect "&nbsp;phtrase&nbsp;" dans le cadre suivant. Le curseur doit clignoter juste après le "&nbsp;h&nbsp;" et devant le "&nbsp;t&nbsp;".</li>
        </ul>
        <form action="">
          <div style="text-align:center">
            <input class="deleteOnly" name="T1" size="52" value="Il y a une faute dans cette phtrase." style="padding: 5px; background-color: rgb(0, 153, 255);" type="text">
            <div class="avertissement"></div><br>
            <input type="reset" name="reset" value="Annuler">
          </div>
        </form>
        <ul>
          <li>Frappe la touche <span class="clavier">Delete</span> afin d'apporter la correction.</li>
          <li>En utilisant <u>exclusivement</u> la touche <span class="clavier">Delete</span> et les touches de mouvements du curseur de texte, corrige les 5 fautes d'orthographe du texte suivant:</li>
        </ul>
        <form action="">
          <div style="text-align:center">
            <textarea class="deleteOnly" rows="3" name="S1" cols="65" style="padding: 5px; background-color: rgb(0, 153, 255);">
Quand oon fait des fauutes d'orthographe avec un orrdinateur, ce n'est pass très grave, car on peutt toujours les corriger
</textarea>
<div class="avertissement"></div><br>
			<input type="reset" name="reset" value="Annuler"><br>
          </div>
        </form>
        <p class="supplement">Il est important que tu apprennes à utiliser la touche <span class="clavier">Delete</span>. Ne fais pas l'exercice autrement.</p>
      </div>
      
      <div class="info">
		<p>La touche <span class="clavier">Retour Arrière</span>, notée <img src="images/retour.gif" alt="Retour arrière" align="middle" height="32" width="64">, permet d'effacer le caractère derrière lequel se trouve le curseur.</p>
      </div>
      <div class="travail">
        <ul>
          <li>En utilisant la touche <span class="clavier">Retour Arrière</span>, corrige les 5 fautes d'orthographe du texte suivant:</li>
        </ul>
        <form name="form1" action="">
          <div style="text-align:center">
            <textarea class="backspaceOnly" rows="3" name="textarea" cols="65" style="padding: 5px; background-color: rgb(0, 153, 255);">
Quand oon fait des fauutes d'orthographe avec un orrdinateur, ce n'est pass très grave, car on peutt toujours les corriger
</textarea>
			<div class="avertissement"></div>
		<input type="reset" name="reset" value="Annuler">
          </div>
        </form>
        <p class="supplement">Il est important que tu apprennes à utiliser la touche <span class="clavier">Retour Arrière</span>. Ne fais pas l'exercice autrement.</p>
      </div>
      <p>Quand tu as bien compris la différence entre la touche ces deux touches, passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div>
    <?php include ("../../pied.inc.php");?>
  </div>
</body>
</html>
