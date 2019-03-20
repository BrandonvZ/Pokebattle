<?php

    abstract class Pokemon
    {
        // Store all variables for class 'Pokemon'.
        protected $id;
        protected $name;
        protected $type;
        protected $hitPoints;
        protected $health;
        protected $attacks;
        protected $weakness;
        protected $resistance;

        public function generateId()
        {
            return uniqid();
        }

        /**
         * This function will return data
        */
        public function __get($variable)
        {
            return $this->$variable;
        }

        /**
         * This function is called whenever a pokemon attacks another pokemon.
         * It will sent the targeted pokemon and the used attack.
         * It will also return text and call the 'damagePokemon' function.
        */
        public function attackPokemon($targetedPokemon, $attackName)
        {
            // store used attack.
            $attack;

            // loop through all attacks.
            for($i = 0; $i < count($this->attacks); $i++){

                // if the used attack is the same as in the list, then set it to the variable $attack.
                if($attackName == $this->attacks[$i]->name){
                    $attack = $this->attacks[$i];
                }

            }
            return $this->name . " valt " . $targetedPokemon->name . " aan met " . $attackName . " en deed " . $targetedPokemon->damagePokemon($this, $attack);
        }

        /**
         * This function will calculate and set the damage for the targeted pokemon.
        */
        public function damagePokemon($targetedPokemon, $attack)
        {
            $output;
            $damage = $attack->damage;

            // if the type of attack is the weakness of the targeted pokemon.
            if($this->weakness->type == $attack->type)
            {
                $output = ' schade (Het was super effectief!)';
                $damage *= $this->weakness->multiplier;
            }
            // if the type of attack is the resistance of the targeted pokemon.
            else if($this->resistance->type == $attack->type)
            {
                $output = ' schade (Het was niet effectief!)';
                $damage -= $this->resistance->value;

                if($damage < 0)
                {
                    $damage = 0;
                }
            }
            // if the type of attack is not the weakness and not the resistance of the targeted pokemon.
            else {
                $output = ' schade';
                $damage = $attack->damage;
            }

            // remove the damage of the total hitPoints
            $this->hitPoints -= $damage;

            if($this->hitPoints < 0)
            {
                $this->hitPoints = 0;
            }

            return $damage . $output;

        }
    }

?>
