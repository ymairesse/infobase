<?php //anti-moz ?>
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
  <title>Les périphériques de stockage</title>
</head>
<body>
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>Principe des DVD</h2><img style="width: 232px; height: 281px" alt="Structure d'un DVD" src="images/dvdcouches.gif" class="imagedroite">
      <div class="info">
        <p>Le principe de fonctionnement du DVD-ROM est tout à fait semblable au principe du CD-ROM. Il y a cependant au moins trois différences.</p>
      <ol>
        <li>Dans le cas du DVD, les alvéoles gravées dans le disque sont plus petites que dans le cas du CD. On peut en mettre plus&nbsp;; la capacité de stockage du DVD est donc plus grande: <strong>4,7&nbsp;Go</strong>.</li>
        <li>Une deuxième différence est que les informations sont disposées sur deux couches superposées, dans le cas du DVD. Ainsi, on double presque la capacité: <strong>8,5&nbsp;Go</strong>.</li>
        <li>Une troisième différence est que le DVD peut se lire sur les deux faces. On atteint donc la capacité de <strong>17&nbsp;Go</strong>.</li>
      </ol>
    </div>
      <form action="" class="travail">
        Un DVD-ROM peut supporter plus d'informations qu'un CD-ROM parce que:<br />
        <input class="qcm" type="radio">Les alvéoles dans le disque sont plus serrées<br />
        <p class="faux">C'est vrai, mais ce n'est pas suffisant.</p>
        <input class="qcm" type="radio">Le DVD est gravé en deux couches<br />
        <p class="faux">C'est vrai, mais ce n'est pas suffisant.</p>
        <input class="qcm" type="radio">Le DVD peut être gravé sur ses deux faces<br />
        <p class="faux">C'est vrai, mais ce n'est pas suffisant.</p>
        <input class="qcm" type="radio">Aucune des réponses ci-dessus ne convient parfaitement<br />
        <p class="vrai">Exact.<br />Toutes les réponses ci-dessus sont correctes.</p>
      </form>
      <form action="" class="travail">
        Si l'on considère qu'une page d'une encyclopédie contient 60 lignes de 50 caractères (soit 3000 signes) et qu'un volume est constitué de 2500 pages, combien de volumes d'une encyclopédie peut-on enregistrer sur un DVD-ROM?<br />
        <input class="qcm" type="radio">un peu plus de 20 volumes<br />
        <p class="faux">Faux.<br />20 volumes x 2500 pages/volume x 3000 caractères/page = 150.000.000 caractères<br />C'est beaucoup trop peu.</p>
        <input class="qcm" type="radio">un peu plus de 200 volumes<br />
        <p class="faux">Faux.<br />200 volumes x 2500 pages/volume x 3000 caractères/page = 1.500.000.000 caractères<br />C'est près de 10 fois trop peu.</p>
        <input class="qcm" type="radio">un peu plus de 2000 volumes<br />
        <p class="vrai">C'est la bonne réponse.<br /> 2000 volumes x 2500 pages/volume x 3000 caractères/page = 15.000.000.000 caractères,<br /> soit 15 Go.</p>
        <input class="qcm" type="radio">un peu plus de 20000 volumes<br />
        <p class="faux">Faux.<br />20000 volumes x 2500 pages/volume x 3000 caractères/page = 150.000.000.000 caractères<br />C'est près de 10 fois trop.</p>
      </form>
      <form action="" class="travail">
        Si un volume d'une encyclopédie de la question précédente a une épaisseur de 5 cm, quelle est la hauteur de la pile de livres contenue dans un DVD-ROM?<br />
        <input class="qcm" type="radio">10 mètres<br />
        <p class="faux">Faux.<br />C'est trop peu. Revois ton calcul.</p>
        <input class="qcm" type="radio">30 mètres<br />
        <p class="faux">Faux.<br />C'est trop peu. Revois ton calcul</p>
        <input class="qcm" type="radio">50 mètres<br />
        <p class="faux">Faux.<br />C'est trop peu. Revois ton calcul</p>
<input class="qcm" type="radio">100 mètres<br />
        <p class="vrai">Correct.<br />2000 volumes de 5 cm font une hauteur de 10.000 cm, soit 100 mètres.</p>
      </form>
      <p>Quand tu as répondu à toutes les questions et bien compris les réponses, passe à l'exercice de la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
    </div>
    <?php include ("../../pied.inc.php"); ?>
</body>
</html>
