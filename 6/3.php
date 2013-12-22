<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Les programmes d'ordinateur</title>
  <style type="text/css">
.memoire {
  border: 1px solid blue;
  padding-top: 0;
  padding-bottom: 0;
  width: 100%;
  height: 3em;
  margin-left: 5px;
  background-color: #ffffcc;
  }
  .fraggauche {
  padding: 0 2em;
  float: left;
  height: 3em;
  width: 6%;
  background-color: #ffcc66;
  }
  .fragdroit {
  padding: 0 2em;
  float: right;
  height: 3em;
  width: 6%;
  background-color: #ff6600;
  }
  </style>
</head>
<body>
  <div id="conteneur">
	<?php 
	require ("./top.inc.php"); 
    require ("../../dewplayer.inc.php");
	?>
    <div id="texte">
      <h2>Le r�le de la m�moire de l'ordinateur</h2>
      <h3>Principe de fonctionnement de la m�moire</h3>
      <div class="info">
        <p><?php dewplay("3.mp3"); ?>A chaque fois que tu ex�cutes un nouveau programme, ce programme, les donn�es qu'il utilise et les r�sultats qu'il produit doivent se disposer dans la m�moire centrale.</p>
        <p>Dans l'illustration ci-dessous, on a repr�sent� en <strong style="color: rgb(204, 153, 51);">couleur ocre</strong> la zone de la m�moire centrale contenant les <strong>programmes</strong>, et en <strong style="color: rgb(255, 102, 0);">couleur rouge</strong> la zone qui contient les&nbsp;<strong>donn�es et les r�sultats</strong> des programmes.</p>
        <p>Quand tu commences � travailler avec le PC, le syst�me d'exploitation&nbsp;(Windows, Linux,...) -nomm� <strong>OS</strong> (Operating System) sur les sch�mas ci-dessous- est charg� automatiquement dans la m�moire.<br />Une autre partie de la m�moire sert � d�poser certaines informations (Ex: mot de passe, nom d'utilisateur, ...).</p>

      <div class="memoire">
        <div style="background-color: rgb(255, 204, 102);" class="fraggauche"><img src="images/os.png" style="width: 35px; height: 35px;" alt="OS"></div>
        <div class="fragdroit">&nbsp;</div>
      </div>
      <p>Pour le <strong>cours d'informatique</strong>, tu dois utiliser un navigateur web. Le syst�me d'exploitation reste en m�moire. Le navigateur s'ajoute. Un peu de m�moire suppl�mentaire est utilis�e pour d�poser les page sur lesquelles tu travailles.</p>
      <div class="memoire">
        <div class="fraggauche"><img src="images/os.png" style="width: 35px; height: 35px;" alt="OS"></div>
        <div class="fraggauche"><img src="images/ff.png" style="width: 37px; height: 35px;" alt="Firefox"></div>
        <div class="fragdroit">&nbsp;</div>
        <div class="fragdroit">&nbsp;</div>
        <div class="fragdroit">&nbsp;</div>
      </div>
      <p>Le cours d'informatique se termine, tu passe � la <strong>dactylo</strong>. Tu n'as plus besoin du navigateur. Tu le fermes. La m�moire qu'il occupait redevient libre.</p><br>
      <div class="memoire">
        <div class="fraggauche"><img src="images/os.png" style="width: 35px; height: 35px;" alt="OS"></div>
        <div class="fragdroit"></div>
        <div class="fragdroit"></div>
      </div>
      <p>Pour la dactylo, tu utilises un logiciel d'apprentissage de la frappe au clavier. Tu charges le programme en m�moire.</p>
      <div class="memoire">
        <div class="fraggauche"><img src="images/os.png" style="width: 35px; height: 35px;" alt="OS"></div>
        <div class="fraggauche"><img src="images/isnddact.gif" alt="Dactylo" height="34" width="34"></div>
        <div class="fragdroit"></div>
        <div class="fragdroit"></div>
        <div class="fragdroit"></div>
      </div>
      <p>Pour un exercice particulier, tu dois utiliser <strong>un logiciel de traitement de textes</strong>, en plus.</p>
      <div class="memoire">
        <div class="fraggauche"><img src="images/os.png" style="width: 35px; height: 35px;" alt="OS"></div>
        <div class="fraggauche">&nbsp;<img src="images/isnddact.gif" alt="Dactylo" height="34" width="34"></div>
        <div class="fraggauche">&nbsp;<img src="images/txt.png" alt="OpenOffice.org" height="37" width="40"></div>
        <div class="fragdroit">&nbsp;</div>
        <div class="fragdroit">&nbsp;</div>
        <div class="fragdroit">&nbsp;</div>
        <div class="fragdroit">&nbsp;</div>
      </div>
      <p>Tu vois donc que la m�moire centrale se vide et se remplit au gr� de l'utilisation des programmes. Sur la derni�re illustration, il reste tr�s peu de m�moire pour encore ajouter des programmes suppl�mentaires.</p>
      <p>Pendant le cours de dactylo, tu surfes clandestinement sur Internet. La situation devient alors tr�s limite: la m�moire du PC est satur�e: il n'y a plus de m�moire libre.</p>
      <div class="memoire">
        <div class="fraggauche"><img src="images/os.png" style="width: 35px; height: 35px;" alt="Windows"></div>
        <div class="fraggauche">&nbsp;<img src="images/isnddact.gif" alt="Dactylo" height="34" width="34"></div>
        <div class="fraggauche">&nbsp;<img src="images/txt.png" alt="OpenOffice.org" height="37" width="40"></div>
        <div class="fraggauche">&nbsp;<img src="images/ff.png" style="width: 37px; height: 35px;" alt="Firefox"></div>
        <div class="fragdroit">&nbsp;</div>
        <div class="fragdroit">&nbsp;</div>
        <div class="fragdroit">&nbsp;</div>
        <div class="fragdroit">&nbsp;</div>
      </div>
     </div>
      <p>Quand tu es pr�t(e) � r�pondre � des questions sur le sujet �voqu� ci-dessus, passe � la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
	</div>
<?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
