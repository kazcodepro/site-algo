<?php 
    $sMessage = "";

    if (isset($_POST["text-area-input"])) {
        $iAge = $_POST["text-area-input"];
        $iPermis = $_POST["text-area-input2"];
        $iAccidents = $_POST["text-area-input3"];
        $iMaisons = $_POST["text-area-input4"];
        $sCouleur = "Refusé";

        if ($iAge > 25) {
            if ($iPermis > 2) {
                if ($iAccidents == 0) {
                    $sCouleur = "vert";
                } else {
                    if ($iAccidents == 2) {
                        $sCouleur = "rouge";
                    } else if ($iAccidents == 1) {
                        $sCouleur = "orange";
                    }
                }
            }
            else {
                if ($iPermis < 2) {
                    $sCouleur = "rouge";
                } else {
                    $sCouleur = "orange";
                }
            }
        } else {
            if ($iPermis > 2) {
                $sCouleur = "rouge";
            } else {
                $sCouleur = "orange";
            }
        }

        if ($iMaisons > 5) {
            if ($sCouleur == "vert") {
                $sCouleur = "bleu";
            } else if ($sCouleur == "orange") {
                $sCouleur = "vert";
            } else if ($sCouleur == "rouge") {
                $sCouleur = "orange";
            }
        }

        $sMessage = "PHP ". $sCouleur;
    }

    require "exo7.html";
?>

