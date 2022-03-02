<?php
if(isset($_POST['submit'])) {
    if(empty($nombre)) {
        echo "<p class='error> Afegeix el teu nom </p>";

    }
    if(empty($Cognoms)) {
        echo "<p class='error> Afegeix el teu cognom </p>";
    
    }
    if(empty($usuario)) {
        echo "<p class='error> Afegeix el teu usuari </p>";
        
    }
    if(empty($contraseña)) {
        echo "<p class='error> Afegeix la contrasenya </p>";
            
    }
    if(empty($Confirm)) {
        echo "<p class='error> Afegeix la confirmació de contrasenya </p>";
                
     }
}