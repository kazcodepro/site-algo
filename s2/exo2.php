<?php 
$sMessage= "";

if (isset($_POST["text-area-input"]))   {
    $iNombre= $_POST["text-area-input"];
    $iCarre= $iNombre * $iNombre;
    $sMessage= "La valeur de " . $iNombre . " au carré est " . $iCarre;
}

require "exo2.html";
?>

