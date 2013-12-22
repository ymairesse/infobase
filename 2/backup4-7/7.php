<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
  <title>L'unité centrale de l'ordinateur</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php");?>
    <div id="texte">
      <h2>La mémoire centrale et le courant électrique</h2>
      <div class="info">
        <p>Chaque élément de mémoire d'un ordinateur est un " bit ". Ce " bit " peut valoir " 0 " ou " 1 ".</p>
        <p>En réalité, chaque " bit " dans la mémoire centrale est un petit interrupteur capable de laisser passer le courant ou de ne pas le laisser passer.</p>
        <p>Comme un interrupteur classique, on peut l'ouvrir (le courant ne passe plus) ou le fermer (le courant passe).</p>
        <p class="questions">Je vous interrompt juste pour signaler une petite erreur. Quand on ferme un interrupteur, le courant ne passe plus, me semble-t-il...</p>
        <p class="reponses">Il n'y avait pas d'erreur. On dit que l'on ferme un interrupteur quand le courant passe. On l'ouvre pour empêcher le courant de passer.</p>
        <p><img class="imagedroite" style="width: 281px; height: 109px;" alt="Un octet" src="images/interrupteurs.png">Le schéma ci-contre représente les 8 interrupteurs d'un octet dans la mémoire d'un ordinateur. Certains sont ouverts (en rouge): le courant ne passe pas; ils correspondent à la valeur "&nbsp;0&nbsp;".<br>
        Certains sont fermés (en vert): le courant passe; ils&nbsp;représentent la valeur "&nbsp;1&nbsp;".</p>
        <p>Écrire dans la mémoire centrale d'un ordinateur, c'est donc ouvrir ou fermer des interrupteurs.</p>
      <fieldset class="attention">
      <legend>Important</legend>
      <p>Si l'on coupe l'alimentation électrique de l'ordinateur, le contenu des mémoires s'efface définitivement (valeur 0). Il n'existe aucun moyen de savoir si l'interrupteur était ouvert ou fermé avant la coupure du courant.</p>
      </fieldset>
      </div>
      <div class="info">
        <p><img src="images/transistor.png" alt="transistor" class="imagedroite" height="168" width="80"></p>
        <p>Les "interrupteurs" sont, en réalité, des composants électroniques appelés "&nbsp;transistors&nbsp;".</p>
        <p>L'image ci-contre à droite présente un transistor (un peu agrandi) utilisé dans certains appareils électroniques.<br>
        Les transistors des mémoires des ordinateurs doivent être beaucoup plus petits car il faut en mettre un très grand nombre
        dans un très petit volume.</p>
        <p>L'image ci-dessous montre un élément de 128 Mo de mémoire (128 millions d'octets peuvent y être stockés). L'échelle
        est presque 1/1.</p>
		<table border="1" cellpadding="4">
			<tr>
				<td>1 bit</td>
				<td>est formé par</td>
				<td>1 transistor</td>
			</tr>
			<tr>
				<td>1 x 8 bits (un octet)</td>
				<td>sont formés par</td>
				<td>1 x 8 transistor</td>
			</tr>
			<tr>
				<td>128.000.000 x 8 bits (128 Mo)</td>
				<td>sont formés par</td>
				<td>128.000.000 x 1 x 8 transistor = <br /><strong>1 024 000 000 transistors</strong></td>
			</tr>
		</table>
		<p>Chaque "bit" de cette mémoire est formé par un transistor. Il faut <strong>8 transistors</strong> pour former un octet. Les 128 millions d'octets nécessitent donc <strong>1,024 milliards de transistors</strong>.</p>
        <p style="text-align: center;"><img src="images/barrette.jpg" alt="Mémoire d'ordinateur" height="125" width="450"></p>
      </div>
	  
      <form action="" class="travail">
        Une "case" de la mémoire d'un ordinateur contient une certaine valeur. J'y dépose une autre valeur. Que devient l'ancienne valeur?<br>
        <input class="qcm" type="radio" name="qcm4">Elle reste dans cette case et est retenue aussi bien que la nouvelle valeur.<br />
        <p class="faux">Réponse fausse.<br />Une &quot;case&quot; de la mémoire ne peut contenir qu'une seule valeur à la fois.</p>
        <input class="qcm" type="radio" name="qcm4">L'ancienne valeur est définitivement perdue.<br />
        <p class="vrai">Réponse correcte.<br />La nouvelle valeur &quot;écrase&quot; l'ancienne valeur. Certains circuits qui conduisaient le courant ne le conduisent plus et inversement.</p>
        <input class="qcm" type="radio" name="qcm4">L'ancienne valeur peut être rappelée quand on le veut.<br />
        <p class="faux">Réponse fausse.<br />L'ancienne valeur est remplacée par la nouvelle.</p>
        <input class="qcm" type="radio" name="qcm4">On ne peut pas changer la valeur contenue dans une case de le mémoire.<br />
        <p class="faux">Réponse fausse.<br />Heureusement, on peut changer cette valeur.</p>
      </form>
      
	  <form action="" class="travail">
        La mémoire de mon ordinateur contient des données extrêmement importantes. L'ordinateur est éteint brutalement. Que deviennent les données?<br>
        <input class="qcm" type="radio" name="qcm4">Elles restent dans la mémoire jusqu'au moment où le courant revient.<br />
        <p class="faux">Réponse fausse.<br />Pour que les données restent dans la mémoire, il est nécessaire que l'ordinateur reste allumé.</p>
        <input class="qcm" type="radio" name="qcm4">Les données disparaissent de la mémoire mais il suffit de rallumer l'ordinateur pour les faire revenir.<br />
        <p class="faux">Réponse fausse.<br />Rallumer l'ordinateur ne fait pas revenir le contenu de la mémoire centrale.</p>
        <input class="qcm" type="radio" name="qcm4">Les données disparaissent définitivement de la mémoire.<br />
        <p class="vrai">Réponse correcte.<br />Il n'existe aucun moyen de retrouver les données qui étaient dans la mémoire.</p>
      </form>

      <form action="" class="travail">
        Un transistor est<br>
        <input class="qcm" type="radio" name="qcm4">Une sorte d'interrupteur électronique qui permet d'ouvrir ou de fermer un circuit électrique<br />
        <p class="vrai">Réponse correcte</p>
        <input class="qcm" type="radio" name="qcm4">Un courant électrique<br />
        <p class="faux">Faux.<br />Le transistor peut être parcouru par un courant, mais il n'est pas un courant</p>
        <input class="qcm" type="radio" name="qcm4">La mémoire centrale de l'ordinateur<br />
        <p class="faux">Réponse fausse.<br />La mémoire de l'ordinateur contient un grand nombre de transistors.</p>
        <input class="qcm" type="radio" name="qcm4">Le microprocesseur<br />
        <p class="faux">Réponse fausse.</p>
      </form>

      <form action="" class="travail">
        Un élément de mémoire contenant la valeur 0 ou 1 est formé de<br>
        <input class="qcm" type="radio" name="qcm4">Un seul transistor<br />
        <p class="vrai">Réponse exacte.<br />Quand le courant passe dans le &quot;transistor&quot;, l'élément de mémoire correspond à la valeur 1, sinon, c'est la valeur 0.</p>
        <input class="qcm" type="radio" name="qcm4">Deux transistors<br />
        <p class="faux">Réponse fausse</p>
        <input class="qcm" type="radio" name="qcm4">Huit transistors<br />
        <p class="faux">Faux.<br />Pour représenter 1 bit, 8 transistors ne sont pas nécessaires.</p>
        <input class="qcm" type="radio" name="qcm4">128 transistors<br />
        <p class="faux">Réponse fausse.<br />Il ne faut pas tant de circuits pour représenter un seul bit.</p>
      </form>

      <form class="travail" action="">
        La mémoire d'un ordinateur est de 4 <em>Giga-octets</em> (valeur classique en 2013), elle contient donc&nbsp;:<br>
        <input class="qcm" type="radio" name="qcm4"> 4 transistors<br />
        <p class="faux">Non.<br />C'est beaucoup plus que cela.</p>
        <input class="qcm" type="radio" name="qcm4"> 4 millions de transistors<br />
        <p class="faux">Réponse fausse.<br />Ne te tromperais-tu pas sur la signification du préfixe "Giga"?</p>
        <input class="qcm" type="radio" name="qcm4"> 4 milliards de transistors<br />
        <p class="faux">Réponse inexacte.<br />N'oublie pas qu'un octet est formé de 8 bits. Et chaque bit demande un transistor.</p>
        <input class="qcm" type="radio" name="qcm4">32 milliards de transistors<br />
        <p class="vrai">Réponse exacte. Il faut 8 transistors par octet. 8 x 4 milliards = 32 milliards</p>
      </form>
      <p>Quand tu as répondu aux questions et bien compris les réponses, passe à la page suivante..<?php include ("../../suivant.inc.php");?></p>
    </div>
	<?php include ("../../pied.inc.php");?>
  </div>
</body>
</html>
