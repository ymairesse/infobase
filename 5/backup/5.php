<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Le clavier de l'ordinateur</title>
  	<style type="text/css">
	.exercice a {
		background-color: #6388B2;
		color: white;
		padding: 0.5em 0.5em 0.5em 2.5em;
		background-image:url('../../images/eleve.gif');
		background-repeat: no-repeat;
		background-position: 0.5em 0.5em;;
	}
	</style>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>Les autres touches de mouvement du curseur de texte</h2>
      <div class="info">
		  <p>Près des touches <span class="clavier">Page Up</span> (<img src="images/pgup.gif" alt="Page Up" align="middle" height="32" width="32">) et <span class="clavier">Page Down</span> (<img src="images/pgdn.gif" alt="Page Down" align="middle" height="32" width="32">), deux touches marquées <span class="clavier">Home</span> (<img src="images/home.gif" alt="Home" align="middle" height="32" width="32">) et <span class="clavier">End</span> (&nbsp;<img src="images/end.gif" alt="End" align="middle" height="32" width="32">&nbsp;) permettent de déplacer le curseur de texte:</p>
		  <ul>
			<li>au début de la ligne (touche <span class="clavier">Home</span>) et</li>
			<li>à la fin de la ligne (touche <span class="clavier">End</span>).</li>
		  </ul>
		  <p><img src="images/clavfra.png" alt="Clavier français de France" class="imagedroite" height="84" width="133">Le clavier "&nbsp;Français pour la France&nbsp;", par exemple, présente une autre disposition et d'autre mentions sur les touches.</p>
      </div>
      <p class="exercice" style="text-align:center"><a href="javascript:void(0)">Clique ici pour découvrir l'exercice</a></p>
      <div class="travail">
        <ul>
          <li>Clique dans la zone jaune encadrée ci-dessous, puis abandonne la souris</li>
          <li>Amène le curseur sur la lettre "&nbsp;<code>I</code>&nbsp;" de "&nbsp;<code>Il n'y a vraiment</code><code>...</code>&nbsp;" à la première ligne puis frappe la touche <span class="clavier">End</span> (la touche <span class="clavier">Fin</span> sur les clavier français).</li>
          <li>Ramène le curseur au début de la ligne à l'aide de la touche <span class="clavier">Home</span> (la touche <span class="clavier">Origine</span> sur certains claviers français<code>...</code>" puis expérimente à nouveau les touches <span class="clavier">Home</span> et <span class="clavier">Origine</span>).</li>
          <li>Descend le curseur sur le "&nbsp;<code>E</code>&nbsp;" du début de la ligne "&nbsp;<code>Et sur cette ligne-ci...</code>&nbsp;" puis expérimente à nouveau les touches <span class="clavier">Home</span> et <span class="clavier">End</span>.</li>
        </ul>
        <form action="" style="text-align:center">
          <textarea rows="4" name="S1" cols="60" style="padding: 5px; font-family: 'Courier New',Courier,mono; color: #00f; background-color: #ff0;">
Il n'y a vraiment rien de très intéressant sur cette ligne.
Et sur cette ligne-ci, non plus.
</textarea>
        </form>
      </div>
      <p>Quand tu as terminé ce nouvel exercice, passe à la page suivante. <?php include ("../../suivant.inc.php"); ?></p>
    </div><?php include ("../../pied.inc.php");
    ?>
  </div>
<script type="text/javascript">
$(document).ready(function(){
	$(".exercice").click(function(){
		$(this).next().toggle(500);
		})
	$(".travail").hide();
	})
</script>
</body>
</html>
