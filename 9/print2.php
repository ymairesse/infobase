<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script language="JavaScript" type="text/javascript">
function WindowPrint () {
  window.print ();
  alert('V�rifie que ta page est imprim�e avant de poursuivre.');
  history.go(-1);
  }
  </script>
  <title>Introduction � l'Internet</title>
</head>
<body>
  <div id="conteneur">
    <div id="texte">
      <h2>Introduction � l'Internet&nbsp;: synth�se du chapitre</h2>
      <p>La commande du syst�me d'exploitation qui permet de conna�tre le chemin suivi par les paquets d'information entre les ordinateurs est&nbsp;:</p><?php echo "<b>".$_POST['chemin']."</b>\n"; ?>
      <hr>
      <p>Sous Windows 2000/XP, la commande du syst�me d'exploitation qui permet de conna�tre l'adresse IP de son propre ordinateur est&nbsp;:</p><?php echo "<b>".$_POST['ip']."</b>\n"; ?>
      <hr>
      <p>Diff�rence entre les concepts suivants:</p>
      <ul>
        <li>Adresse URL et adresse DNS</li>
      </ul><?php echo "<b>".stripslashes($_POST['urldns'])."</b>\n"; ?>
      <ul>
        <li>Adresse IP et adresse DNS</li>
      </ul><?php echo "<b>".stripslashes($_POST['ipdns'])."</b>\n"; ?>
      <hr>
      <p>M�canisme du protocole TCP/IP pour le transfert des informations sur l'Internet.</p><?php echo "<b>".stripslashes($_POST['tcpip'])."</b>\n"; ?>
      <hr>
      <p>Principales informations que donne la commande TRACERT&nbsp;:</p><?php echo "<b>".stripslashes($_POST['tracert'])."</b>\n"; ?>
      <hr>
      <p><span style="float:left; width: 10em;">Nom&nbsp;:</span> <?php echo "<b>".stripslashes($_POST['nom'])."</b>\n"; ?></p>
      <p><span style="float:left; width: 10em;">Pr�nom&nbsp;:</span><?php echo "<b>".stripslashes($_POST['prenom'])."</b>"; ?></p>
      <p><span style="float:left; width: 10em;">Classe&nbsp;:</span><?php echo "<b>".$_POST['classe']."</b>\n"; ?></p>
      <form action="">
        <div style="text-align:center" class="bouton">
          <input type="button" name="submit" value="Imprimer" onclick="WindowPrint()">
        </div>
      </form>
      <hr>
    </div><?php include ("../../pied.inc.php");?>
  </div>
</body>
</html>
