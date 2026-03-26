<?php
    $sMessage = "";

    if (isset($_POST["text-area-input"])) {
        $iCandidat1 = $_POST["text-area-input"];
        $iCandidat2 = $_POST["text-area-input2"];
        $iCandidat3 = $_POST["text-area-input3"];
        $iCandidat4 = $_POST["text-area-input4"];
        $sReponse = "Battu";

        if ($iCandidat1 >= 50) {
            $sReponse = "Elu";
        } 

        if ($iCandidat1 > $iCandidat2) {
            if ($iCandidat1 > $iCandidat3) {
                if ($iCandidat1 > $iCandidat4) {
                    $sReponse = "Elu";
                }
            }
        }


        $sMessage = "PHP " . $sReponse;
    }

    require "exo6.html";
?>

