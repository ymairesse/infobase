<?php //anti-moz ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
  <script type="text/javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function (){
        $(".qcm").click(function(){
            $(this).next().next().show(300);
        })
    })
  </script>  
  <style type="text/css">
    .demi {width: 50%;text-align:center}
    .unites {font-weight:bold}
  </style>
  <title>Les périphériques de stockage</title>
</head>
<body>
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>Capacité de stockage des disques&nbsp;: synthèse</h2>
      <div class="info"><p>On a vu dans une leçon précédente que pour stocker <strong>1</strong> caractère, l'ordinateur utilise <strong>1</strong> octet. Donc, pour stocker la phrase "<code><b>Il fait beau</b></code>", l'ordinateur utilise <strong>12</strong> octets.</p>
      <p class="interro">Pourrais-tu rappeler pourquoi 12 octets sont nécessaires, alors que la phrase ne contient que 10 lettres&nbsp;?</p>
      <p>Si tu as oublié la raison, tente d'écrire cette phrase sur une feuille de papier quadrillée. Utilise un carré par lettre. Cela devrait te mettre sur la voie.</p>
    </div>
      <form class="travail" action="">Imaginons qu'une page de texte soit formée de 60 lignes de 50 caractères. Cette page contiendrait donc<br />
        <input class="qcm" type="radio">60 caractères<br />
        <p class="faux">Réponse fausse.<br />Il y a bien 60 lignes, mais combien de caractères compte chacune d'elles?</p>
        <input class="qcm" type="radio">50 caractères<br />
        <p class="faux">Réponse fausse.<br />Il y a bien 50 caractères par ligne, mais combien y a-t-il de lignes?</p>
        <input class="qcm" type="radio">3000 caractères<br />
        <p class="vrai">Réponse exacte.<br />60 lignes contenant chacune 50 caractères représentent donc bien 3000 caractères.</p>
        <input class="qcm" type="radio">Il est impossible de le dire<br />
        <p class="faux">Les données fournies permettent pourtant d'évaluer le nombre de caractères.<br />Réfléchis mieux.</p>
      </form>
      <h3>Petit détour en territoire connu</h3>
      <div class="info">
      <p>Dans le tableau ci-dessous, on a indiqué des distances en mètres et en ses multiples. On n'a pas indiqué les sous-multiples.</p>
      <form action="">
        <table style="width: 90%; text-align: left; margin-left: auto; margin-right: auto;" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td><br></td>
              <td>
                <table style="text-align: right; width: 100%;" border="1" cellpadding="2" cellspacing="2">
                  <tbody>
                    <tr>
                      <td colspan="3" rowspan="1">G</td>
                    </tr>
                    <tr>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                    </tr>
                    <tr>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                    </tr>
                    <tr>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                    </tr>
                  </tbody>
                </table>
              </td>
              <td>
                <table style="text-align: right; width: 100%;" border="1" cellpadding="2" cellspacing="2">
                  <tbody>
                    <tr>
                      <td colspan="3" rowspan="1">M</td>
                    </tr>
                    <tr>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                    </tr>
                    <tr>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                    </tr>
                    <tr>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input value="5" readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input value="3" readonly="readonly" maxlength="1" size="1" name="x"></td>
                    </tr>
                  </tbody>
                </table>
              </td>
              <td>
                <table style="text-align: right; width: 100%;" border="1" cellpadding="2" cellspacing="2">
                  <tbody>
                    <tr>
                      <td colspan="3" rowspan="1">k</td>
                    </tr>
                    <tr>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                    </tr>
                    <tr>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input value="1" readonly="readonly" maxlength="1" size="1" name="x"></td>
                    </tr>
                    <tr>
                      <td><input value="7" readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input value="8" readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input value="1" readonly="readonly" maxlength="1" size="1" name="x"></td>
                    </tr>
                  </tbody>
                </table>
              </td>
              <td>
                <table style="text-align: right; width: 100%;" border="1" cellpadding="2" cellspacing="2">
                  <tbody>
                    <tr>
                      <td colspan="3" rowspan="1">m</td>
                    </tr>
                    <tr>
                      <td><input readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input value="2" readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input value="0" readonly="readonly" maxlength="1" size="1" name="x"></td>
                    </tr>
                    <tr>
                      <td><input value="7" readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input value="5" readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input value="2" readonly="readonly" maxlength="1" size="1" name="x"></td>
                    </tr>
                    <tr>
                      <td><input value="5" readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input value="0" readonly="readonly" maxlength="1" size="1" name="x"></td>
                      <td><input value="0" readonly="readonly" maxlength="1" size="1" name="x"></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </form>
      <p>Dans cet abaque, on peut lire trois distances:</p>
      <ul>
        <li>20 m</li>
        <li>1.752 m, soit 1,752 km</li>
        <li>53.781.500 m, soit 53.781,500 km ou encore 53,781.500 Mm</li>
      </ul>
      <p class="questions">Elle est curieuse, cette majuscule, à&nbsp;53.781500&nbsp;<span class="unites">Mm</span>. Moi, j'ai toujours écrit <span class="unites">mm</span>, avec une minuscule.</p>
      <p class="reponses">Cela fait tout de même une petite différence: un <span class="unites">mm</span> est un millième de mètre. Un&nbsp;<span class="unites">Mm</span> est un million de mètres. On ne peut donc pas écrire comme on veut.<br>
      Vous préférez être puni à une marche forcée de 50&nbsp;<span class="unites">mm</span> ou de 50&nbsp;<span class="unites">Mm</span>, si vous refusez de comprendre?</p>
	  <p class="questions">Des quoi, vous dites? des <span class="unites">Mm</span>? Jamais entendu parler de ça, moi.</p>
      <p class="reponses">Effectivement, le <span class="unites">Mégamètre</span> n'est certainement pas aussi courant que le <span class="unites">kilomètre</span>. Mais rien n'empêche d'utiliser ce multiple qui vaut 1.000.000 de mètres.<br>
      De même, on pourrait utiliser le&nbsp;<span class="unites">Gigamètre</span> qui représente 1.000.000.000 de mètres.</p>
    </div>
      <h3>Exercices de conversion</h3>
      <p>Pour les calculs suivants, utilise l'abaque ci-dessous pour convertir les grands nombres:</p>
      <form action="">
        <table style="width: 90%; text-align: left; margin-left: auto; margin-right: auto;" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td><br></td>
              <td>
                <table style="text-align: right; width: 100%;" border="1" cellpadding="2" cellspacing="2">
                  <tbody>
                    <tr>
                      <td colspan="3" rowspan="1">G</td>
                    </tr>
                    <tr>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                    </tr>
                    <tr>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                    </tr>
                    <tr>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                    </tr>
                    <tr>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                    </tr>
                  </tbody>
                </table>
              </td>
              <td>
                <table style="text-align: right; width: 100%;" border="1" cellpadding="2" cellspacing="2">
                  <tbody>
                    <tr>
                      <td colspan="3" rowspan="1">M</td>
                    </tr>
                    <tr>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                    </tr>
                    <tr>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                    </tr>
                    <tr>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                    </tr>
                    <tr>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                    </tr>
                  </tbody>
                </table>
              </td>
              <td>
                <table style="text-align: right; width: 100%;" border="1" cellpadding="2" cellspacing="2">
                  <tbody>
                    <tr>
                      <td colspan="3" rowspan="1">K</td>
                    </tr>
                    <tr>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                    </tr>
                    <tr>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                    </tr>
                    <tr>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                    </tr>
                    <tr>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                    </tr>
                  </tbody>
                </table>
              </td>
              <td>
                <table style="text-align: right; width: 100%;" border="1" cellpadding="2" cellspacing="2">
                  <tbody>
                    <tr>
                      <td colspan="3" rowspan="1">o</td>
                    </tr>
                    <tr>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                    </tr>
                    <tr>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                    </tr>
                    <tr>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                    </tr>
                    <tr>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                      <td><input maxlength="1" size="1" name="x"></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </form>
      <div class="travail">
        On te demande de calculer le nombre de pages que l'on pourrait enregistrer sur les différents supports indiqués dans le tableau ci-dessous.<br>
        Tu peux faire une approximation et compter qu'un Ko contient 1000 octets.
      </div>
      <form name="form2" method="post" action="print3.php" id="form2">
        <div style="text-align: center;"></div>
        <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" width="90%">
          <tbody style="text-align: center;">
            <tr style="background-color: rgb(255, 255, 204);">
              <td width="150">Type de disque</td>
              <td width="300">Capacité</td>
              <td width="450">Calcul</td>
              <td width="250">Nombre de pages</td>
            </tr>
            <tr>
              <td width="150">3"1/2 2 HD</td>
              <td width="300"><input name="c1" size="4" maxlength="4" type="text" value="1.44"> Mo</td>
              <td width="450">
                <input name="o1" size="9" maxlength="9" type="text"> octets<br>
                <hr class="demi">
                3000 octets/page
              </td>
              <td width="250">= <input name="p1" size="9" maxlength="9" type="text"> pages</td>
            </tr>
            <tr>
              <td width="150">Disque dur</td>
              <td width="300"><input name="c2" size="4" maxlength="4" type="text"> Go</td>
              <td width="450">
                <input name="o2" size="12" maxlength="12">octets<br>
                <hr class="demi">
                3000 octets/page
              </td>
              <td width="250">= <input name="p2" size="9" maxlength="9" type="text"> pages</td>
            </tr>
            <tr>
              <td>Clef USB (moyenne)</td>
              <td><input name="c4" size="3" maxlength="3" type="text"> Go</td>
              <td>
                <input name="o4" size="12" maxlength="12" type="text">octets
                <hr class="demi">
                3000 octets/page
              </td>
              <td>= <input name="p4" size="8" maxlength="6" type="text"> pages</td>
            </tr>
            <tr>
              <td width="150">CD-ROM</td>
              <td width="300"><input name="c5" id="c5" size="3" maxlength="3" type="text"> Mo</td>
              <td width="450">
                <input name="o5" id="o5" size="12" maxlength="12" type="text"> octets
                <hr class="demi">
                3000 octets/page
              </td>
              <td width="250">= <input name="p5" id="p5" size="8" maxlength="6" type="text"> pages</td>
            </tr>
            <tr>
              <td width="150">DVD-ROM</td>
              <td width="300">jusqu'à <input name="c6" id="c6" size="2" maxlength="2" type="text"> Go</td>
              <td width="450">
                <input name="o6" id="o6" size="12" maxlength="12" type="text"> octets
                <hr class="demi">
                3000 octets/page
              </td>
              <td width="250">= <input name="p6" id="p6" size="8" maxlength="8" type="text"> pages</td>
            </tr>
          </tbody>
        </table>
        <p>Un volume d'une encyclopédie contient 2500 pages. En utilisant une règle de trois, calcule combien de volumes on pourrait enregistrer sur un seul CD-ROM. <input name="vol" size="10" type="text"> volumes</p>
        <p>Montre tous tes calculs au professeur avant d'imprimer.</p>
        <label>Nom:</label><input name="nom" size="40" type="text"><br>
        <label>Prénom&nbsp;:</label><input name="prenom" size="40" type="text"><br>
        <label>Classe&nbsp;:</label><input name="classe" size="5" maxlength="5" type="text">
        <p style="text-align:center"><input name="Submit" value="Préparer l'impression" type="submit"></p>
      </form>
      <p>Bravo, tu as terminé cette leçon.</p>
      <p>Merci de m'aider en répondant aux questions de la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div>
    <?php include ("../../pied.inc.php");?>
</body>
</html>
