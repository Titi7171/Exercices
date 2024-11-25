<?php 

echo "Donner un nom: ";
$nom = trim(fgets(STDIN));


echo "Donner un age: ";
$age = trim(fgets(STDIN));


echo "Donner un email: ";
$email = trim(fgets(STDIN));

$resource = fopen('fichier1.txt', 'a');
$writed= fwrite($resource, $nom.','.$age.','.$email.';'.PHP_EOL);
if($writed) {
    'fichier crée et écrit'. PHP_EOL;
    printf("Fichier écrit avec %d octets", $writed.PHP_EOL);
} else {
    "Echec de l'écriture du fichier";
}

fclose($resource);


//Lecture du fichier

if (file_exists('fichier1.txt')) {
    $resource = fopen('fichier1.txt', 'r');
    while ($data = fgets($resource)) {
        echo $data;
    } 
} else {
    echo "Le fichier n'existe pas";
}
