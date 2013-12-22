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
      Le courrier �lectronique
    </title>
  </head>
  <body>
    <div id="conteneur">
      <?php include ("./top.inc.php");
                                                            ?>
      <div id="texte">
        <h2>
          Les adresses de courrier �lectronique
        </h2>
        <p class="info">
          Pour envoyer un courrier �lectronique, il n'est bien s�r pas possible d'indiquer l'adresse postale classique
          du destinataire. On ne peut utiliser que son adresse �lectronique ou <strong>adresse e-mail</strong>.
        </p>
        <p>
          Une adresse e-mail est toujours compos�e en deux parties.
        </p>
        <table align="center" border="0" cellpadding="5" cellspacing="0" width="90%">
          <tbody>
            <tr>
              <td width="50%">
                <div align="right">
                  Identit� du destinataire
                </div>
              </td>
              <td width="5">
                �
              </td>
              <td width="50%">
                <div>
                  Propri�taire de l'ordinateur
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
          <li>La <strong>deuxi�me partie</strong> de l'adresse e-mail indique la soci�t� � laquelle appartient
          l'ordinateur POP sur lequel le courrier doit arriver.
          </li>
          <li>La <strong>premi�re partie</strong> permet d'identifier pr�cis�ment le destinataire dans cette soci�t�.
          </li>
          <li>Le symbole <strong>@</strong> (arobase, prononcer "<i>at</i>") qui signifie "<i>chez</i>" s�pare les deux
          parties.
          </li>
        </ol>
        <div class="encadre attention">
          <p>
            Les caract�res autoris�s dans une adresse e-mail sont g�n�ralement les lettres et les chiffres.
          </p>
          <p>
            Dans certains cas, le point "." ou le tiret soulign� "_" sont �galement permis.
          </p>
          <p>
            Les espaces, les ponctuations, les symboles sp�ciaux et les caract�res accentu�s ne sont jamais permis.
          </p>
        </div>
        <p>
          Consid�re les adresses de courrier �lectroniques suivantes et indique si elles peuvent �tre correctes ou si
          elles sont incorrectes.
        </p>
        <form name="Q3" style="width: 45%; float: left; clear: both;" action="">
          <p>
            <b>toto.lafloche@isnd.be</b><br>
            <input name="BR" onclick="alert('Correct')" type="radio"> Correcte<br>
            <input name="BR" onclick="alert('D�sol�. Il n\'y a rien � reprocher � cette adresse')" type="radio">
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
            <input name="BR" onclick="alert('Le symbole sp�cial \&amp; n\'est pas permis.')" type="radio"> Correcte<br>
            <input name="BR" onclick="alert('Tu as raison. Le symbole sp�cial \&amp; n\'est pas permis.')" type=
            "radio"> Incorrecte
          </p>
        </form>
        <form name="Q3" style="width: 45%; float: right;" action="">
          <p>
            <b>y.dupont@skynet.be</b><br>
            <input name="BR" onclick="alert('Rien � dire. C\'est parfait.')" type="radio"> Correcte<br>
            <input name="BR" onclick="alert('Non, il n\'y a rien � reprocher � cette adresse.')" type="radio">
            Incorrecte
          </p>
        </form>
        <form name="Q3" style="width: 45%; float: left; clear: both;" action="">
          <p>
            <b>Bill Gates@microsoft.com</b><br>
            <input name="BR" onclick="alert('Non, il y a un caract�re interdit.')" type="radio"> Correcte<br>
            <input name="BR" onclick="alert('Tu as raison. Le caract�re \'espace\' n\'est pas permis.')" type="radio">
            Incorrecte
          </p>
        </form>
        <form name="Q3" style="width: 45%; float: right;" action="">
          <p>
            <b>ljacques.kadi</b><br>
            <input name="BR" onclick="alert('Non, il manque un �l�ment important.')" type="radio">Correcte<br>
            <input name="BR" onclick=
            "alert('Tu as raison. Il manque le nom de la soci�t� � qui appartient le serveur POP.\nM�me l\'@ manque...')"
            type="radio"> Incorrecte
          </p>
        </form>
        <hr class="spacer">
        Quand tu as trouv� et compris toutes les r�ponses, passe � la page
        suivante.<?php include ("../../suivant.inc.php");
                                                                                                  ?>
      </div><?php include ("../../pied.inc.php");
                                                            ?>
    </div>
  </body>
</html>
