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
  <title>Les périphériques de stockage</title>
</head>
<body>
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>Lecture d'un CD-ROM</h2>
      <div class="info">
        <p><img style="width: 359px; height: 177px;" alt="Schéma lecteur de CD" src="images/cdmarche.gif" class="imagedroite">La lecture des informations sur un CD-ROM se fait à l'aide d'un faisceau de lumière laser.</p>
      <ul>
        <li>Lorsque la lumière laser frappe une zone <strong>non gravée</strong>, un détecteur peut recevoir la lumière réfléchie sur la couche métallique du CD-ROM.</li>
        <li>Lorsque la lumière frappe une zone <strong>gravée</strong>, la lumière réfléchie n'atteint pas le détecteur (par suite d'un phénomène physique appelé "&nbsp;interférence de phases&nbsp;"). Tout se passe comme si elle n'était pas réfléchie.</li>
      </ul>
      <p style="text-align: center;"><img style="width: 325px; height: 128px;" alt="Schéma symbolique de la lecture d'un CD-ROM" src="images/bits.gif"></p>
      <ul>
        <li>La valeur binaire "&nbsp;1&nbsp;" correspond au passage du rayon laser d'une zone <strong>réfléchissante</strong> vers une zone <strong>non-réfléchissante</strong>.</li>
        <li>Inversement, le passage d'une zone <strong>non-réfléchissante</strong> vers une zone <strong>réfléchissante</strong> correspond également à la valeur binaire "&nbsp;1&nbsp;".</li>
        <li>Lorsque le rayon laser reste, pendant un certain temps, dans une zone de même type (réfléchissante ou non-réfléchissante), cela correspond à la valeur binaire "&nbsp;0&nbsp;".</li>
      </ul>
      <p>Finalement, le CD supporte une longue série de "&nbsp;0&nbsp;" et de "&nbsp;1&nbsp;", langage compréhensible par l'ordinateur.</p>
    </div>
      <form action="" class="travail">
        Un lecteur de cette page prétend que le schéma symbolique de la lecture d'un CD-ROM présenté ci-dessus est faux pour, au moins, un bit.<br />
        <input class="qcm" type="radio">C'est une bonne remarque, j'ai repéré au moins une faute: une valeur "&nbsp;0&nbsp;" est, en fait, une valeur "&nbsp;1&nbsp;"<br />
        <p class="faux">Vérifie encore une fois avec ton professeur puis envoie ton diagnostic à l'auteur de cette page.<br />A ce jour, il n'a pas vu où il pouvait y avoir une erreur.</p>
        <input class="qcm" type="radio">C'est une bonne remarque, j'ai repéré au moins une faute: une valeur "&nbsp;1&nbsp;" devrait, en fait, être "&nbsp;0&nbsp;<br />
        <p class="faux">Vérifie encore une fois avec ton professeur puis envoie ton diagnostic à l'auteur de cette page.<br />A ce jour, il n'a pas vu où il pouvait y avoir une erreur.</p>
        <input class="qcm" type="radio">Il n'y a pas de faute<br />
        <p class="vrai">L'auteur de cette page a vérifié et revérifié. A ce jour, il n'a toujours pas trouvé de faute.<br />Confirme ce fait avec ton professeur, si tu n'en es pas persuadé.</p>
      </form>
      <form action="" class="travail">Selon toi, quelle pourrait-être l'unique valeur stockée sur un CD non gravé?<br>
        <input class="qcm" type="radio">La valeur "&nbsp;0&nbsp;"<br />
        <p class="vrai">Correct.<br />Effectivement, le rayon laser reste continuellement dans le même type de zone.<br />C'est bien à la valeur '0' que cela correspond.</p>
        <input class="qcm" type="radio">La valeur "&nbsp;1&nbsp;"<br />
        <p class="faux">Faux.<br />La valeur '1' correspond au passage d'une zone gravée à une zone non gravée.<br />Or, aucune zone n'est gravée.</p>
        <input class="qcm" type="radio">La valeur moyenne entre "&nbsp;0&nbsp;" et "&nbsp;1&nbsp;", c'est-à-dire "&nbsp;0,5&nbsp;"<br />
        <p class="faux">Faux.<br />Cette réponse n'est pas possible. Le matériel informatique ne 'comprend' que des '0' et des '1'.</p>
      </form>
      <p>Quand tu as répondu à la question et bien compris la réponse, passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div>
    <?php include ("../../pied.inc.php"); ?>
</body>
</html>
