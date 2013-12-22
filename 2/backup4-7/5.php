<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script type="text/javascript" src="../../js/jquery.js"></script>
  <style type="text/css">
.c1 {background-color: #66ccff}
  .c2 {background-color: #ffffdd}
  .addition {padding: 0 1em; 
  text-align: center; 
  float: right; 
  font-weight: bold; 
  background-color: white;
  }
.binaire {display: inline;}
.binaire td {border: 1px solid black;}
.opener {cursor:pointer}
  </style>
  <title>Voyage au cœur de l'unité centrale</title>
</head>

<body>
  <div id="conteneur">
<?php 
require ("./top.inc.php"); 
require ("../../dewplayer.inc.php");
?>
<div id="texte">
      <h2>La mémoire centrale stocke des grands nombres</h2>
      <fieldset class="info">
		<legend>Exemple du système décimal</legend>
      <table class="addition ombre" border="0" cellpadding="5" cellspacing="0" width="30">
        <tbody>
          <tr>
            <td><br></td>
            <td>9</td>
          </tr>
          <tr>
            <td>+</td>
            <td>1</td>
          </tr>
          <tr>
            <td colspan="2">
              <hr>
            </td>
          </tr>
          <tr>
            <td>1</td>
            <td>0</td>
          </tr>
        </tbody>
      </table>		
        <p><?php dewplay("7a.mp3");?>Dans le système décimal, nous disposons de 10 signes (de 0 à 9) pour représenter les chiffres. Comment représenter des nombres plus grands que 9 ?</p>
        <p>Comment fait-on pour ajouter "1" au nombre "9" ?<br>
        La solution qui a été trouvée est d'utiliser un deuxième rang de chiffres. 9 + 1 = 10. J'écris "0" et je reporte "1" au rang suivant. Je conclus que 9+1 = 10</p>
        <p>C'est ce qui est illustré sur le petit schéma d'école primaire ci-contre à droite.</p>
      </fieldset>

      <div class="encadre attention">
        <p>L'ordinateur ne dispose, quant à lui, que de deux signes pour représenter les chiffres: 0 et 1.</p>
      </div>

      <p class="questions">Ben dites donc, ça va être coton de lui faire faire des calculs complexes, s'il ne sait compter que jusqu'à 1.</p>
      <p class="reponses">Il va donc falloir utiliser une astuce pour l'aider à compter un peu plus haut. Comme dans le système décimal, nous allons utiliser plusieurs rangs de chiffres.</p>

      <fieldset class="info">
        <legend>Apprenons à compter comme un bête ordinateur</legend>
        <p><?php dewplay("7b.mp3"); ?>Les humains utilisent presque tous le <a class="bulle" href="7.php#">système décimal <span>système qui compte 10 chiffres, de 0 à 9</span></a> pour compter. Les ordinateurs ne disposent que de 2 chiffres qui sont <strong>0</strong> et <strong>1</strong>; on parle alors de <a class="bulle" href="7.php#">système binaire
        <span>Système dans lequel on utlise deux chiffres, 0 et 1</span></a>.</p>
        <h4>1+1 = 10</h4>
      
	    <table class="addition ombre" border="0" cellpadding="5" cellspacing="0" width="30">
          <tbody>
            <tr>
              <td>&nbsp;<br></td>
              <td>1</td>
            </tr>
            <tr>
              <td>+</td>
              <td>1</td>
            </tr>
            <tr>
              <td colspan="2">
                <hr>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>0</td>
            </tr>
          </tbody>
        </table>

        <p>Le chiffre <strong>1</strong> est le plus grand chiffre disponible en système binaire. Comment faire pour ajouter <strong>1</strong> au nombre <strong>1</strong>?<br>
        L'opération est illustrée à droite.<br>
        Comme dans le système décimal, il faut utiliser un deuxième rang de chiffres.<br>
        <strong>1</strong> + <strong>1</strong> = <strong>10</strong>. J'écris "<strong>0</strong>" et je reporte "<strong>1</strong>" au rang suivant. Je conclus que <strong>1</strong> + <strong>1</strong> = <strong>10</strong> (en binaire).</p>
        <p style="text-align: center;" class="encadre">Le <strong>10</strong> binaire représente bien le nombre <strong>2</strong>.</p>

        <h4 style="clear: both;">10 + 1 = 11</h4>
        <table class="addition ombre" border="0" cellpadding="5" cellspacing="0" width="30">
          <tbody>
            <tr>
              <td>1<br></td>
              <td>0</td>
            </tr>
            <tr>
              <td>+</td>
              <td>1</td>
            </tr>
            <tr>
              <td colspan="2">
                <hr>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>1</td>
            </tr>
          </tbody>
        </table>

        <p>Que faire s'il faut encore ajouter <strong>1</strong> à ce nombre <strong>10</strong>? C'est vraiment très simple puisqu'il n'y a pas de passage de rang, cette fois. L'opération est illustrée à droite.<br>
        <strong>0</strong> + <strong>1</strong> = <strong>1</strong> (je ne retiens rien). Au rang suivant, il suffit de poser le <strong>1</strong>. Résultat: <strong>11</strong> (en binaire)</p>
        <p style="text-align: center;" class="encadre">Le <strong>11</strong> binaire représente bien le nombre <strong>3</strong>.</p>

        <h4 style="clear: both;">11+1 = 100</h4>
        <table class="addition ombre" border="0" cellpadding="5" cellspacing="0" width="30">
          <tbody>
            <tr>
              <td style="vertical-align: top;"><br></td>
              <td>1<br></td>
              <td>1</td>
            </tr>
            <tr>
              <td style="vertical-align: top;">+</td>
              <td><br></td>
              <td>1</td>
            </tr>
            <tr>
              <td colspan="3" rowspan="1" style="vertical-align: top;">
                <hr>
              </td>
            </tr>
            <tr>
              <td style="vertical-align: top;">1</td>
              <td>0</td>
              <td>0</td>
            </tr>
          </tbody>
        </table>

        <p>Pour voir si nous avons bien compris, poursuivons et ajoutons encore <strong>1</strong> au nombre <strong>11</strong> binaire. Comment écrire le calcul?</p>
        <p>On commence l'opération par la colonne de droite: <strong>1</strong> + <strong>1</strong> = <strong>10</strong> (voir la première opération binaire ci-dessus). J'écris <strong>0</strong> et je reporte <strong>1</strong>.<br>
        A la deuxième colonne, <strong>1</strong> + <strong>1</strong> = <strong>10</strong>; j'écris <strong>0</strong> et je reporte <strong>1</strong> que j'écris à la troisème colonne. Le résultat est donc <strong>100</strong>.</p>
        <p style="text-align: center;" class="encadre">Le <strong>100</strong> binaire représente bien le nombre <strong>4</strong>.</p>
      </fieldset>

	  <div class="experts" style="display:none">
      <p class="questions">Je commence à sérieusement me prendre la tête entre les 0 et les 1. Maintenant que j'ai compris, vous n'auriez pas un système plus simple pour faire tous ces calculs?</p>
      <p class="reponses">Bien sûr. C'est même très simple: tout est à portée de main.</p>
	  
      <h3>Calculer en binaire avec la calculette du système d'exploitation</h3>
      <fieldset class="travail">
		<ul>
			<li>Clique sur le titre qui correspond au système que tu utilises pour découvrir les consignes suivantes.</li>
		</ul>
		<p>Si tu ignores quel système est utilisé, demande au professeur.</p>

        <h4 class="opener">Sous Windows 2000 / XP:</h4>
        <div style="display:none">
        <ol>
          <li>Clique sur le bouton <img src="images/demarrer.gif" style="width: 77px; height: 21px;" alt="Démarrer"> ,</li>
          <li>cherche la commande "&nbsp;Programmes&nbsp;", puis</li>
          <li>l'option "Accessoires" et finalement</li>
          <li>démarrer la calculatrice <img src="images/calculer.gif" style="width: 136px; height: 31px;" alt=
          "Calculatrice"></li>
          <li><img src="images/scientifique.gif" alt="Scientifique" class="imagedroite" height="94" width="154">Dans le menu
          "&nbsp;Affichage&nbsp;" de la calculatrice sélectionne, si nécessaire, l'option "&nbsp;Scientifique&nbsp;".</li>
          <li>Fais passer la calculatrice en mode "&nbsp;binaire&nbsp;" en cochant le bouton "&nbsp;Bin&nbsp;".</li>
        </ol>
        </div>

        <h4 class="opener">Sous Ubuntu 10.04 - Linux:</h4>
        <div style="display:none">
        <ol>
          <li><img src="images/calculer.jpg" style="width: 434px; height: 126px;" alt="Calculette" class="imagedroite">Dans le
          menu <strong>Applications</strong>, sélectionne les <strong>Accessoires</strong></li>
          <li>Choisis l'application <strong>Calculatrice</strong></li> ta version de Ubuntu - Linux, sélectionne le mode <strong>Scientifique</strong> ou le mode
          <strong>Programmation</strong> s'il existe</li>
        </ol>
        <p>Il est, à tout moment, possible de connaître la valeur décimale d'un résultat en cochant le bouton "Déc" à la place du bouton "Bin".</p>
      </fieldset>

      <h4 class="opener">Sous Ubuntu 12.04 et suivants - Linux</h4>
      <div style="display:none">
      <ol>
		<li><img src="images/dash.png" alt="Tableau de  bord" class="imagedroite">Clique sur le bouton du "Tableau de Bord", en haut et à gauche de l'écran</li>
		<li>Dans la zone de texte qui apparaît, frappe les premières lettres du mot "Calculatrice" </li>
		<li><img src="images/programm.png" class="imagedroite" alt="mode program">Quand l'icône de la calculatrice aparaît, clique sur celle-ci</li>
		<li>Sélectionne le mode "Programmation"</li>
		<li><img src="images/binaire.png" alt="binaire" class="imagedroite">Passe la caclulatrice en mode "binaire"</li>
		<li>Frappe un nombre binaire (composé uniquement de 0 et de 1 puis <span class="clavier">Enter</span></li>
		<li>Repasse en mode décimal et vois le nombre correspondant à ce que tu as frappé en binaire.</li>
      </ol>
       <p>Remarque que seuls les chiffres 0 et 1 sont disponibles. Les autres chiffres sont grisés; il est impossible de les actionner dans ce mode. Ou alors, ils provoquent une erreur.</p>
      </div>

    <div class="travail">
      <p>A l'aide de la calculatrice, détermine combien font, en binaire</p>
      <form name="form1" onsubmit="return(verif(this, 10))" action="" id="form1">
        <label>1+1 =</label><input name="reponse" size="5" maxlength="3" type="text"> <input name="Submit2" value="Vérifier"
        type="submit">
      </form>
      <form name="form2" onsubmit="return(verif(this, 11))" action="" id="form2">
        <label>1+1+1 =</label><input name="reponse" size="5" maxlength="3" type="text"> <input name="Submit3" value="Vérifier"
        type="submit">
      </form>
      <form action="" name="form3" onsubmit="return(verif(this, 100))" id="form3">
        <label>1+1+1+1 =</label> <input name="reponse" size="5" maxlength="3" type="text"> <input name="Submit" value="Vérifier"
        type="submit">
      </form>
    </div>
		</div> <!-- experts -->

    <p>Quand tu es capable de faire de petites additions en binaire, passe à la page suivante.<?php include ("../../suivant.inc.php"); ?></p>
  </div>
  
  <?php include ("../../pied.inc.php");?>
									
<script type="text/JavaScript">
function verif (formulaire, correct)
  {
  if (formulaire.reponse.value == correct)
        alert('Juste!');
  else {
        alert('Faux: la réponse correcte est '+correct);
        formulaire.reponse.value = correct;
        }
  return (false);
  }
  
  $(document).ready(function(){
	  $(".opener").click(function(){
		  var toto = $(this);
		  $(this).next().toggle(1000);
		  })
	  
	  })
  </script>
</body>
</html>
