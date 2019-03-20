<?php

    include 'init.php'; // file with multiple includes.

    /**
     * This will create a new pokemon.
    */
    $pikachu = new Pokemon_Pikachu();

    /**
     * This will create a new pokemon.
    */
    $charmeleon = new Pokemon_Charmeleon();

    // Stats before the fight.
    echo $pikachu->name . " heeft zich aangesloten bij het gevecht! En heeft " . $pikachu->hitPoints . " HP <br/>";
    echo $charmeleon->name . " heeft zich aangesloten bij het gevecht! En heeft " . $charmeleon->hitPoints . " HP <br/><br/>";

    // The fight itself.
    echo $pikachu->attackPokemon($charmeleon, 'Electric Ring') . "<br/>";
    echo $charmeleon->attackPokemon($pikachu, 'Flare') . "<br/><br/>";

    // Hitpoints after the fight.
    echo $pikachu->name . "'s new HP: " . $pikachu->hitPoints . "<br/>";
    echo $charmeleon->name . "'s new HP: " . $charmeleon->hitPoints . "<br/><br/><br/><hr/>";

    // Pokebag
    $pokebag = new Pokebag();

    $pokebag->addPokemon($pikachu);
    $pokebag->addPokemon($charmeleon);

    //add single pokemon
    //$pokebag->addPokemon($pikachu);

    //remove single pokemon
    //$pokebag->removePokemon($charmeleon);

    //remove all pokemon
    //$pokebag->removeAllPokemon();

    echo $pokebag->showList();
?>
