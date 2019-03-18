<?php

    include 'init.php';

    $pikachu = new Pokemon(
        'Pikachu',
        'Lightning',
        60,
        [
            new Pokemon_Attack('Electric Ring', 'Lightning', 50),
            new Pokemon_Attack('Pika Punch', 'Fighting', 20)
        ],
        new Pokemon_Weakness('Fire', 1.5),
        new Pokemon_Resistance('Fighting', 20)
    );

    $charmeleon = new Pokemon(
        'Charmeleon',
        'Fire',
        60,
        [
            new Pokemon_Attack('Head Butt', 'Fighting', 10),
            new Pokemon_Attack('Flare', 'Fire', 30)
        ],
        new Pokemon_Weakness('Water', 1.5),
        new Pokemon_Resistance('Lightning', 20)
    );

    echo $pikachu->name . " heeft zich aangeloten bij het gevecht! En heeft " . $pikachu->hitPoints . " HP <br/>";
    echo $charmeleon->name . " heeft zich aangeloten bij het gevecht! En heeft " . $charmeleon->hitPoints . " HP";
    
?>
