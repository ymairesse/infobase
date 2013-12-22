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
      <h2>Le rôle de la mémoire de l'ordinateur</h2>
      <h3>Principe de fonctionnement de la mémoire</h3>
      <div class="info">
        <p><?php dewplay("3.mp3"); ?>A chaque fois que tu exécutes un nouveau programme, ce programme, les données qu'il utilise et les résultats qu'il produit doivent se disposer dans la mémoire centrale.</p>
        <p>Dans l'illustration ci-dessous, on a représenté en <strong style="color: rgb(204, 153, 51);">couleur ocre</strong> la zone de la mémoire centrale contenant les <strong>programmes</strong>, et en <strong style="color: rgb(255, 102, 0);">couleur rouge</strong> la zone qui contient les&nbsp;<strong>données et les résultats</strong> des programmes.</p>
        <p>Quand tu commences à travailler avec le PC, le système d'exploitation&nbsp;(Windows, Linux,...) -nommé <strong>OS</strong> (Operating System) sur les schémas ci-dessous- est chargé automatiquement dans la mémoire.<br />Une autre partie de la mémoire sert à déposer certaines informations (Ex: mot de passe, nom d'utilisateur, ...).</p>

      <div class="memoire">
        <div style="background-color: rgb(255, 204, 102);" class="fraggauche"><img src="images/os.png" style="width: 35px; height: 35px;" alt="OS"></div>
        <div class="fragdroit">&nbsp;</div>
      </div>
      <p>Pour le <strong>cours d'informatique</strong>, tu dois utiliser un navigateur web. Le système d'exploitation reste en mémoire. Le navigateur s'ajoute. Un peu de mémoire supplémentaire est utilisée pour déposer les page sur lesquelles tu travailles.</p>
      <div class="memoire">
        <div class="fraggauche"><img src="images/os.png" style="width: 35px; height: 35px;" alt="OS"></div>
        <div class="fraggauche"><img src="images/ff.png" style="width: 37px; height: 35px;" alt="Firefox"></div>
        <div class="fragdroit">&nbsp;</div>
        <div class="fragdroit">&nbsp;</div>
        <div class="fragdroit">&nbsp;</div>
      </div>
      <p>Le cours d'informatique se termine, tu passe à la <strong>dactylo</strong>. Tu n'as plus besoin du navigateur. Tu le fermes. La mémoire qu'il occupait redevient libre.</p><br>
      <div class="memoire">
        <div class="fraggauche"><img src="images/os.png" style="width: 35px; height: 35px;" alt="OS"></div>
        <div class="fragdroit"></div>
        <div class="fragdroit"></div>
      </div>
      <p>Pour la dactylo, tu utilises un logiciel d'apprentissage de la frappe au clavier. Tu charges le programme en mémoire.</p>
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
      <p>Tu vois donc que la mémoire centrale se vide et se remplit au gré de l'utilisation des programmes. Sur la dernière illustration, il reste très peu de mémoire pour encore ajouter des programmes supplémentaires.</p>
      <p>Pendant le cours de dactylo, tu surfes clandestinement sur Internet. La situation devient alors très limite: la mémoire du PC est saturée: il n'y a plus de mémoire libre.</p>
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
      <p>Quand tu es prêt(e) à répondre à des questions sur le sujet évoqué ci-dessus, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
	</div>
<?php include ("../../pied.inc.php"); ?>
  </div>
</body>
</html>
