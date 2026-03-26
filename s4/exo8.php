<?php 
    $sMessage ="";

    if (isset($_POST["text-area-input"])) {
        $iJour = $_POST["text-area-input"];
        $iMois = $_POST["text-area-input2"];
        $iAnnees = $_POST["text-area-input3"];

        if ($iMois < 1 || $iMois > 12  ) {
            $sReponse = "Date Invalide";
        }

        if ($iAnnees / 4 * 4 == $iAnnees && $iAnnees / 100 * 100 != $iAnnees) {
            $bBisextille = TRUE;
        } else {
            $bBisextille = FALSE;
        }

        if ($iMois == 1 || $iMois == 3 || $iMois == 5 || $iMois == 7 || $iMois == 8 || $iMois == 10 || $iMois == 12) {
            $iNbJours = 31;
        } else if ($iMois == 4 || $iMois == 6 || $iMois == 9 || $iMois == 11) {
            $iNbJours = 30;
        } else {
            if ($bBisextille) {
                $iNbJours = 29;
            } else {
                $iNbJours = 28;
            }
        }

        if ($iJour >= 1 && $iJour <= $iNbJours) {
            $sReponse = "Date valide";
        } else {
            $sReponse = "Date invalide";
        }

        if ($iAnnees > 2025) {
            $sReponse = "Date invalide";
        }

        $sMessage = "PHP ". $sReponse;
    }

    require "exo8.html";
?>

