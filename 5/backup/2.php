<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script type="text/javascript" src="../../js/jquery.js">
</script>
  <title>Le clavier de l'ordinateur</title>
  <script type="text/javascript">
	$(document).ready (function (){
        $("#zone > area").hover(function (){
                var classe = $(this).attr("class");
                var test = "#explications ."+classe;
                $(test).show()
                }, function (){
                var classe = $(this).attr("class");
                var test = "#explications ."+classe;
                $(test).hide()
                });
        })
  </script>
</head>
<body>
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>Plan du clavier</h2>
      <div class="info">
      <p>Attention: toutes les explications qui figurent dans les pages qui suivent correspondent au clavier Français pour la Belgique.<br>
      Le clavier Français pour la France, pour le Canada, pour la Suisse,... sont différents.</p>
      <div style="width: 45%; float: left;" class="schemaClavier">
        <div style="text-align: center;">
          Clavier belge francophone <img style="width: 350px; height: 110px;" alt="Clavier belge" src="images/350px-Belgian_keyboard_layout.png"><br>
        </div><a class="micro" target="_blank" href="http://en.wikipedia.org/wiki/Image:Belgian_pc_keyboard.svg">Origine de l'illustration</a>
      </div>
      <div style="width: 45%; float: right;" class="schemaClavier">
        <div style="text-align: center;">
          Clavier suisse francophone <img style="width: 350px; height: 117px;" alt="Clavier suisse francophone" src="images/350px-KB_Swiss.svg.png"><br>
        </div><a target="_blank" href="http://en.wikipedia.org/wiki/Image:KB_Swiss.svg"><span class="micro">Origine de l'illustration</span></a>
      </div>
      <div style="width: 45%; float: left;" class="schemaClavier">
        <div style="text-align: center;">
          Clavier français <img style="width: 350px; height: 117px;" alt="Clavier français" src="images/350px-KB_France.svg.png"><br>
        </div><a href="http://en.wikipedia.org/wiki/Image:KB_France.svg" target="_blank"><span class="micro">Origine de l'illustration</span></a>
      </div>
      <div style="width: 45%; float: right;" class="schemaClavier">
        <div style="text-align: center;">
          Clavier Canadien francophone <img style="width: 350px; height: 117px;" alt="Clavier Canadien francophone" src="images/350px-KB_Canadian_French.svg.png"><br>
        </div><a class="micro" href="http://en.wikipedia.org/wiki/Image:KB_Canadian_French.svg" target="_blank">Origine de l'illustration</a>
      </div>
      <p style="clear: both; padding-top: 1em;">Toutes les touches ne figurent pas au même endroit sur chacun de ces claviers. Les indications portées par les touches peuvent être légèrement différentes (<span class="clavier">Fin</span> au lieu de <span class="clavier">End</span>, <span class="clavier">Suppr</span> au lieu de <span class="clavier">Delete</span>,&nbsp;...).</p>
      <p>Si tu n'utilises pas le clavier "&nbsp;Français pour la Belgique&nbsp;", demande à ton professeur de t'indiquer les informations à rectifier dans ces pages.</p>
      </div>
      <div class="travail">
        <p>Passe la souris sur chacune des zones colorées du clavier afin de connaître leur nom et leur rôle. Les informations apparaîtront sous l'image.</p>
        <p class="supplement" style="text-align: center;"><img src="images/zoneclav.png" alt="Les zones du clavier" usemap="#fonction" border="0" height="197" width="500"> <map name="fonction" id="zone">
          <area class="fonctions" shape="rect" coords="46,43,330,69" href="#clavier" title="[Touches de fonctions.]">
          <area class="numerique" shape="rect" coords="407,71,497,179" href="#clavier" title="[Pavé numérique]" alt="Pavé numérique">
          <area class="curseur" shape="poly" coords="404,73,356,73,355,153,334,156,336,178,401,178,401,154,382,154,382,134,382,119,400,119,401,73" href="#clavier" title="[Touches de mouvement du curseur de texte.]" alt="Touches de mouvement du curseur">
          <area class="alpha" shape="rect" coords="4,72,331,181" href="#clavier" title="[Clavier alphanumérique]" alt="Clavier alphanumérique">
        </map></p>
        <div id="explications" style="height: 10em;">
          <div class="fonctions" style="display: none;">
            <strong style="background-color: red; color: white;">Touches de fonctions:</strong><br>
            Elles permettent souvent de sélectionner telle ou telle partie d'un programme que l'on utilise.<br>
            Elles portent chacune la lettre F suivi d'un numéro.
          </div>
          <div class="numerique" style="display: none;">
            <strong style="background-color: rgb(255, 153, 255);">Pavé numérique:</strong><br>
            Lorsque le voyant <span class="clavier">[Num Lock]</span> du clavier est allumé, le pavé numérique donne aisément accès aux chiffres et aux opérateurs arithmétiques.<br>
            Il est plus facile de frapper les chiffres sur le pavé numérique que sur le pavé alphabétique du clavier: les majuscules ne sont pas nécessaires.<br>
            Pour allumer le voyant, frapper la touche <span class="clavier">[Num Lock]</span>.
          </div>
          <div class="alpha" style="display: none;">
            <strong style="background-color: rgb(51, 102, 255); color: white;">Clavier alphanumérique</strong><br>
            C'est l'ensemble des touches du clavier qui porte des lettres, des chiffres, des signes de ponctuation et différents signes.<br>
            C'est la partie du clavier qui ressemble à un clavier de machine à écrire.
          </div>
          <div class="curseur" style="display: none;">
            <strong style="background-color: rgb(51, 204, 0);">Touches de mouvement du curseur de texte</strong><br>
            Si l'on frappe ces touches, on peut faire bouger le curseur de texte:<br>
            - à l'aide des touches fléchées: vers le haut, vers le bas, à gauche, à droite;<br>
            - à l'aide des touches <span class="clavier">[PgUp]</span> et <span class="clavier">[PgDn]</span>: d'une page vers le haut ou vers le bas;<br>
            - à l'aide des touches <span class="clavier">[Home]</span> et <span class="clavier">[End]</span>: vers le début ou la fin de la ligne ou de la page.
          </div>
        </div>
      </div>
      <p>Quand tu connais par coeur le nom de toutes les zones, passe à la page suivante. <?php include ("../../suivant.inc.php"); ?></p>
    </div>
    <?php include ("../../pied.inc.php"); ?>
</body>
</html>
