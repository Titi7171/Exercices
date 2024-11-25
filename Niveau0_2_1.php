<?php

function mineurMajeur() {
    $age = readline("Entrez votre age: ");
    if ($age < 18){
        echo "Mineur";
    }
    else {
        echo "Majeur";
    }
}

mineurMajeur();
?>




