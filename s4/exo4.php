<?php 
    $sMessage = "";

    if (isset($_POST["text-area-input"])) {
        $iPrixTotal = 0;

        $iArticles = $_POST["text-area-input"];

        if (($iArticles <= 10) && $iArticles > 0) {
            $iPrixTotal = $iPrixTotal + ($iArticles * 0.10);
            $iArticles = $iArticles - $iArticles;
        }

        if (($iArticles > 10) && $iArticles > 0) {
            $iPrixTotal = $iPrixTotal + (10 * 0.10);
            $iArticles = $iArticles - 10;
        }
        
        if (($iArticles <= 20) && $iArticles > 0) {
            $iPrixTotal = $iPrixTotal + ($iArticles * 0.09);
            $iArticles = $iArticles - $iArticles;
        }

        if (($iArticles > 20) && $iArticles > 0) {
            $iPrixTotal = $iPrixTotal + (20 * 0.09);
            $iArticles = $iArticles - 20;
        }

        if ($iArticles > 0) {
            $iPrixTotal = $iPrixTotal + ($iArticles * 0.08);
            $iArticles -= $iArticles;
        }

        $sMessage = "PHP La facture de votre commande est de " . $iPrixTotal . " E";
    }

    require "exo4.html";
?>

