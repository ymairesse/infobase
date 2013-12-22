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
  <title>Les p�riph�riques de stockage</title>
</head>
<body>
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>Principe des DVD</h2><img style="width: 232px; height: 281px" alt="Structure d'un DVD" src="images/dvdcouches.gif" class="imagedroite">
      <div class="info">
        <p>Le principe de fonctionnement du DVD-ROM est tout � fait semblable au principe du CD-ROM. Il y a cependant au moins trois diff�rences.</p>
      <ol>
        <li>Dans le cas du DVD, les alv�oles grav�es dans le disque sont plus petites que dans le cas du CD. On peut en mettre plus&nbsp;; la capacit� de stockage du DVD est donc plus grande: <strong>4,7&nbsp;Go</strong>.</li>
        <li>Une deuxi�me diff�rence est que les informations sont dispos�es sur deux couches superpos�es, dans le cas du DVD. Ainsi, on double presque la capacit�: <strong>8,5&nbsp;Go</strong>.</li>
        <li>Une troisi�me diff�rence est que le DVD peut se lire sur les deux faces. On atteint donc la capacit� de <strong>17&nbsp;Go</strong>.</li>
      </ol>
    </div>
      <form action="" class="travail">
        Un DVD-ROM peut supporter plus d'informations qu'un CD-ROM parce que:<br />
        <input class="qcm" type="radio">Les alv�oles dans le disque sont plus serr�es<br />
        <p class="faux">C'est vrai, mais ce n'est pas suffisant.</p>
        <input class="qcm" type="radio">Le DVD est grav� en deux couches<br />
        <p class="faux">C'est vrai, mais ce n'est pas suffisant.</p>
        <input class="qcm" type="radio">Le DVD peut �tre grav� sur ses deux faces<br />
        <p class="faux">C'est vrai, mais ce n'est pas suffisant.</p>
        <input class="qcm" type="radio">Aucune des r�ponses ci-dessus ne convient parfaitement<br />
        <p class="vrai">Exact.<br />Toutes les r�ponses ci-dessus sont correctes.</p>
      </form>
      <form action="" class="travail">
        Si l'on consid�re qu'une page d'une encyclop�die contient 60 lignes de 50 caract�res (soit 3000 signes) et qu'un volume est constitu� de 2500 pages, combien de volumes d'une encyclop�die peut-on enregistrer sur un DVD-ROM?<br />
        <input class="qcm" type="radio">un peu plus de 20 volumes<br />
        <p class="faux">Faux.<br />20 volumes x 2500 pages/volume x 3000 caract�res/page = 150.000.000 caract�res<br />C'est beaucoup trop peu.</p>
        <input class="qcm" type="radio">un peu plus de 200 volumes<br />
        <p class="faux">Faux.<br />200 volumes x 2500 pages/volume x 3000 caract�res/page = 1.500.000.000 caract�res<br />C'est pr�s de 10 fois trop peu.</p>
        <input class="qcm" type="radio">un peu plus de 2000 volumes<br />
        <p class="vrai">C'est la bonne r�ponse.<br /> 2000 volumes x 2500 pages/volume x 3000 caract�res/page = 15.000.000.000 caract�res,<br /> soit 15 Go.</p>
        <input class="qcm" type="radio">un peu plus de 20000 volumes<br />
        <p class="faux">Faux.<br />20000 volumes x 2500 pages/volume x 3000 caract�res/page = 150.000.000.000 caract�res<br />C'est pr�s de 10 fois trop.</p>
      </form>
      <form action="" class="travail">
        Si un volume d'une encyclop�die de la question pr�c�dente a une �paisseur de 5 cm, quelle est la hauteur de la pile de livres contenue dans un DVD-ROM?<br />
        <input class="qcm" type="radio">10 m�tres<br />
        <p class="faux">Faux.<br />C'est trop peu. Revois ton calcul.</p>
        <input class="qcm" type="radio">30 m�tres<br />
        <p class="faux">Faux.<br />C'est trop peu. Revois ton calcul</p>
        <input class="qcm" type="radio">50 m�tres<br />
        <p class="faux">Faux.<br />C'est trop peu. Revois ton calcul</p>
<input class="qcm" type="radio">100 m�tres<br />
        <p class="vrai">Correct.<br />2000 volumes de 5 cm font une hauteur de 10.000 cm, soit 100 m�tres.</p>
      </form>
      <p>Quand tu as r�pondu � toutes les questions et bien compris les r�ponses, passe � l'exercice de la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
    </div>
    <?php include ("../../pied.inc.php"); ?>
</body>
</html>
