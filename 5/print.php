<?php // anti-moz ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script type="text/javascript">
function WindowPrint () {
  window.print ();
  alert('Vérifie que ta page est imprimée avant de poursuivre.');
  history.go(-1);
  }
  </script>
  <title>Le clavier de l'ordinateur</title>
</head>
<body>
  <div id="conteneur">
    <?php
    include ("./top.inc.php");
    ?>
    <div id="texte">
        <?php
        foreach ($_POST as $key => $value)
            $$key = stripslashes($value);
        ?>
      <h2>Les touches de mouvement du curseur de texte: synthèse</h2>1. Le rôle des touches de mouvement du curseur est de <?php echo nl2br("$r1"); ?>
      <hr>
      2. Les 8 touches de mouvement du curseur sont<br>
      <?php echo nl2br("$r2"); ?><br>
      <hr>
      3. Le rôle des touches <span class="clavier">Page Up</span> et <span class="clavier">Page Down</span> est&nbsp;:<br>
      <?php echo nl2br("$r3"); ?>
      <hr>
      4. Le rôle des touches fléchées est&nbsp;:<br>
      <?php echo nl2br("$r4"); ?><br>
      <hr>
      5. Le rôle PRECIS des touches <span class="clavier">Home</span> et <span class="clavier">End</span> est&nbsp;:<br>
      <?php echo nl2br("$r5"); ?><br>
      <hr>
      6. La signification des expressions <span class="clavier">Page Up</span> et <span class="clavier">Page Down</span> est&nbsp;:<br>
      <?php echo nl2br("$r6"); ?>
      <hr>
      <label>Nom&nbsp;:</label> <?php echo "$nom" ?><br>
      <label>Prénom&nbsp;:</label> <?php $prenom ?><br>
      <label>Classe&nbsp;:</label> <?php echo $classe ?><br>
      <form action="" class="invisible">
        <div style="text-align:center">
          <input type="button" onclick="WindowPrint()" value="Imprimer"> <input type="button" name="Submit2" value="Annuler" onclick="javascript:history.go(-1)">
        </div>
      </form>
    </div>
    <?php include ("../../pied.inc.php");?>
  </div>
</body>
</html>