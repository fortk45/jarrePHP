<?php

function JarresRand($hard){
    $snakes = [];
    while (sizeof($snakes) < $hard){
        $nb = rand(1,5);
        if(!in_array($nb, $snakes)){
            $snakes[] = $nb;
        }
    }
    return $snakes;
}

//choix de la difficulté
$hard = 0;
while ($hard == 0){
    echo "Choisissez votre difficulté de 1 à 3 : ";
    fscanf(STDIN, "%d", $hard); //the user enter a choice
    if ($hard > 3 || $hard < 1){
        $hard = 0;
        echo "Erreur : Entrer un nombre entre 1 et 3.\n\n";
    }
}

echo "\n\nA chaque salle, 5 jarres se trouveront devant vous... Dans l'une d'elle, la clé. \n"
        ."Trouvez trois clés et vous êtes libre !\n"
        ."Mais attention ! Certaines jarres sont piégées par un serpent qui vous prendra toutes vos clés !\n\n";

$keys = 0;

while ($keys < 3) {
    echo "Vous arrivez à la salle suivante...\n";
    $jarreP = JarresRand($hard); //random jarre snake
    $choice = 0;

    while ($choice == 0){
        echo "Numéro de votre choix : ";
        fscanf(STDIN, "%d", $choice); //the user enter a choice
        if ($choice > 5 || $choice < 1){
            $choice = 0;
            echo "Erreur : Entrer un nombre entre 1 et 5.\n\n";
        }
    }

    //outcome
    if (in_array($choice, $jarreP)){
        $keys = 0;
        echo "\nPerdu ! Cette jarre était piégée ! Le serpent vous saute dessus et vous vole toutes vos clés !\n\n";
    } else {
        $keys++;
        echo "\nGagné ! Vous avez maintenant ".$keys." clés !\n\n";
    }
}
echo "Vous avez réunis les trois clés ! Vous sortez enfin de ce donjon !\n\n";