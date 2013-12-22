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
    <?php include ("./top.inc.php");?>
    <div id="texte">
	<h2>Les touches de mouvement du curseur de texte</h2>
	<div class="info">
		<p>Il est possible de faire bouger le curseur de texte à l'aide d'un certain nombre de touches du clavier: <strong>LES TOUCHES DE MOUVEMENT DU CURSEUR</strong>.</p>
		<p>Sur le clavier, cherche un ensemble de quatre touches disposées en triangle et qui portent des flèches (vers le haut, le bas, la gauche et la droite).</p>
		<p style="text-align:center">
			<img src="images/flchaut.gif" alt="Flèche Haut" height="32" width="32"><br>
			<img src="images/flcga.gif" alt="Flèche Gauche" height="32" width="32"> 
			<img src="images/flcbas.gif" alt="Flèche Bas" height="32" width="32"> 
			<img src="images/flcdr.gif" alt="Flèche Droite" height="32" width="32">
		</p>
		<p>Ne confonds pas ces touches avec celles qui portent également des chiffres (le pavé numérique)&nbsp;!</p>
		<p>Au dessus des touches fléchées, un groupe de 6 touches contient également des touches de mouvement du curseur. Ce sont les quatre touches marquées <span class="clavier">Home</span>, <span class="clavier">End</span>, <span class="clavier">PgUp</span> et <span class="clavier">PgDn</span>. Les deux autres touches ne nous intéresseront pas pour l'instant.</p>
		<p style="text-align:center"><img src="images/null.gif" alt="Sans importance" height="32" width="32"> 
		<img src="images/home.gif" alt="Home" height="32" width="32"> <img src="images/pgup.gif" alt="Page Up" height="32" width="32"><br>
		<img src="images/null.gif" alt="Sans importance" height="32" width="32"> <img src="images/end.gif" alt="End" height="32" width="32"> <img src="images/pgdn.gif" alt="Page Down" height="32" width="32"></p>
	</div>
	
	<h3>Les touches "flèche à gauche" et "flèche à droite"</h3>
	<div class="info">
		<p>Les deux touches <img src="images/flcga.gif" alt="Flèche Gauche"> et <img src="images/flcdr.gif" alt="Flèche Droite" > permettent de déplacer le curseur de texte vers la gauche et vers la droite.</p>
	</div>
	<p class="exercice" style="text-align:center"><a href="javascript:void(0)">Clique ici pour découvrir l'exercice 1</a></p>
     <div class="travail">
        <ul>
          <li>Fais un clic de souris sur le pronom "&nbsp;<kbd>Il&nbsp;</kbd>" au début de la zone jaune ci-dessous</li>
        </ul>
        <form action="">
          <p style="text-align:center">
            <input name="T1" size="52" value="Il est possible de faire bouger le curseur de texte" style="padding: 5px; font-family: 'Courier New',Courier,mono; background-color: #ff0; color: #00f;" type="text">
          </p>
        </form>
        <ul>
			<li>A l'aide de la touche <span class="clavier">flèche à droite</span> (<img src="images/flcdr.gif" alt="Flèche Droite" align="middle" height="32" width="32">), déplace le curseur de texte jusqu'au premier "&nbsp;<code>e</code>&nbsp;" du mot "&nbsp;<code>texte</code>&nbsp;".<br>Si tu gardes ton doigt appuyé sur la touche, le curseur se déplace rapidement vers la droite.</li>
			<li>Reviens sur la lettre "&nbsp;<code>I</code>&nbsp;" de "&nbsp;<code>Il est possible...&nbsp;"</code> à l'aide de la touche <span class="clavier">flèche&nbsp;gauche</span> (<img src="images/flcga.gif" alt="Flèche Gauche" align="middle" height="32" width="32">).</li>
		</ul>
    </div>
		
      <h3>Les touches "flèche haut" et "flèche bas"</h3>
      <div class="info">
        <p>La touche <span class="clavier">flèche bas</span> (<img src="images/flcbas.gif" alt="Flèche bas" align="middle" height="32" width="32">)permet de faire DESCENDRE le curseur&nbsp;;</p>
        <p>la touche <span class="clavier">flèche haut</span> (<img src="images/flchaut.gif" alt="Flèche haut" align="middle" height="32" width="32">) permet faire MONTER le curseur.</p>
      </div>
	<p class="exercice" style="text-align:center"><a href="javascript:void(0)">Clique ici pour découvrir l'exercice 2</a></p>
      <div class="travail">
        <ul>
          <li>Fais un clic de souris sur la lettre "&nbsp;<code>A</code>&nbsp;", en haut et à gauche de l'encadré jaune ci-dessous.</li>
          <li>A l'aide des différentes touches de mouvement, amène le curseur sur la lettre "&nbsp;<code>X</code>&nbsp;" entourée d'étoiles ci-dessous, puis ramène-le encore une fois sur la lettre "&nbsp;<code>A</code>&nbsp;" du haut du cadre.</li>
        </ul>
        <textarea rows="4" name="S1" cols="52" style="padding: 5px; font-family: 'Courier New',Courier,mono; color: #00f; background-color: #ff0">
A
******* * X * *******
</textarea>
		</div>
		<p>Quand tu as terminé ces petits exercices, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
    </div>
    <?php include ("../../pied.inc.php");?>
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
