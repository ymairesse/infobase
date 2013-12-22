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
  <title>Les p�riph�riques de stockage</title>
</head>
<body>
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>Lecture d'un CD-ROM</h2>
      <div class="info">
        <p><img style="width: 359px; height: 177px;" alt="Sch�ma lecteur de CD" src="images/cdmarche.gif" class="imagedroite">La lecture des informations sur un CD-ROM se fait � l'aide d'un faisceau de lumi�re laser.</p>
      <ul>
        <li>Lorsque la lumi�re laser frappe une zone <strong>non grav�e</strong>, un d�tecteur peut recevoir la lumi�re r�fl�chie sur la couche m�tallique du CD-ROM.</li>
        <li>Lorsque la lumi�re frappe une zone <strong>grav�e</strong>, la lumi�re r�fl�chie n'atteint pas le d�tecteur (par suite d'un ph�nom�ne physique appel� "&nbsp;interf�rence de phases&nbsp;"). Tout se passe comme si elle n'�tait pas r�fl�chie.</li>
      </ul>
      <p style="text-align: center;"><img style="width: 325px; height: 128px;" alt="Sch�ma symbolique de la lecture d'un CD-ROM" src="images/bits.gif"></p>
      <ul>
        <li>La valeur binaire "&nbsp;1&nbsp;" correspond au passage du rayon laser d'une zone <strong>r�fl�chissante</strong> vers une zone <strong>non-r�fl�chissante</strong>.</li>
        <li>Inversement, le passage d'une zone <strong>non-r�fl�chissante</strong> vers une zone <strong>r�fl�chissante</strong> correspond �galement � la valeur binaire "&nbsp;1&nbsp;".</li>
        <li>Lorsque le rayon laser reste, pendant un certain temps, dans une zone de m�me type (r�fl�chissante ou non-r�fl�chissante), cela correspond � la valeur binaire "&nbsp;0&nbsp;".</li>
      </ul>
      <p>Finalement, le CD supporte une longue s�rie de "&nbsp;0&nbsp;" et de "&nbsp;1&nbsp;", langage compr�hensible par l'ordinateur.</p>
    </div>
      <form action="" class="travail">
        Un lecteur de cette page pr�tend que le sch�ma symbolique de la lecture d'un CD-ROM pr�sent� ci-dessus est faux pour, au moins, un bit.<br />
        <input class="qcm" type="radio">C'est une bonne remarque, j'ai rep�r� au moins une faute: une valeur "&nbsp;0&nbsp;" est, en fait, une valeur "&nbsp;1&nbsp;"<br />
        <p class="faux">V�rifie encore une fois avec ton professeur puis envoie ton diagnostic � l'auteur de cette page.<br />A ce jour, il n'a pas vu o� il pouvait y avoir une erreur.</p>
        <input class="qcm" type="radio">C'est une bonne remarque, j'ai rep�r� au moins une faute: une valeur "&nbsp;1&nbsp;" devrait, en fait, �tre "&nbsp;0&nbsp;<br />
        <p class="faux">V�rifie encore une fois avec ton professeur puis envoie ton diagnostic � l'auteur de cette page.<br />A ce jour, il n'a pas vu o� il pouvait y avoir une erreur.</p>
        <input class="qcm" type="radio">Il n'y a pas de faute<br />
        <p class="vrai">L'auteur de cette page a v�rifi� et rev�rifi�. A ce jour, il n'a toujours pas trouv� de faute.<br />Confirme ce fait avec ton professeur, si tu n'en es pas persuad�.</p>
      </form>
      <form action="" class="travail">Selon toi, quelle pourrait-�tre l'unique valeur stock�e sur un CD non grav�?<br>
        <input class="qcm" type="radio">La valeur "&nbsp;0&nbsp;"<br />
        <p class="vrai">Correct.<br />Effectivement, le rayon laser reste continuellement dans le m�me type de zone.<br />C'est bien � la valeur '0' que cela correspond.</p>
        <input class="qcm" type="radio">La valeur "&nbsp;1&nbsp;"<br />
        <p class="faux">Faux.<br />La valeur '1' correspond au passage d'une zone grav�e � une zone non grav�e.<br />Or, aucune zone n'est grav�e.</p>
        <input class="qcm" type="radio">La valeur moyenne entre "&nbsp;0&nbsp;" et "&nbsp;1&nbsp;", c'est-�-dire "&nbsp;0,5&nbsp;"<br />
        <p class="faux">Faux.<br />Cette r�ponse n'est pas possible. Le mat�riel informatique ne 'comprend' que des '0' et des '1'.</p>
      </form>
      <p>Quand tu as r�pondu � la question et bien compris la r�ponse, passe � la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div>
    <?php include ("../../pied.inc.php"); ?>
</body>
</html>
