<?php 
    $sMessage = "";

    if (isset($_POST["text-area-input"])) {

        $iNombre = $_POST["text-area-input"];

        if ($iNombre) {
            for ($i = 1; $i <= 10; $i++) {
                $sMessage = $sMessage . " " . $i * $iNombre;
            }
        }
    }

    require "exo5.html";
?>

