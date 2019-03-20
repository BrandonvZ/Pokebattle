<?php

    class Pokemon_Pikachu extends Pokemon
    {
        /**
         * This function is called whenever a new 'pokemon' class has been created.
        */
        public function __construct()
        {
            $this->id = $this->generateId();
            $this->name = 'Pikachu'; // Name of the pokemon.
            $this->type = new Pokemon_Type('Lightning'); // Pokemon type.
            $this->hitPoints = 60; // Amount of hitpoints for pokemon.
            $this->health = 60; // Amount of health for pokemon.
            $this->attacks = [new Pokemon_Attack('Electric Ring', 'Lightning', 50), new Pokemon_Attack('Pika Punch', 'Fighting', 20)]; // List of all pokemon attacks.
            $this->weakness = new Pokemon_Weakness('Fire', 1.5); // Contains pokemon weakness.
            $this->resistance = new Pokemon_Resistance('Fighting', 20); // Contains pokemon resistance.
        }
    }

?>
