<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta id="_moz_prolog" content="">
    <meta name="generator" content="HTML Tidy for Linux/x86 (vers 1 September 2005), see www.w3.org">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
    <title>
      Le courrier �lectronique
    </title>
  </head>
  <body>
    <div id="conteneur">
      <?php include ("./top.inc.php");
            ?>
      <div id="texte">
        <form name="form1" method="post" action="../../envavis.php" id="form1">
          <h2>
            Ton avis m'int�resse
          </h2>
          <p>
            Afin d'am�liorer ce cours, il me serait utile de disposer de quelques informations sur la fa�on dont tu
            l'as per�u. Cela m'aiderait beaucoup que tu r�pondes rapidement aux quelques questions suivantes. Tu n'es
            pas oblig�(e) de r�pondre � toutes les questions.
          </p>
          <p>
            <label>Nom</label> <input name="nom" id="nom" type="text"><br>
            <span class="label">Ecole</span> <input name="ecole" id="ecole" type="text"><br>
            <label>Pays</label> <input name="pays" id="pays" type="text"><br>
            <label>�ge</label> <input name="age" id="age" size="3" maxlength="3" type="text"> <input name=
            "chapitre" value="11" type="hidden"> <input name="matiere" value="infobase" type="hidden">
          </p>
          <p>
            J'ai aim� <span class="micro">(indique une chose que tu as appr�ci�e)</span>
          </p>
          <p>
            <textarea name="aime" cols="60" rows="5" id="aime">
</textarea>
          </p>
          <p>
            Je n'ai pas aim� <span class="micro">(indique une chose que tu n'as pas appr�ci�e et qu'il faudrait
            supprimer ou compl�tement changer)</span>
          </p>
          <p>
            <textarea name="aimepas" cols="60" rows="5" id="aimepas">
</textarea>
          </p>
          <p>
            Autre remarque:
          </p>
          <p>
            <textarea name="rem" cols="60" rows="3" id="rem">
</textarea>
          </p>
          <p style="text-align: center;">
            <input name="Submit" value="Envoyer" type="submit">
          </p>
        </form>
      </div><?php include ("../../pied.inc.php");
            ?>
    </div>
  </body>
</html>
