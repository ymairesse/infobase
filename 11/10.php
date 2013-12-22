<?php //anti-moz ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta name="generator" content="HTML Tidy for Linux/x86 (vers 1 September 2005), see www.w3.org">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" type="text/css" href="../../info.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../../print.css" media="print">
    <title>
      Le courrier électronique
    </title>
  </head>
  <body>
    <div id="conteneur">
      <?php include ("./top.inc.php");
                                                            ?>
      <div id="texte">
        <h2>
          Les adresses de courrier électronique
        </h2>
        <p class="info">
          Pour envoyer un courrier électronique, il n'est bien sûr pas possible d'indiquer l'adresse postale classique
          du destinataire. On ne peut utiliser que son adresse électronique ou <strong>adresse e-mail</strong>.
        </p>
        <p>
          Une adresse e-mail est toujours composée en deux parties.
        </p>
        <table align="center" border="0" cellpadding="5" cellspacing="0" width="90%">
          <tbody>
            <tr>
              <td width="50%">
                <div align="right">
                  Identité du destinataire
                </div>
              </td>
              <td width="5">
                 
              </td>
              <td width="50%">
                <div>
                  Propriétaire de l'ordinateur
                </div>
              </td>
            </tr>
            <tr>
              <td width="50%">
                <div align="right">
                  jacques.dupont
                </div>
              </td>
              <td width="5">
                @
              </td>
              <td width="50%">
                <div>
                  societe.com
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <ol>
          <li>La <strong>deuxième partie</strong> de l'adresse e-mail indique la société à laquelle appartient
          l'ordinateur POP sur lequel le courrier doit arriver.
          </li>
          <li>La <strong>première partie</strong> permet d'identifier précisément le destinataire dans cette société.
          </li>
          <li>Le symbole <strong>@</strong> (arobase, prononcer "<i>at</i>") qui signifie "<i>chez</i>" sépare les deux
          parties.
          </li>
        </ol>
        <div class="encadre attention">
          <p>
            Les caractères autorisés dans une adresse e-mail sont généralement les lettres et les chiffres.
          </p>
          <p>
            Dans certains cas, le point "." ou le tiret souligné "_" sont également permis.
          </p>
          <p>
            Les espaces, les ponctuations, les symboles spéciaux et les caractères accentués ne sont jamais permis.
          </p>
        </div>
        <p>
          Considère les adresses de courrier électroniques suivantes et indique si elles peuvent être correctes ou si
          elles sont incorrectes.
        </p>
        <form name="Q3" style="width: 45%; float: left; clear: both;" action="">
          <p>
            <b>toto.lafloche@isnd.be</b><br>
            <input name="BR" onclick="alert('Correct')" type="radio"> Correcte<br>
            <input name="BR" onclick="alert('Désolé. Il n\'y a rien à reprocher à cette adresse')" type="radio">
            Incorrecte
          </p>
        </form>
        <form name="Q3" style="width: 45%; float: right;" action="">
          <p>
            <b>lafloche/ibm.com</b><br>
            <input name="BR" onclick="alert('Il manque le signe @ et le signe / n\'est pas permis.')" type="radio">
            Correcte<br>
            <input name="BR" onclick="alert('Tu as raison. Il manque le signe @ et le signe / n\'est pas permis.')"
            type="radio"> Incorrecte
          </p>
        </form>
        <form name="Q3" style="width: 45%; float: left; clear: both;" action="">
          <p>
            <b>Jules&amp;Jim@fnac.net</b><br>
            <input name="BR" onclick="alert('Le symbole spécial \&amp; n\'est pas permis.')" type="radio"> Correcte<br>
            <input name="BR" onclick="alert('Tu as raison. Le symbole spécial \&amp; n\'est pas permis.')" type=
            "radio"> Incorrecte
          </p>
        </form>
        <form name="Q3" style="width: 45%; float: right;" action="">
          <p>
            <b>y.dupont@skynet.be</b><br>
            <input name="BR" onclick="alert('Rien à dire. C\'est parfait.')" type="radio"> Correcte<br>
            <input name="BR" onclick="alert('Non, il n\'y a rien à reprocher à cette adresse.')" type="radio">
            Incorrecte
          </p>
        </form>
        <form name="Q3" style="width: 45%; float: left; clear: both;" action="">
          <p>
            <b>Bill Gates@microsoft.com</b><br>
            <input name="BR" onclick="alert('Non, il y a un caractère interdit.')" type="radio"> Correcte<br>
            <input name="BR" onclick="alert('Tu as raison. Le caractère \'espace\' n\'est pas permis.')" type="radio">
            Incorrecte
          </p>
        </form>
        <form name="Q3" style="width: 45%; float: right;" action="">
          <p>
            <b>ljacques.kadi</b><br>
            <input name="BR" onclick="alert('Non, il manque un élément important.')" type="radio">Correcte<br>
            <input name="BR" onclick=
            "alert('Tu as raison. Il manque le nom de la société à qui appartient le serveur POP.\nMême l\'@ manque...')"
            type="radio"> Incorrecte
          </p>
        </form>
        <hr class="spacer">
        Quand tu as trouvé et compris toutes les réponses, passe à la page
        suivante.<?php include ("../../suivant.inc.php");
                                                                                                  ?>
      </div><?php include ("../../pied.inc.php");
                                                            ?>
    </div>
  </body>
</html>
