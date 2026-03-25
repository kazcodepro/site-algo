<?php 
    $sMessage = "";

    if (isset($_POST["text-area-input"])) {
        $iNombre = $_POST["text-area-input"];

        if ($iNombre > 0) {
            $sMessage = "php Positif";
        } else {
            $sMessage = "php Negatif";
        }
    }


    require "exo1.html";
?>

