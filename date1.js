Modif = new Date(document.lastModified);
Jour = new Array;
Jour[0] = "Dimanche";
Jour[1] = "Lundi";
Jour[2] = "Mardi";
 Jour[3] = "Mercredi";
Jour[4] = "Jeudi";
Jour[5] = "Vendredi";
Jour[6] = "Samedi";
Mois = new Array;
Mois[0] = "Janvier" ;
Mois[1] = "F&eacute;vrier" ;
Mois[2] = "Mars" ;
Mois[3] = "Avril";
Mois[4] = "Mai" ;
Mois[5] = "Juin" ;
Mois[6] = "Juillet" ;
Mois[7] = "Ao&ucirc;t";
Mois[8] = "Septembre";
Mois[9] = "Octobre";
Mois[10] = "Novembre";
Mois[11] ="D&eacute;cembre";
DateModif = " " + Jour[Modif.getDay()] + " " + Modif.getDate() + " " + Mois[Modif.getMonth()] + " " +  Modif.getFullYear();