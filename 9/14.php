<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Introduction à l'Internet</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>L'URL d'une page Web</h2>
      <div class="info"><p>Si je veux consulter un document qui se trouve sur un ordinateur distant connecté à l'Internet, il faut que je puisse préciser très exactement l'adresse de ce document.</p>
      <div class="encadre">
        L'URL (Uniform Ressource Locator) est l'adresse complète d'un document.
      </div>
      <p>Elle précise:</p>
      <ol>
        <li>l'adresse de l'ordinateur sur lequel se trouve le document (adresse IP ou DNS) et</li>
        <li>l'endroit où se trouve ce document sur cet ordinateur.</li>
        <li>le nom du fichier qui contient le document</li>
      </ol>
      <p>Exemple:<br>
      http:<strong>//info.sio2.be/cours/info/infobase/9/14.php</strong></p>
      <p>L'URL de la page actuelle se trouve indiquée en haut de l'écran, dans la barre d'adresse.</p>
      <table style="width: 350px; margin-left: auto; margin-right: auto;" border="1" cellpadding="0" cellspacing="0">
        <tbody>
          <tr style="text-align:center">
            <td>adresse DNS</td>
            <td>chemin</td>
            <td>doc</td>
          </tr>
          <tr style="font-weight:bold">
            <td>info.sio2.be</td>
            <td>/cours/info/infobase/9/</td>
            <td>14.php</td>
          </tr>
        </tbody>
      </table>
      <p><strong>La première partie</strong> est bien l'adresse DNS de l'ordinateur sur lequel se trouve le document.<br>
      <strong>La deuxième partie</strong> indique à quel endroit du disque dur de cet ordinateur se trouve le document <small>(ce point sera détaillé plus loin dans le cours)</small>.<br>
      <strong>La troisième partie</strong> indique le nom du document.</p>
     </div>
      <p>Quand tu es prêt(e) à répondre à des questions sur les informations données ici, passe à la page suivante <?php include ("../../suivant.inc.php"); ?></p>
    </div><?php include ("../../pied.inc.php");?>
  </div>
</body>
</html>
