<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Les programmes d'ordinateur</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php");?>
    <div id="texte">
      <h2>Notion de programme</h2>
      <h3>Qu'est-ce qu'un programme?</h3>
      <div class="info">
        <p>Un programme est une <strong>suite d'actions à exécuter dans un ordre bien défini</strong> que l'on envisage de réaliser. Il n'est pas nécessaire de parler d'informatique quand on envisage l'idée de "&nbsp;programme&nbsp;".</p>
        <p>Mon programme pour la matinée.<br></p>
        <ol>
          <li>Me lever</li>
          <li>Déjeuner</li>
          <li>Passer chez Frédéric pour rechercher la BD que je lui ai prêtée</li>
          <li>Acheter le journal</li>
          <li>Rentrer à la maison</li>
          <li>Ecouter le dernier CD des Upstreet Girls</li>
        </ol>
      </div>
      <h3>Exemple et contre-exemple</h3>
      <div class="travail">
        <ul>
          <li>Une recette de cuisine est, en quelques sortes, un programme. Pourquoi?</li>
          <li>Une liste de courses pour le supermarché n'est pas un programme. Pourquoi?</li>
        </ul>
      <form method="post" action="print.php">
        <p>
        <textarea name="recette" cols="60" rows="4">Une recette de cuisine est un programme parce que</textarea> 
        <textarea name="courses" cols="60" rows="4">Une liste de courses n'est pas un programme parce que</textarea>
        </p>
        <label>Nom&nbsp;:</label> <input name="nom" id="nom" size="40" type="text"><br>
        <label>Prénom:</label> <input name="prenom" id="prenom" size="40" type="text"><br>
        <label>Classe&nbsp;:</label> <input name="classe" size="4" maxlength="4" type="text"><br>
        <div style="text-align: center;">
          <input name="Submit" value="Envoyer à l'impression" type="submit">
        </div>
      </form>
      </div>
      <p>Quand tu as répondu à la question, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
    </div>
<?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
