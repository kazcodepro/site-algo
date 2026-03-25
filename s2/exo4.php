<?php 
    
    $sPhraseFinal = "";

    if (isset($_POST["text-area-result"])) {
        $sPhrase1 = "belle marquise, vos beaux yeux me font mourir d’amour";
        $sPhrase2 = "vos beaux yeux me font mourir d’amour, belle marquise";
        $sPhrase3 = "vos beaux yeux, belle marquise, me font mourir d’amour";
        $sPhrase4 = "me font mourir d’amour, belle marquise, vos beaux yeux";

        $sPhraseFinal = $sPhrase1 . "\n" . $sPhrase2 ."\n" . $sPhrase3 . "\n" . $sPhrase4;
    }

    require "exo4.html";
?>

