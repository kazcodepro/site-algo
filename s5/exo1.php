<?php 
    $sMessage = "";

    if (isset($_POST["text-area-input"])) {
        $iNombre = $_POST["text-area-input"];

        if ($iNombre >= 1 && $iNombre <= 3) {
            $sReponse = "Valide";
        } else {
            $sReponse = "Veuillez entrer un nombre entre 1 et 3";
        }

        $sMessage = "php " . $sReponse;
    }

    require "exo1.html";
?>

