<?php
echo "\n\n5 jarres se trouvent devant vous... Dans l'une d'elle, la clé. \n"
        ."Mais attention ! Une des jarres est piégée par un serpent !\n\n"
        ."Alors ? Quelle jarre choisissez-vous ?\n";

$jarreP = rand(1,5); //random jarre snake
$choice = 0;

while ($choice == 0){
    echo "Numéro de votre choix : ";
    fscanf(STDIN, "%d", $choice); //the user enter a choice
    if ($choice > 5 || $choice < 1){
        $choice = 0;
        echo "Erreur : Entrer un nombre entre 1 et 5.\n\n";
    }
}

if ($choice == $jarreP){
    echo "\nPerdu ! C'était la jarre piégée ! Le serpent vous saute dessus !";
} else {
    echo "\nGagné ! Vous êtes libre !";
}