<?php

    class Pokemon_Charmeleon extends Pokemon
    {
        /**
         * This function is called whenever a new 'pokemon' class has been created.
        */
        public function __construct()
        {
            $this->id = $this->generateId();
            $this->name = 'Charmeleon'; // Name of the pokemon.
            $this->type = new Pokemon_Type('Fire'); // Pokemon type.
            $this->hitPoints = 60; // Amount of hitpoints for pokemon.
            $this->health = 60; // Amount of health for pokemon.
            $this->attacks = [new Pokemon_Attack('Head Butt', 'Fighting', 10), new Pokemon_Attack('Flare', 'Fire', 30)]; // List of all pokemon attacks.
            $this->weakness = new Pokemon_Weakness('Water', 2); // Contains pokemon weakness.
            $this->resistance = new Pokemon_Resistance('Lightning', 10); // Contains pokemon resistance.
        }
    }

?>
