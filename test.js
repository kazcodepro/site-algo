

function Exo_5_4_js() 
{
    var iNombre, iNombreFinal;

    iNombre = document.querySelector("#text-area-input");

    if (iNombre) {
        for (let i; iNombre < iNombre + 10; i++) {
            console.log(i);
        }
    }
}


/*

ALGORITHME 5.6
DEBUT
    VARIABLES iNombre, sReponse
    ECRIRE "Entrez un nombre: "
    LIRE iNombre

    POUR i ← i à iNombre PAS 1
        sReponse =  sReponse + i 
    Suivant

    ECRIRE sReponse
FIN

ALGORITHME 5.7
DEBUT
    VARIABLES iNombre, sReponse
    ECRIRE "Entrez un nombre: "
    LIRE iNombre

    POUR i ← i à iNombre PAS 1
        sReponse =  sReponse * i 
    Suivant

    ECRIRE sReponse
FIN
 

ALGORITHME 5.8 A

DEBUT
    VARIABLES iNombre, iNombreSaisi
    iNombre = 0

    POUR i ← i à i + 20 PAS 1
         ECRIRE "Entrez un nombre: "
         LIRE iNombreSaisi

         SI iNombreSaisi > iNombre ALORS
            iNombre = iNombreSaisi
         FINSI
    Suivant
FIN

ALGORITHME 5.8 B

DEBUT
    VARIABLES iNombre, iPosition ,iNombreSaisi
    iNombre = 0

    POUR i ← i à i + 20 PAS 1
         ECRIRE "Entrez un nombre: "
         LIRE iNombreSaisi

         SI iNombreSaisi > iNombre ALORS
            iNombre = iNombreSaisi
            iPosition = i
         FINSI
    Suivant
FIN

ALGORITHME 5.9

DEBUT
    VARIABLES iNombre, iPosition, iteration ,iNombreSaisi
    iNombre = 0

    REPETER
         ECRIRE "Entrez un nombre: "
         LIRE iNombreSaisi
         iteration = iteration + 1

         SI iNombreSaisi > iNombre ALORS
            iNombre = iNombreSaisi
            iPosition = iteration
         FINSI
    JUSQU'A iNombreSaisi == 0
FIN

ALGORITHME 5.10

DEBUT
    VARIABLES iNombre, iPosition ,iNombreSaisi
    iNombre = 0

    POUR i ← i à i + 20 PAS 1
         ECRIRE "Entrez un nombre: "
         LIRE iNombreSaisi

         SI iNombreSaisi > iNombre ALORS
            iNombre = iNombreSaisi
            iPosition = i
         FINSI
    Suivant
FIN


*/

