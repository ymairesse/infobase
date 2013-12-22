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
  <title>Les p�riph�riques de stockage</title>
</head>
<body>
    <?php include ("./top.inc.php"); ?>
    <div id="texte">
      <h2>Capacit� de stockage des disques&nbsp;: synth�se</h2>
      <div class="info"><p>On a vu dans une le�on pr�c�dente que pour stocker <strong>1</strong> caract�re, l'ordinateur utilise <strong>1</strong> octet. Donc, pour stocker la phrase "<code><b>Il fait beau</b></code>", l'ordinateur utilise <strong>12</strong> octets.</p>
      <p class="interro">Pourrais-tu rappeler pourquoi 12 octets sont n�cessaires, alors que la phrase ne contient que 10 lettres&nbsp;?</p>
      <p>Si tu as oubli� la raison, tente d'�crire cette phrase sur une feuille de papier quadrill�e. Utilise un carr� par lettre. Cela devrait te mettre sur la voie.</p>
    </div>
      <form class="travail" action="">Imaginons qu'une page de texte soit form�e de 60 lignes de 50 caract�res. Cette page contiendrait donc<br />
        <input class="qcm" type="radio">60 caract�res<br />
        <p class="faux">R�ponse fausse.<br />Il y a bien 60 lignes, mais combien de caract�res compte chacune d'elles?</p>
        <input class="qcm" type="radio">50 caract�res<br />
        <p class="faux">R�ponse fausse.<br />Il y a bien 50 caract�res par ligne, mais combien y a-t-il de lignes?</p>
        <input class="qcm" type="radio">3000 caract�res<br />
        <p class="vrai">R�ponse exacte.<br />60 lignes contenant chacune 50 caract�res repr�sentent donc bien 3000 caract�res.</p>
        <input class="qcm" type="radio">Il est impossible de le dire<br />
        <p class="faux">Les donn�es fournies permettent pourtant d'�valuer le nombre de caract�res.<br />R�fl�chis mieux.</p>
      </form>
      <h3>Petit d�tour en territoire connu</h3>
      <div class="info">
      <p>Dans le tableau ci-dessous, on a indiqu� des distances en m�tres et en ses multiples. On n'a pas indiqu� les sous-multiples.</p>
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
      <p class="questions">Elle est curieuse, cette majuscule, �&nbsp;53.781500&nbsp;<span class="unites">Mm</span>. Moi, j'ai toujours �crit <span class="unites">mm</span>, avec une minuscule.</p>
      <p class="reponses">Cela fait tout de m�me une petite diff�rence: un <span class="unites">mm</span> est un milli�me de m�tre. Un&nbsp;<span class="unites">Mm</span> est un million de m�tres. On ne peut donc pas �crire comme on veut.<br>
      Vous pr�f�rez �tre puni � une marche forc�e de 50&nbsp;<span class="unites">mm</span> ou de 50&nbsp;<span class="unites">Mm</span>, si vous refusez de comprendre?</p>
	  <p class="questions">Des quoi, vous dites? des <span class="unites">Mm</span>? Jamais entendu parler de �a, moi.</p>
      <p class="reponses">Effectivement, le <span class="unites">M�gam�tre</span> n'est certainement pas aussi courant que le <span class="unites">kilom�tre</span>. Mais rien n'emp�che d'utiliser ce multiple qui vaut 1.000.000 de m�tres.<br>
      De m�me, on pourrait utiliser le&nbsp;<span class="unites">Gigam�tre</span> qui repr�sente 1.000.000.000 de m�tres.</p>
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
        On te demande de calculer le nombre de pages que l'on pourrait enregistrer sur les diff�rents supports indiqu�s dans le tableau ci-dessous.<br>
        Tu peux faire une approximation et compter qu'un Ko contient 1000 octets.
      </div>
      <form name="form2" method="post" action="print3.php" id="form2">
        <div style="text-align: center;"></div>
        <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" width="90%">
          <tbody style="text-align: center;">
            <tr style="background-color: rgb(255, 255, 204);">
              <td width="150">Type de disque</td>
              <td width="300">Capacit�</td>
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
              <td width="300">jusqu'� <input name="c6" id="c6" size="2" maxlength="2" type="text"> Go</td>
              <td width="450">
                <input name="o6" id="o6" size="12" maxlength="12" type="text"> octets
                <hr class="demi">
                3000 octets/page
              </td>
              <td width="250">= <input name="p6" id="p6" size="8" maxlength="8" type="text"> pages</td>
            </tr>
          </tbody>
        </table>
        <p>Un volume d'une encyclop�die contient 2500 pages. En utilisant une r�gle de trois, calcule combien de volumes on pourrait enregistrer sur un seul CD-ROM. <input name="vol" size="10" type="text"> volumes</p>
        <p>Montre tous tes calculs au professeur avant d'imprimer.</p>
        <label>Nom:</label><input name="nom" size="40" type="text"><br>
        <label>Pr�nom&nbsp;:</label><input name="prenom" size="40" type="text"><br>
        <label>Classe&nbsp;:</label><input name="classe" size="5" maxlength="5" type="text">
        <p style="text-align:center"><input name="Submit" value="Pr�parer l'impression" type="submit"></p>
      </form>
      <p>Bravo, tu as termin� cette le�on.</p>
      <p>Merci de m'aider en r�pondant aux questions de la page suivante.<?php include ("../../suivant.inc.php");?></p>
    </div>
    <?php include ("../../pied.inc.php");?>
</body>
</html>
