<?php 
session_start(); 
$matiere = "infobase";
$chapitre = 19;
$titre = "Organisation des fichiers sur les disques";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title><?php echo $titre; ?></title>
</head>
<body>
<div id="conteneur">
<?php include ("./top.inc.php"); ?>
<div id="texte">
<h2> Ton avis m'int�resse </h2>
<p> Afin d'am�liorer ce cours, il me serait utile de disposer de quelques informations sur la fa�on dont tu l'as per�u. Cela m'aiderait beaucoup que tu r�pondes rapidement aux quelques questions suivantes.
Tu n'es pas oblig�(e) de r�pondre � toutes les questions. </p>
<form name="form1" method="post" action="../../envavis.php">
  <label>Nom</label><input name="nom" type="text"><br>
  <label>�cole</label><input name="ecole" type="text"><br>
  <label>Pays</label><input name="pays" type="text"><br>
  <label>�ge</label><input name="age" size="3" maxlength="3" type="text"><br>
  <p> J'ai aim� <span class="micro">(indique une chose que tu as appr�ci�e)</span> </p>
  <p><textarea name="aime" cols="60" rows="5" id="aime"></textarea></p>
  <p> Je n'ai pas aim� <span class="micro">(indique une chose que tu n'as pas appr�ci�e et qu'il faudrait supprimer ou compl�tement changer)</span></p>
  <p> <textarea name="aimepas" cols="60" rows="5" id="aimepas"></textarea></p>
  <p> Autre remarque:</p>
  <p> <textarea name="rem" cols="60" rows="3" id="rem"></textarea> </p>
  <?php
  // calcul captcha
  srand();
    $_SESSION['operation'] = substr('+-*', rand(0,2),1);
    switch ($_SESSION['operation'])
        {
        case "+":
        $_SESSION['nombre1'] = rand(5,10); $_SESSION['nombre2'] = rand(5,10);
        $_SESSION['resultat'] = $_SESSION['nombre1']+$_SESSION['nombre2'];
        break;
    
        case "-":
        $_SESSION['nombre1'] = rand(5,10); $_SESSION['nombre2'] = rand(1,5); 
        $_SESSION['resultat'] = $_SESSION['nombre1']-$_SESSION['nombre2'];
        break;
        
        case "*":
        $_SESSION['nombre1'] = rand(1,8); $_SESSION['nombre2'] = rand(1,5); 
        $_SESSION['resultat'] = $_SESSION['nombre1']*$_SESSION['nombre2'];
        break;
        }
  ?>
   <p>Pour ennuyer les spammeurs qui utilisent ce formulaire, merci de r�pondre � la question suivante:<br>Quel est le r�sultat du calcul :&nbsp;
    <?php echo $_SESSION['nombre1']." ". $_SESSION['operation']." ".$_SESSION['nombre2']." = ";?>
    <input maxlength="3" size="3" name="calcul" class="obligatoire">[requis]</p>

  <p style="text-align: center;"> <input name="Submit" value="Envoyer" type="submit"> </p>
    <?php
// indication des mati�res et chapitre
$texte = <<<EOF
  <input name="chapitre" value="##chapitre##" type="hidden"> <input name="matiere" value="##matiere##" type="hidden"> 
EOF;
$texte = str_replace ("##chapitre##", $chapitre, $texte);
$texte = str_replace ("##matiere##", $matiere, $texte);
echo $texte;
?>
</form>
</div>
<?php include ("../../pied.inc.php"); ?> </div>
</body>
</html>
