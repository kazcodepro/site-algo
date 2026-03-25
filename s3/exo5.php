<?php 
    $sMessage= "";

    if (isset($_POST["text-area-input"])) {
        $iNombre1 = $_POST["text-area-input"];
        $iNombre2 = $_POST["text-area-input2"];

        if (($iNombre1 > 0 &&  $iNombre2 > 0) || ($iNombre1 < 0 &&  $iNombre2 < 0)) {
            $sMessage = "Positif";
        } else if (($iNombre1 > 0 &&  $iNombre2 < 0) || ($iNombre1 < 0 &&  $iNombre2 > 0)) {
            $sMessage = "Negatif";
        }
        else {
            $sMessage = "Nul";
        }

    }

    require "exo5.html";
?>

