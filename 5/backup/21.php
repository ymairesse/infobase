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
                {alert ("Merci "+arg+".\nTu as cliqu� sur OK ou frapp� une touche <Enter>.\nTu peux frapper <Enter> pour continuer")}
  else
  {alert("Tu as cliqu� sur Annuler ou\ntu as frapp� la touche <Esc>.\nTu peux frapper <Enter> pour continuer.")}
  }
  </script>
  <title>Le clavier de l'ordinateur</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php");?>
    <div id="texte">
      <h2>Les touches Enter</h2>
      <h3>O� se trouvent les touches Enter?</h3>

      <div class="info">
        <p><img src="images/enter.gif" alt="Enter" class="imagegauche" align="left" height="32" width="32">Le clavier de l'ordinateur comporte deux touches particuli�res.</p>
        <ul style="margin-left: 4em;">
          <li>la touche marqu�e <span class="clavier">Enter</span> du pav� num�rique et</li>
          <li>la touche marqu�e d'une fl�che "&nbsp;cass�e&nbsp;", � l'extr�me droite du clavier alphanum�rique (sur certains claviers, cette touche est �galement marqu�e <span class="clavier">Enter</span>).</li>
        </ul>
      </div>

      <h3>A quoi servent les touches Enter?</h3>
      <div class="info">
        <p>Chacune de ces touches peut avoir deux r�les diff�rents:</p>
        <ul>
          <li><strong>R�le 1</strong>. L'appui sur une touche <span class="clavier">Enter</span> signifie "&nbsp;message termin�&nbsp;" ou "&nbsp;je suis d'accord&nbsp;". Quand l'utilisateur de l'ordinateur doit fournir une information par le clavier et qu'il a fini d'�crire, il frappe la touche <span class="clavier">Enter</span> pour "pr�venir" l'ordinateur.</li>
        </ul>
      </div>

      <form action="" class="travail">
        <ul>
          <li>Ecris ton pr�nom dans la zone de texte ci-dessous, puis clique sur le bouton <span class="menu">OK</span>. Suis ensuite les instructions.</li>
        </ul>Mon pr�nom est <input name="T1" id="T1" size="35" type="text"> <input name="Button" value="OK" onclick="test(T1.value)" type="button">
      </form>

      <div class="info">
        <ul>
          <li><strong>R�le 2</strong>. L'appui sur une touche <span class="clavier">Enter</span> peut �galement avoir le r�le de passage � la ligne suivante ou, plus pr�cis�ment, de fin de paragraphe dans les logiciels de traitement de textes.</li>
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
        <p><strong>Remarque:</strong> en g�n�ral, les programmes d'ordinateur sont capables de passer tout seuls � la ligne dans un paragraphe. Il ne faut utiliser la touche <span class="clavier">Enter</span> qu'<strong>� la fin d'un paragraphe</strong> pour forcer le retour � la ligne.</p>
      </fieldset>

      <p>Quand tu as termin� les trois petites applications, passe � la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div><?php include ("../../pied.inc.php");
    ?>
  </div>
</body>
</html>
