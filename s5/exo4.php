<?php 
    $sMessage = "";

    if (isset($_POST["text-area-input"])) {

        $iNombre = $_POST["text-area-input"];
        $iNombreFinal = intval($iNombre) + 10;
        if ($iNombre) {
            for ($i = $iNombre; $i <= $iNombreFinal; $i++) {
                $sMessage = $sMessage . " " . $i;
            }
        }
    }

    require "exo4.html";
?>

