<!DOCTYPE html>

<html lang="fr">
<meta charset="UTF-8">
<head>
    <title> Exploration et maîtrise du clavier de l'ordinateur </title>
    <link rel="stylesheet" type="text/css" href="../../info.css" media="screen,print">
    <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
    <script type="text/javascript" src="../../js/jquery.js"></script>

</head>
<body>
<div id="conteneur">
	<?php require ("./top.inc.php");  ?>
	<div id="texte">
    <fieldset class="travail">
        <legend>Les touches de majuscule (1/3)</legend>
      <form action="javascript:void(0)" name="form0">
        <ul>
            <li>Clique dans <span style="background-color: #ff8; color: #00f;">la ligne jaune</span> ci-dessous.</li>
            <li>En utilisant le clavier alphanumérique, écris ton nom et ton prénom sans oublier de mettre <strong>les premières lettres</strong> en majuscules.</li>
        </ul>
        <p><input name="T1" size="52" style="padding: 5px; background-color: #ff8; color: #00f; font-family: 'Courier New',Courier,mono;" type="text"></p>
        <ul>

          <li>Clique dans la ligne suivante, puis écris-y les cinq signes:<br>
          <strong>&gt; % / ? 8 </strong></li>
        </ul>
        <p><input name="T12" size="52" style="padding: 5px; background-color: #ff8; color: #00f; font-family: 'Courier New',Courier,mono;" type="text"></p>
      </form>
    </fieldset>
    
      <fieldset class="travail">
        <legend>Les touches de majuscule (2/3)</legend>
        <form action="javascript:void(0)" name="form1" class="fautes2">
        <ul>
            <li>Clique dans <span style="background-color: #ff8; color: #00f;">la ligne jaune</span> ci-dessous.</li>
            <li>En utilisant le clavier alphanumérique, écris la phrase suivante:<br>
          "&nbsp;IL FAIT FRAIS POUR LA SAISON&nbsp;"</li>
        </ul>
        <input name="S1" class="S1" size="52" style="padding: 5px; background-color: #ff8; color: #00f; font-family: 'Courier New',Courier,mono;" type="text">
        <div class="avertissement"></div><br>
        <input type="submit" name="submit" value="Vérifier">
      </form>
      </fieldset>

    <fieldset class="qcu">
        <form action="javascript:void(0)" >
    Quelle était la meilleure façon de procéder pour écrire le texte ci-dessus en majuscules?<br>
            <input class="qcm" name="qcm1" type="radio">Tenir la touche de majuscules enfoncée et écrire les lettres avec l'autre main<br><p class="faux">C'est une très mauvaise réponse.</p>
            <input class="qcm" name="qcm1" type="radio">Tenir la touche majuscules bloquées enfoncée et écrire les lettres avec l'autre main<br><p class="faux">Il n'est jamais nécessaire de garder la touche \"Majuscules bloquées\" enfoncée.<br>C'est une mauvaise réponse.</p>
            <input class="qcm" name="qcm1" type="radio">Frapper la touche "Majuscules bloquées" puis écrire le texte normalement.<br><p class="vrai">Bonne réponse</p>
            <input class="qcm" name="qcm1" type="radio">Frapper "Ctrl + Majuscules" puis écrire le texte normalement<br><p class="faux">Ceci ne produit certainement pas le bon résultat.</p>
        </form>
    </fieldset>

    <fieldset class="travail">
        <legend>Les touches de majuscule (3/3)</legend>
        
    <form action="javascript:void(0)" name="form2" class="fautes3">
        <ul>
            <li>Clique dans la ligne ci-dessous.</li>
            <li>En bloquant et en débloquant le clavier du mode "&nbsp;majuscules bloquées&nbsp;", écris la phrase suivante (en respectant MAJUSCULES et minuscules): "&nbsp;il FAIT frais POUR la SAISON&nbsp;".</li>
        </ul>
        <input name="S1" class="S1" size="52" style="padding: 5px; background-color: #ff8; color: #00f; font-family: 'Courier New',Courier,mono;" type="text">
        <div class="avertissement"></div><br>
        <input type="submit" name="submit" value="Vérifier">
      </form>
    
    </fieldset>
    
    <fieldset class="travail">
            <legend>La touche AltGr</legend>
        <ul>
          <li>Vérifie quelles touches portent un troisième caractère. Repère parfaitement leurs positions.</li>
          <li>Clique dans la ligne ci-dessous et reproduis-y le discours du personnage pas trop content illustré.</li>
          <li>Clique sur le bouton <span class="menu">Vérifier</span> quand tu penses avoir parfaitement recopié le contenu du phylactère.</li>
        </ul>
        
        <form method="post" action="javascript:void(0)" class="fautes1">
          <div style="text-align:center">
          <input name="insulte" class="S1" size="35" maxlength="35" value="" type="text" style="padding: 5px;background-color: #ff8; color: #00f;"> 
          <div class="avertissement"></div>
          <input name="Submit" value="Vérifier" type="submit">
          <br>
          <img src="images/pascontent.gif" alt="Pas poli, le monsieur" height="187" width="350">
          </div>
        </form>
        <p>Si tu n'arrives pas immédiatement au bon résultat, il est inutile de ]]]@@@###{{{\\\$$$///}}}@@@[[[</p>
    </fieldset>

    <fieldset class="travail">
        <legend>La touche Alt</legend>
        <p>Clique sur le bouton "Nouvelle fenêtre" ci-dessous pour... faire apparaître une nouvelle fenêtre. Pour fermer cette fenêtre, tu frapperas <strong>conjointement</strong> les touches <span class="clavier">Alt</span> et <span class="clavier">F4</span> (d'abord <span class="clavier">Alt</span>, puis, sans relâcher la première, frapper <span class="clavier">F4</span>).</p>
        <form action="javascript:void(0)">
            <p style="text-align: center;"><input name="B1" onclick="open('index.php', 'newwindow', 'Height=300,Width=320')" value="Nouvelle fenêtre" type="button"></p>
        </form>
    </fieldset>

    <fieldset class="qcu">
        <form action="javascript:void(0)" >
            Que permet de faire la combinaison de touches <span class="clavier">Ctrl</span> + <span class="clavier">c</span> ?<br>
            <input class="qcm" name="qcm1" type="radio">Rien du tout<br><p class="faux">Et pourtant si! <br>C'est même une combinaison très importante.</p>
            <input class="qcm" name="qcm1" type="radio">Copier ce qui est sélectionné (et qui pourra être collé plus tard)<br><p class="vrai">Réponse exacte.<br>Apparemment, il ne se passe rien quand on frappe Ctrl+C; tout se déroule dans la mémoire de l'ordinateur.</p>
            <input class="qcm" name="qcm1" type="radio">Le texte sélectionné s'efface<br><p class="faux">Réponse fausse</p>
            <input class="qcm" name="qcm1" type="radio">Le texte sélectionné se met en gras<br><p class="faux">Réponse fausse</p>
        </form>
    </fieldset>
    
    <fieldset class="travail">
        <legend>Les touches Ctrl</legend>
        <p>Observe les deux zones ci-dessous (la jaune et la bleue) et <strong>lis entièrement la consigne avant de l'exécuter</strong>.</p>
        <form action="javascript:void(0)" name="form">
            <p><label for="ligne1">Ligne 1</label>
            <input type="text" name="ligne1" size="35" value="Ceci est le contenu de la première ligne" style="background-color: #ff8; color: #00f;" id="ligne1">
            </p>
            <p><label for="ligne2">Ligne 2</label>
            <input type="text" name="ligne1" size="35" value="Texte à supprimer" style="background-color: #00a; color: #ff8;" id="ligne2">
            </p>
        </form>
        <p>Le but de l'exercice est de recopier le contenu de la première ligne dans la deuxième, <strong>sans utiliser la souris</strong>.</p>
        <ol>
            <li>Clique dans <span style="background-color: #ff8; color: #00f;">la première zone</span></li>
            <li><strong>Lâche la souris et écarte-la; tu ne l'utiliseras pas pour la suite de l'exercice</strong></li>
            <li>Sélectionne l'ensemble du contenu de la <span style="background-color: #ff8; color: #00f;">Ligne 1</span> par la séquence de touches <span class="clavier">Ctrl</span> + <span class="clavier">a</span></li>
            <li>Frappe la séquence de touches <span class="clavier">Ctrl</span> + <span class="clavier">c</span></li>
            <li>Frappe la touche de tabulation <img src="images/tab.gif" alt="tab"> située à gauche du clavier alphanumérique</li>
            <li>Efface (<span class="clavier">Del</span>) le contenu de la deuxième ligne <span style="background-color: #00a; color: #ff8;">de couleur bleue</span></li>
            <li>Frappe la séqunce de touches <span class="clavier">Ctrl</span> + <span class="clavier">v</span></li>
            <li>Tu peux reprendre la souris</li>
        </ol>
        <p>Serais-tu capable de recommencer la manœuvre sans relire les consignes?</p>
    </fieldset>
      
      <fieldset class="qcu">
        <form action="javascript:void(0)">
        Une touche de commutation permet de:<br>
        <input class="qcm" name="qcm1" type="radio">Demander de l'aide<br><p class="faux">Réponse fausse.<br>Il faut relire la définition.</p>
        <input class="qcm" name="qcm1" type="radio">Passer en majuscules<br><p class="faux">Réponse en partie correcte.<br>La touche de majuscules est bien une touche de commutation. Mais il existe d'autres touches de commutation.</p>
        <input class="qcm" name="qcm1" type="radio">Déplacer le curseur de texte<br><p class="faux">Non.<br>Le déplacement du curseur de texte est la fonction des touches... de mouvement.</p>
        <input class="qcm" name="qcm1" type="radio">Modifier l'effet d'une autre touche <br><p class="vrai">Exact.<br>La touche de majuscules, par exemple, permet d'obtenir des caractères majuscules plutôt que simplement des minuscules.</p>
        </form>
</fieldset>
      
      
      
      <p>Quand tu as réalisé les trois exercices proposés, passe à la page suivante.<?php include ("../../suivant.inc.php");?></p>
	  </div>
		<!-- id="texte" -->

	<!-- id="conteneur" -->
		<?php include ("../../pied.inc.php"); ?> 
	</div>
<script type="text/javascript">
	$(document).ready(function(){
		$(".qcm").click(function(){
			$(this).next().next().show(300);
		})

	$(".qcm").attr("checked",false);
    
    $("#insulte").val("");
    
    $(".fautes1").submit(function(){
        var result = $(this).find(".S1").val();
        if (result != "[[[@@@###{{{\\\\\\$$$///}}}@@@]]]") {
            $(this).find(".S1").next(".avertissement").text("Ce n'est pas tout à fait correct");
			}
			else $(this).find(".S1").next(".avertissement").text("Très bien ;o)").css("background-color","green");
        })

	$(".fautes2").submit(function(){
		var result = $(this).find(".S1").val();
		if (result != "IL FAIT FRAIS POUR LA SAISON") {
			$(this).find(".S1").next(".avertissement").text("Ce n'est pas tout à fait correct");
			}
			else $(this).find(".S1").next(".avertissement").text("Très bien ;o)").css("background-color","green")
		})

    $(".fautes3").submit(function(){
		var result = $(this).find(".S1").val();
		if (result != "il FAIT frais POUR la SAISON") {
			$(this).find(".S1").next(".avertissement").text("Ce n'est pas tout à fait correct");
			}
			else $(this).find(".S1").next(".avertissement").text("Très bien ;o)").css("background-color","green")
		})
    
	})
    

</script>
  <style type="text/css">
  .avertissement {
	  color: yellow;
	  background-color: red;
	  clear:both;
	  }
  
  </style>
  
</body>
</html>
