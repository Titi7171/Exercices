<?php

$texte = "salut";
$entier = 5;
$booleen = True;

echo $texte.PHP_EOL;
echo $entier.PHP_EOL;
echo $booleen.PHP_EOL;

for ($i=1; $i<=20; $i++){
    if ($i%2 === 0) {
        echo $i;
    }
}