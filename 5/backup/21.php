<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script language="JavaScript" type="text/javascript">
function test (arg)
  {if (confirm(arg+":\nest-ce bien la bonne orthographe?\nSi c'est juste, frappe <Enter> ou clique sur <OK>.\nSi c'est faux, clique sur <Annuler> ou frappe <Esc>"))
                {alert ("Merci "+arg+".\nTu as cliqué sur OK ou frappé une touche <Enter>.\nTu peux frapper <Enter> pour continuer")}
  else
  {alert("Tu as cliqué sur Annuler ou\ntu as frappé la touche <Esc>.\nTu peux frapper <Enter> pour continuer.")}
  }
  </script>
  <title>Le clavier de l'ordinateur</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php");?>
    <div id="texte">
      <h2>Les touches Enter</h2>
      <h3>Où se trouvent les touches Enter?</h3>

      <div class="info">
        <p><img src="images/enter.gif" alt="Enter" class="imagegauche" align="left" height="32" width="32">Le clavier de l'ordinateur comporte deux touches particulières.</p>
        <ul style="margin-left: 4em;">
          <li>la touche marquée <span class="clavier">Enter</span> du pavé numérique et</li>
          <li>la touche marquée d'une flèche "&nbsp;cassée&nbsp;", à l'extrême droite du clavier alphanumérique (sur certains claviers, cette touche est également marquée <span class="clavier">Enter</span>).</li>
        </ul>
      </div>

      <h3>A quoi servent les touches Enter?</h3>
      <div class="info">
        <p>Chacune de ces touches peut avoir deux rôles différents:</p>
        <ul>
          <li><strong>Rôle 1</strong>. L'appui sur une touche <span class="clavier">Enter</span> signifie "&nbsp;message terminé&nbsp;" ou "&nbsp;je suis d'accord&nbsp;". Quand l'utilisateur de l'ordinateur doit fournir une information par le clavier et qu'il a fini d'écrire, il frappe la touche <span class="clavier">Enter</span> pour "prévenir" l'ordinateur.</li>
        </ul>
      </div>

      <form action="" class="travail">
        <ul>
          <li>Ecris ton prénom dans la zone de texte ci-dessous, puis clique sur le bouton <span class="menu">OK</span>. Suis ensuite les instructions.</li>
        </ul>Mon prénom est <input name="T1" id="T1" size="35" type="text"> <input name="Button" value="OK" onclick="test(T1.value)" type="button">
      </form>

      <div class="info">
        <ul>
          <li><strong>Rôle 2</strong>. L'appui sur une touche <span class="clavier">Enter</span> peut également avoir le rôle de passage à la ligne suivante ou, plus précisément, de fin de paragraphe dans les logiciels de traitement de textes.</li>
        </ul>
      </div>

      <form action="" class="travail">
        <ul>
          <li>Frappe 3 lignes de texte dans la zone suivante. A la fin de chaque ligne, frappe une touche <span class="clavier">Enter</span>.</li>
        </ul>
        <div style="text-align:center">
          <textarea rows="4" name="S1" cols="60">
</textarea>
        </div>
      </form>

      <fieldset class="attention">
		<legend>Attention</legend>
        <p><strong>Remarque:</strong> en général, les programmes d'ordinateur sont capables de passer tout seuls à la ligne dans un paragraphe. Il ne faut utiliser la touche <span class="clavier">Enter</span> qu'<strong>à la fin d'un paragraphe</strong> pour forcer le retour à la ligne.</p>
      </fieldset>

      <p>Quand tu as terminé les trois petites applications, passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div><?php include ("../../pied.inc.php");
    ?>
  </div>
</body>
</html>
