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
      <h2>Le rôle de la mémoire de l'ordinateur: synthèse</h2>
      <form class="qcu" action="">
        Combien de logiciels peut-on charger, au maximum, dans la mémoire de l'ordinateur&nbsp;?<br />
		<input class="qcm" type="radio">Un seul, le système d'exploitation<br />
		<p class="faux">Non.<br />Le système d'exploitation n'est que le premier des logiciels chargés en mémoire.</p>
		<input class="qcm" type="radio">Trois logiciels<br />
		<p class="faux">Réponse fausse.<br />Pourquoi trois logiciels?</p>
		<input class="qcm" type="radio">Quatre logiciels<br />
		<p class="faux">Réponse fausse.<br />L'exemple de la page précédente montre bien quatre logiciels dans la mémoire, mais ce n'est qu'un exemple.</p>
		<input class="qcm" type="radio">Ça dépend<br />
		<p class="vrai">Bonne réponse.<br />Effectivement, le nombre de logiciels que l'on peut charger en mémoire de l'ordinateur dépend, entre autres, de la taille de cette mémoire.</p>
      </form>
      <form class="qcu" action="">
        Quels éléments prennent le plus de place, dans la mémoire de l'ordinateur&nbsp;?<br />
		<input class="qcm" type="radio">Les programmes<br />
		<p class="faux">Non. Pas oblligatoirement.<br />Tout dépend de la taille des données par rapport à la taille des programmes.</p>
		<input class="qcm" type="radio">Les données<br />
		<p class="faux">Non. Pas forcément.<br />Tout dépend de la taille des données par rapport à la taille des programmes.</p>
		<input class="qcm" type="radio">Il est impossible de répondre à cette question<br />
		<p class="vrai">Effectivement.<br />Tout dépend de la taille des données à traiter et de la taille des programmes utilisés.<br />Il n'est donc pas possible de répondre à cette question.</p>
      </form>
      <form class="qcu" action="">
        A la page précédente, tu as lu que lorsqu'un programme d'ordinateur est exécuté par le processeur, il doit se trouver:<br />
		<input class="qcm" type="radio">Sur le disque dur<br />
		<p class="faux">Faux. Le processeur ne peut pas directement accéder au contenu du disque dur.</p>
		<input class="qcm" type="radio">Sur l'écran<br />
		<p class="faux">L'écran n'est qu'un périphérique de sortie. Les programmes n'y figurent jamais.<br />Ta réponse est fausse.</p>
		<input class="qcm" type="radio">Dans la mémoire centrale<br />
		<p class="vrai">Tout à fait correct. Les programmes et les données doivent se trouver dans la mémoire centrale.</p>
      </form>
      
	  <fieldset class="qcu"><form action="" >
Dans quel sens circulent les informations entre le processeur et la mémoire centrale?<br>
<input class="qcm" name="qcm1" type="radio">Du processeur vers la mémoire centrale uniquement<br><p class="faux">Réponse fausse.<br>Il serait intéressant de revoir les informations à ce sujet.</p>
<input class="qcm" name="qcm1" type="radio">De la mémoire centrale vers le processeur uniquement<br><p class="faux">Réponse fausse.<br>Il serait intéressant de revoir les informations à ce sujet.</p>
<input class="qcm" name="qcm1" type="radio">De la mémoire centrale vers le processeur et du processeur vers la mémoire centrale<br><p class="vrai">Exact.<br>Le processeur reçoit des informations provenant de la mémoire centrale et peut y envoyer des informations.</p>
<input class="qcm" name="qcm1" type="radio">Aucune information n'est échangée entre la mémoire centrale et le processeur<br><p class="faux">Réponse fausse</p>
</form>
</fieldset>
      
      <div class="info">
        <p>Des <strong>données et des résultats</strong> peuvent être copiés dans la mémoire centrale pour y être retenus et utilisés plus tard</p>
        <p>La mémoire centrale d'un ordinateur contient des informations de deux sortes:</p>
        <ol>
          <li><b>les instructions</b> des programmes exécutés</li>
          <li><b>les données et résultats</b> calculés par ces programmes.</li>
        </ol>
      </div>
      <p>Quand tu as répondu aux questions et bien compris les réponses, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
    </div>
	<?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
