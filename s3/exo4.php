<?php 
    $sMessage = "";

    if (isset($_POST["text-area-input"])) {
        $iNombre = $_POST["text-area-input"];

        if ($iNombre > 0) {
            $sMessage = "Positif";
        } else if($iNombre < 0) {
            $sMessage = "Negatif";
        } else {
            $sMessage = "Neutre";
        }
    }

    require "exo4.html";
?>

