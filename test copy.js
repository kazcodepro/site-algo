/* a) Ecrire un algorithme qui demande un nombre de départ,
et qui ensuite affiche les dix nombres exemple,
si l'utilisateur entre le nombre 17, le programme affichera les nombres de 18 à 27. 
*/

/*
 
ALGORITHME 5.3

DEBUT
    VARIABLES iNombre, iNombreFinal
    ECRIRE "Entrez un nombre: "
    LIRE iNombre

    TANTQUE iNombreFinal != iNombre + 10
        iNombreFinal + 1 
        ECRIRE iNombreFinal
    FINTANTQUE
FIN

ALGORITHME 5.4

DEBUT
    VARIABLES iNombre, iNombreFinal
    ECRIRE "Entrez un nombre: "
    LIRE iNombre

    POUR i ← iNombre à iNombre + 10 PAS 1
        ECRIRE i
    i Suivant
FIN

ALGORITHME 5.5

DEBUT
    VARIABLES iNombre, iNombreFinal
    ECRIRE "Entrez un nombre: "
    LIRE iNombre

    POUR i ← iNombre à iNombre + 10 PAS 1
        iNombreFinal =  i * iNombreFinal 
    Suivant
FIN
*/

