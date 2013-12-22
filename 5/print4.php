<?php // anti-moz ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script language="JavaScript" type="text/javascript">
function WindowPrint () {
  window.print ();
  alert('Vérifie que ta page est imprimée avant de poursuivre.');
  history.go(-1);
  }
  </script>
  <title>Le clavier de l'ordinateur</title>
</head>
<body>
    <?php
    foreach ($_POST as $key=>$value)
        $$key = stripslashes($value);
    ?>
  <div id="conteneur">
    <div id="texte">
      <h2>Le touches Esc, Alt et CTRL: synthèse</h2>
      <p>1. On dit que les touches <span class="clavier">Alt</span> et <span class="clavier">Ctrl</span> s'utilisent comme des touches de majuscules. Cela signifie&nbsp;:<br>
      <?php echo nl2br($r1) ?><br>
      2. La touche <span class="clavier">Esc</span> ne s'utilise pas comme une touche de majuscules parce que&nbsp;:<br>
      <?php echo nl2br($r2) ?><br>
      <label>Nom</label> <?php echo $nom ?><br>
      <label>Prénom</label> <?php echo $prenom ?><br>
      <label>Classe</label>&nbsp;<?php echo $classe ?><br>
      <form action="" class="invisible">
        <p style="text-align:center"><input type="button" name="Submit" value="Imprimer" onclick="WindowPrint()"> <input type="button" name="Submit2" value="Annuler" onclick="javascript:history.go(-1)"></p>
      </form>
    </div>
  </div>
</body>
</html>
