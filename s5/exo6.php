<?php 
    $sMessage = 0;

    if (isset($_POST["text-area-input"])) {

        $iNombre = $_POST["text-area-input"];

        if ($iNombre) {
            for ($i = 1; $i <= $iNombre; $i++) {
                $sMessage = $sMessage + $i;
            }
        }
    }

    require "exo6.html";
?>

