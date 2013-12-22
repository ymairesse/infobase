<?php // anti-moz ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
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
        });
		$(".qcm").attr("checked",false);
    })
  </script>     
  <title>Les programmes d'ordinateur</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php");
                ?>
    <div id="texte">
      <h2>Mémoire vive et mémoire morte</h2>
      <form action="" class="qcu">
        Quand on coupe le courant de l'ordinateur, la mémoire centrale<br />
		<input class="qcm" type="radio">conserve uniquement le contenu du BIOS<br />
		<p class="faux">Il y a un petit piège dans cette réponse! Le contenu du BIOS ne figure pas dans la mémoire centrale.<br />Cette réponse est donc fausse.</p>
		<input class="qcm" type="radio">conserve toutes les informations qui y ont été stockées<br />
		<p class="faux">Malheureusement non!<br />Toutes les informations déposées dans la mémoire centrale disparaissent définitivement<br />et il n'existe aucun moyen de les retrouver.</p>
		<input class="qcm" type="radio">ne conserve strictement aucune information<br />
		<p class="vrai">Bien sûr! Sans alimentation électrique, la mémoire centrale perd tout son contenu.<br />C'est précisément pour résoudre ce problème que l'ordinateur est muni d'un BIOS.</p>
      </form>
      <form action="" class="qcu">
        Le BIOS est<br />
		<input class="qcm" type="radio">Une puce située dans l'ordinateur<br />
		<p class="vrai">'Effectivement, il s'agit bien de la puce qui est présentée<br />sur l'image de la page précédente.<br />On dit parfois aussi que le BIOS est l'ensemble des instructions qui figurent dans cette puce.</p>
		<input class="qcm" type="radio">Une partie de la mémoire centrale<br />
		<p class="faux">Le BIOS ne fait certainement pas partie de la RAM: son contenu ne s'efface jamais.</p>
		<input class="qcm" type="radio">Une partie du microprocesseur<br />
		<p class="faux">Non, le BIOS est tout à fait indépendant du processeur.</p>
      </form>
      <form action="" class="qcu">
        La mémoire centrale de l'ordinateur contient des informations<br />
		<input class="qcm" type="radio">Qui sont toujours les mêmes, d'une fois à l'autre<br />
		<p class="faux">Faux!<br />Puisqu'on peut mettre différents programmes dans la mémoire centrale.</p>
		<input class="qcm" type="radio">Qui peuvent varier, d'une fois à l'autre<br />
		<p class="vrai">Effectivement, les informations changent en fonction des programmes que l'on utilise.</p>
      </form>
      <form action="" class="qcu">
        Le BIOS est capable de retenir des informations qui permettent à l'ordinateur de<br />
		<input class="qcm" type="radio">Démarrer quand il est éteint<br />
		<p class="vrai">Exact. <br />Le BIOS contient les programmes qui indiquent à l'ordinateur comment écrire à l'écran, lire le clavier, déterminer la position de la souris,...</p>
		<input class="qcm" type="radio">Écrire à l'écran, uniquement<br />
		<p class="faux">Non.<br />Le BIOS contient beaucoup plus que cela.</p>
		<input class="qcm" type="radio">S'éteindre quand il est allumé<br />
		<p class="faux">Faux.<br />Ne confonds-tu pas avec l'interrupteur?</p>
      </form>
      <form action="" class="qcu">
        L'acronyme RAM signifie<br />
<input class="qcm" type="radio">Random Access Memory<br />
		<p class="vrai">Exact.</p>
		<input class="qcm" type="radio">Read Access Memory<br />
		<p class="faux">Non.</p>
		<input class="qcm" type="radio">Random Able Memory<br />
		<p class="faux">Non.</p>		
      </form>
      <form action="" class="qcu">
        L'acronyme ROM signifie<br />
		<input class="qcm" type="radio">Random Only Memory<br />
		<p class="faux">Faux.</p>
		<input class="qcm" type="radio">Read Only Memory<br />
		<p class="vrai">Exact.</p>
		<input class="qcm" type="radio">Read Able Memory<br />
		<p class="faux">Non.</p>		
      </form>
      <form action="" class="qcu">
        La mémoire RAM est<br />
		<input class="qcm" type="radio">De la mémoire vive<br />
		<p class="vrai">Exact.<br />Le contenu de la mémoire RAM peut être modifié. Il s'agit donc bien de mémoire vive.</p>
		<input class="qcm" type="radio">De la mémoire morte<br />
		<p class="faux">Faux.<br />La mémoire RAM n'est pas figée une fois pour toutes.</p>
		<input class="qcm" type="radio">Aucune autre réponse n'est satisfaisante<br />
		<p class="faux">Et pourtant.<br />L'une des autres réponses est correcte.</p>		
      </form>
      <form class="qcu" action="">
        Le BIOS<br />
		<input class="qcm" type="radio">contient de la mémoire vive<br />
		<p class="faux">Non.<br />Le contenu du BIOS n'est pas modifié durant l'exécution des programmes.</p>
		<input class="qcm" type="radio">contient de la mémoire morte<br />
		<p class="vrai">Exact.<br />Le contenu du BIOS ne change pas.</p>
		<input class="qcm" type="radio">ne contient aucune mémoire<br />
		<p class="faux">Faux.<br />Le BIOS est capable de retenir toutes les informations nécessaires au fonctionnement de base de l'ordinateur.</p>
      </form>
      <p>Quand tu as répondu à toutes les questions et bien compris les réponses, passe à la page suivante.<?php include ("../../suivant.inc.php");
                        ?></p>
    </div><?php include ("../../pied.inc.php");
                ?>
  </div>
</body>
</html>
