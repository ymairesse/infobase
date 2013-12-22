<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <title>Le clavier de l'ordinateur</title>
</head>
<body>
  <div id="conteneur">
    <?php include ("./top.inc.php");?>
    <div id="texte">
      <h2>Les touches de majuscules</h2>
      <div class="info">
        <p><img src="images/majusc.gif" alt="Majuscules" class="imagegauche" align="left" height="32" width="96">Le clavier alphanumérique dispose de touches spéciales pour écrire en majuscules. Il s'agit de deux touches grises disposées à gauche et à droite du clavier alphanumérique et qui portent deux grosses flèches vers le haut.</p>
        <p>Cette touche permet également d'atteindre le deuxième signe présent sur certaines touches (les chiffres dans la rangée supérieure du clavier alphanumérique, ou encore "%", "+", "/", ...).</p>
        <p>Sur certains claviers, la notation "Shift" accompagne la flèche vers le haut.</p>
      </div>
      <fieldset class="encadre attention">
        <legend style="text-transform: uppercase;">à retenir</legend>Il ne faut pas confondre les touches de majuscules avec la touche de blocage de majuscules qui sera évoquée plus loin.
      </fieldset>
      <div class="info">
        <p>Les touches de majuscules font partie du groupe des <strong>touches de commutation</strong>.</p>
        <p>L'appui d'une touche de commutation permet de modifier l'effet obtenu lorsque l'on frappe une autre touche en même temps.</p>
        <ul>
          <li>Lorsque l'on frappe la touche <span class="clavier">E</span>, on obtient simplement une lettre "&nbsp;e&nbsp;" minuscule.</li>
          <li>Lorsque l'on appuie une touche de majuscules et la touche <span class="clavier">E</span>, on obtient la lettre "&nbsp;E&nbsp;" majuscule.</li>
        </ul>
      </div>
      <div class="encadre">
        L'effet de la frappe de la touche <span class="clavier">E</span> est donc modifié par l'appui de la touche de majuscules.
      </div>
      <form action="" class="travail">
        <ul>
          <li>Amène le curseur de texte dans la ligne ci-dessous, par un clic de souris.</li>
        </ul>
        <p><input name="T1" size="52" style="padding: 5px; background-color: rgb(255, 255, 0); color: rgb(0, 0, 255); font-family: 'Courier New',Courier,mono;" type="text"></p>
        <ul>
          <li>En utilisant le clavier alphanumérique, écris ton nom et ton prénom sans oublier de mettre <strong>les premières lettres</strong> en majuscules.</li>
          <li>Envoie le curseur de texte dans la ligne ci-dessous, puis écris-y textuellement les cinq signes suivants: <strong>&gt; % / 8 ?</strong></li>
        </ul>
        <p><input name="T12" size="52" style="padding: 5px; background-color: rgb(255, 255, 0); color: rgb(0, 0, 255); font-family: 'Courier New',Courier,mono;" type="text"></p>
      </form>
      <form class="travail" action="">
        Une touche de commutation permet de<br>
        <input name="bt" onclick="alert('Réponse fausse.\nIl faut relire la définition.')" type="radio"> Demander de l'aide<br>
        <input name="bt" onclick="alert('Réponse en partie correcte.\nLa touche de majuscules est bien une touche de commutation. Mais il existe d\'autres touches de commutation (voir plus loin dans cette leçon).')" type="radio"> Passer en majuscules<br>
        <input name="bt" onclick="alert('Non.\nLe déplacement du curseur de texte est la fonction des touches... de mouvement.')" type="radio"> Déplacer le curseur de texte<br>
        <input name="bt" onclick="alert('Exact.\nLa touche de majuscules permet d\'obtenir des caractères majuscules plutôt que simplement des minuscules.\nConnais-tu déjà d\'autres touches de commutation?')" type="radio"> Modifier l'effet d'une autre touche
      </form>
      <p>Quand tu as fini, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
    </div>
    <?php include ("../../pied.inc.php");?>
  </div>
</body>
</html>
