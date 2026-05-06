<?php 
    $sMessage = "";

    if (isset($_POST["text-area-input"])) {
        $iNombre = $_POST["text-area-input"];

        if ($iNombre > 20) {
            $sMessage = "Plus petit!";
        } else if ($iNombre < 10) {
            $sMessage = "Plus grand!";
        } else {
            $sMessage = "Résultat juste!";
        }

        $sMessage = "php " . $sMessage;
    }

    require "exo2.html";
?>

