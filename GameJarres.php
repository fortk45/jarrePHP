<?php
echo "\n\nA chaque salle, 5 jarres se trouveront devant vous... Dans l'une d'elle, la clé. \n"
        ."Trouvez trois clés et vous êtes libre !\n"
        ."Mais attention ! Une des jarres est piégée par un serpent qui vous prendra toutes vos clés !\n\n";

$keys = 0;

while ($keys < 3) {
    echo "Vous arrivez à la salle suivante...\n";
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

    //outcome
    if ($choice == $jarreP){
        $keys = 0;
        echo "\nPerdu ! C'était la jarre piégée ! Le serpent vous saute dessus et vous vole toutes vos clés !\n\n";
    } else {
        $keys++;
        echo "\nGagné ! Vous avez maintenant ".$keys." clés !\n\n";
    }
}
echo "Vous avez réunis les trois clés ! Vous sortez enfin de ce donjon !\n\n";