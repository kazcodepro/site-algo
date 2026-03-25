<?php 
    $sMessage = "";

    if (isset($_POST["text-area-input"])) {
        $iHeures = $_POST["text-area-input"];
        $iMinutes = $_POST["text-area-input2"];
        $iSecondes = $_POST["text-area-input3"];

        $iSecondes++;

        if ($iSecondes >= 60) {
            $iSecondes = 0;
            $iMinutes ++;
        }

        if ($iMinutes >= 60) {
            $iMinutes = 0;
            $iHeures ++;
        }

        if ($iHeures >= 24) {
            $iHeures = 0;
        }

        $sMessage = "PHP Dans une minute, il sera " . $iHeures ." heure(s) " . ($iMinutes) . " minutes(s) et " . $iSecondes . " seconde(s)";
    }
    require "exo3.html";
?>

