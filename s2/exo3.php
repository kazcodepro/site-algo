<?php 
    $sMessage = "";

    if (isset($_POST["iPrixHT"])) {
        $iPrixHT = $_POST["iPrixHT"];
        $iNombreArticle = $_POST["iNombreArticle"];
        $iTVA = $_POST["iTVA"];

        $iPrixTotal = ($iPrixHT * $iNombreArticle) * $iTVA;

        $sMessage = $iPrixTotal;
    }

    require "exo3.html";
?>

