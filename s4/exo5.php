<?php 
    $sMessage ="";

    if (isset($_POST["text-area-input"])) {
        
        $iAge = $_POST["text-area-input"];
        $sSexe = $_POST["text-area-input2"];
        $sReponse = "Ne paye pas l'impot";

        if ($sSexe == "Femme" && ($iAge >= 18 && $iAge <= 35)) {
            $sReponse = "Paye l'impot";
        } else if ($sSexe == "Homme" && $iAge >= 20) {
            $sReponse = "Paye l'impot";
        }

        $sMessage ="PHP " . $sReponse;
    }

    require "exo5.html";
?>

