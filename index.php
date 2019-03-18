<?php

    include 'init.php'; // file with multiple includes.

    /**
     * This will create a new pokemon.
    */
    $pikachu = new Pokemon(
        'Pikachu', // Name of the pokemon.
        'Lightning', // Type of the pokemon.
        60, // Amount of hitpoints.
        [
            new Pokemon_Attack('Electric Ring', 'Lightning', 50), // attack name, attack type and amount of damage.
            new Pokemon_Attack('Pika Punch', 'Fighting', 20) // attack name, attack type and amount of damage.
        ],
        new Pokemon_Weakness('Fire', 1.5), // weakness name and multiplier value.
        new Pokemon_Resistance('Fighting', 20) // resistance name and abstract value.
    );

    /**
     * This will create a new pokemon.
    */
    $charmeleon = new Pokemon(
        'Charmeleon', // Name of the pokemon.
        'Fire', // Type of the pokemon.
        60, // Amount of hitpoints.
        [
            new Pokemon_Attack('Head Butt', 'Fighting', 10), // attack name, attack type and amount of damage.
            new Pokemon_Attack('Flare', 'Fire', 30) // attack name, attack type and amount of damage.
        ],
        new Pokemon_Weakness('Water', 1.5), // weakness name and multiplier value.
        new Pokemon_Resistance('Lightning', 20) // resistance name and subtract value.
    );

    // Stats before the fight.
    echo $pikachu->name . " heeft zich aangesloten bij het gevecht! En heeft " . $pikachu->hitPoints . " HP <br/>";
    echo $charmeleon->name . " heeft zich aangesloten bij het gevecht! En heeft " . $charmeleon->hitPoints . " HP <br/><br/>";

    // The fight itself.
    echo $pikachu->attackPokemon($charmeleon, 'Electric Ring') . "<br/>";
    echo $charmeleon->attackPokemon($pikachu, 'Flare') . "<br/><br/>";

    // Hitpoints after the fight.
    echo $pikachu->name . "'s new HP: " . $pikachu->hitPoints . "<br/>";
    echo $charmeleon->name . "'s new HP: " . $charmeleon->hitPoints;
?>
