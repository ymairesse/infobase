<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta name="generator" content="HTML Tidy for Linux/x86 (vers 6 November 2007), see www.w3.org">
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">

  <title>Le clavier de l'ordinateur</title>
  <script language="javascript" type="text/javascript">
function verifier (formulaire)
  {
  var obj = document.forms[0][0];
  if (obj.value == "[[[@@@###{{{\\\\\\$$$///}}}@@@]]]")
    alert('Bravo! Tu as réussi!')
    else
    alert('Ce n\'est pas encore tout à fait correct...');
  return false;
  }
  </script>
</head>

<body>
  <div id="conteneur">
    <?php include ("./top.inc.php");?>
    <div id="texte">
      <h2>La touche Alt Gr</h2>
    <div class="info">  
      <img style="width: 44px; height: 32px;" src="images/altgr.png" alt="AltGr" class="imagegauche">
      <p>La touche <span class="clavier">Alt Gr</span> est située à droite de la barre d'espacement.</p>
      <p>Elle permet d'obtenir le troisième caractère situé sur certaines touches du clavier. Cette touche s'utilise comme une touche de majuscules.</p>
      <p>Exemple: Sur le clavier "&nbsp;Français&nbsp;" de Belgique, en gardant la touche <span class="clavier">Alt Gr</span> enfoncée et en frappant la touche qui porte l'étoile <span class="clavier">*</span> et le dollar <span class="clavier">$</span>, on obtient un crochet fermant <span class="clavier">]</span>.<br>
      Sur un autre clavier, les combinaisons peuvent être différentes.</p>

      <div class="encadre attention">
        <p>Le symbole de l'Euro &euro; s'obtient par la combinaison de touches <span class="clavier">Alt Gr</span> + <span class="clavier">E</span>. Cette troisième fonction de la touche <span class="clavier">E</span> ne figure pas sur les claviers plus anciens, même si elle fonctionne parfaitement.</p>
      </div>
	</div>
      <div class="travail">
        <ul>
          <li>Vérifie quelles touches portent un troisième caractère. Repère parfaitement leurs positions.</li>

          <li>Amène le curseur de texte dans le cadre ci-dessous et reproduis-y le discours du personnage pas trop content ci-dessous. Clique sur le bouton <span class="menu">Vérifier</span> quand tu penses avoir parfaitement recopié le contenu du phylactère.</li>
        </ul>

        <form name="form1" method="post" action="%3C?php%20echo%20$_SERVER['PHP_SELF']%20?%3E" onsubmit="javascript:return(verifier(this))" id="form1">
          <div class="supplement" style="text-align:center">
          <input name="insulte" size="35" maxlength="35" value="<?php isset($_POST['insulte']) ? $_POST['insulte']:Null; ?>" type="text"> 
          <input name="Submit" value="Vérifier" type="submit"><br>
          <img src="images/pascontent.gif" alt="Pas poli, le monsieur" height="187" width="350"></div>
        </form>

        <p>Si tu n'arrives pas immédiatement au bon résultat, il est inutile de [[[@@@###{{{\\\$$$///}}}@@@]]]</p>
      </div>

      <p>Quand tu as fini, passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div><?php include ("../../pied.inc.php");?>
  </div>
</body>
</html>
