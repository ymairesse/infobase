<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta name="generator" content="HTML Tidy for Linux/x86 (vers 6 November 2007), see www.w3.org">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Introduction � l'Internet</title>
</head>
<body>
  <div id="conteneur">
    <?php  include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>Les adresses DNS des ordinateurs</h2>
      <form action="" class="travail">
        Une adresse DNS est du type<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Non, ceci est une adresse IP')"> 192.35.28.64<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Tout � fait correct')"> www.yahoo.com<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Non, ceci est une adresse e-mail.')"> postmastair@isnd.be
      </form>
      <form action="" class="travail">
        Une adresse DNS est form�e de<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Cette r�ponse n\'est pas correcte.')"> une partie<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Dans certains cas, l\'adresse DNS ne contient que deux parties,\nmais ce n\'est pas le nombre correct g�n�ralement.')"> deux parties<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Tout � fait correct.')"> trois parties<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Non, ne confonds-tu pas avec une adresse IP?')"> quatre parties
      </form>
      <form action="" class="travail">
        La premi�re partie de l'adresse DNS d'un ordinateur d�signe<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Cette r�ponse n\'est pas correcte.')"> La soci�t� � laquelle appartient cet ordinateur<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Parfaitement juste')"> Le nom donn� � cet ordinateur<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Cette r�ponse n\'est pas correcte.')"> le domaine auquel appartient cet ordinateur<br>
      </form>
      <form action="" class="travail">
        La deuxi�me partie de l'adresse DNS d'un ordinateur d�signe<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Parfaitement juste')"> La soci�t� � laquelle appartient cet ordinateur<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Cette r�ponse n\'est pas correcte.')"> Le nom donn� � cet ordinateur<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Cette r�ponse n\'est pas correcte.')"> le domaine auquel appartient cet ordinateur<br>
      </form>
      <form action="" class="travail">
        La troisi�me partie de l'adresse DNS d'un ordinateur d�signe<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Cette r�ponse n\'est pas correcte.')"> La soci�t� � laquelle appartient cet ordinateur<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Cette r�ponse n\'est pas correcte.')"> Le nom donn� � cet ordinateur<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Il s\'agit bien du domaine.')"> le domaine auquel appartient cet ordinateur<br>
      </form>
      <form action="" class="travail">
        L'ordinateur tof.belgium.ca appartient � une soci�t�<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Faux. Quelle partie de l\'adresse\npeut te donner la r�ponse?')"> en Belgique<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('Parfaitement correct, tu as reconnu .ca pour le Canada.')"> au Canada<br>
        <input type="radio" name="radiobutton" value="radiobutton" onclick="alert('R�ponse fausse. Un �l�ment de l\'adresse\npermet de donner cette pr�cision.')"> il est impossible de le dire
      </form>
      <p>Quand tu as r�pondu aux questions et bien compris les r�ponses, passe � la page suivante. <?php include ("../../suivant.inc.php");?></p>
    </div>
    <?php include ("../../pied.inc.php");?>
  </div>
</body>
</html>
