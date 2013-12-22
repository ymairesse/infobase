<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script type="text/javascript" src="../../js/jquery.js"></script>
  <style type="text/css">
.c1 {background-color: #66ccff}
  .c2 {background-color: #ffffdd}
  .addition {padding: 0 1em; 
  text-align: center; 
  float: right; 
  font-weight: bold; 
  background-color: white;
  }
.binaire {display: inline;}
.binaire td {border: 1px solid black;}
.opener {cursor:pointer}
  </style>


  <title>Voyage au cœur de l'unité centrale</title>
</head>

<body>
  <div id="conteneur">
<?php 
require ("./top.inc.php"); 
require ("../../dewplayer.inc.php");
?>
	<div id="texte">

    <fieldset class="info">
		<legend>Les octets sont des groupes de 8 bits</legend>
      <p>Pour des raisons techniques qui dépassent le cadre de ce cours, on a trouvé intéressant de grouper les "cases mémoires élémentaires" (les bits) en séries de 8 bits.</p>
      <p class="encadre">Une suite de 8 bits est appelée <strong>un octet</strong> en français ou <strong>un byte</strong> en anglais. Les deux termes sont utilisés.</p>
      <p>La mémoire de l'ordinateur est arrangée de manière à grouper des séries de 8 bits. Un ensemble de <strong>8 bits</strong> est appelé un octet (ou <strong>un byte</strong> en anglais).</p>
      <p>Dans un groupe de 8 bits, on peut stocker des nombres plus grands que 1.</p>
      <p>Dans un octet,<br></p>
      <ul>
        <li>le nombre <strong>0</strong> s'écrirait tout simplement <strong>
		<table class="binaire ombre">
	<tr>
		<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
	</tr>
</table>
</strong></li>

        <li>le nombre <strong>1</strong> s'écrirait alors <strong> <table class="binaire">
	<tr>
		<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td>
	</tr>
</table></strong></li>

        <li>et le nombre <strong>2</strong> s'écrirait <strong>
		<table class="binaire">
	<tr>
		<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td>
	</tr>
	</table>
		</strong></li>
      </ul>
    </fieldset>
    <fieldset class="travail">
      <legend>A l'aide de la calculatrice</legend>
	  <ul>
	  <li>détermine la valeur en décimal du nombre binaire composé de 8 chiffres "1", c'est-à-dire
	  <strong>
	  <table class="binaire ombre">
	<tr>
		<td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td>
	</tr>
</table>
	  </strong>
	  (c'est le plus grand nombre que l'on puisse déposer dans un octet).</li>
      <li>Même question pour un nombre composé de 16 chiffres "1".</li>
	  </ul>
    </fieldset>
    <fieldset class="info">
      <p>Dans une série de 8 bits, on peut déposer des nombres compris entre 0 et 255. Si l'on veut déposer des nombres plus grands, on peut, par exemple, demander à l'ordinateur de considérer des séries de plus de 8 bits.</p>
      <p>Les processeurs actuels sont capables de travailler avec des séries de 32 bits ou 64 bits successifs.</p>
    </fieldset>
    <fieldset class="travail">
      Serais-tu capable d'indiquer la différence entre un bit et un byte? Réfléchis quelques instants et essaie d'écrire une réponse à cette question. Tu peux écrire ci-dessous ou sur une feuille de papier.
      <form action="javascript:void(0)">
        <textarea name="textarea" cols="60" rows="6"></textarea>
      </form>
      <p>Montre ta réponse au professeur. Il n'est pas nécessaire d'imprimer.</p>
    </fieldset>
	
    <p>Quand tu as compris la notion d'octet (et de byte), passe à la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
  </div>
  <?php include ("../../pied.inc.php");?>

<script type="text/JavaScript">
function verif (formulaire, correct)
  {
  if (formulaire.reponse.value == correct)
        alert('Juste!');
  else {
        alert('Faux: la réponse correcte est '+correct);
        formulaire.reponse.value = correct;
        }
  return (false);
  }
  
  $(document).ready(function(){
	  $(".opener").click(function(){
		  var toto = $(this);
		  $(this).next().toggle(1000);
		  })
	  
	  })
  </script>
</body>
</html>
