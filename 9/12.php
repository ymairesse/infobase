<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta name="generator" content="HTML Tidy for Linux/x86 (vers 6 November 2007), see www.w3.org">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Introduction à l'Internet</title>
</head>
<body>
  <div id="conteneur">
    <?php  include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>Les adresses DNS des ordinateurs</h2>
      <form action="" class="travail">
        Une adresse DNS est du type<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Non, ceci est une adresse IP')"> 192.35.28.64<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Tout à fait correct')"> www.yahoo.com<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Non, ceci est une adresse e-mail.')"> postmastair@isnd.be
      </form>
      <form action="" class="travail">
        Une adresse DNS est formée de<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Cette réponse n\'est pas correcte.')"> une partie<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Dans certains cas, l\'adresse DNS ne contient que deux parties,\nmais ce n\'est pas le nombre correct généralement.')"> deux parties<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Tout à fait correct.')"> trois parties<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Non, ne confonds-tu pas avec une adresse IP?')"> quatre parties
      </form>
      <form action="" class="travail">
        La première partie de l'adresse DNS d'un ordinateur désigne<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Cette réponse n\'est pas correcte.')"> La société à laquelle appartient cet ordinateur<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Parfaitement juste')"> Le nom donné à cet ordinateur<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Cette réponse n\'est pas correcte.')"> le domaine auquel appartient cet ordinateur<br>
      </form>
      <form action="" class="travail">
        La deuxième partie de l'adresse DNS d'un ordinateur désigne<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Parfaitement juste')"> La société à laquelle appartient cet ordinateur<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Cette réponse n\'est pas correcte.')"> Le nom donné à cet ordinateur<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Cette réponse n\'est pas correcte.')"> le domaine auquel appartient cet ordinateur<br>
      </form>
      <form action="" class="travail">
        La troisième partie de l'adresse DNS d'un ordinateur désigne<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Cette réponse n\'est pas correcte.')"> La société à laquelle appartient cet ordinateur<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Cette réponse n\'est pas correcte.')"> Le nom donné à cet ordinateur<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Il s\'agit bien du domaine.')"> le domaine auquel appartient cet ordinateur<br>
      </form>
      <form action="" class="travail">
        L'ordinateur tof.belgium.ca appartient à une société<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Faux. Quelle partie de l\'adresse\npeut te donner la réponse?')"> en Belgique<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Parfaitement correct, tu as reconnu .ca pour le Canada.')"> au Canada<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Réponse fausse. Un élément de l\'adresse\npermet de donner cette précision.')"> il est impossible de le dire
      </form>
      <p>Quand tu as répondu aux questions et bien compris les réponses, passe à la page suivante. <?php include ("../../suivant.inc.php");?></p>
    </div>
    <?php include ("../../pied.inc.php");?>
  </div>
</body>
</html>
