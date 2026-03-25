<?php 
    $sMessage= "";

    if (isset($_POST["text-area-input"])) {
        $sNom1 = $_POST["text-area-input"];
        $sNom2 = $_POST["text-area-input2"];
        $sNom3 = $_POST["text-area-input3"];

        if ($sNom1 < $sNom2 && $sNom1 < $sNom3 && $sNom2 < $sNom3) {
            $sMessage = "Positif";
        } else {
            $sMessage = "Negatif";
        }
    }

    require "exo3.html";
?>

