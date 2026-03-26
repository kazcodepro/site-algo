function Exo_4_8_js() 
{
    var iNbJours, iJour, iMois, iAnnees, bBisextille, sReponse;

    iJour = document.querySelector("#text-area-input").value;
    iMois = document.querySelector("#text-area-input2").value;
    iAnnees = document.querySelector("#text-area-input3").value;

    if (iMois < 1 || iMois > 12) {
        sReponse = "Date Invalide";
    }

    if (iAnnees / 4 * 4 == iAnnees && iAnnees / 100 * 100 != iAnnees) {
        bBisextille = Vrai;
    } else {
        bBisextille = Faux;
    }

    if (iMois == 1 || iMois == 3 || iMois == 5 || iMois == 7 || iMois == 8 || iMois == 10 || iMois == 12) {
        iNbJours = 31;
    } else if (iMois == 4 || iMois == 6 || iMois == 9 || iMois == 11) {
        iNbJours = 30;
    } else {
        if (bBisextille) {
            iNbJours = 29;
        } else {
            iNbJours = 28;
        }
    }

    if (iJour >= 1 && iJour <= iNbJours) {
        sReponse = "Date valide";
    } else {
        sReponse = "Date invalide";
    }

     document.querySelector("#text-area-result").value = "JS "+ sReponse;
}

/*
 

DEBUT
    VARIABLES iNbJours, iJour, iMois, iAnnees EN NUMERIQUE sReponse EN CHAINE DE CARACTERES, bBisextille EN BOOLEAN

    ECRIRE "Entrez le jour : "
    LIRE iJour
    ECRIRE "Entrez le mois : "
    LIRE iMois 
    ECRIRE "Entrez l'année : "
    LIRE iAnnees


    SI (iMois < 1 OU iMois > 12) ALORS
        sReponse = "Date Invalide"
    FINSI

    SI iAnnees / 4 * 4 == iAnnees ET iAnnees / 100 * 100 != iAnnees
        bBisextille = Vrai
    SINON
        bBisextille = Faux
    FINSI

    SI (iMois == 1 OU iMois == 3 OU iMois == 5 OU iMois == 7 OU iMois == 8 OU iMois == 10 OU iMois == 12) ALORS
        iNbjours = 31
    SINON (iMois == 4 OU iMois == 6 OU iMois == 9 OU iMois == 11) ALORS
        iNbjours = 30
    SINON
        SI (bBisextille) ALORS
            iNbJours = 29
        SINON
            iNbJours = 28
        FINSI
    FINSI

    SI (iJour >= 1 ET iJour <= nbJours) ALORS
        sReponse = "Date valide"
    SINON
        sReponse = "Date invalide"
    FINSI

FIN

*/

