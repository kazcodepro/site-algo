<?php 
    $sMessage = "";

    if (isset($_POST["text-area-input"])) {
        $iHeures = $_POST["text-area-input"];
        $iMinutes = $_POST["text-area-input2"];

        $iMinutes++;

        if ($iMinutes >= 60) {
            $iMinutes = 0;
            $iHeures ++;
        }

        if ($iHeures >= 24) {
            $iHeures = 0;
        }

        $sMessage = "PHP Dans une minute, il sera " . $iHeures . " heure(s) " . $iMinutes;
    }
    require "exo2.html";
?>

