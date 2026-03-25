<?php 
    $sMessage ="";

    if (isset($_POST["text-area-input"])) {
        
    iAge = document.querySelector("#text-area-input").value;
    sSexe = document.querySelector("#text-area-input2").value;
    sReponse = "Ne paye pas l'impot";

    if (sSexe == "Femme" && (iAge >= 18 && iAge <= 35)) {
        sReponse = "Paye l'impot";
    } else if (sSexe == "Homme" && iAge >= 20) {
        sReponse = "Paye l'impot";
    }

    document.querySelector("#text-area-result").value = "JS " + sReponse;
    }

    require "exo5.html";
?>

