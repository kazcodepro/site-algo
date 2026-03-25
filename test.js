function Exo_4_7_js() 
{
    var iNbJours, iJour, iMois, iAnnees, bBisextille, sReponse;

    iJour = document.querySelector("#text-area-input").value;
    iMois = document.querySelector("#text-area-input2").value;
    iAnnees = document.querySelector("#text-area-input3").value;
    sCouleur = "Refusé"

    if (iAge > 25) {
        if (iPermis > 2) {
            if (iAccidents == 0) {
                sCouleur = "vert"
            } else {
                if (iAccidents == 2) {
                    sCouleur = "rouge"
                } else if (iAccidents == 1) {
                    sCouleur = "orange"
                }
            }
        }
        else {
            if (iPermis > 2) {
                sCouleur = "rouge"
            } else {
                sCouleur = "orange"
            }
        }
    } else {
        if (iPermis > 2) {
            sCouleur = "orange"
        } else {
            sCouleur = "rouge"
        }
    }
    document.querySelector("#text-area-result").value = sCouleur;
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

