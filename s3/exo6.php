<?php 
    $sMessage= "";

    if (isset($_POST["text-area-input"])) {
        $iAge = $_POST["text-area-input"];

    
        if ($iAge >= 6 && $iAge <= 7 ){
            $sMessage = "Poussin";
        }
        else if ($iAge >= 8 && $iAge <= 9 ){
            $sMessage = "Pupille";
        }
        else if ($iAge >= 10 && $iAge <= 11 ){
            $sMessage = "Minime";
        }
        else if ($iAge >= 12 ) {
            $sMessage = "Cadet";
        }
    }

    require "exo6.html";
?>

